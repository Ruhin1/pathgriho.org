@php $additional_resource = fn($key) => App\Helper\AdditionalResources::appInfo($key); @endphp

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $additional_resource('title') }} @yield('page-title')</title>
    <meta name="description" content="{{ $additional_resource('meta_keyword') }}">
    <meta name="keywords" content="{{ $additional_resource('meta_description') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,900&family=Roboto+Mono:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,700&display=swap"
      rel="stylesheet"
    />

    <!--- favicon-->
    <link rel="icon" href="{{ asset($additional_resource('favicon')) }}" type="image/x-icon" />
    @vite('resources/css/app.css')

    <script>
      window.assetUrl = '{{ asset('/') }}';
      window.localTime = (time) => new Date(time).toDateString() + " | " + new Date(time).toLocaleTimeString({ options: { hour12: true, hour: "numeric", minute: "numeric", second: "numeric", }, })
    </script>

    <!-- Custom Styles -->
    @stack('style')

  </head>

  <body class="font-poppins w-full">
    <!-- Header Section -->
    @include('layouts.client.partial.nav', compact('additional_resource'))

    <!-- Main Contents --->
    <main>
      @yield('contents')
    </main>
    <!-- Main Contents --->

    <!-- Footer Areas -->
    @include('layouts.client.partial.footer', compact('additional_resource'))
     
   <!-- Includes The Scripts assets -->
    @include('layouts.client.partial.script')

    <!-- JavaScript -->
    @stack('js')
    
  </body>
</html>
<!-- Done this -->
