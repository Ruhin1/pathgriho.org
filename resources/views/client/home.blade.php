@extends('layouts.client.app')
@section('page-title') || Home @endsection
@section('contents')

  <!-- Header Slider Banner -->
  @include('client.home-components.slider')
  
  <!-- Main Contents -->
  <main class="w-full bg-slate-100 flex flex-col items-center justify-center">
    <!-- First Image Container -->
    <article
      class="bg-cover w-full pt-20 pb-80 relative z-10 -mt-16 bg-transparent"
      style="background-image: url('{{ asset(App\Helper\AdditionalResources::appInfo('secondary_logo')) }}')"
    >
      <!-- Image Card Container for banner -->
      <div class="container flex flex-wrap gap-[5%] w-full py-10">
        <!-- Card 1 -->

        @foreach ($blogs as $blog)
          <div class="lg:w-30/100 w-full border border-solid border-slate-200 rounded-[50px]">
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
              <a
                href="{{ Route('frontend.single_blog', $blog->slug) }}"
                class="w-full text-center pt-2.5 flex items-center justify-center"
              >
                <button
                  class="font-bold text-xl capitalize text-slate-200 px-8 duration-500 hover:tracking-wide pt-2 pb-2.5 rounded-full bg-primary shadow-primary-deep"
                >
                  Show more details
                </button>
              </a>
            </div>
          </div>
        @endforeach 
      </div>
    </article>

    <!-- Mission/Vision Block -->
    <article
      class="bg-cover w-full pt-20 pb-0 relative z-10 before:content-[''] before:top-0 before:left-0 before:z-10 before:w-full before:h-full before:bg-slate-900 before:absolute before:opacity-70"
      style="background-image: url('{{ asset($testimonial->bg_image)}}')"
    >
      <!-- Image Card Container for Mission/Vision banner -->
      <div class="container relative z-20">
        <div
          class="absolute w-full flex flex-col lg:flex-row -top-80 left-0 border border-solid border-slate-200 shadow-xl rounded"
        >
          <figure
            class="before:content-[''] before:pt-[100%] w-full before:block relative"
          >
            <img
              src="{{ asset($testimonial->image) }}"
              alt="Middle Banner"
              class="w-full rounded-md absolute inset-0 h-full object-cover"
            />
          </figure>
          <div
            class="bg-slate-100 w-full flex items-center justify-center p-0 lg:p-10"
          >
            <div class="w-full bg-slate-100 p-4 text-justify font-oswald">
              <h3 class="p-2 text-2xl font-semibold text-primary capitalize">
                {{ $testimonial->title }}
              </h3>
              <p
                class="py-4 lg:py-10 text-lg text-justify font-poppins font-medium tracking-wide p-2.5"
              >
                {!! $testimonial->banner_description !!}
              </p>
              <a href="{{ $testimonial->btn_link }}" class="w-full text-center pt-2.5">
                <button
                  class="font-bold text-xl capitalize text-slate-200 px-8 duration-500 hover:tracking-wide pt-2 pb-2.5 rounded-full bg-primary shadow-primary-deep"
                >
                  {{ $testimonial->btn_title }}
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div
        class="container mt-[260%] xs:mt-[190%] sm:mt-[130%] md:mt-[110%] lg:mt-[60%] xl:mt-96 py-20 relative z-20"
      >
        <h1
          class="text-2xl xs:text-4xl font-semibold font-oswald tracking-wider text-center text-primary"
        >
          {{ $testimonial->banner_title }}
        </h1>
        <p
          class="text-lg leading-6 py-6 text-center font-poppins text-slate-100"
        >
          {!! $testimonial->short_description !!}
        </p>
        <h1
          class="py-4 text-5xl sm:text-9xl font-bold font-oswald text-slate-100 text-center"
        >
          {{ $testimonial->volunteers }}
        </h1>
        <p
          class="text-xl font-oswald font-semibold tracking-wider text-center text-slate-300"
        >
          {{ $testimonial->volunteer_title }}
        </p>
        <a href="{{ $testimonial->primary_btn_link }}" class="w-full text-center block pt-2.5 mt-10">
          <button
            class="font-medium font-oswald text-2xl capitalize text-slate-200 px-12 duration-500 hover:tracking-wide pt-4 pb-5 rounded-full bg-primary shadow-primary-deep"
          >
            {{ $testimonial->primary_btn_title }}
          </button>
        </a>
      </div>
    </article>

    <!-- wrapping image gallery -->
    <article class="w-full flex flex-col xl:flex-row">
      <div
        class="w-full xl:w-20/100 bg-primary font-oswald p-6 flex flex-col items-center justify-center"
      >
        <h1 class="text-3xl capitalize font-semibold text-slate-100">
          {{ $testimonial->secondary_title }}
        </h1>
        <p
          class="text-lg font-normal text-slate-200 tracking-wide leading-[1.78rem] text-justify max-h-60 py-2 overflow-hidden"
        >
          {!! $testimonial->secondary_description !!}
        </p>
        <a
          href="{{ $testimonial->secondary_btn_link }}"
          class="w-full text-center flex items-center justify-center"
        >
          <button
            class="font-bold text-xl capitalize text-slate-200 px-8 duration-500 hover:tracking-wide pt-2 pb-2.5 rounded-full bg-secondary shadow-primary-deep"
          >
            {{ $testimonial->secondary_btn_title }}
          </button>
        </a>
        <!-- </div> -->
      </div>

      <div class="w-full xl:w-80/100">
        <div class="flex flex-wrap w-full items-center justify-center">
          
          @foreach (json_decode($testimonial->photos) as $photo)
            <div class="w-full sm:w-50/100 lg:w-25/100">
              <figure class="before:content-[''] before:pt-[100%] before:block relative">
                <img
                  src="{{ asset($photo) }}"
                  alt="Middle Banner"
                  class="w-full absolute inset-0 h-full object-cover"
                />
              </figure>
            </div>
          @endforeach 
        </div>
      </div>
    </article>

    <!-- Second Image card -->
    <article class="w-full bg-slate-100 text-slate-700 pb-60">
      <div class="container">
        <div class="w-full py-8">
          <h1
            class="text-4xl font-oswald font-semibold text-center text-primary"
          >
            {{ $testimonial->description }}
          </h1>
          <p class="text-3xl font-medium text-center leading-10 font-poppins">
            Recent Causes
          </p>
        </div>

        <!-- Image Card Container for Causes Section -->
        <div class="flex flex-wrap gap-[5%] w-full py-10">
          
          @foreach ($secondary_blogs as $blog)
            <div class="sm:w-45/100 lg:w-30/100 w-full border border-solid border-slate-200 rounded-[50px] mb-2">
              <div class="w-full bg-white p-4 text-justify font-oswald">
                <h3
                  class="p-2 text-3xl font-semibold text-primary capitalize text-center flex flex-col items-center justify-center"
                >
                  <p>{{ $blog->title }}</p>
                  <p class="w-40 h-1 rounded-full my-4 bg-primary"></p>
                </h3>
                <p class="text-md text-justify tracking-wide p-2.5">{!! $blog->short_description !!}</p>
              </div>
              <figure
                class="before:content-[''] before:pt-[65%] before:block relative"
              >
                <img
                  src="{{ asset($blog->image) }}"
                  alt="{{ $blog->title }}"
                  class="w-full rounded-md absolute inset-0 h-full object-cover"
                />
              </figure>

              <div class="w-full bg-white pb-4 text-justify font-oswald">
                <a
                  href="{{ Route('frontend.single_blog', $blog->slug) }}"
                  class="w-full text-center pt-2.5 flex items-center justify-center"
                >
                  <button
                    class="font-bold text-xl capitalize text-slate-200 px-8 duration-500 hover:tracking-wide pt-2 pb-2.5 rounded-full bg-primary shadow-primary-deep"
                  >
                    Show more details
                  </button>
                </a>
              </div>
            </div> 
          @endforeach
      </div>
    </article>

    <!-- Secondary Block -->
    <article
      class="bg-cover w-full pt-20 pb-28 relative z-10 before:content-[''] before:top-0 before:left-0 before:z-10 before:w-full before:h-full before:bg-slate-900 before:absolute before:opacity-70"
      style="background-image: url('{{ asset($workout_section->secondary_bg_image)}}')"
    >
      <!-- Image Card Container for Mission/Vision banner -->
      <div class="container relative z-20">
        <!-- Top border line -->
        <div
          class="absolute -top-80 z-10 w-full bg-transparent left-0 p-8 flex items-center justify-center"
        >
          <div
            class="p-12 w-70/100 bg-transparent border-secondary border-solid border-[12px]"
          ></div>
        </div>
        <!-- Bottom border line -->
        <div
          class="hidden 2xl:flex absolute -top-16 z-10 w-full bg-transparent left-0 p-8 items-center justify-center"
        >
          <div
            class="p-12 w-70/100 bg-transparent border-slate-100 border-solid border-[12px]"
          ></div>
        </div>

        <!-- Contents -->
        <div
          class="absolute z-50 w-full flex -top-60 left-0 border border-solid border-primary shadow-xl rounded bg-primary justify-center items-center flex-col"
        >
          <h1
            class="text-5xl font-medium font-oswald text-slate-100 text-center px-6 py-12"
          >
            {{ $workout_section->main_heading }}
          </h1>
          <div class="pb-10">
            <a href="{{ $workout_section->primary_btn_link }}"
              class="text-center text-2xl font-bold font-oswald underline duration-500 hover:tracking-wider text-slate-100">{{ $workout_section->primary_btn_title }}</a>
          </div>
        </div>
      </div>

      <div class="container mt-60 relative z-20">
        <div
          class="w-full flex flex-wrap items-center justify-center gap-8 sm:gap-20"
        >
          <div class="w-full sm:w-25/100">
            <p
              class="text-xl font-oswald font-semibold tracking-wider text-center text-slate-300"
            >
              {{ $workout_section->first_workout_title }}
            </p>

            <h1
              class="py-4 text-4xl font-bold font-oswald text-primary text-center"
            >
              {{ $workout_section->first_workout }}
            </h1>
          </div>
          <div class="w-full sm:w-25/100">
            <p
              class="text-xl font-oswald font-semibold tracking-wider text-center text-slate-300"
            >
              {{ $workout_section->second_workout_title }}
            </p>

            <h1
              class="py-4 text-4xl font-bold font-oswald text-primary text-center"
            >
              {{ $workout_section->second_workout }}
            </h1>
          </div>
          <div class="w-full sm:w-25/100">
            <p
              class="text-xl font-oswald font-semibold tracking-wider text-center text-slate-300"
            >
              {{ $workout_section->third_workout_title }}
            </p>

            <h1
              class="py-4 text-4xl font-bold font-oswald text-primary text-center"
            >
              {{ $workout_section->third_workout }}
            </h1>
          </div>
        </div>
        <a href="{{ $workout_section->secondary_btn_link }}" class="w-full text-center block pt-2.5 mt-20">
          <button
            class="font-medium font-oswald text-2xl capitalize text-slate-200 px-12 duration-500 hover:tracking-wide pt-4 pb-5 rounded-full bg-primary shadow-primary-deep"
          >
            {{ $workout_section->secondary_btn_title }}
          </button>
        </a>
      </div>
    </article>

    <!-- Footer banner Image card -->
    <article
      class="bg-cover w-full py-20 relative z-10 -mt-24 bg-transparent"
      style="background-image: url('{{ asset($workout_section->bg_image)}}')"
    >
      <!-- Image Card Container for Social working -->
      <div class="container">
        <div class="w-full mt-6 py-12">
          <h1
            class="text-4xl font-oswald font-semibold text-center text-primary"
          >
            {{ $workout_section->article_title }}
          </h1>
          <p class="text-6xl font-bold text-center pt-4 font-oswald">
            {{ $workout_section->article_heading }}
          </p>
        </div>

        <!-- Image Card Container for Causes Section -->
        <div class="flex flex-wrap gap-[3%] w-full py-10">
          <!-- Card 1 -->

          @foreach ($featured_news_and_articles as $naar)
            <div
              class="lg:w-30/100 w-full border-solid border-slate-200 rounded-[50px] pb-8"
            >
              <figure
                class="before:content-[''] before:pt-[65%] before:block relative"
              >
                <img
                  src="{{ asset($naar->image) }}"
                  alt="Middle Banner"
                  class="w-full rounded-md absolute inset-0 h-full object-cover"
                />
              </figure>

              <div class="w-full bg-white pb-4 text-justify font-oswald">
                <div class="text-lg text-justify font-bold tracking-wide p-6">
                  {!! $naar->short_description !!}
                </div>
              </div>
            </div>
            @endforeach
            
        </div>
      </div>
    </article>

    <!-- Facebook Plugin -->
    <!-- works_areas_details -->
  </main>
  
@endsection

@push('footer-item-links')  

  <div class="w-full flex flex-wrap items-center justify-center gap-20">

    @foreach ($works_areas_details as $wad)
      <div class="bg-transparent w-full md:w-25/100">
        <h1
          class="text-4xl font-semibold font-oswald tracking-wider text-center text-primary"
        >
          {{ $wad->title }}
        </h1>
        <p
          class="py-6 text-xl font-semibold font-poppins tracking-wider text-center text-slate-300"
        >
          {{ $wad->short_description }}
        </p>

        <a href="{{ $wad->btn_link }}" class="w-full text-center block pt-2.5">
          <button
            class="font-medium font-oswald text-2xl capitalize text-slate-200 px-12 duration-500 hover:tracking-wide pt-4 pb-5 rounded-full bg-primary shadow-primary-deep"
          >
            {{ $wad->btn_title }}
          </button>
        </a>
      </div> 
    @endforeach
        
  </div>

@endpush 