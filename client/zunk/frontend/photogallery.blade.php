@extends('layouts.frontend.app')
@section('route_name') Photo Gallery @endsection
@section('contents')

    <div class="container">
      <h1
        class="my-10 text-4xl md:text-5xl font-oswald font-semibold text-center text-primary"
      >
        Photo Gallery
      </h1>
      <div
        class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8 md:gap-y-20 my-10"
      > 
        @foreach ($datas as $data)
        <div class="bg-primary shadow-md">
            <figure
              class="before:content-[''] before:pt-[50%] lg:before:pt-[60%] before:block relative overflow-hidden"
            >
              <img
                src="{{$data['image']}}"
                alt="Middle Banner"
                class="w-full absolute inset-0 h-full object-cover drop-shadow-md aspect-square hover:scale-110 transition duration-300 ease-in-outo"
              />
            </figure>
            <div>
              <h3
                class="my-3 text-2xl font-oswald font-bold text-center text-white"
              >
                {{$data['title']}}
              </h3>
            </div>
          </div>   
        @endforeach
        
      </div>
    </div>

@endsection