new WOW().init();
(function wowAnimation() {
    new WOW({
        offset: 100,
        mobile: true
    }).init()
})();
let preloader = document.querySelector('#preloader');
let loadTime = (Date.now()) - (window.performance.timing.navigationStart);
let stopLoad = function () {
    preloader.remove();
    Swal.fire({
        title: '<strong class="adumu ls-5">DIFFICULTY : <u class="swals-diff">EASY</u></strong>',
        icon: 'info',
        html: '<h1><?php echo $total; ?></h1>',
        showCloseButton: false,
        showCancelButton: false,
        focusConfirm: false,
        confirmButtonText: 'START',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        allowOutsideClick: false,
        allowEscapeKey: false,
        customClass: {
            container: 'swals-container',
            popup: 'swals-popup',
            header: 'swals-header',
            title: 'swals-tittle',
            icon: 'swals-icon',
            image: 'swals-img',
            htmlContainer: 'swals-html-container',
            input: 'swals-input',
            inputLabel: 'swals-label',
            validationMessage: 'swals-validate',
            actions: 'swals-action',
            closeButton: 'swals-closeBtn',
            confirmButton: 'swals-confirmBtn',
            denyButton: 'swals-denyBtn',
            cancelButton: 'swals-cancelBtn',
            loader: 'swals-loader',
            footer: 'swals-footer',
            timerProgressBar: 'swals-timer',
        }
    })
}
if (preloader) {
    if (loadTime < 500) {
        setTimeout(stopLoad, 400);
    } else {
        window.addEventListener('load', () => {
            stopLoad()
        });
    }
}
let owl = $('.owl-carousel');
owl.owlCarousel({
    items: 3,
    loop: true,
    margin: 10,
    center: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 3,
        },
    },
});
let notyf = new Notyf({
    duration: 2000,
    position: {
        x: 'right',
        y: 'top',
    },
});
notyf.success('Game Accessed, Have Fun !');