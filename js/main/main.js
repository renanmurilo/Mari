// Toggle Menu
let openMenu = document.querySelector('.open__menu');
let menu = document.querySelector('.menu')
let closeMenu = document.querySelector('.close__menu')
let logo = document.querySelector('.logo__mobile')

openMenu.addEventListener('click', (e) => {
    e.preventDefault();

    closeMenu.classList.toggle('active')
    openMenu.classList.toggle('active')
    menu.classList.toggle('active')
    logo.classList.toggle('active')
});

closeMenu.addEventListener('click', (e) => {
    e.preventDefault();

    openMenu.classList.toggle('active')
    closeMenu.classList.toggle('active')
    menu.classList.toggle('active');
    logo.classList.toggle('active')
});

$(document).ready(function () {
    const btnNews = document.getElementById('labelCustom');
    const contentOculto = document.getElementById('oculto');

    if (btnNews) {
        btnNews.addEventListener('click', function () {
            contentOculto.classList.toggle('active');
            btnNews.classList.toggle('active')
        })
    }

    document.addEventListener('wpcf7mailsent', function (event) {
        console.log(event);
        if (34 === event.detail.contactFormId) {
            btnNews.classList.remove('active')
            contentOculto.classList.remove('active')
        }
    })
});

$('[data-group]').each(function () {
    var $allTarget = $(this).find('[data-target]'),
        $allClick = $(this).find('[data-click]'),
        activeClass = 'active';

    $allTarget.first().addClass(activeClass);
    $allClick.first().addClass(activeClass);


    $allClick.click(function (e) {
        e.preventDefault();

        $allTarget.removeClass(activeClass);
        $allClick.removeClass(activeClass);

        var id = $(this).data('click'),
            $target = $('[data-target="' + id + '"]');

        $target.addClass(activeClass);
        $(this).addClass(activeClass)
    });
});

(() => {
    if (!localStorage.pureJavaScriptCookies) {
        document.querySelector(".box-cookies").classList.remove('hide');
    }

    const acceptCookies = () => {
        document.querySelector(".box-cookies").classList.add('hide');
        localStorage.setItem("pureJavaScriptCookies", "accept");
    };

    const btnCookies = document.querySelector(".btn-cookies");

    btnCookies.addEventListener('click', acceptCookies);
})();