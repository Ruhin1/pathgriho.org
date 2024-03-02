<div class="carousel w-full mt-20">
  <div class="owl-carousel">

    @foreach (App\Helper\AdditionalResources::HomePageSlider() as $slider)
      {{-- <figure class="w-full">
        <img
          src="{{ asset($slider->image) }}"
          alt="{{ $slider->title }}"
          class="w-full h-[calc(100vh_-_80px)]"
        />
      </figure>  --}}

      <figure class="before:content-[''] before:pt-[90%] sm:before:pt-[70%] lg:before:pt-[60%] xl:before:pt-[46.25%] before:block relative">
        <img
          src="{{ asset($slider->image) }}"
          alt="{{ $slider->title }}"
          class="w-full rounded-md absolute inset-0 h-full object-cover"
        />
      </figure>

    @endforeach
          
  </div>
</div>
