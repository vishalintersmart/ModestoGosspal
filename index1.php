<?php include "./includes/header.php"?>

<div id="pageWrapper" class="homePage">

    <!-- MAINSLIDER -->

    <section id="MainSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="assets/images/MainSlide1.webp" alt="MainSlide1">
                <div class="container SlideCntnt">
                    <div class="MainTitle">
                        Your treasure trove of<br>
                        all things dance
                    </div>
                    <div class="SubTitle">
                        Shopping for dance accessories was never this fun!
                    </div>
                    <a href="#!" class="btn hoveranim">
                        <span>
                            Shop Now
                        </span>
                    </a>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="assets/images/MainSlide1.webp" alt="MainSlide1">
                <div class="container SlideCntnt">
                    <div class="MainTitle">
                        Your treasure trove of<br>
                        all things dance
                    </div>
                    <div class="SubTitle">
                        Shopping for dance accessories was never this fun!
                    </div>
                    <a href="#!" class="btn hoveranim">
                        <span>
                            Shop Now
                        </span>
                    </a>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="assets/images/MainSlide1.webp" alt="MainSlide1">
                <div class="container SlideCntnt">
                    <div class="MainTitle">
                        Your treasure trove of<br>
                        all things dance
                    </div>
                    <div class="SubTitle">
                        Shopping for dance accessories was never this fun!
                    </div>
                    <a href="#!" class="btn hoveranim">
                        <span>
                            Shop Now
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <ol class="carousel-indicators">
            <li data-bs-target="#MainSlider" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#MainSlider" data-bs-slide-to="1"></li>
            <li data-bs-target="#MainSlider" data-bs-slide-to="2"></li>
        </ol>
        <!-- <a class="carousel-control-prev" href="#MainSlider" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#MainSlider" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> -->
    </section>
    <!-- MAINSLIDER -->

    <!-- TOUCH_SWIPE -->
    <script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js">
    </script>

    <!-- GSAP --->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>

    <!-- SCROLL_MAGIC -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"
        integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
    // slider
    $(".carousel").swipe({
        swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
            if (direction == 'left') $(this).carousel('next');
            if (direction == 'right') $(this).carousel('prev');
        },
        allowPageScroll: "vertical"
    });


    // OUR COLLECTIONS SLIDE
    $('.CollectionsSlide').owlCarousel({
        loop: true,
        autoplay: true,
        smartSpeed: 500,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        responsiveClass: true,
        nav: false,
        dots: false,
        items: 2,
        margin: 5,
        responsive: {
            576: {
                items: 2.5,
                margin: 10,
            },
            768: {
                items: 3,
                margin: 15,
            },
            1200: {
                items: 4,
                margin: 25,
            }
        }
    });

    // PRODUCTS SLIDE
    $('.ProSlide').owlCarousel({
        loop: true,
        autoplay: true,
        smartSpeed: 500,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        responsiveClass: true,
        nav: false,
        dots: false,
        items: 2,
        margin: 5,
        responsive: {
            576: {
                items: 2.5,
                margin: 10,
            },
            768: {
                items: 3,
                margin: 15,
            },
            1200: {
                items: 4,
                margin: 30,
                loop: function() {
                    if ($(this).find('.owl-item').length > 3) {
                        return true;
                    }
                    return false;
                }
            }
        }
    });

    // PRODUCTS SLIDE
    $('.OurFeaturesSlide').owlCarousel({
        loop: true,
        autoplay: true,
        smartSpeed: 500,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        responsiveClass: true,
        nav: false,
        dots: false,
        items: 2,
        margin: 0,
        responsive: {
            576: {
                items: 3,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
                loop: false,
            },
            1200: {
                items: 4,
                margin: 30,
                loop: false,
            }
        }
    });
    // NEW IN STORE
    var NewInStoreSlide = $('.NewInStoreSlide');
    $('.NewInStoreSlideNav.OwlNext').click(function() {
        NewInStoreSlide.trigger('next.owl.carousel');
    });

    $('.NewInStoreSlideNav.OwlPrev').click(function() {
        NewInStoreSlide.trigger('prev.owl.carousel');
    });

    // SPECIAL OFFERS
    var SpecialOffersSlide = $('.SpecialOffersSlide');
    $('.SpecialOffersSlideNav.OwlNext').click(function() {
        SpecialOffersSlide.trigger('next.owl.carousel');
    });

    $('.SpecialOffersSlideNav.OwlPrev').click(function() {
        SpecialOffersSlide.trigger('prev.owl.carousel');
    });

    // DANCE COSTUME
    var DanceCostumesSlide = $('.DanceCostumesSlide');
    $('.DanceCostumesSlideNav.OwlNext').click(function() {
        DanceCostumesSlide.trigger('next.owl.carousel');
    });

    $('.DanceCostumesSlideNav.OwlPrev').click(function() {
        DanceCostumesSlide.trigger('prev.owl.carousel');
    });

    // PRACTISE SAREES
    var PracticeSarees = $('.PracticeSarees');
    $('.PracticeSareesNav.OwlNext').click(function() {
        PracticeSarees.trigger('next.owl.carousel');
    });

    $('.PracticeSareesNav.OwlPrev').click(function() {
        PracticeSarees.trigger('prev.owl.carousel');
    });

    // TESTIMONIAL SLIDE
    $('.TestiSlide').owlCarousel({
        loop: true,
        autoplay: true,
        smartSpeed: 500,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        responsiveClass: true,
        nav: false,
        dots: false,
        items: 1,
        margin: 5,
        responsive: {
            576: {
                items: 2,
                margin: 10,
            },
            768: {
                items: 2,
                margin: 15,
            },
            992: {
                items: 3,
                margin: 30,
            }
        }
    });
    </script>

    <!-- OUR INSTA FEED -->
    <script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
    <script type="text/javascript">
    var loadButton = $('#load-more');
    var currentCount = 0;
    var feed = new Instafeed({
        get: 'intersmartsolution',
        target: "instafeed",
        sortBy: "most-recent",
        limit: 10,
        redirect_uri: 'https://intersmartsolution.com',
        resolution: 'low_resolution',
        accessToken: 'IGQVJVVjlvRHdPQ3RQaTBsbnZAEUjhoaDNCRERqdnQ2WG9GdVVrejdBU1BRaVdrTTlJM1RGSmxfMlJVUVZALUWpvYVd5QjlibElxT3JxWWdSYTlCWW1KQzMtd3NqYkFwems5UG81SUhyY2VNQVU2SlRmVQZDZD',
        before: function() {
            currentCount = 0;
        },
        filter: function(image) {
            // put your real limit here
            var shouldDisplay = (currentCount < 5);

            if (shouldDisplay) {
                if ((image.type === 'image')) {
                    currentCount += 1;
                    //console.log(currentCount);
                    //return image.type === 'image';
                } else {
                    shouldDisplay = false;
                }
            }

            return shouldDisplay;
        },
        after: function() {
            $("#instafeed").addClass("owl-carousel");
            $("#instafeed a").attr("target", "_blank");
            $('#instafeed').owlCarousel({
                loop: true,
                autoplay: true,
                smartSpeed: 500,
                autoplayTimeout: 3500,
                autoplayHoverPause: true,
                responsiveClass: true,
                nav: false,
                dots: false,
                items: 2,
                margin: 5,
                responsive: {
                    390: {
                        items: 2,
                    },
                    468: {
                        items: 2,
                        margin: 10,
                    },
                    600: {
                        items: 3,
                        margin: 15,
                    },
                    992: {
                        margin: 18,
                        items: 4,
                    }
                }
            });
        }
    });
    feed.run();
    </script>

</div>

<?php include "./includes/footer.php"?>