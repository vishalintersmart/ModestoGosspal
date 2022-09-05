<?php include "./includes/header.php"?>

<div id="pageWrapper" class="homePage">

    <!-- MAINSLIDER -->

    <section id="MainSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="assets/images/MainSlide1.webp" alt="MainSlide1">
                <div class="container SlideCntnt">
                    <div class="MainTitle">
                        Transform a life today
                    </div>
                    <div class="SubTitle">
                        Give hurting people the help and healing they need to overcome homelessness.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MAINSLIDER -->


    <!-- GSAP --->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>

    <!-- SCROLL_MAGIC -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"
        integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
    // PRODUCTS SLIDE
    // $('.ProSlide').owlCarousel({
    //     loop: true,
    //     autoplay: true,
    //     smartSpeed: 500,
    //     autoplayTimeout: 3500,
    //     autoplayHoverPause: true,
    //     responsiveClass: true,
    //     nav: false,
    //     dots: false,
    //     items: 2,
    //     margin: 5,
    //     responsive: {
    //         576: {
    //             items: 2.5,
    //             margin: 10,
    //         },
    //         768: {
    //             items: 3,
    //             margin: 15,
    //         },
    //         1200: {
    //             items: 4,
    //             margin: 30,
    //             loop: function() {
    //                 if ($(this).find('.owl-item').length > 3) {
    //                     return true;
    //                 }
    //                 return false;
    //             }
    //         }
    //     }
    // });
    </script>

</div>

<?php include "./includes/footer.php"?>