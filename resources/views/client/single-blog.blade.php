@extends('layouts.client.app')
@section('page-title') || Blog @endsection
@section('contents')

  <!-- Main Contents -->
  <!-- Matching fixed header margin -->
    <div class="h-20"></div>

    <!-- Main part of article -->
    <main>
      <article class="w-full flex flex-col items-center justify-center py-10">
        <div class="container">
          <div class="w-full flex flex-col lg:flex-row gap-10">
            <div class="w-full" id="content-container">
              <figure
                class="before:content-[''] before:pt-[100%] before:block relative group active-image"
              >
                <img
                  src="{{ asset($main_blog->image) }}"
                  alt="{{ $main_blog->title }}"
                  id="image"
                  class="w-full rounded-md absolute inset-0 h-full object-cover group-[.active-image]:block hidden"
                /> 
                {!! $main_blog->video_iframe !!}
              </figure>

              <div
                class="py-6 w-full flex flex-wrap items-center justify-center group"
              >
                <!-- Youtube Video and Image Showing Button -->
                @if (!empty($main_blog->video_iframe) && $main_blog->video_iframe != '#')
                  <div class="pr-6">
                    <div
                      class="rounded-md h-full flex items-center justify-center gap-6 group active-image"
                      id="content-changer-btn"
                    >
                      <a
                        id="image-btn"
                        href="#"
                        class="p-2 bg-white rounded-xl duration-500 group-[.active-image]:bg-primary group-[.active-image]:fill-white group-[.active-image]:drop-shadow-primary hover:bg-primary hover:fill-white hover:drop-shadow-primary fill-secondary shadow-[1px_4px_6px_3px_rgba(0,0,0,0.2)]"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                          width="26"
                          height="26"
                        >
                          <path
                            d="M480 416v16c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V176c0-26.5 21.5-48 48-48h16v48H54a6 6 0 0 0 -6 6v244a6 6 0 0 0 6 6h372a6 6 0 0 0 6-6v-10h48zm42-336H150a6 6 0 0 0 -6 6v244a6 6 0 0 0 6 6h372a6 6 0 0 0 6-6V86a6 6 0 0 0 -6-6zm6-48c26.5 0 48 21.5 48 48v256c0 26.5-21.5 48-48 48H144c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h384zM264 144c0 22.1-17.9 40-40 40s-40-17.9-40-40 17.9-40 40-40 40 17.9 40 40zm-72 96l39.5-39.5c4.7-4.7 12.3-4.7 17 0L288 240l103.5-103.5c4.7-4.7 12.3-4.7 17 0L480 208v80H192v-48z"
                          /></svg
                      ></a>
                      <a
                        id="video-btn"
                        href="#"
                        class="p-2 bg-white rounded-xl duration-500 group-[.active-video]:bg-primary group-[.active-video]:fill-white group-[.active-video]:drop-shadow-primary hover:bg-primary hover:fill-white hover:drop-shadow-primary fill-secondary shadow-[1px_4px_6px_3px_rgba(0,0,0,0.2)]"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 576 512"
                          width="26"
                          height="26"
                        >
                          <path
                            d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"
                          /></svg
                      ></a>
                    </div>
                  </div>
                @endif

                <!-- Active Image 1 -->
                @foreach (json_decode($main_blog->images) as $image)
                  <div class="blog-images w-20/100 p-2 border-0 border-solid border-primary rounded-md cursor-pointer">
                    <figure class="before:content-[''] before:pt-[100%] before:block relative">
                      <img
                        src="{{ asset($image) }}"
                        alt="{{ $main_blog->title }}"
                        class="w-full rounded-md absolute inset-0 h-full object-cover"
                      />
                    </figure>
                  </div> 
                @endforeach
              </div>
            </div>
            <div class="w-full py-6">
              <h1
                class="text-3xl font-semibold text-primary font-oswald capitalize"
              >
                {{ $main_blog->title }}
              </h1>
              <div class="text-lg py-10 text-justify">
                {!!  $main_blog->description  !!}
              </div>

              <!-- Tags -->
              <ul class="flex flex-wrap items-center justify-end gap-3 w-full py-4 border-solid border-t border-slate-300">
                
                @foreach (explode(",", $main_blog->tags) as $tag)
                  <li class="px-3 text-slate-100 capitalize py-0.5 text-sm font-bold bg-primary rounded-full">{{ $tag }}</li> 
                @endforeach
              </ul>
            </div>
          </div>

          <!-- Blog poster and simple timer -->
          <div class="pt-6 flex w-full items-center justify-between flex-col md:flex-row gap-6">
            @if ($main_blog->author) 
              <div class="flex gap-3 w-full items-start justify-start">
                <a href="#" class="text-primary fill-primary duration-300 hover:fill-primary hover:drop-shadow-primary italic"><svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 640 512"
                    width="18"
                    height="18"
                  >
                    <path
                      d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h274.9c-2.4-6.8-3.4-14-2.6-21.3l6.8-60.9 1.2-11.1 7.9-7.9 77.3-77.3c-24.5-27.7-60-45.5-99.9-45.5zm45.3 145.3l-6.8 61c-1.1 10.2 7.5 18.8 17.6 17.6l60.9-6.8 137.9-137.9-71.7-71.7-137.9 137.8zM633 268.9L595.1 231c-9.3-9.3-24.5-9.3-33.8 0l-37.8 37.8-4.1 4.1 71.8 71.7 41.8-41.8c9.3-9.4 9.3-24.5 0-33.9z"
                    /></svg
                ></a>
                <p class="font-semibold font-mono text-sm tracking-wider italic text-primary capitalize">
                  {{ $main_blog->author }}
                </p>
              </div>
            @endif
            <div class="flex gap-3 w-full items-end justify-end">
              <a
                href="#"
                class="text-secondary fill-secondary duration-300 hover:fill-primary hover:drop-shadow-primary italic"
                ><svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"
                  width="16"
                  height="16"
                >
                  <path
                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"
                  /></svg
              ></a>

                <p id="time" time="{{ $main_blog->updated_at }}" class="font-semibold font-mono text-sm tracking-wider italic text-slate-500"></p>
                
            </div>
          </div>
          <hr class="mb-10 mt-2 w-full h-px bg-slate-300" />

          <!-- Related Blog Image Card -->
          <h3
            class="text-3xl font-medium font-oswald tracking-wider capitalize text-secondary"
          >
            Recent New Blogs:
          </h3>
          <hr class="mb-6 mt-2 w-full h-px bg-slate-300" />

          <div class="flex flex-wrap gap-[5%] w-full py-10">
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
      </article>
      <!-- Article of blog main -->
    </main>

    <script>
      const contentContainer = document.getElementById("content-container");
      const contentChangerBtn = document.getElementById("content-changer-btn");
      const blogImages = document.querySelectorAll(".blog-images");

      const time = document.getElementById("time");
      time.textContent = window.localTime(time.getAttribute("time")) 

      // Change the video and image on the blog container
      function ContentChanger() {
        contentChangerBtn
          .querySelector("#video-btn")
          .addEventListener("click", function () {
            contentChangerBtn.classList.add("active-video");
            contentChangerBtn.classList.remove("active-image");

            contentContainer
              .querySelector("figure")
              .classList.add("active-video");
            contentContainer
              .querySelector("figure")
              .classList.remove("active-image");
          });

        contentChangerBtn
          .querySelector("#image-btn")
          .addEventListener("click", function () {
            contentChangerBtn.classList.remove("active-video");
            contentChangerBtn.classList.add("active-image");

            contentContainer
              .querySelector("figure")
              .classList.remove("active-video");
            contentContainer
              .querySelector("figure")
              .classList.add("active-image");
          });
      }

      // change the images and Showing
      function ImageChanger() {
        blogImages.forEach(function (blogImage) {
          blogImage.addEventListener("click", function (event) {
            blogImages.forEach((blogImage) =>
              blogImage.classList.remove("border-4")
            );
            blogImage.classList.add("border-4");

            // Change the image
            contentContainer.querySelector("figure img").src =
              blogImage.querySelector("img").src;
          });
        });
      }

      ImageChanger();
      ContentChanger();
    </script>
@endsection

