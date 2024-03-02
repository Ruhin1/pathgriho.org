{{-- @ php 
	$app_info = App\Helper\AdditionalResources::appInfo();
@endphp --}}

<!DOCTYPE html> 
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>{{ $app_info['title'] }} || @yield('route_name')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="{{ $app_info['favicon'] }}"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,900&family=Roboto+Mono:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,700&display=swap"
  rel="stylesheet"
/> 
<!-- Rimix icon  -->
<link
href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
rel="stylesheet"
/>
<!--- favicon-->
<link rel="icon" href="{{asset('/assets/images/favicon.ico')}}" type="image/x-icon" />

<!-- Tailwind Css -->
@vite(['resources/css/app.css', 'resources/js/app.js'])


<!-- jQuery -->
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-compat/3.0.0-alpha1/jquery.min.js"
  integrity="sha512-4GsgvzFFry8SXj8c/VcCjjEZ+du9RZp/627AEQRVLatx6d60AUnUYXg0lGn538p44cgRs5E2GXq+8IOetJ+6ow=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer">
</script>
    {{-- Adisonal css --}}
    @include('layouts.frontend.partial.css')
    @stack('styles')
  </head>

  <body class="bg-slate-200 font-poppins">
    @include('layouts.frontend.partial.header')
    <!-- Header End -->
    <main class="mt-20">
      
      <!-- Main Contents -->
      @yield('contents')
    </main>
     <!-- Other -->
     @include('layouts.frontend.partial.other')

    <!-- Footer -->
    @include('layouts.frontend.partial.footer')

    <div id="back-top">
      <a title="Go to Top" href="#"> <i class="fas fa-arrow-up"></i></a>
    </div>
    <!-- JS here -->
    @include('layouts.frontend.partial.scripts') 
    @stack('scripts')
  </body>
</html>
