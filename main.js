 
            $('#menu').mmenu();
         
            AOS.init();
         
         
            // $('.card-deck-1').slick({
            //     infinite: true,
            //     slidesToShow: 4,
            //     slidesToScroll: 1,
            //     autoplay: false,
            //     autoplaySpeed: 1000,
            //     speed: 300,
            //     arrows: false,
            //     responsive: [
            //         //1200px//
            //         {
            //             breakpoint: 1200,
            //             settings: {
            //                 slidesToShow: 3,
            //                 slidesToScroll: 1,
            //             }
            //         },
            //         //700//
            //         {
            //             breakpoint: 700,
            //             settings: {
            //                 slidesToShow: 2,
            //                 slidesToScroll: 1,
            //             }

            //         },

            //     ]
            // });
            $('.card-deck-1').slick({
                lazyLoad: 'progressive', infinite: false, accessibility: true, vertical: false, slidesToShow: 3,
                slidesToScroll: 1, autoplay: true, autoplaySpeed: 3000, speed: 1000, arrows: false, centerMode: false,
                dots: false, draggable: true, responsive: [
                    {
                        breakpoint: 961,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            variableWidth: false,
                            centerMode: false,
                            arrows: false,
                        }
                    },
                    {
                        breakpoint: 561,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            variableWidth: false,
                            centerMode: false,
                            arrows: false,
                        }
                    }
                ]
            });

            $('.list-news').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 2,
                autoplay: true,
                autoplaySpeed: 3000,
                speed: 3000,
                arrows: false,
                vertical: true,
                verticalSwiping: true,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            vertical: false,
                            verticalSwiping: true,
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 650,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,

                        }
                    },

                ]

            });

         

         
            $(document).ready(function () {
                setTimeout(function () {
                    $(".wap_load").fadeOut(500);
                }, 500);
            });
         

