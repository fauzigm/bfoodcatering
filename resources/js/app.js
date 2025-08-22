import "./bootstrap";

const cart = {};
const menus = document.querySelectorAll(".menu-section");
const filterButtons = document.querySelectorAll(".filter-btn");
const quantityButtons = document.querySelectorAll(".qty-btn");
const floatingCart = document.getElementById("floating-cart");
const orderModal = document.getElementById("order-modal");
const orderForm = document.getElementById("order-form");

function updateCart() {
    let totalItems = 0;
    let totalPrice = 0;
    const summaryItems = document.getElementById("summary-items");
    summaryItems.innerHTML = "";

    for (const id in cart) {
        if (cart[id].quantity > 0) {
            const item = cart[id];
            totalItems += item.quantity;
            totalPrice += item.quantity * item.price;

            const summaryItemDiv = document.createElement("div");
            summaryItemDiv.className = "flex items-center justify-between py-1";
            summaryItemDiv.innerHTML = `
                        <div class="flex-1">
                            <p class="font-semibold">${item.name}</p>
                            <p class="text-sm text-gray-600">Rp ${formatRupiah(
                                item.price
                            )}</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="summary-qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center" data-id="${id}" data-action="decrease">-</button>
                            <span class="w-8 text-center">${
                                item.quantity
                            }</span>
                            <button class="summary-qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center" data-id="${id}" data-action="increase">+</button>
                            <button class="remove-item-btn text-red-500 hover:text-red-700" data-id="${id}">
                                <i class="fas fa-trash-alt text-sm"></i>
                            </button>
                        </div>
                    `;
            summaryItems.appendChild(summaryItemDiv);
        }
    }

    document.getElementById("header-cart-count").textContent = totalItems;
    document.getElementById(
        "header-total-price"
    ).textContent = `Total: Rp ${formatRupiah(totalPrice)}`;
    document.getElementById("cart-item-count").textContent = totalItems;
    document.getElementById(
        "cart-total-price"
    ).textContent = `Rp ${formatRupiah(totalPrice)}`;
    document.getElementById(
        "summary-total-price"
    ).textContent = `Rp ${formatRupiah(totalPrice)}`;

    if (totalItems > 0) {
        floatingCart.classList.remove("hidden");
    } else {
        floatingCart.classList.add("hidden");
    }

    attachSummaryBtnListeners();
}

function formatRupiah(angka) {
    return new Intl.NumberFormat("id-ID").format(angka);
}

filterButtons.forEach((button) => {
    button.addEventListener("click", () => {
        const filter = button.dataset.filter;
        filterButtons.forEach((btn) => {
            btn.classList.remove(
                "text-primary",
                "border-primary",
                "font-semibold"
            );
            btn.classList.add("text-gray-600", "border-transparent");
        });
        button.classList.remove("text-gray-600", "border-transparent");
        button.classList.add("text-primary", "border-primary", "font-semibold");

        menus.forEach((menu) => {
            if (filter === "All" || menu.dataset.category === filter) {
                menu.classList.remove("hidden");
            } else {
                menu.classList.add("hidden");
            }
        });
    });
});

quantityButtons.forEach((button) => {
    button.addEventListener("click", () => {
        const input = button.parentNode.querySelector(".qty-input");
        let quantity = parseInt(input.value);
        const parentItem = button.closest(".menu-item");
        const id = parentItem.dataset.id;
        const price = parseInt(parentItem.dataset.price);
        const itemName = parentItem.querySelector("h4").textContent;

        if (button.textContent === "+") {
            quantity++;
        } else if (button.textContent === "-" && quantity > 0) {
            quantity--;
        }

        input.value = quantity;
        if (quantity > 0) {
            cart[id] = { name: itemName, price: price, quantity: quantity };
        } else {
            delete cart[id];
        }
        updateCart();
    });
});

function openOrderModal() {
    updateCart();
    orderModal.classList.remove("hidden");
    document.body.style.overflow = "hidden";
}

function closeOrderModal() {
    orderModal.classList.add("hidden");
    document.body.style.overflow = "auto";
}

function attachSummaryBtnListeners() {
    document.querySelectorAll(".summary-qty-btn").forEach((button) => {
        button.addEventListener("click", () => {
            const id = button.dataset.id;
            const action = button.dataset.action;
            if (!cart[id]) return;

            if (action === "increase") {
                cart[id].quantity++;
            } else if (action === "decrease") {
                cart[id].quantity--;
                if (cart[id].quantity <= 0) {
                    delete cart[id];
                }
            }

            const menuInput = document.querySelector(
                `.qty-input[data-id="${id}"]`
            );
            if (menuInput) {
                menuInput.value = cart[id] ? cart[id].quantity : 0;
            }
            updateCart();
        });
    });

    document.querySelectorAll(".remove-item-btn").forEach((button) => {
        button.addEventListener("click", () => {
            const id = button.dataset.id;
            delete cart[id];
            const menuInput = document.querySelector(
                `.qty-input[data-id="${id}"]`
            );
            if (menuInput) {
                menuInput.value = 0;
            }
            updateCart();
        });
    });
}

// orderForm.addEventListener("submit", (e) => {
//     e.preventDefault();
//     const customerName = document.getElementById("customer-name").value;
//     const customerWa = document.getElementById("customer-whatsapp").value;
//     const customerAddress = document.getElementById("customer-address").value;
//     const deliveryTime = document.getElementById("delivery-time").value;
//     const notes = document.getElementById("additional-notes").value;

//     let orderSummary = "Halo admin, saya ingin memesan catering berikut:\n\n";
//     let totalItems = 0;
//     let totalPrice = 0;

//     for (const id in cart) {
//         const item = cart[id];
//         orderSummary += `• ${item.name} (${item.quantity}x) - Rp ${formatRupiah(
//             item.quantity * item.price
//         )}\n`;
//         totalItems += item.quantity;
//         totalPrice += item.quantity * item.price;
//     }

//     orderSummary += `\nTotal Harga: Rp ${formatRupiah(totalPrice)}\n`;
//     orderSummary += `Total Item: ${totalItems}\n\n`;
//     orderSummary += "-------------------------------\n";
//     orderSummary += "Data Pemesan:\n";
//     orderSummary += `Nama: ${customerName}\n`;
//     orderSummary += `WhatsApp: ${customerWa}\n`;
//     orderSummary += `Alamat: ${customerAddress}\n`;
//     orderSummary += `Jadwal Pengiriman: ${deliveryTime}\n`;
//     orderSummary += `Catatan: ${notes || "-"}\n`;

//     const encodedMessage = encodeURIComponent(orderSummary);
//     const whatsappUrl = `https://wa.me/62${customerWa.replace(
//         /^0/,
//         ""
//     )}?text=${encodedMessage}`;
//     window.open(whatsappUrl, "_blank");
// });

// // Inisialisasi awal
// updateCart();

document.addEventListener("DOMContentLoaded", function () {
    // Mobile Menu Toggle
    const mobileMenuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");

    mobileMenuButton.addEventListener("click", function () {
        mobileMenu.classList.toggle("hidden");
    });

    // Initialize
    initSlider();
});

// Hero Section
// Parallax effect for floating elements
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelectorAll('.animate-float');
            const speed = 0.5;

            parallax.forEach((element, index) => {
                const yPos = -(scrolled * speed * (index + 1) * 0.1);
                element.style.transform = `translateY(${yPos}px)`;
            });
        });

        // Button hover effects
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('mouseenter', () => {
                button.style.transform = 'scale(1.05)';
            });
            
            button.addEventListener('mouseleave', () => {
                button.style.transform = 'scale(1)';
            });
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe animated elements
        document.querySelectorAll('[class*="animate-fade"]').forEach(el => {
            observer.observe(el);
        });
