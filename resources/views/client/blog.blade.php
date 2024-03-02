@extends('layouts.client.app')
@section('page-title') || Blog @endsection
@section('contents')

  <!-- Main Contents -->
  <main class="w-full flex items-center justify-center">
    <div class="container">
      <div class="flex flex-wrap gap-[5%] w-full py-10 mt-24">
            <!-- Card 1 -->
            @foreach ($blogs as $blog)                
              <div class="lg:w-30/100 w-full border border-solid border-slate-200 rounded-[50px] mb-3">
                <figure class="before:content-[''] before:pt-[65%] before:block relative">
                  <img
                    src="{{ asset($blog->image) }}"
                    alt="{{ $blog->title }}"
                    class="w-full rounded-md absolute inset-0 h-full object-cover"
                  />
                </figure>

                <div class="w-full bg-white p-4 text-justify font-oswald">
                  <h3 class="p-2 text-2xl font-semibold text-primary capitalize">
                    {{ $blog->title }}
                  </h3>
                  <p class="text-md text-justify tracking-wide p-2.5">
                    {!! $blog->short_description !!}
                  </p>
                  <a href="{{ Route('frontend.single_blog', $blog->slug) }}" class="w-full text-center pt-2.5 flex items-center justify-center">
                    <button
                      class="font-bold text-xl capitalize text-slate-200 px-8 duration-500 hover:tracking-wide pt-2 pb-2.5 rounded-full bg-primary shadow-primary-deep"
                    >
                      show more details
                    </button>
                  </a>
                </div>
              </div>
            @endforeach
            
          </div>
    </div>
  </main>
  
@endsection