// JavaScript para el menú hamburguesa de la navbar
document.addEventListener('DOMContentLoaded', () => {
    // Obtener todos los elementos "navbar-burger"
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
    // Verificar si hay elementos "navbar-burger"
    if ($navbarBurgers.length > 0) {
        // Agregar evento de clic en cada uno de ellos
        $navbarBurgers.forEach(el => {
            el.addEventListener('click', () => {
                // Obtener el objetivo del atributo "data-target"
                const target = el.dataset.target;
                const $target = document.getElementById(target);
                // Alternar la clase "is-active" en tanto el "navbar-burger" como el "navbar-menu"
                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');
            });
        });
    }
});
