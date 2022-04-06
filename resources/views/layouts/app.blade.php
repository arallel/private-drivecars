<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      </head>
      
     
        <title>{{ config('app.name', 'Data Drive Cars') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://s.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- CSS Files -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <script src="https://kit.fontawesome.com/8f35130a2a.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <!-- CSS only -->
    
        <link href="{{ asset('../ui/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
        
        <link href="{{ asset('../ui/assets/css/now-ui-dashboard.css?v=1.5.0') }}" rel="stylesheet" />
        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}

        
     

        @livewireStyles

      
     
    </head>
    <body class="font-sans antialiased">
      <div class="wrapper ">
        <div class="sidebar" data-color="blue">
            <!--
              Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
             -->
            <div class="logo">
              <a href="#" class="simple-text logo-mini">
                DC
              </a>
              <a href="#" class="simple-text logo-normal">
                Data Drive Cars
              </a>
            </div>
           
            <main>
              @include('layouts.sidebar')                       
                {{ $slot }}
            </main>
            <footer class="footer">
              <div class=" container-fluid ">
                <nav>
                  <ul>
                    <li>
                      {{-- <a href="https://www.creative-tim.com">
                        Creative Tim
                      </a>
                    </li>
                    <li>
                      <a href="http://presentation.creative-tim.com">
                        About Us
                      </a>
                    </li>
                    <li>
                      <a href="http://blog.creative-tim.com">
                        Blog
                      </a>
                    </li> --}}
                  </ul>
                </nav>
                {{-- <div class="copyright" id="copyright">
                  &copy; <script>
                    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                  </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                </div> --}}
              </div>
            </footer>
       
        {{-- </div> --}}
        @stack('modals')
       
          <!-- Scripts -->
          {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
          <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
              {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
               <!--   Core JS Files   -->
               <script src="{{ asset('../ui/assets/js/core/jquery.min.js') }}"></script>
               <script src="{{ asset('../ui/assets/js/core/popper.min.js') }}"></script>
               <script src="{{ asset('../ui/assets/js/core/bootstrap.min.js') }}"></script>
               <script src="{{ asset('../ui/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
               <!--  Google Maps Plugin    -->
               <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
               <!-- Chart JS -->
               <script src="{{ asset('../ui/assets/js/plugins/chartjs.min.js') }}"></script>
               <!--  Notifications Plugin    -->
               <script src="{{ asset('../ui/assets/js/plugins/bootstrap-notify.js') }}"></script>
               <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
               <script src="{{ asset('../ui/assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript') }}"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
             <!-- JavaScript Bundle with Popper -->
             <script src="../ui/assets/demo/demo.js"></script>
             @livewireScripts
             <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
             <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script> 
             <x-livewire-alert::flash /> 
            <script>
             $(document).ready(function() {
             // Javascript method's body can be found in assets/js/demos.js
             demo.initDashboardPageCharts();
             });
            </script>
            <!-- Magnific Popup core CSS file -->
            <link rel="stylesheet" href="popupimage/dist/magnific-popup.css">

            <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

             <!-- Magnific Popup core JS file -->
             <script src="popupimage/dist/jquery.magnific-popup.js"></script>

            

        
    </body>
</html>
