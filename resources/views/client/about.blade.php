@extends('layouts.client.app')
@section('page-title') {{ $about->heading }} @endsection

@section('contents')
  <main class="mt-20 font-oswald flex flex-col items-center justify-center">
    <div class="container">
      <h1 class="my-10 text-4xl md:text-5xl font-semibold text-center text-secondary capitalize">
        {{ $about->heading }}
      </h1>
      <div class="">
        <h2 class="text-5xl font-bold text-primary mb-5">
          {{ $about->title }}
        </h2> 
        <div class="text-xl opacity-80 subpixel-antialiased leading-8 text-justify"> 
          {!! $about->description !!}
        </div>
      </div>
      <!-- ---------------  -->
      <div class="mt-20">
        <h2 class="text-5xl font-bold text-primary">
          {{ $about->mission_title }}
        </h2>
        <hr class="w-36 bg-primary p-1 mb-5 mt-2" />
        <p class="text-xl opacity-80 subpixel-antialiased leading-8 text-justify mb-5">
           {{ $about->mission_description }}
        </p>
      </div>
      <div class="mt-20">
        <h2 class="text-5xl font-bold text-primary">
           {{ $about->vision_title }}
        </h2>
        <hr class="w-36 bg-primary p-1 mb-5 mt-2" />
        <p class="text-xl opacity-80 subpixel-antialiased leading-8 text-justify mb-5">
          {{ $about->vision_description }}
        </p>
      </div>
      <!-- ---------------  -->
      <div class="mt-20">
        <h2 class="text-5xl font-bold text-primary">{{ $about->about_title }}</h2>
        <hr class="w-36 bg-primary p-1 mb-5 mt-2" />
        <p
          class="text-xl opacity-80 subpixel-antialiased leading-8 text-justify mb-5"
        >
          {!! $about->about_description !!}
        </p>
      </div>
      <!-- ---------------  -->
      <div class="mt-20">
        <h2 class="text-5xl font-bold text-primary">{{ $about->story_title }}</h2>
        <hr class="w-36 bg-primary p-1 mb-5 mt-2" />
        <p
          class="text-xl opacity-80 subpixel-antialiased leading-8 text-justify mb-5"
        >
          {!! $about->story_description !!}
        </p>
      </div>
    </div>
    <div class="container flex flex-col lg:flex-row py-10 px-5 gap-10 border-solid mt-6 border-t border-slate-300 items-center justify-center">
      <div class="w-full lg:w-50/100 2xl:w-60/100" id="about-iframe">
        {!! $about->video_iframe !!}
      </div>
      <div class="w-full lg:w-50/100 2xl:w-40/100 flex flex-col items-center justify-center gap-6">
          <h2 class="text-5xl font-bold text-primary mb-6">
            {{ $about->video_title }}
          </h2>
          <p class="text-lg mb-6 font-oswald text-center text-slate-600">
            {{ $about->video_description }}
          </p>
          <a href="{{ $about->btn_link }}" class="w-full text-center block">
            <button
              class="font-bold text-xl capitalize text-slate-200 px-8 duration-500 hover:tracking-wide pt-2 pb-2.5 rounded-full bg-primary shadow-primary-deep"
            >
              {{ $about->btn_title }} 
            </button>
          </a>
      </div>
    </div>
    <!-- ---------------------- -->
    <div class="container">
      
    </div>
  </main>
@endsection

@push('footer-item-links')  
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 my-20">
  @foreach ($about_connections as $about_connection)
    <div class="flex flex-col justify-center items-center gap-y-8 mb-12 xl:m-0">
      <i class="text-5xl text-white bg-primary px-8 py-6 rounded-md">{!! $about_connection->icon !!}</i>
      <h2 class="font-bold text-primary text-4xl">{{ $about_connection->title }}</h2>
      <p class="text-center text-lg subpixel-antialiased leading-6 text-slate-500">{{ $about_connection->short_description }}</p>
      <div>
        <a href="{{ $about_connection->btn_link }}" class="w-full text-center flex">
          <button class="font-bold text-xl capitalize text-slate-200 px-8 duration-500 hover:tracking-wide pt-2 pb-2.5 rounded-full bg-primary hover:shadow-primary">
            {{ $about_connection->btn_title }}
          </button>
        </a>
      </div>
    </div>
  @endforeach
</div>
@endpush 

@push('style')
  <style>
    #about-iframe iframe { width: 100% !important; min-height: 400px; height: 100% !important; border-radius: 14px;}
  </style>
@endpush
{{-- 
@push('footer-item-links')  
  <div class="w-full flex flex-wrap items-center justify-center gap-20">

    @foreach ($about_connections as $about_connection)
      <div class="bg-transparent w-full md:w-25/100">
        <h1
          class="text-4xl font-semibold font-oswald tracking-wider text-center text-primary"
        >
          {{ $about_connection->title }}
        </h1>
        <p
          class="py-6 text-xl font-semibold font-poppins tracking-wider text-center text-slate-300"
        >
          {{ $about_connection->short_description }}
        </p>

        <a href="{{ $about_connection->btn_link }}" class="w-full text-center block pt-2.5">
          <button
            class="font-medium font-oswald text-2xl capitalize text-slate-200 px-12 duration-500 hover:tracking-wide pt-4 pb-5 rounded-full bg-primary shadow-primary-deep"
          >
            {{ $about_connection->btn_title }}
          </button>
        </a>
      </div> 
    @endforeach
        
  </div>
@endpush 
 --}}

