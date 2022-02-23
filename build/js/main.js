document.addEventListener( 'DOMContentLoaded', function () {

    /* Inicializando WOWJS */
    /* wow = new WOW(
        {
        boxClass:     'wow',      // default
        animateClass: 'animated', // default
        offset:       0,          // default
        mobile:       true,       // default true
        live:         true        // default
        }
    )
    wow.init(); */

    /* Script go-to */
    let buttons = document.querySelectorAll('a.go-to');
    buttons.forEach((button) => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            let target = e.currentTarget.getAttribute('href');
            
            document.querySelector(target).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});