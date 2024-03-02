@extends('layouts.client.app') @section('page-title') || FAQ @endsection
@section('contents')

<!-- Main Contents -->
<main class="mt-20">
  <div class="container">
    <h1
      class="my-10 text-4xl md:text-5xl font-oswald font-semibold text-center text-secondary"
    >
      Frequently Asked Questions
    </h1>
    <div class="flex flex-col xl:flex-row gap-4 mb-12">
      <!-- ------------ -->
        <ul class="flex py-2 w-full flex-wrap">
          
          @foreach ($faqs as $faq)
            <li class="p-2 w-full md:w-50/100 faq-list" id="faq-list-{{ $faq->id }}">
              <div class="border border-solid border-slate-400/60">
                <h2 class="flex flex-row font-semibold p-3 cursor-pointer gap-4">

                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="plus fill-current text-primary h-7 w-7 transform transition-transform duration-500 inline" faq-list-id="#faq-list-{{ $faq->id }}">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    <path stroke-linecap="round" stroke-linejoin="circular" stroke-width="2" d="M6 12h12"/>
                  </svg>

                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="hidden minus fill-current text-primary h-7 w-7 transform transition-transform duration-500" faq-list-id="#faq-list-{{ $faq->id }}">
                    <path stroke-linecap="round" stroke-linejoin="circular" stroke-width="2" d="M6 12h12"/>
                  </svg>

                  <span class="text-primary font-oswald text-lg md:text-xl">{{ $faq->faqtitle }}</span>
                </h2>

                <div class="overflow-hidden h-0 duration-500 transition-all description">
                  <div class="p-3 text-stone-500 border-t">
                    {!! $faq->faqdescription !!}
                  </div>
                </div>
              </div>
            </li> 
          @endforeach
          
        </ul>
    </div>
  </div>
</main>


<script>
  const faqList = document.querySelectorAll('.faq-list');
  faqList.forEach(faq => {
    faq.addEventListener('click', function(e){
      faqList.forEach(function(lfaq) {
        lfaq.querySelector('.description').classList.add('h-0');

        lfaq.querySelector('.minus').classList.replace("inline", "hidden")
        lfaq.querySelector('.plus').classList.replace("hidden", "inline")
      })
      
      const thisEl = e.target.closest('li');
      thisEl.querySelector('.description').classList.remove('h-0');

      thisEl.querySelector('.plus').classList.replace("inline", "hidden")
      thisEl.querySelector('.minus').classList.replace("hidden", "inline")
    })
  });
</script>
<!-- Scripts -->
@endsection