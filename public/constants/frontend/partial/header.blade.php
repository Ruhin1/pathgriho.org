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