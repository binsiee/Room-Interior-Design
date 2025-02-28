document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('.navigation');

    menuToggle.addEventListener('click', () => {
        const isOpen = navigation.classList.toggle('open');
        menuToggle.setAttribute('aria-expanded', isOpen); // Accessibility: Aktualisierung
    });
});