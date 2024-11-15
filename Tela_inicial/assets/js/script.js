document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('.menu');

    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            // Remove a classe 'selected' de todos os menus
            menuItems.forEach(menu => menu.classList.remove('selected'));

            // Adiciona a classe 'selected' ao menu clicado
            this.classList.add('selected');
        });
    });
});
