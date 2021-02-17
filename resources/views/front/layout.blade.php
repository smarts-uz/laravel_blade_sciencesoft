<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <link href="{{ asset('custom_css/font-google.css') }}" rel="stylesheet">
  <link href="{{asset('custom_css/tailwind.css')}}" rel="stylesheet">
  <link href="{{asset('custom_css/style.css')}}" rel="stylesheet">
  <title>{{ _trans("Sciensoft Development Company")  }}</title>



    @yield('css')

  </head>
  <body>

    <div class="wrapper">

    @include('front.Components.categories', $categories)
    <div class="mt-28">
    @yield('main')
    </div>
    @include('front.Components.footer')


    </div>

  @yield('js')
  <script src="{{asset('js/jquery.js')}}"></script>
  <script src="{{ asset('js/slick.js') }}"></script>
  <script src="{{ asset('js/tab.js') }}"></script>
  <script src="{{ asset('index.js') }}"></script>
  <script>
    $(document).ready(function () {
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

  </body>
</html>
