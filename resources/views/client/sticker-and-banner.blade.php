@extends('layouts.client.app') @section('page-title') || Video Gallery
@endsection @section('contents')
<main class="mt-20">
  <!-- Header Banner -->
  <section>
    <div class="carousel w-full h-full bg-slate-300 xl:py-4 xl:px-16">

        <div class="owl-carousel">
          @foreach ($banners as $banner)
            <div class="flex">
              <div class="w-full xl:w-60/100">
                <figure
                  class="before:content-[''] before:pt-[65%] lg:before:pt-[48%] before:block relative"
                >
                  <img
                    src="{{ asset($banner->bannerimage) }}"
                    alt="{{ $banner->bannertitle }}"
                    class="w-full absolute inset-0 h-full object-cover"
                  />
                </figure>
              </div>
              <div
                class="xl:w-40/100 flex-col gap-y-8 px-5 pt-20 hidden md:hidden xl:flex"
              >
                <h3 class="font-oswald text-4xl font-bold text-primary text-center">
                  {{ $banner->bannertitle }}
                </h3>
                <div class="!font-oswald text-2xl text-center">
                  {{ $banner->bannerdescription }}
                </div>
                <div class="flex justify-center">
                  <a
                    href="{{ $banner->bannerbuttonurl }}"
                    class="font-bold text-xl text-slate-200 px-8 duration-500 hover:tracking-wide pt-2 pb-2.5 rounded-full bg-primary shadow-primary-deep font-oswald uppercase"
                  >
                    {{ $banner->bannerbuttontext }}
                  </a>
                </div>
              </div>
            </div>
          @endforeach 
        </div>
            
    </div>
  </section>

  <section>
    <div class="container">
      <h1
        class="my-10 text-4xl md:text-5xl font-oswald font-semibold text-center text-primary capitalize"
      >
        Steacker And Banner
      </h1>
      <div>
        <h2 class="text-5xl font-oswald font-bold text-primary">Stickers</h2>
        <hr class="w-[100px] bg-primary p-1 mb-5 mt-2" />
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-8">
          <!-- ---------------  -->
          @foreach ($stickers as $sticker)
            <figure>
              <img
                src="{{ asset($sticker->stickerimage) }}"
                alt="Middle Banner"
                class="w-full rounded-md h-[260px] object-cover"
              />
            </figure> 
          @endforeach
        </div>
      </div>
      <!-- --------------- -->
      <div class="my-10">
        <h2 class="text-5xl font-oswald font-bold text-primary">X-Banners</h2>
        <hr class="w-[100px] bg-primary p-1 mb-5 mt-2" />
        <div
          class="w-full flex flex-wrap items-center justify-center"
        >
          <!-- ---------------  -->
          @foreach ($x_banners as $xbanner)
            <div class="p-4 w-full sm:w-50/100 md:w-33/100 lg:w-25/100">
                <figure class="before:content-[''] before:pt-[100%] before:block relative">
                <img
                  src="{{ asset($xbanner->xbannerimage) }}"
                  alt="Middle Banner"
                  class="w-full rounded-md absolute inset-0 h-full object-cover"
                />
              </figure>
            </div>
          @endforeach 
        </div>
      </div>
    </div>
  </section>
</main>

@endsection

@push('js')
  
@endpush