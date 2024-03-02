@extends('layouts.frontend.app')
@section('route_name') Faq Page @endsection
@section('contents')
<div class="container">
    <h1
      class="my-10 text-4xl md:text-5xl font-oswald font-semibold text-center text-secondary"
    >
      Frequently Asked Questions
    </h1>
    <div class="flex flex-col xl:flex-row gap-4 mb-12">
      <!-- ------------ -->
      <div class="w-full md:w-50/100 xl:w-50/100">
        <ul class="flex flex-col py-2">
            @foreach ($data1 as $data )
            <li class="border" x-data="accordion({{$data->id}})">
                <h2
                  @click="handleClick()"
                  class="flex flex-row font-semibold p-3 cursor-pointer gap-4"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    class="fill-current text-primary h-7 w-7 transform transition-transform duration-500 inline"
                  >
                    <path
                      x-show="!handleRotate()"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M12 6v6m0 0v6m0-6h6m-6 0H6"
                    />
                    <path
                      x-show="handleRotate()"
                      stroke-linecap="round"
                      stroke-linejoin="circular"
                      stroke-width="2"
                      d="M6 12h12"
                    />
                  </svg>
    
                  <span class="text-primary font-oswald text-lg md:text-xl"
                    >{{$data->faqtitle}}?</span
                  >
                </h2>
                <div
                  x-ref="tab"
                  :style="handleToggle()"
                  class="overflow-hidden max-h-0 duration-500 transition-all"
                >
                  <p class="p-3 text-stone-500 border-t">
                    {!!$data->faqdescription!!}
                  </p>
                </div>
              </li> 
            @endforeach
        </ul>
      </div>
      <!-- ----------- -->
      <div class="w-full md:w-full xl:w-50/100">
        <ul class="flex flex-col py-2">
            @foreach ($data2 as $data )
            <li class="border" x-data="accordion({{$data->id}})">
                <h2
                  @click="handleClick()"
                  class="flex flex-row font-semibold p-3 cursor-pointer gap-4"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    class="fill-current text-primary h-7 w-7 transform transition-transform duration-500 inline"
                  >
                    <path
                      x-show="!handleRotate()"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M12 6v6m0 0v6m0-6h6m-6 0H6"
                    />
                    <path
                      x-show="handleRotate()"
                      stroke-linecap="round"
                      stroke-linejoin="circular"
                      stroke-width="2"
                      d="M6 12h12"
                    />
                  </svg>
    
                  <span class="text-primary font-oswald text-lg md:text-xl"
                    >{{$data->faqtitle}}?</span
                  >
                </h2>
                <div
                  x-ref="tab"
                  :style="handleToggle()"
                  class="overflow-hidden max-h-0 duration-500 transition-all"
                >
                  <p class="p-3 text-stone-500 border-t">
                    {!!$data->faqdescription!!}
                  </p>
                </div>
              </li> 
            @endforeach
        </ul>
      </div>
    </div>
  </div>
  @push('scripts')
        @once
       <!-- faq js -->
    <script>
        document.addEventListener("alpine:init", () => {
          Alpine.store("accordion", {
            tab: 0,
          });
  
          Alpine.data("accordion", (idx) => ({
            init() {
              this.idx = idx;
            },
            idx: -1,
            handleClick() {
              this.$store.accordion.tab =
                this.$store.accordion.tab === this.idx ? 0 : this.idx;
            },
            handleRotate() {
              return this.$store.accordion.tab === this.idx ? "rotate-180" : "";
            },
            handleToggle() {
              return this.$store.accordion.tab === this.idx
                ? `max-height: ${this.$refs.tab.scrollHeight}px`
                : "";
            },
          }));
        });
      </script>
        @endonce
@endpush
@endsection

