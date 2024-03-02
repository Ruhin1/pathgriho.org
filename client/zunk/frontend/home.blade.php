<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pathgriho</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,900&family=Roboto+Mono:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,700&display=swap"
      rel="stylesheet"
    />

    <!--- favicon-->
    <link rel="icon" href="{{asset('/assets/images/favicon.ico')}}" type="image/x-icon" />

    <!-- Tailwind Css -->
    {{-- <link rel="stylesheet" href="./index.css" /> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
      .group.groupchild.active-child-nav {
        --tw-bg-opacity: 1;
        background-color: rgb(13 56 150 / var(--tw-bg-opacity));
      }
    </style>

    <!-- jQuery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery-compat/3.0.0-alpha1/jquery.min.js"
      integrity="sha512-4GsgvzFFry8SXj8c/VcCjjEZ+du9RZp/627AEQRVLatx6d60AUnUYXg0lGn538p44cgRs5E2GXq+8IOetJ+6ow=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
  </head>

  <body class="font-poppins w-full">
    <!-- Header Section -->
    <section>
      <!-- Navigation/Navbar -->
      <nav
        class="fixed top-0 left-0 bg-slate-200 px-2.5 w-full text-slate-700 z-40"
      >
        <div class="container w-full flex items-center justify-between">
          <!-- Logo Image -->
          <a href="./index.html" class="block">
            <img
              src="{{asset('/assets/images/logo.png')}}"
              alt="Logo"
              class="w-24 sm:w-32 h-20"
            />
          </a>

          <!-- Navigation List -->
          <ul
            id="top-navigation-list"
            class="hidden 2xl:flex flex-col 2xl:flex-row gap-6 h-20 px-10 pb-10 pt-32 2xl:p-0 items-start 2xl:items-center 2xl:justify-center 2xl:bg-transparent 2xl:static 2xl:w-auto w-full bg-slate-100 absolute z-50 left-0 top-20 min-h-[70vh] 2xl:min-h-auto overflow-y-auto 2xl:!overflow-visible"
          >
            <!-- Who We Are -->
            <script type="module">
              import {
                navMenus,
                arrowChildSvg,
                arrowSvg,
              } from "{{asset('js/header.js')}}";

              document.getElementById("top-navigation-list").innerHTML =
                navMenus
                  .map(
                    (menus) => `
                    <li class="group relative 2xl:h-full flex items-start gap-4 2xl:gap-0 2xl:items-center justify-center" onclick="childMenu(event)">
                      <a class="font-medium capitalize text-lg font-oswald text-slate-600 group-hover:drop-shadow-primary group-hover:text-primary group-[.active-nav]:text-primary group-[.active-nav]:drop-shadow-primary flex gap-1 items-center group-hover:items-end justify-center duration-500"
                        href="#">
                        <span class="capitalize">${menus.name}</span>

                        ${menus.child.length ? arrowSvg : ""}
                        
                      </a>

                      <!-- Child Menus -->

                      <ul class="hidden group-[.active-nav]:block group-hover:block 2xl:absolute top-20 left-0 font-oswald bg-primary text-slate-200 text-sm font-medium">
                         
                        ${menus.child
                          .map(
                            (childMenus) =>
                              `<li class="duration-300 relative px-6 py-3 hover:bg-secondary group groupchild" >
                                <a class="font-medium capitalize text-md font-oswald text-slate-100 flex gap-1 items-start justify-start duration-500 groupchild group-[child.active-nav]:bg-secondary"
                                  href="${childMenus.href}">
                                  <span class="capitalize text-sm text-nowrap">${
                                    childMenus.name
                                  }</span>
                                  
                                   ${
                                     childMenus.children.length
                                       ? arrowChildSvg
                                       : ""
                                   }
                                </a>

                                <!-- Children -->
                                <ul
                                  class="hidden group-[child.active-child-nav]:block group-[child:hover]:block 2xl:absolute top-0 left-32 m-3 2xl:my-0 2xl:mr-0 2xl:ml-3.5 font-oswald bg-primary text-slate-200 text-sm font-medium"
                                >
                                  ${childMenus.children
                                    .map(
                                      (childrenMenus) => `
                                      <li class="duration-300">
                                        <a
                                          href="${childrenMenus.href}"
                                          class="h-full block text-nowrap px-6 py-3 duration-500 hover:bg-secondary hover:text-slate-100"
                                          >${childrenMenus.name}</a
                                        >
                                      </li>`
                                    )
                                    .join("")} 
                                </ul>
                              </li>`
                          )
                          .join("")}
                         
                      </ul>
                    </li>
              `
                  )
                  .join("");
            </script>
          </ul>

          <!-- Actions Button & Search Bar -->
          <div class="flex gap-6 group 2xl:relative" id="active-search">
            <button
              role="button"
              type="button"
              class="fill-slate-700 duration-500 hover:fill-primary hover:drop-shadow-primary group-[.active-search]:fill-primary group-[.active-search]:drop-shadow-primary p-2 rounded text-center hidden 2xl:block"
            >
              <!-- Search Svg -->
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"
                width="26"
                height="26"
              >
                <path
                  d="M304 192v32c0 6.6-5.4 12-12 12h-56v56c0 6.6-5.4 12-12 12h-32c-6.6 0-12-5.4-12-12v-56h-56c-6.6 0-12-5.4-12-12v-32c0-6.6 5.4-12 12-12h56v-56c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v56h56c6.6 0 12 5.4 12 12zm201 284.7L476.7 505c-9.4 9.4-24.6 9.4-33.9 0L343 405.3c-4.5-4.5-7-10.6-7-17V372c-35.3 27.6-79.7 44-128 44C93.1 416 0 322.9 0 208S93.1 0 208 0s208 93.1 208 208c0 48.3-16.4 92.7-44 128h16.3c6.4 0 12.5 2.5 17 7l99.7 99.7c9.3 9.4 9.3 24.6 0 34zM344 208c0-75.2-60.8-136-136-136S72 132.8 72 208s60.8 136 136 136 136-60.8 136-136z"
                />
              </svg>
            </button>

            <form
              class="search absolute 2xl:-left-10 2xl:top-14 mt-1 top-24 left-10 z-50 p-4 bg-primary hidden items-center justify-center gap-4 2xl:hidden group-[.active-search]:flex"
            >
              <input
                type="search"
                class="text-lg font-mono w-full text-secondary bg-slate-100 px-6 py-2 border-none outline-none focus:bg-slate-200 md:min-w-72"
                placeholder="Search here... "
              />
              <button
                role="button"
                type="submit"
                class="fill-slate-200 bg-secondary p-2 rounded shadow-primary-deep border-secondary border border-solid text-center"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"
                  width="26"
                  height="26"
                >
                  <path
                    d="M304 192v32c0 6.6-5.4 12-12 12h-56v56c0 6.6-5.4 12-12 12h-32c-6.6 0-12-5.4-12-12v-56h-56c-6.6 0-12-5.4-12-12v-32c0-6.6 5.4-12 12-12h56v-56c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v56h56c6.6 0 12 5.4 12 12zm201 284.7L476.7 505c-9.4 9.4-24.6 9.4-33.9 0L343 405.3c-4.5-4.5-7-10.6-7-17V372c-35.3 27.6-79.7 44-128 44C93.1 416 0 322.9 0 208S93.1 0 208 0s208 93.1 208 208c0 48.3-16.4 92.7-44 128h16.3c6.4 0 12.5 2.5 17 7l99.7 99.7c9.3 9.4 9.3 24.6 0 34zM344 208c0-75.2-60.8-136-136-136S72 132.8 72 208s60.8 136 136 136 136-60.8 136-136z"
                  />
                </svg>
              </button>
            </form>

            <button
              class="px-7 pt-1.5 pb-2 text-md font-oswald bg-primary text-slate-200 text-center rounded-full capitalize duration-500 hover:drop-shadow-primary hover:bg-secondary"
            >
              <span class="hidden sm:block">Donate Now</span>
              <span class="sm:hidden block fill-slate-100">
                <!-- Umbrella svg -->
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="26"
                  height="26"
                  viewBox="0 0 576 512"
                >
                  <path
                    d="M575.7 280.8C547.1 144.5 437.3 62.6 320 49.9V32c0-17.7-14.3-32-32-32s-32 14.3-32 32v17.9C138.3 62.6 29.5 144.5 .3 280.8c-2.2 10.1 8.5 21.3 18.7 11.4 52-55 107.7-52.4 158.6 37 5.3 9.5 14.9 8.6 19.7 0 20.2-35.4 44.9-73.2 90.7-73.2 58.5 0 88.2 68.8 90.7 73.2 4.8 8.6 14.4 9.5 19.7 0 51-89.5 107.1-91.4 158.6-37 10.3 10 20.9-1.3 18.7-11.4zM256 301.7V432c0 8.8-7.2 16-16 16-7.8 0-13.2-5.3-15.1-10.7-5.9-16.7-24.1-25.4-40.8-19.5-16.7 5.9-25.4 24.2-19.5 40.8 11.2 31.9 41.6 53.3 75.4 53.3 44.1 0 80-35.9 80-80V301.6c-9.1-7.9-19.8-13.6-32-13.6-12.3 .1-22.4 4.8-32 13.7z"
                  />
                </svg>
              </span>
            </button>

            <!-- Mobile Menu Icon -->
            <button
              id="mobile-menu-btn"
              class="fill-slate-100 duration-500 bg-primary hover:drop-shadow-primary p-2 rounded text-center 2xl:hidden block"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="26"
                height="26"
                viewBox="0 0 192 512"
              >
                <path
                  d="M96 184c39.8 0 72 32.2 72 72s-32.2 72-72 72-72-32.2-72-72 32.2-72 72-72zM24 80c0 39.8 32.2 72 72 72s72-32.2 72-72S135.8 8 96 8 24 40.2 24 80zm0 352c0 39.8 32.2 72 72 72s72-32.2 72-72-32.2-72-72-72-72 32.2-72 72z"
                />
              </svg>
            </button>
          </div>
        </div>
      </nav>
    </section>

    <!-- Header Banner -->
    <section>
      <div class="carousel w-full mt-20">
        <div class="owl-carousel">
          <figure
            class="before:content-[''] before:pt-[65%] lg:before:pt-[42%] before:block relative"
          >
            <img
              src="{{asset('/assets/images/main-banner.jpg')}}"
              alt="Middle Banner"
              class="w-full rounded-md absolute inset-0 h-full object-cover"
            />
          </figure>
          <figure
            class="before:content-[''] before:pt-[65%] lg:before:pt-[42%] before:block relative"
          >
            <img
              src="{{asset('/assets/images/banner-1.jpg')}}"
              alt="Middle Banner"
              class="w-full rounded-md absolute inset-0 h-full object-cover"
            />
          </figure>
          <figure
            class="before:content-[''] before:pt-[65%] lg:before:pt-[42%] before:block relative"
          >
            <img
              src="{{asset('/assets/images/banner-4.jpg')}}"
              alt="Middle Banner"
              class="w-full rounded-md absolute inset-0 h-full object-cover"
            />
          </figure>
          <figure
            class="before:content-[''] before:pt-[65%] lg:before:pt-[42%] before:block relative"
          >
            <img
              src="{{asset('/assets/images/sponsor-3.jpg')}}"
              alt="Middle Banner"
              class="w-full rounded-md absolute inset-0 h-full object-cover"
            />
          </figure>
        </div>
      </div>
    </section>

    <!-- Main Contents -->
    <main class="w-full bg-slate-100 flex flex-col items-center justify-center">
      <!-- First Image Container -->
      <article
        class="bg-[url('/assets/images/banner-bg.png')] bg-cover w-full pt-20 pb-80 relative z-10 -mt-16 bg-transparent"
      >
        <!-- Image Card Container for banner -->
        <div class="container flex flex-wrap gap-[5%] w-full py-10">
          <!-- Card 1 -->
          <div
            class="lg:w-30/100 w-full border border-solid border-slate-200 rounded-[50px]"
          >
            <figure
              class="before:content-[''] before:pt-[65%] before:block relative"
            >
              <img
                src="/assets/images/sponsor-1.webp"
                alt="Middle Banner"
                class="w-full rounded-md absolute inset-0 h-full object-cover"
              />
            </figure>

            <div class="w-full bg-white p-4 text-justify font-oswald">
              <h3 class="p-2 text-2xl font-semibold text-primary capitalize">
                sponsor a child
              </h3>
              <p class="text-md text-justify tracking-wide p-2.5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                quis odio nobis harum iusto magnam tempora? Eligendi ipsa
                voluptatibus quaerat odio harum eveniet iusto soluta eos
                quibusdam, id libero at.
              </p>
              <a
                href="#"
                class="w-full text-center pt-2.5 flex items-center justify-center"
              >
                <button
                  class="font-bold text-xl capitalize text-slate-200 px-8 duration-500 hover:tracking-wide pt-2 pb-2.5 rounded-full bg-primary shadow-primary-deep"
                >
                  sponsor now
                </button>
              </a>
            </div>
          </div>

          <!-- Card 2 -->
          <div
            class="lg:w-30/100 w- w-full border border-solid border-slate-200 rounded-[50px]"
          >
            <figure
              class="before:content-[''] before:pt-[65%] before:block relative"
            >
              <img
                src="/assets/images/sponsor-2.webp"
                alt="Middle Banner"
                class="w-full rounded-md absolute inset-0 h-full object-cover"
              />
            </figure>

            <div class="w-full bg-white p-4 text-justify font-oswald">
              <h3 class="p-2 text-2xl font-semibold text-primary capitalize">
                sponsor a child
              </h3>
              <p class="text-md text-justify tracking-wide p-2.5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                quis odio nobis harum iusto magnam tempora? Eligendi ipsa
                voluptatibus quaerat odio harum eveniet iusto soluta eos
                quibusdam, id libero at.
              </p>
              <a
                href="#"
                class="w-full text-center pt-2.5 flex items-center justify-center"
              >
                <button
                  class="font-bold text-xl capitalize text-slate-200 px-8 duration-500 hover:tracking-wide pt-2 pb-2.5 rounded-full bg-primary shadow-primary-deep"
                >
                  sponsor now
                </button>
              </a>
            </div>
          </div>

          <!-- Card 3 -->
          <div
            class="lg:w-30/100 w-full border border-solid border-slate-200 rounded-[50px]"
          >
            <figure
              class="before:content-[''] before:pt-[65%] before:block relative"
            >
              <img
                src="/assets/images/sponsor-3.jpg"
                alt="Middle Banner"
                class="w-full rounded-md absolute inset-0 h-full object-cover"
              />
            </figure>

            <div class="w-full bg-white p-4 text-justify font-oswald">
              <h3 class="p-2 text-2xl font-semibold text-primary capitalize">
                sponsor a child
              </h3>
              <p class="text-md text-justify tracking-wide p-2.5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                quis odio nobis harum iusto magnam tempora? Eligendi ipsa
                voluptatibus quaerat odio harum eveniet iusto soluta eos
                quibusdam, id libero at.
              </p>
              <a
                href="#"
                class="w-full text-center pt-2.5 flex items-center justify-center"
              >
                <button
                  class="font-bold text-xl capitalize text-slate-200 px-8 duration-500 hover:tracking-wide pt-2 pb-2.5 rounded-full bg-primary shadow-primary-deep"
                >
                  sponsor now
                </button>
              </a>
            </div>
          </div>
        </div>
      </article>

      <!-- Mission/Vision Block -->
      <article
        class="bg-[url('/assets/images/banner-1.jpg')] bg-cover w-full pt-20 pb-0 relative z-10 before:content-[''] before:top-0 before:left-0 before:z-10 before:w-full before:h-full before:bg-slate-900 before:absolute before:opacity-70"
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
                src="/assets/images/man-1.jpg"
                alt="Middle Banner"
                class="w-full rounded-md absolute inset-0 h-full object-cover"
              />
            </figure>
            <div
              class="bg-slate-100 w-full flex items-center justify-center p-0 lg:p-10"
            >
              <div class="w-full bg-slate-100 p-4 text-justify font-oswald">
                <h3 class="p-2 text-2xl font-semibold text-primary capitalize">
                  sponsor a child
                </h3>
                <p
                  class="py-4 lg:py-10 text-lg text-justify font-poppins font-medium tracking-wide p-2.5"
                >
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                  quis odio nobis harum iusto magnam tempora? Eligendi ipsa
                  voluptatibus quaerat odio harum eveniet iusto soluta eos
                  quibusdam, id libero at. Lorem ipsum dolor sit amet
                  consectetur adipisicing elit. Tempora architecto quia neque
                  esse alias aperiam possimus unde fugit asperiores, volutes
                  odio, consequatur desert assumenda aspernatur debitis modi
                  nulla, ipsam maxime. Possimus, saepe fugiat recusandae alias
                  ex sapiente ipsam vel tempore itaque, nobis velit, impedit
                  reiciendis. Eum, error dolores. Quidem deserunt numquam
                  cupiditate unde placeat consequatur nostrum reprehenderit
                  beatae expedita tempore. Veniam ipsam nemo, sapiente dolor
                  doloribus optio dicta id, rem itaque illum error excepturi,
                </p>
                <a href="#" class="w-full text-center pt-2.5">
                  <button
                    class="font-bold text-xl capitalize text-slate-200 px-8 duration-500 hover:tracking-wide pt-2 pb-2.5 rounded-full bg-primary shadow-primary-deep"
                  >
                    sponsor now
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
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci,
            sequi illum consequatur iusto quas, et perferendis maxime.
          </h1>
          <p
            class="text-lg leading-6 py-6 text-center font-poppins text-slate-100"
          >
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero
            nulla quidem obcaecati quisquam. Corrupti, omnis quo quos cupiditate
            illum eos suscipit perspiciatis velit ipsum, in laudantium
            laboriosam nobis. Sunt, inventore?Lorem ipsum, dolor sit amet
            consectetur adipisicing elit. Sapiente, adipisci beatae amet
            laudantium libero maxime illo molestias, facere, obcaecati cum quae?
            Dolorum sit animi rerum labore quaerat officiis pariatur tenetur!
          </p>
          <h1
            class="py-4 text-5xl sm:text-9xl font-bold font-oswald text-slate-100 text-center"
          >
            50,000
          </h1>
          <p
            class="text-xl font-oswald font-semibold tracking-wider text-center text-slate-300"
          >
            Sitll now, Voulenteers in worldwide.
          </p>
          <a href="#" class="w-full text-center block pt-2.5 mt-10">
            <button
              class="font-medium font-oswald text-2xl capitalize text-slate-200 px-12 duration-500 hover:tracking-wide pt-4 pb-5 rounded-full bg-primary shadow-primary-deep"
            >
              konw more about ourself
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
            Who we are?
          </h1>
          <p
            class="text-lg font-normal text-slate-200 tracking-wide leading-[1.78rem] text-justify max-h-60 py-2 overflow-hidden"
          >
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
            labore ipsum voluptas corporis debitis fugiat eligendi. Lorem ipsum
            dolor sit amet consectetur, adipisicing elit. Eum odio ducimus sequi
            magnam! Nemo, quaerat quibusdam! Aut nostrum numquam consequatur
            deleniti maiores sit quis, laboriosam esse odit dolore quod
            doloremque? Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Esse facilis qui, nobis deserunt, cum illo architecto libero tempora
            commodi vero fuga consequatur eum sed! Quidem distinctio voluptatem
            vero ipsum nobis!inventore? Lorem ipsum, dolor sit amet consectetur
            adipisicing elit. Facilis nobis, quis voluptatibus laborum
            consequuntur deserunt quod similique odit, nostrum voluptatum autem
            enim placeat. Atque tempora fuga et error beatae placeat.
          </p>
          <a
            href="#"
            class="w-full text-center flex items-center justify-center"
          >
            <button
              class="font-bold text-xl capitalize text-slate-200 px-8 duration-500 hover:tracking-wide pt-2 pb-2.5 rounded-full bg-secondary shadow-primary-deep"
            >
              sponsor now
            </button>
          </a>
          <!-- </div> -->
        </div>

        <div class="w-full xl:w-80/100">
          <div class="flex flex-wrap w-full items-center justify-center">
            <div class="w-full sm:w-50/100 lg:w-25/100">
              <figure
                class="before:content-[''] before:pt-[100%] before:block relative"
              >
                <img
                  src="/assets/images/banner-1.jpg"
                  alt="Middle Banner"
                  class="w-full absolute inset-0 h-full object-cover"
                />
              </figure>
            </div>
            <div class="w-full sm:w-50/100 lg:w-25/100">
              <figure
                class="before:content-[''] before:pt-[100%] before:block relative"
              >
                <img
                  src="/assets/images/banner-2.jpg"
                  alt="Middle Banner"
                  class="w-full absolute inset-0 h-full object-cover"
                />
              </figure>
            </div>
            <div class="w-full sm:w-50/100 lg:w-25/100">
              <figure
                class="before:content-[''] before:pt-[100%] before:block relative"
              >
                <img
                  src="/assets/images/banner-4.jpg"
                  alt="Middle Banner"
                  class="w-full absolute inset-0 h-full object-cover"
                />
              </figure>
            </div>
            <div class="w-full sm:w-50/100 lg:w-25/100">
              <figure
                class="before:content-[''] before:pt-[100%] before:block relative"
              >
                <img
                  src="/assets/images/sponsor-3.jpg"
                  alt="Middle Banner"
                  class="w-full absolute inset-0 h-full object-cover"
                />
              </figure>
            </div>
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
              Give a Little. Change a Lot.
            </h1>
            <p class="text-3xl font-medium text-center leading-10 font-poppins">
              Recent Causes
            </p>
          </div>

          <!-- Image Card Container for Causes Section -->
          <div class="flex flex-wrap gap-[5%] w-full py-10">
            <!-- Card 1 -->
            <div
              class="sm:w-45/100 lg:w-30/100 w-full border border-solid border-slate-200 rounded-[50px] mb-2"
            >
              <div class="w-full bg-white p-4 text-justify font-oswald">
                <h3
                  class="p-2 text-3xl font-semibold text-primary capitalize text-center flex flex-col items-center justify-center"
                >
                  <p>sponsor a child</p>
                  <p class="w-40 h-1 rounded-full my-4 bg-primary"></p>
                </h3>
                <p class="text-md text-justify tracking-wide p-2.5">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                  quis odio nobis harum iusto magnam tempora? Eligendi ipsa
                  voluptatibus quaerat odio harum eveniet iusto soluta eos
                  quibusdam, id libero at.
                </p>
              </div>
              <figure
                class="before:content-[''] before:pt-[65%] before:block relative"
              >
                <img
                  src="/assets/images/sponsor-1.webp"
                  alt="Middle Banner"
                  class="w-full rounded-md absolute inset-0 h-full object-cover"
                />
              </figure>

              <div class="w-full bg-white pb-4 text-justify font-oswald">
                <a
                  href="#"
                  class="w-full text-center pt-2.5 flex items-center justify-center"
                >
                  <button
                    class="font-bold text-xl capitalize text-slate-200 px-8 duration-500 hover:tracking-wide pt-2 pb-2.5 rounded-full bg-primary shadow-primary-deep"
                  >
                    sponsor now
                  </button>
                </a>
              </div>
            </div>

            <!-- Card 2 -->
            <div
              class="sm:w-45/100 lg:w-30/100 w-full border border-solid border-slate-200 rounded-[50px] mb-2"
            >
              <div class="w-full bg-white p-4 text-justify font-oswald">
                <h3
                  class="p-2 text-3xl font-semibold text-primary capitalize text-center flex flex-col items-center justify-center"
                >
                  <p>sponsor a child</p>
                  <p class="w-40 h-1 rounded-full my-4 bg-primary"></p>
                </h3>
                <p class="text-md text-justify tracking-wide p-2.5">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                  quis odio nobis harum iusto magnam tempora? Eligendi ipsa
                  voluptatibus quaerat odio harum eveniet iusto soluta eos
                  quibusdam, id libero at.
                </p>
              </div>
              <figure
                class="before:content-[''] before:pt-[65%] before:block relative"
              >
                <img
                  src="/assets/images/sponsor-2.webp"
                  alt="Middle Banner"
                  class="w-full rounded-md absolute inset-0 h-full object-cover"
                />
              </figure>

              <div class="w-full bg-white pb-4 text-justify font-oswald">
                <a
                  href="#"
                  class="w-full text-center pt-2.5 flex items-center justify-center"
                >
                  <button
                    class="font-bold text-xl capitalize text-slate-200 px-8 duration-500 hover:tracking-wide pt-2 pb-2.5 rounded-full bg-primary shadow-primary-deep"
                  >
                    sponsor now
                  </button>
                </a>
              </div>
            </div>

            <!-- Card 3 -->
            <div
              class="sm:w-45/100 lg:w-30/100 w-full border border-solid border-slate-200 rounded-[50px] mb-2"
            >
              <div class="w-full bg-white p-4 text-justify font-oswald">
                <h3
                  class="p-2 text-3xl font-semibold text-primary capitalize text-center flex flex-col items-center justify-center"
                >
                  <p>sponsor a child</p>
                  <p class="w-40 h-1 rounded-full my-4 bg-primary"></p>
                </h3>
                <p class="text-md text-justify tracking-wide p-2.5">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                  quis odio nobis harum iusto magnam tempora? Eligendi ipsa
                  voluptatibus quaerat odio harum eveniet iusto soluta eos
                  quibusdam, id libero at.
                </p>
              </div>
              <figure
                class="before:content-[''] before:pt-[65%] before:block relative"
              >
                <img
                  src="/assets/images/sponsor-3.jpg"
                  alt="Middle Banner"
                  class="w-full rounded-md absolute inset-0 h-full object-cover"
                />
              </figure>

              <div class="w-full bg-white pb-4 text-justify font-oswald">
                <a
                  href="#"
                  class="w-full text-center pt-2.5 flex items-center justify-center"
                >
                  <button
                    class="font-bold text-xl capitalize text-slate-200 px-8 duration-500 hover:tracking-wide pt-2 pb-2.5 rounded-full bg-primary shadow-primary-deep"
                  >
                    sponsor now
                  </button>
                </a>
              </div>
            </div>
          </div>

          <div class="w-full bg-transparent pb-4 text-justify font-oswald">
            <a
              href="#"
              class="w-full text-center pt-2.5 flex items-center justify-center"
            >
              <button
                class="font-bold text-2xl capitalize text-slate-200 px-12 duration-500 hover:tracking-wide pt-3 pb-3.5 rounded-full bg-primary shadow-primary-deep"
              >
                sponsor now as a outside
              </button>
            </a>
          </div>
        </div>
      </article>

      <!-- Secondary Block -->
      <article
        class="bg-[url('/assets/images/banner-4.jpg')] bg-cover w-full pt-20 pb-28 relative z-10 before:content-[''] before:top-0 before:left-0 before:z-10 before:w-full before:h-full before:bg-slate-900 before:absolute before:opacity-70"
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
              DO YOU WANT TO WORK FOR THE UNDERPRIVILEGED COMMUNITIES AND CHANGE
              THEIR LIVES?
            </h1>
            <div class="pb-10">
              <a
                href="#"
                class="text-center text-2xl font-bold font-oswald underline duration-500 hover:tracking-wider text-slate-100"
                >Become a Voulenteer.</a
              >
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
                Sitll now, Voulenteers in worldwide.
              </p>

              <h1
                class="py-4 text-4xl font-bold font-oswald text-primary text-center"
              >
                50,000
              </h1>
            </div>
            <div class="w-full sm:w-25/100">
              <p
                class="text-xl font-oswald font-semibold tracking-wider text-center text-slate-300"
              >
                Sitll now, Voulenteers in worldwide.
              </p>

              <h1
                class="py-4 text-4xl font-bold font-oswald text-primary text-center"
              >
                1000
              </h1>
            </div>
            <div class="w-full sm:w-25/100">
              <p
                class="text-xl font-oswald font-semibold tracking-wider text-center text-slate-300"
              >
                Sitll now, Voulenteers in worldwide.
              </p>

              <h1
                class="py-4 text-4xl font-bold font-oswald text-primary text-center"
              >
                535+
              </h1>
            </div>
          </div>
          <a href="#" class="w-full text-center block pt-2.5 mt-20">
            <button
              class="font-medium font-oswald text-2xl capitalize text-slate-200 px-12 duration-500 hover:tracking-wide pt-4 pb-5 rounded-full bg-primary shadow-primary-deep"
            >
              konw more about ourself
            </button>
          </a>
        </div>
      </article>

      <!-- Footer banner Image card -->
      <article
        class="bg-[url('/assets/images/banner-bg.png')] bg-cover w-full py-20 relative z-10 -mt-24 bg-transparent"
      >
        <!-- Image Card Container for Social working -->
        <div class="container">
          <div class="w-full mt-6 py-12">
            <h1
              class="text-4xl font-oswald font-semibold text-center text-primary"
            >
              Give a Little. Change a Lot.
            </h1>
            <p class="text-6xl font-bold text-center pt-4 font-oswald">
              News & Articles
            </p>
          </div>

          <!-- Image Card Container for Causes Section -->
          <div class="flex flex-wrap gap-[3%] w-full py-10">
            <!-- Card 1 -->
            <div
              class="lg:w-30/100 w-full border border-solid border-slate-200 rounded-[50px] pb-8"
            >
              <figure
                class="before:content-[''] before:pt-[65%] before:block relative"
              >
                <img
                  src="/assets/images/sponsor-1.webp"
                  alt="Middle Banner"
                  class="w-full rounded-md absolute inset-0 h-full object-cover"
                />
              </figure>

              <div class="w-full bg-white pb-4 text-justify font-oswald">
                <p class="text-lg text-justify font-bold tracking-wide p-6">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                  quis odio nobis harum iusto magnam tempora? Eligendi ipsa
                  voluptatibus quaerat odio harum eveniet iusto soluta eos
                  quibusdam, id libero at.
                </p>
              </div>
            </div>

            <!-- Card 2 -->
            <div
              class="lg:w-30/100 w-full border border-solid border-slate-200 rounded-[50px] pb-8"
            >
              <figure
                class="before:content-[''] before:pt-[65%] before:block relative"
              >
                <img
                  src="/assets/images/sponsor-2.webp"
                  alt="Middle Banner"
                  class="w-full rounded-md absolute inset-0 h-full object-cover"
                />
              </figure>

              <div class="w-full bg-white pb-4 text-justify font-oswald">
                <p class="text-lg text-justify font-bold tracking-wide p-6">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                  quis odio nobis harum iusto magnam tempora? Eligendi ipsa
                  voluptatibus quaerat odio harum eveniet iusto soluta eos
                  quibusdam, id libero at.
                </p>
              </div>
            </div>

            <!-- Card 3 -->
            <div
              class="lg:w-30/100 w-full border border-solid border-slate-200 rounded-[50px] pb-8"
            >
              <figure
                class="before:content-[''] before:pt-[65%] before:block relative"
              >
                <img
                  src="/assets/images/sponsor-3.jpg"
                  alt="Middle Banner"
                  class="w-full rounded-md absolute inset-0 h-full object-cover"
                />
              </figure>

              <div class="w-full bg-white pb-4 text-justify font-oswald">
                <p class="text-lg text-justify font-bold tracking-wide p-6">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                  quis odio nobis harum iusto magnam tempora? Eligendi ipsa
                  voluptatibus quaerat odio harum eveniet iusto soluta eos
                  quibusdam, id libero at.
                </p>
              </div>
            </div>

            <!-- Card 3 -->
            <div
              class="lg:w-30/100 w-full border border-solid border-slate-200 rounded-[50px] pb-8"
            >
              <figure
                class="before:content-[''] before:pt-[65%] before:block relative"
              >
                <img
                  src="/assets/images/sponsor-1.webp"
                  alt="Middle Banner"
                  class="w-full rounded-md absolute inset-0 h-full object-cover"
                />
              </figure>

              <div class="w-full bg-white pb-4 text-justify font-oswald">
                <p class="text-lg text-justify font-bold tracking-wide p-6">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                  quis odio nobis harum iusto magnam tempora? Eligendi ipsa
                  voluptatibus quaerat odio harum eveniet iusto soluta eos
                  quibusdam, id libero at.
                </p>
              </div>
            </div>

            <!-- Card 4 -->
            <div
              class="lg:w-30/100 w-full border border-solid border-slate-200 rounded-[50px] pb-8"
            >
              <figure
                class="before:content-[''] before:pt-[65%] before:block relative"
              >
                <img
                  src="/assets/images/sponsor-2.webp"
                  alt="Middle Banner"
                  class="w-full rounded-md absolute inset-0 h-full object-cover"
                />
              </figure>

              <div class="w-full bg-white pb-4 text-justify font-oswald">
                <p class="text-lg text-justify font-bold tracking-wide p-6">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                  quis odio nobis harum iusto magnam tempora? Eligendi ipsa
                  voluptatibus quaerat odio harum eveniet iusto soluta eos
                  quibusdam, id libero at.
                </p>
              </div>
            </div>

            <!-- Card 6 -->
            <div
              class="lg:w-30/100 w-full border border-solid border-slate-200 rounded-[50px] pb-8"
            >
              <figure
                class="before:content-[''] before:pt-[65%] before:block relative"
              >
                <img
                  src="/assets/images/sponsor-3.jpg"
                  alt="Middle Banner"
                  class="w-full rounded-md absolute inset-0 h-full object-cover"
                />
              </figure>

              <div class="w-full bg-white pb-4 text-justify font-oswald">
                <p class="text-lg text-justify font-bold tracking-wide p-6">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                  quis odio nobis harum iusto magnam tempora? Eligendi ipsa
                  voluptatibus quaerat odio harum eveniet iusto soluta eos
                  quibusdam, id libero at.
                </p>
              </div>
            </div>
          </div>
        </div>
      </article>

      <!-- Facebook Plugin -->
      <!--  -->
    </main>

    <!-- Footer Areas -->
    <footer>
      <!-- Secondary Block -->
    </footer>

    

 
    <!-- Custom Scripts hidden -->
    <script type="module" src="{{asset('js/extends.js')}}"></script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <script>
      $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
          margin: 20,
          loop: true,
          autoplay: true,
          navigation: true,
          autoplayTimeout: 2000,
          autoplayHoverPause: true,
          responsive: {
            0: {
              items: 1,
              nav: false,
            },
            600: {
              items: 1,
              nav: false,
            },
            1000: {
              items: 1,
              nav: false,
            },
          },
        });

        $(".owl-nav").removeClass("disabled");
        $(".owl-dots").removeClass("disabled");
      });

      function childMenu(event) {
        const child = event.target.closest("li.groupchild");
        child.classList.toggle("active-child-nav");
      }
    </script>
  </body>
</html>
<!-- Done this -->
