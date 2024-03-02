@extends('layouts.frontend.app')
@section('route_name') Our Team Page @endsection
@section('contents')

    <!-- Team gallery -->
    <section>
      <!-- banner iamge  -->
      <div class="w-full">
        <img
          class="w-full object-cover h-[500px]"
          src="{{$datatops->image}}"
          alt="banner-image"
        />
      </div>
      <!-- team gallery -->
      <div class="container py-10">
        <div>
          <h3
            class="text-center text-4xl font-oswald font-bold text-primary uppercase my-4"
          >
            {{$datatops->title}}
          </h3>
          <p class="text-md text-justify tracking-wide opacity-80">
            {!! $datatops->description !!}
          </p>
        </div>
        <!-- ------------- -->
        <div>
          <h3
            class="text-center text-4xl font-oswald font-bold text-primary uppercase my-6 py-5"
          >
            MANAGEMENT COMMITTEE
          </h3>
          <div
            class="md:grid md:grid-cols-2 xl:grid-cols-4 gap-3 justify-center"
          >
            @foreach ($mclist as $singallist)
            <div
              class="bg-primary w-full md:w-90/100 rounded-t-[60px] relative py-5 shadow-lg mt-20"
            >
              <img
                class="w-[170px] h-[170px] absolute top-[-60px] left-[23%] xl:left-[20%] object-cover rounded-full border-8 border-white shadow-md"
                src="{{$singallist->image}}"
                alt="images"
              />

              <h3
                class="text-2xl font-semibold text-black uppercase text-center mb-3 mt-28"
              >
                {{$singallist->name}}
              </h3>
              <p
                class="text-xl text-black font-bold tracking-wide leading-[1.78rem] opacity-70 text-center"
              >
              {{$singallist->position}}
              </p>
            </div>             
            @endforeach
          </div>
        </div>
        <!-- --------------  -->
        <div>
          <h3
            class="text-center text-4xl font-oswald font-bold text-primary uppercase mt-24"
          >
            JUNIOR MANAGEMENT COMMITTEE
          </h3>
          <div class="md:grid md:grid-cols-2 xl:grid-cols-3 gap-8 justify-center mt-4"
          >
          @foreach ($jmclist as $singallist)
          <div
            class="bg-primary w-full md:w-90/100 rounded-t-[60px] relative py-5 shadow-lg mt-20"
          >
            <img
              class="w-[170px] h-[170px] absolute top-[-60px] left-[23%] xl:left-[20%] object-cover rounded-full border-8 border-white shadow-md"
              src="{{$singallist->image}}"
              alt="images"
            />

            <h3
              class="text-2xl font-semibold text-black uppercase text-center mb-3 mt-28"
            >
              {{$singallist->name}}
            </h3>
            <p
              class="text-xl text-black font-bold tracking-wide leading-[1.78rem] opacity-70 text-center"
            >
            {{$singallist->position}}
            </p>
          </div>             
          @endforeach
            
          </div>
        </div>
        <!-- --------------- -->
        <div>
          <h3
            class="text-center text-4xl font-oswald font-bold text-primary uppercase mt-20"
          >
            BOARD MEMBERS
          </h3>
          <div
            class="md:grid md:grid-cols-2 xl:grid-cols-4 gap-3 justify-center mt-2"
          >
          @foreach ($bordmember as $singallist)
            <div
              class="bg-primary w-full md:w-90/100 rounded-t-[60px] relative py-5 shadow-lg mt-20"
            >
              <img
                class="w-[170px] h-[170px] absolute top-[-60px] left-[23%] xl:left-[20%] object-cover rounded-full border-8 border-white shadow-md"
                src="{{$singallist->image}}"
                alt="images"
              />

              <h3
                class="text-2xl font-semibold text-black uppercase text-center mb-3 mt-28"
              >
                {{$singallist->name}}
              </h3>
              <p
                class="text-xl text-black font-bold tracking-wide leading-[1.78rem] opacity-70 text-center"
              >
              {{$singallist->position}}
              </p>
            </div>             
            @endforeach       
          </div>

          <div class="flex justify-center mt-8">
            <button
              class="font-bold text-xl capitalize text-slate-200 px-8 duration-500 hover:tracking-wide pt-2 pb-2.5 rounded-full bg-primary shadow-primary-deep"
            >
              Load More
            </button>
          </div>
        </div>
      </div>
    </section>

@endsection