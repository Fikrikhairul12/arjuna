window.addEventListener('scroll', function () {
    const header = document.querySelector('header');

    if (window.scrollY > 50) {
        header.classList.add('navbar-fixed');
        header.classList.remove('navbar-transparent');
    } else {
        header.classList.remove('navbar-fixed');
        header.classList.add('navbar-transparent');
    }
});

//TODO Hamburger
const hamburger = document.getElementById('hamburger');
const dropdown = document.getElementById('dropdownMenu');

if (hamburger) {
    hamburger.addEventListener('click', function () {
        hamburger.classList.toggle('hamburger-active');
        dropdown.classList.toggle('hidden');
    });
}

// Klik luar → tutup menu
window.addEventListener('click', function (e) {
    if (!hamburger.contains(e.target) && !dropdown.contains(e.target)) {
        hamburger.classList.remove('hamburger-active');
        dropdown.classList.add('hidden');
    }
});

// MODAL POPUP
window.openModal = function (id) {
    const modal = document.getElementById('productModal');

    const product = products.find(p => p.id_product == id);

    document.getElementById('modalName').innerText = product.name;
    document.getElementById('modalDesc').innerText = product.description;
    document.getElementById('modalPrice').innerText = 'Rp' + product.price;
    document.getElementById('modalStatus').innerText = product.status;
    qty = 1;
    document.getElementById('qty').innerText = qty;

    if (product.image) {
        document.getElementById('modalImage').src = '/storage/' + product.image;
    }

    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

window.closeModal = function () {
    const modal = document.getElementById('productModal');

    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

window.addEventListener('click', function (e) {
    const modal = document.getElementById('productModal');

    if (e.target === modal) {
        closeModal();
    }
});

// QTY
let qty = 1;

window.increaseQty = function () {
    qty++;
    document.getElementById('qty').innerText = qty;
}

window.decreaseQty = function () {
    if (qty > 1) {
        qty--;
        document.getElementById('qty').innerText = qty;
    }
}
