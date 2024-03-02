@extends('layouts.frontend.app')
@section('route_name') Video Gallery @endsection
<section>
    <div class="container">
        <h1 class="my-10 text-4xl md:text-5xl font-oswald font-semibold text-center text-secondary capitalize">Our Video Gallery</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3  gap-6 mb-10">
            {{-- -----------  --}}
            @foreach ($datas as $data)
            <div class="w-full bg-primary shadow-md overflow-hidden ">
               
               <iframe class="w-full aspect-video h-[315px]" height="315" src="{{$data['iframe']}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <h3 class="my-3 text-2xl font-oswald font-bold text-center text-white">{{$data['title']}}</h3>
              </div>
            @endforeach   
        </div>
      
    </div>
</section>
@section('contents')
@endsection