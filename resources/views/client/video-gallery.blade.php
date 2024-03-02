@extends('layouts.client.app') @section('page-title') || Video Gallery
@endsection @section('contents')

<style>
  #video-gallery figure iframe{
    width: 100%;
    height: 200px;
  }
</style>
<!-- Main Contents -->
<main class="mt-20" id="video-gallery">
  <div class="container">
    <h1
      class="my-10 text-4xl md:text-5xl font-oswald font-semibold text-center text-secondary capitalize"
    >
      Our Video Gallery
    </h1>
    <div class="py-8 flex flex-wrap w-full items-center justify-center">
      
      @foreach ($video_galleries as $video)
        <div class="w-full p-4 lg:w-33/100 md:w-50/100 sm:w-100/100">
          <div class="w-full bg-primary shadow-md overflow-hidden">
            <figure class="w-full flex items-center justify-center">
              {!! $video->iframe !!}
            </figure>
            <h3 class="my-3 text-2xl font-oswald font-bold text-center text-white">
              {{ $video->title }}
            </h3>
          </div>
        </div>
      @endforeach
      <!-- </div> -->
    </div>
  </div>
</main>

@endsection