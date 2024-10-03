document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('mobileMenu').addEventListener('click', function() {
        var navMenu = document.getElementById('navMenu');
        navMenu.classList.toggle('active');
        setTimeout(function() {
            navMenu.classList.toggle('show');
        }, 10); // Pequeno atraso para garantir a transição suave
    });
});
