@extends('layouts.client.app')
@section('page-title') || Team @endsection
@section('contents')

  <!-- Main Contents -->
  <main class="mt-20 bg-slate-200">
  <!-- Team gallery -->
  <section>
    <!-- banner iamge  -->
    <div class="w-full">
      <img
        class="w-full object-cover h-[500px]"
        src="{{ asset($team_banner->image) }}"
        alt="{{ $team_banner->title }}"
      />
    </div>
    <!-- team gallery -->
    <div class="container py-10">
      <div>
        <h3
          class="text-center text-4xl font-oswald font-bold text-primary uppercase my-4"
        >
          {{ $team_banner->first_title }}
        </h3>
        <div class="text-md text-justify tracking-wide opacity-80">
          {!! $team_banner->description !!}
        </div>
      </div>
      <!-- ------------- -->
      <div>
        <h3 class="text-center text-4xl font-oswald font-bold text-primary uppercase my-6 py-5">
          {{ $team_banner->second_title }}
        </h3>
        <div class="md:grid md:grid-cols-2 xl:grid-cols-4 gap-3 justify-center">

          @foreach ($board_members as $board_member)
            <div class="bg-primary w-full md:w-90/100 rounded-t-[60px] relative py-5 shadow-lg font-oswald mt-24">
              <figure class="w-full flex items-center justify-center">
                <img
                  class="w-44 h-44 rounded-full border-8 border-white shadow-md -mt-24"
                  src="{{ asset($board_member->image) }}"
                  alt="{{ $board_member->title }}"
                />
              </figure>

              <h3 class="text-2xl font-semibold text-slate-100 uppercase text-center mb-1 mt-6">{{ $board_member->name }}</h3>
              <p class="text-xl text-slate-100 font-bold tracking-wide leading-[1.78rem] opacity-70 text-center">{{ $board_member->position }}</p>
            </div>
          @endforeach
             
        </div>
      </div>
      <!-- --------------  -->
      <div>
        <h3 class="text-center text-4xl font-oswald font-bold text-primary uppercase mt-24">
          {{ $team_banner->third_title }}
        </h3>
        <div class="md:grid md:grid-cols-2 xl:grid-cols-3 gap-8 justify-center mt-20">

          @foreach ($managements as $management)
            <div class="bg-primary w-full md:w-90/100 rounded-t-[60px] relative py-5 shadow-lg font-oswald mt-24">
              <figure class="w-full flex items-center justify-center">
                <img
                  class="w-44 h-44 rounded-full border-8 border-white shadow-md -mt-24"
                  src="{{ asset($management->image) }}"
                  alt="{{ $management->title }}"
                />
              </figure>

              <h3 class="text-2xl font-semibold text-slate-100 uppercase text-center mb-1 mt-6">{{ $management->name }}</h3>
              <p class="text-xl text-slate-100 font-bold tracking-wide leading-[1.78rem] opacity-70 text-center">{{ $management->position }}</p>
            </div>
          @endforeach
               
        </div>
      </div>
      <!-- --------------- -->
      <div>
        <h3 class="text-center text-4xl font-oswald font-bold text-primary uppercase mt-20">
          {{ $team_banner->fourth_title }}
        </h3>

        <div class="md:grid md:grid-cols-2 xl:grid-cols-4 gap-3 justify-center mt-20">

          @foreach ($junior_managements as $junior_management)
            <div class="bg-primary w-full md:w-90/100 rounded-t-[60px] relative py-5 shadow-lg font-oswald mt-24">
              <figure class="w-full flex items-center justify-center">
                <img
                  class="w-44 h-44 rounded-full border-8 border-white shadow-md -mt-24"
                  src="{{ asset($junior_management->image) }}"
                  alt="{{ $junior_management->title }}"
                />
              </figure>

              <h3 class="text-2xl font-semibold text-slate-100 uppercase text-center mb-1 mt-6">{{ $junior_management->name }}</h3>
              <p class="text-xl text-slate-100 font-bold tracking-wide leading-[1.78rem] opacity-70 text-center">{{ $junior_management->position }}</p>
            </div> 
          @endforeach
              
        </div>

        <div class="flex justify-center mt-14">
          <a href="{{ $team_banner->btn_link }}" class="font-bold text-xl capitalize text-slate-200 px-8 duration-500 hover:tracking-wide pt-2 pb-2.5 rounded-full bg-primary hover:shadow-primary-deep font-oswald">
            {{ $team_banner->btn_title }}
          </a>
        </div>
      </div>
    </div>
  </section>
</main>

@endsection