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
