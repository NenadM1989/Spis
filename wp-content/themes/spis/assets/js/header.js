document.addEventListener('DOMContentLoaded', function () {
    const menu = document.querySelector('.header-menu');
    const body = document.body;

    if (!menu) return;

    menu.addEventListener('click', function () {
        menu.classList.toggle('active');

        if (menu.classList.contains('active')) {
            body.classList.add('no-scroll');
        } else {
            body.classList.remove('no-scroll');
        }
    });

    const links = document.querySelectorAll('.header-menu ul a');
    links.forEach(link => {
        link.addEventListener('click', () => {
            menu.classList.remove('active');
            body.classList.remove('no-scroll');
        });
    });
});