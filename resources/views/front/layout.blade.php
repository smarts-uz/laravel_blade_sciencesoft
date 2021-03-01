<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
=======
<!DOCTYPE html >
<html lang="{{ app()->getLocale() }}">
>>>>>>> 272238988989ebd1b8b3156cf4fbc5d9d44f1afd

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>{{ _trans('TeamPro') }}</title>



    @yield('css')

</head>

<body>

    <div class="wrapper">

        @include('front.Components.categories', $categories)
<<<<<<< HEAD
        <div class="mt-24 px-6 md:px-16">
=======
        <div class="md:mt-24 mt-14 px-6 md:px-16">
>>>>>>> 272238988989ebd1b8b3156cf4fbc5d9d44f1afd
            @yield('main')
        </div>
        @include('front.Components.footer')


    </div>

    @yield('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
    <script src="{{ asset('js/tab.js') }}"></script>
    <script src="{{ asset('index.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    setting: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    setting: {
                        slidesToShow: 3
                    }
                }]
            });
        });

    </script>

    <script>
        window.replainSettings = {
            id: '4bd73f5f-79dd-4aee-b496-a833dfe09fea'
        };
        (function(u) {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = u;
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })('https://widget.replain.cc/dist/client.js');

    </script>


</body>

</html>
