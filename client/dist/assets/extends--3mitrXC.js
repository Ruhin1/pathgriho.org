(function(){const e=document.createElement("link").relList;if(e&&e.supports&&e.supports("modulepreload"))return;for(const a of document.querySelectorAll('link[rel="modulepreload"]'))r(a);new MutationObserver(a=>{for(const o of a)if(o.type==="childList")for(const l of o.addedNodes)l.tagName==="LINK"&&l.rel==="modulepreload"&&r(l)}).observe(document,{childList:!0,subtree:!0});function s(a){const o={};return a.integrity&&(o.integrity=a.integrity),a.referrerPolicy&&(o.referrerPolicy=a.referrerPolicy),a.crossOrigin==="use-credentials"?o.credentials="include":a.crossOrigin==="anonymous"?o.credentials="omit":o.credentials="same-origin",o}function r(a){if(a.ep)return;a.ep=!0;const o=s(a);fetch(a.href,o)}})();const g='<span class="fill-slate-100 group-[child:hover]:-rotate-90 rotate-90 duration-300"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="18" height="18"> <path d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41z" /></svg></span>',v='<span class="fill-slate-600 group-hover:fill-primary group-hover:drop-shadow-primary group-[.active-nav]:fill-primary group-[.active-nav]:drop-shadow-primary group-[.active-nav]:rotate-180 duration-500 group-hover:rotate-180"> <svg  xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 320 512" width="18" height="18"> <path d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41z" /> </svg> </span>',x=[{id:1,name:"Home",href:"./index.html",child:[]},{id:6,name:"Documents",href:"#",child:[{id:1,name:"Activity Reports",href:"#",children:[]},{id:2,name:"Audit Reports",href:"#",children:[]},{id:3,name:"Stickers and Banners",href:"#",children:[]},{id:4,name:"Monthly Magazine",href:"#",children:[]},{id:5,name:"Others Document",href:"#",children:[]}]},{id:2,name:"Media",href:"#",child:[{id:1,name:"Image Gallery",href:"./photo-gallery.html",children:[]},{id:1,name:"Videos",href:"#",children:[]}]},{id:3,name:"Events",href:"#",child:[{id:1,name:"Upcoming Events",href:"#",children:[]},{id:2,name:"Past Campaigns",href:"#",children:[]},{id:3,name:"Volunteer Opportunities",href:"#",children:[]},{id:4,name:"Organizer Events & Campaigns",href:"#",children:[]}]},{id:4,name:"Updates",href:"#",child:[{id:1,name:"Blogs",href:"./blog.html",children:[]},{id:2,name:"News",href:"#",children:[]},{id:3,name:"Reports",href:"#",children:[]}]},{id:5,name:"Book Store",href:"#",child:[{id:1,name:"Our Store",href:"./book-store.html",children:[]},{id:1,name:"Book Details",href:"./book-details.html",children:[]},{id:1,name:"Fiction",href:"#",children:[]},{id:2,name:"Non-Fiction",href:"#",children:[]},{id:3,name:"Mystery & Thriller",href:"#",children:[]},{id:4,name:"Science Fiction & Fantasy",href:"#",children:[]}]},{id:7,name:"Who We Are",href:"#",child:[{id:1,name:"About Us",href:"#",children:[]},{id:2,name:"Pathgriho Team",href:"./team-gallery.html",children:[]},{id:3,name:"Work With Us",href:"#",children:[{id:1,name:"Become e Volunteer",href:"#"},{id:2,name:"Our Partners",href:"./team-gallery.html"},{id:3,name:"Our Mission",href:"#"},{id:4,name:"Our Vision",href:"#"},{id:5,name:"Career",href:"#"}]},{id:4,name:"FAQ",href:"#",children:[]},{id:5,name:"Contact",href:"#",children:[]}]}],w=x.sort((t,e)=>t.id-e.id).map(t=>`
      <li class="group relative 2xl:h-full flex items-start gap-4 2xl:gap-0 2xl:items-center justify-center" 
       onclick="childMenu(event)">
        <a class="font-medium capitalize text-lg font-oswald text-slate-600 group-hover:drop-shadow-primary group-hover:text-primary group-[.active-nav]:text-primary group-[.active-nav]:drop-shadow-primary flex gap-1 items-center group-hover:items-end justify-center duration-500"
          href="${t.href}">
          <span class="capitalize">${t.name}</span>

          ${t.child.length?v:""}
          
        </a>

        <!-- Child Menus -->

        <ul class="hidden group-[.active-nav]:block group-hover:block 2xl:absolute top-20 left-0 font-oswald bg-primary text-slate-200 text-sm font-medium">
           
          ${t.child.map(e=>`<li class="duration-300 relative px-6 py-3 hover:bg-secondary group groupchild" >
                  <a class="font-medium capitalize text-md font-oswald text-slate-100 flex gap-1 items-start justify-start duration-500 groupchild group-[child.active-nav]:bg-secondary"
                    href="${e.href}">
                    <span class="capitalize text-sm text-nowrap">${e.name}</span>
                    
                     ${e.children.length?g:""}
                  </a>

                  <!-- Children -->
                  <ul
                    class="hidden group-[child.active-child-nav]:block group-[child:hover]:block 2xl:absolute top-0 left-32 m-3 2xl:my-0 2xl:mr-0 2xl:ml-3.5 font-oswald bg-primary text-slate-200 text-sm font-medium"
                  >
                    ${e.children.map(s=>`
                        <li class="duration-300">
                          <a
                            href="${s.href}"
                            class="h-full block text-nowrap px-6 py-3 duration-500 hover:bg-secondary hover:text-slate-100"
                            >${s.name}</a
                          >
                        </li>`).join("")} 
                  </ul>
                </li>`).join("")}
           
        </ul>
      </li>`).join(""),b=`<nav class="fixed top-0 left-0 bg-slate-200 px-2.5 w-full text-slate-700 z-40">
        <div class="container w-full flex items-center justify-between">
          <!-- Logo Image -->
          <a href="./index.html">
            <img
              src="/assets/images/logo.png"
              alt="Logo"
              class="w-24 sm:w-32 h-20"
            />
          </a>

          <!-- Navigation List -->
          <ul
            id="top-navigation-list"
            class="hidden 2xl:flex flex-col 2xl:flex-row gap-6 h-20 px-10 pb-10 pt-32 2xl:p-0 items-start 2xl:items-center 2xl:justify-center 2xl:bg-transparent 2xl:static 2xl:w-auto w-full bg-slate-100 absolute z-50 left-0 top-20 min-h-[70vh] 2xl:min-h-auto overflow-y-auto 2xl:!overflow-visible"
          >
          <!-- Mapping All the Menus and Sub menus -->
            ${w}
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
      </nav>`,y=`<svg
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 512 512"
  width="32"
  height="32"
 >
  <path
    d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm72.4-118.5c9.7-9 10.2-24.2 1.2-33.9C315.3 344.3 290.6 328 256 328s-59.3 16.3-73.5 31.6c-9 9.7-8.5 24.9 1.2 33.9s24.9 8.5 33.9-1.2c7.4-7.9 20-16.4 38.5-16.4s31.1 8.5 38.5 16.4c9 9.7 24.2 10.2 33.9 1.2zM176.4 272c17.7 0 32-14.3 32-32c0-1.5-.1-3-.3-4.4l10.9 3.6c8.4 2.8 17.4-1.7 20.2-10.1s-1.7-17.4-10.1-20.2l-96-32c-8.4-2.8-17.4 1.7-20.2 10.1s1.7 17.4 10.1 20.2l30.7 10.2c-5.8 5.8-9.3 13.8-9.3 22.6c0 17.7 14.3 32 32 32zm192-32c0-8.9-3.6-17-9.5-22.8l30.2-10.1c8.4-2.8 12.9-11.9 10.1-20.2s-11.9-12.9-20.2-10.1l-96 32c-8.4 2.8-12.9 11.9-10.1 20.2s11.9 12.9 20.2 10.1l11.7-3.9c-.2 1.5-.3 3.1-.3 4.7c0 17.7 14.3 32 32 32s32-14.3 32-32z"
  />
 </svg>`,k=`<svg
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 512 512"
  width="32"
  height="32"
 >
  <path
    d="M256 48a208 208 0 1 0 0 416 208 208 0 1 0 0-416zM512 256A256 256 0 1 1 0 256a256 256 0 1 1 512 0zM168 320c-13.3 0-24 10.7-24 24s10.7 24 24 24h8V320h-8zm40 48h32V320H208v48zm96 0V320H272v48h32zm32 0h8c13.3 0 24-10.7 24-24s-10.7-24-24-24h-8v48zM168 288H344c30.9 0 56 25.1 56 56s-25.1 56-56 56H168c-30.9 0-56-25.1-56-56s25.1-56 56-56zm-23.6-80a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"
  />
 </svg>`,z=`<svg
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 512 512"
  width="32"
  height="32"
 >
  <path
    d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm177.6 62.1C192.8 334.5 218.8 352 256 352s63.2-17.5 78.4-33.9c9-9.7 24.2-10.4 33.9-1.4s10.4 24.2 1.4 33.9c-22 23.8-60 49.4-113.6 49.4s-91.7-25.5-113.6-49.4c-9-9.7-8.4-24.9 1.4-33.9s24.9-8.4 33.9 1.4zm40-89.3l0 0 0 0-.2-.2c-.2-.2-.4-.5-.7-.9c-.6-.8-1.6-2-2.8-3.4c-2.5-2.8-6-6.6-10.2-10.3c-8.8-7.8-18.8-14-27.7-14s-18.9 6.2-27.7 14c-4.2 3.7-7.7 7.5-10.2 10.3c-1.2 1.4-2.2 2.6-2.8 3.4c-.3 .4-.6 .7-.7 .9l-.2 .2 0 0 0 0 0 0c-2.1 2.8-5.7 3.9-8.9 2.8s-5.5-4.1-5.5-7.6c0-17.9 6.7-35.6 16.6-48.8c9.8-13 23.9-23.2 39.4-23.2s29.6 10.2 39.4 23.2c9.9 13.2 16.6 30.9 16.6 48.8c0 3.4-2.2 6.5-5.5 7.6s-6.9 0-8.9-2.8l0 0 0 0zm160 0l0 0-.2-.2c-.2-.2-.4-.5-.7-.9c-.6-.8-1.6-2-2.8-3.4c-2.5-2.8-6-6.6-10.2-10.3c-8.8-7.8-18.8-14-27.7-14s-18.9 6.2-27.7 14c-4.2 3.7-7.7 7.5-10.2 10.3c-1.2 1.4-2.2 2.6-2.8 3.4c-.3 .4-.6 .7-.7 .9l-.2 .2 0 0 0 0 0 0c-2.1 2.8-5.7 3.9-8.9 2.8s-5.5-4.1-5.5-7.6c0-17.9 6.7-35.6 16.6-48.8c9.8-13 23.9-23.2 39.4-23.2s29.6 10.2 39.4 23.2c9.9 13.2 16.6 30.9 16.6 48.8c0 3.4-2.2 6.5-5.5 7.6s-6.9 0-8.9-2.8l0 0 0 0 0 0z"
  />
 </svg>`,L=`<svg
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 512 512"
  width="32"
  height="32"
 >
  <path
    d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm177.6 62.1C192.8 334.5 218.8 352 256 352s63.2-17.5 78.4-33.9c9-9.7 24.2-10.4 33.9-1.4s10.4 24.2 1.4 33.9c-22 23.8-60 49.4-113.6 49.4s-91.7-25.5-113.6-49.4c-9-9.7-8.4-24.9 1.4-33.9s24.9-8.4 33.9 1.4zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"
  />
 </svg>`,C=`<svg
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 512 512"
  width="32"
  height="32"
 >
  <path
    d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm349.5 52.4c18.7-4.4 35.9 12 25.5 28.1C350.4 374.6 306.3 400 255.9 400s-94.5-25.4-119.1-63.5c-10.4-16.1 6.8-32.5 25.5-28.1c28.9 6.8 60.5 10.5 93.6 10.5s64.7-3.7 93.6-10.5zM215.3 137.1c17.8 4.8 28.4 23.1 23.6 40.8l-17.4 65c-2.3 8.5-11.1 13.6-19.6 11.3l-65.1-17.4c-17.8-4.8-28.4-23.1-23.6-40.8s23.1-28.4 40.8-23.6l16.1 4.3 4.3-16.1c4.8-17.8 23.1-28.4 40.8-23.6zm122.3 23.6l4.3 16.1 16.1-4.3c17.8-4.8 36.1 5.8 40.8 23.6s-5.8 36.1-23.6 40.8l-65.1 17.4c-8.5 2.3-17.3-2.8-19.6-11.3l-17.4-65c-4.8-17.8 5.8-36.1 23.6-40.8s36.1 5.8 40.9 23.6z"
  />
 </svg>`,M=t=>`<div id="feedback-control">
      <div class="fixed bottom-36 sm:bottom-28 right-10 z-[999]">
        <a
          id="feedback-open-btn"
          href="#"
          class="bg-slate-300 px-3 pb-2.5 pt-3.5 block fill-slate-100 hover:fill-slate-100 rounded-full duration-500 hover:bg-secondary hover:shadow-primary-deep hover:scale-110"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 161 161"
            fill="none"
          >
            <path
              d="M0 113.5V16.5C2.4 5.3 12.3333 0.833333 17 0H145.5C155.9 2.8 159.833 12.1667 160.5 16.5L158.5 115.5C161 129 147.667 129.833 146 130H97L58 160H52.5C50.9 160.4 50.1667 158.5 50 157.5V130H15.5C4.7 128 0.666667 118.167 0 113.5Z"
              fill="#0198DB"
            />
            <circle cx="60" cy="45" r="10" fill="white" />
            <circle cx="100" cy="45" r="10" fill="white" />
            <path
              d="M104.5 73.0001C83.3 92.6001 63.3333 81.1667 56 73.0001C52.8 71.8001 49.6667 72.5001 48.5 73.0001C44.5 76.0001 46 76 45 77.5C44.2 78.7 44.6667 81.6667 45 83C75.8 113.4 105.167 95 116 82V78C115.2 75.2 113.333 73.5 112.5 73.0001C108.5 71.0001 105.5 72.1667 104.5 73.0001Z"
              fill="white"
              stroke="white"
            />
          </svg>
        </a>
      </div>

      <div
        id="feedback-container"
        class="hidden fixed w-full min-h-screen items-center justify-center top-0 left-0 z-[999] bg-secondary/50"
      >
        <div class="bg-white p-6 sm:p-10 relative">
          <!-- Close Button -->
          <button
            id="feedback-close-btn"
            class="absolute top-2 md:-top-4 right-2 md:-right-4 bg-red-500 p-2 fill-slate-100 rounded-full hover:bg-secondary duration-500 rotate-45 hover:rotate-90 shadow-[0px_2px_4px_0px_rgba(0,_0,_0,_0.12)]"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 384 512"
              width="18"
              height="18"
            >
              <path
                d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"
              />
            </svg>
          </button>

          <!-- Feedback Emogi -->
          <div
            class="font-poppins pb-3 text-slate-700 text-xs tracking-wide text-center"
          >
            <p class="mb-1">
              Feedback on
              <span class="font-bold text-primary underline"
                >Pathgriho Foundation</span
              >
            </p>
            <p class="text-md font-light leading-7">
              How would you rate your experience?
            </p>
            <p
              class="hidden text-md text-center leading-8 text-red-500 font-medium border-t border-b border-dashed border-secondary/30 mt-2"
              id="text-alert"
            >
              Success
            </p>
          </div>

          <hr class="w-full h-px bg-secondary/40 mb-6 mt-4" />

          <div
            id="feedback-emogi"
            class="w-full px-4 pb-4 flex items-center justify-between group"
          >
               ${t.map(e=>`
                   <a
                      href="${e.href}" type="${e.name}"
                      class="block fill-secondary/80 hover:fill-primary group-[.active-${e.name}]:fill-primary group-[.active-${e.name}]:drop-shadow-primary hover:drop-shadow-primary duration-500 relative groupchild"
                    >

                    ${e.icon}

                      <span class="absolute -bottom-10 duration-500 font-oswald opacity-0 -z-10 group-[.active-${e.name}]:z-10 group-[.active-${e.name}]:-bottom-6 group-[.active-${e.name}]:opacity-100 group-[child:hover]:z-10 group-[child:hover]:opacity-100 group-[child:hover]:-bottom-6 tracking-wide text-primary/80 font-light left-0.5 text-sm capitalize text-center">
                        ${e.name}
                      </span>
                    </a>`).join("")}
          </div>

          <!-- Input Feedback Text -->
          <div class="w-full hidden" id="feedback-text">
            <div class="py-3 sm:py-6">
              <textarea
                name=""
                id=""
                cols="30"
                rows="10"
                class="bg-slate-200 max-w-xl w-full rounded border border-solid border-secondary/30 max-h-32 sm:max-h-40 resize-none outline-none focus:border-2 focus:border-secondary/60 text-lg px-4 py-3"
                placeholder="Write here waht's on your mind."
              ></textarea>
            </div>

            <div class="flex justify-between items-center">
              <div>
                <p class="font-semibold text-sm text-secondary">
                  Heads up! This is for feedback only.
                </p>
                <p class="text-sm font-medium text-secondary">
                  Need help?
                  <a class="underline font-bold text-primary">Contact us</a>.
                </p>
              </div>
              <div>
                <button
                  class="bg-slate-500 text-slate-100 opacity-85 px-4 py-1 font-medium hover:bg-primary hover:drop-shadow-primary duration-500 hover:tracking-wide text-md uppercase rounded-md"
                >
                  send
                </button>
              </div>
            </div>
          </div>

          <!-- Input email -->
          <div class="w-full pt-10 sm:pt-12 hidden" id="feedback-email">
            <p class="text-md font-light text-center">
              We may wish to follow up. <br />Enter your email if you're happy
              for us to contact you.
            </p>
            <hr class="w-full h-px bg-secondary/40 my-4 sm:my-6" />

            <div class="w-full">
              <label for="email" class="text-sm font-medium text-secondary"
                >Type here your email:</label
              >
              <input
                type="text"
                class="bg-slate-200 max-w-xl w-full rounded border border-solid border-secondary/30 max-h-40 resize-none outline-none focus:border-2 focus:border-secondary/60 text-lg px-4 py-3"
                placeholder="feedback@example.gmail.com"
              />
            </div>

            <div class="w-full flex pt-4 sm:pt-6 items-center justify-end">
              <button
                class="bg-slate-500 text-slate-100 opacity-85 px-4 py-1 font-medium hover:bg-primary hover:drop-shadow-primary duration-500 hover:tracking-wide text-md uppercase rounded-md"
              >
                send
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>`,B=`
   
    <!-- Secondary Block -->
    <article
      class="bg-[url('/assets/images/banner-1.jpg')] bg-cover w-full py-10 relative z-10 before:content-[''] before:top-0 before:left-0 before:z-10 before:w-full before:h-full before:bg-slate-900 before:absolute before:opacity-70"
    >
      <!-- Image Card Container for Mission/Vision banner -->

      <div class="container relative z-20 pb-20">
        <div class="w-full flex flex-wrap items-center justify-center gap-20">
          <div class="bg-transparent w-full md:w-25/100">
            <h1
              class="text-4xl font-semibold font-oswald tracking-wider text-center text-primary"
            >
              Volunteers in worldwide
            </h1>
            <p
              class="py-6 text-xl font-semibold font-poppins tracking-wider text-center text-slate-300"
            >
              Still now, Volunteers in worldwide. on the join team.
            </p>

            <a href="#" class="w-full text-center block pt-2.5">
              <button
                class="font-medium font-oswald text-2xl capitalize text-slate-200 px-12 duration-500 hover:tracking-wide pt-4 pb-5 rounded-full bg-primary shadow-primary-deep"
              >
                Donate now
              </button>
            </a>
          </div>
          <div class="bg-transparent w-full md:w-25/100">
            <h1
              class="text-4xl font-semibold font-oswald tracking-wider text-center text-primary"
            >
              Volunteers in worldwide
            </h1>
            <p
              class="py-6 text-xl font-semibold font-poppins tracking-wider text-center text-slate-300"
            >
              Still now, Volunteers in worldwide. on the joing team.
            </p>

            <a href="#" class="w-full text-center block pt-2.5">
              <button
                class="font-medium font-oswald text-2xl capitalize text-slate-200 px-12 duration-500 hover:tracking-wide pt-4 pb-5 rounded-full bg-primary shadow-primary-deep"
              >
                Donate now
              </button>
            </a>
          </div>
          <div class="bg-transparent w-full md:w-25/100">
            <h1
              class="text-4xl font-semibold font-oswald tracking-wider text-center text-primary"
            >
              Volunteers in worldwide
            </h1>
            <p
              class="py-6 text-xl font-semibold font-poppins tracking-wider text-center text-slate-300"
            >
              Still now, Volunteers in worldwide. on the joing team.
            </p>

            <a href="#" class="w-full text-center block pt-2.5">
              <button
                class="font-medium font-oswald text-2xl capitalize text-slate-200 px-12 duration-500 hover:tracking-wide pt-4 pb-5 rounded-full bg-primary shadow-primary-deep"
              >
                Donate now
              </button>
            </a>
          </div>
        </div>
      </div>

      <!-- Footer last -->
      <div class="w-full flex flex-col items-center justify-center bg-slate-200 text-secondary gap-4 md:gap-10 py-10 relative z-20">
        <div class="container grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 items-start justify-between gap-10">
          <div class="py-2 w-full">
            <figure>
              <img
                src="/assets/images/logo.png"
                alt="Footer Logo"
                class="h-40 w-80 rounded-full"
              />
            </figure>
            <p>
              Pathgriho Foundation is a non-profit organization that empowers
              underprivileged individuals and communities in Bangladesh
              through education, youth development, women’s empowerment,
              climate change, governance and poverty alleviation.
            </p>
          </div>

          <div class="pl-8 py-2 flex flex-col">
            <h1
              class="text-3xl font-semibold text-start font-oswald pb-6 text-nowrap"
            >
              About Us
            </h1>
            <a
              href="#"
              class="text-xl font-poppins text-primary font-semibold underline duration-500 hover:text-secondary text-nowrap"
              >Sponsor A Child</a
            ><a
              href="#"
              class="text-xl font-poppins text-primary font-semibold underline duration-500 hover:text-secondary text-nowrap"
              >General</a
            ><a
              href="#"
              class="text-xl font-poppins text-primary font-semibold underline duration-500 hover:text-secondary text-nowrap"
              >Donation</a
            ><a
              href="#"
              class="text-xl font-poppins text-primary font-semibold underline duration-500 hover:text-secondary text-nowrap"
              >Career</a
            ><a
              href="#"
              class="text-xl font-poppins text-primary font-semibold underline duration-500 hover:text-secondary text-nowrap"
              >News & Updates</a
            ><a
              href="#"
              class="text-xl font-poppins text-primary font-semibold underline duration-500 hover:text-secondary text-nowrap"
              >Contact Us</a
            >
          </div>

          <div class="py-2 flex flex-col gap-4">
            <h1 class="text-3xl font-semibold font-oswald pb-6 text-nowrap">
              Contact Us
            </h1>
            <p class="font-poppins text-xl">
              <strong class="text-primary">Address: </strong
              ><span class="pl-1"
                >Pathgriho Foundation, Grihobasider Milonmela,
                Bangladesh.</span
              >
            </p>
            <p class="font-poppins text-xl">
              <strong class="text-primary">E-mail: </strong
              ><span class="pl-1">example@gmail.com</span>
            </p>
            <p class="font-poppins text-xl">
              <strong class="text-primary">Mobile: </strong
              ><span class="pl-1">+880 17807500</span>
            </p>
          </div>
           
          <div class="pl-8 py-2 flex flex-col gap-4">
            <h1 class="text-3xl font-semibold font-oswald pb-6 text-nowrap">
              Visit our Facebook Page
            </h1>
            <iframe
              src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpathgrihobd&tabs=timeline&width=3000&height=800&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=false&appId"
              width="3000"
              height="240"
              style="border: none; overflow: hidden"
              scrolling="no"
              frameborder="0"
              allowfullscreen="true"
              allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
            ></iframe>
          </div>
        </div>

        <!-- Social Media Icons -->
        <div class="py-2 w-full flex flex-col sm:flex-row items-center justify-center gap-6 text-secondary fill-secondary" >
          <!-- Facebook -->
          <div class="flex gap-6">
            <a target="_blank"
              href="https://www.facebook.com/pathgrihobd"
              class="block p-2 bg-slate-300 rounded-full fill-blue-400 duration-500 hover:fill-blue-700"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"
                width="32"
                height="32"
              >
                <path
                  d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"
                />
              </svg>
            </a>
            <!-- Youtube -->
            <a
              href="#"
              class="block p-2 bg-slate-300 rounded-full fill-red-400 duration-500 hover:fill-red-700"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 576 512"
                width="32"
                height="32"
              >
                <path
                  d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"
                /></svg
            ></a>
            <!-- Twitter -->
            <a
              href="#"
              class="block p-2 bg-slate-300 rounded-full fill-primary duration-500 hover:fill-blue-900"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"
                width="32"
                height="32"
              >
                <path
                  d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z"
                /></svg
            ></a>
          </div>
          <div class="flex gap-6">
            <!-- Instagram -->
            <a
              href="#"
              class="block p-2 bg-slate-300 rounded-full fill-blue-400 duration-500 hover:fill-blue-700"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"
                width="32"
                height="32"
              >
                <path
                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                /></svg
            ></a>
            <!-- Slack -->
            <a
              href="#"
              class="block p-2 bg-slate-300 rounded-full fill-emerald-400 duration-500 hover:fill-emerald-700"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"
                width="32"
                height="32"
              >
                <path
                  d="M94.1 315.1c0 25.9-21.2 47.1-47.1 47.1S0 341 0 315.1c0-25.9 21.2-47.1 47.1-47.1h47.1v47.1zm23.7 0c0-25.9 21.2-47.1 47.1-47.1s47.1 21.2 47.1 47.1v117.8c0 25.9-21.2 47.1-47.1 47.1s-47.1-21.2-47.1-47.1V315.1zm47.1-189c-25.9 0-47.1-21.2-47.1-47.1S139 32 164.9 32s47.1 21.2 47.1 47.1v47.1H164.9zm0 23.7c25.9 0 47.1 21.2 47.1 47.1s-21.2 47.1-47.1 47.1H47.1C21.2 244 0 222.8 0 196.9s21.2-47.1 47.1-47.1H164.9zm189 47.1c0-25.9 21.2-47.1 47.1-47.1 25.9 0 47.1 21.2 47.1 47.1s-21.2 47.1-47.1 47.1h-47.1V196.9zm-23.7 0c0 25.9-21.2 47.1-47.1 47.1-25.9 0-47.1-21.2-47.1-47.1V79.1c0-25.9 21.2-47.1 47.1-47.1 25.9 0 47.1 21.2 47.1 47.1V196.9zM283.1 385.9c25.9 0 47.1 21.2 47.1 47.1 0 25.9-21.2 47.1-47.1 47.1-25.9 0-47.1-21.2-47.1-47.1v-47.1h47.1zm0-23.7c-25.9 0-47.1-21.2-47.1-47.1 0-25.9 21.2-47.1 47.1-47.1h117.8c25.9 0 47.1 21.2 47.1 47.1 0 25.9-21.2 47.1-47.1 47.1H283.1z"
                /></svg
            ></a>
            <!-- Threads -->
            <a
              href="#"
              class="block p-2 bg-slate-300 rounded-full fill-violet-400 duration-500 hover:fill-violet-700"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"
                width="32"
                height="32"
              >
                <path
                  d="M331.5 235.7c2.2 .9 4.2 1.9 6.3 2.8c29.2 14.1 50.6 35.2 61.8 61.4c15.7 36.5 17.2 95.8-30.3 143.2c-36.2 36.2-80.3 52.5-142.6 53h-.3c-70.2-.5-124.1-24.1-160.4-70.2c-32.3-41-48.9-98.1-49.5-169.6V256v-.2C17 184.3 33.6 127.2 65.9 86.2C102.2 40.1 156.2 16.5 226.4 16h.3c70.3 .5 124.9 24 162.3 69.9c18.4 22.7 32 50 40.6 81.7l-40.4 10.8c-7.1-25.8-17.8-47.8-32.2-65.4c-29.2-35.8-73-54.2-130.5-54.6c-57 .5-100.1 18.8-128.2 54.4C72.1 146.1 58.5 194.3 58 256c.5 61.7 14.1 109.9 40.3 143.3c28 35.6 71.2 53.9 128.2 54.4c51.4-.4 85.4-12.6 113.7-40.9c32.3-32.2 31.7-71.8 21.4-95.9c-6.1-14.2-17.1-26-31.9-34.9c-3.7 26.9-11.8 48.3-24.7 64.8c-17.1 21.8-41.4 33.6-72.7 35.3c-23.6 1.3-46.3-4.4-63.9-16c-20.8-13.8-33-34.8-34.3-59.3c-2.5-48.3 35.7-83 95.2-86.4c21.1-1.2 40.9-.3 59.2 2.8c-2.4-14.8-7.3-26.6-14.6-35.2c-10-11.7-25.6-17.7-46.2-17.8H227c-16.6 0-39 4.6-53.3 26.3l-34.4-23.6c19.2-29.1 50.3-45.1 87.8-45.1h.8c62.6 .4 99.9 39.5 103.7 107.7l-.2 .2zm-156 68.8c1.3 25.1 28.4 36.8 54.6 35.3c25.6-1.4 54.6-11.4 59.5-73.2c-13.2-2.9-27.8-4.4-43.4-4.4c-4.8 0-9.6 .1-14.4 .4c-42.9 2.4-57.2 23.2-56.2 41.8l-.1 .1z"
                /></svg
            ></a>
          </div>
        </div>
      </div>

      <div class="flex w-full text-center font-oswald text-slate-200 text-xl pt-8 items-center justify-center relative z-20">
        <span>@Copyright</span>
        <span class="px-1 font-bold text-primary"
          ><script>
            document.write(new Date().getFullYear());
          <\/script></span
        >
        <span>all right reserve by</span>
        <a class="block px-1 font-bold text-primary">AT-LABS.</a>
      </div>
    </article>
   `,S=`
  <div class="fixed sm:bottom-10 bottom-20 right-10 z-[999]">
        <a
          href="https://www.facebook.com/pathgrihobd"
          class="bg-blue-500 p-2 block fill-slate-100 rounded-full duration-500 hover:bg-primary hover:shadow-primary-deep hover:scale-110"
          target="_blank"
        >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="32" height="32"><path d="M279.1 288l14.2-92.7h-88.9v-60.1c0-25.4 12.4-50.1 52.2-50.1h40.4V6.3S260.4 0 225.4 0c-73.2 0-121.1 44.4-121.1 124.7v70.6H22.9V288h81.4v224h100.2V288z"/></svg>
        </a>
      </div>`,V=[{id:1,icon:y,name:"angry",href:"#"},{id:2,icon:k,name:"hate",href:"#"},{id:3,icon:L,name:"normal",href:"#"},{id:4,icon:z,name:"satisfy",href:"#"},{id:5,icon:C,name:"love",href:"#"}];document.querySelector("[whatsapp]").innerHTML=S;const f=document.querySelector("footer");f&&(f.innerHTML=B);const u=document.querySelector("header");u&&(u.innerHTML=b);const h=document.getElementById("active-search"),E=document.getElementById("mobile-menu-btn"),p=h.querySelector("form"),A=h.querySelector('[type="button"]'),n=document.getElementById("top-navigation-list"),i=n.querySelectorAll("li");function j(){E.addEventListener("click",function(){p.classList.contains("hidden")?p.classList.replace("hidden","flex"):p.classList.replace("flex","hidden"),n.classList.contains("hidden")?n.classList.replace("hidden","flex"):n.classList.replace("flex","hidden")})}function $(){i.forEach(function(t){t.addEventListener("click",function(e){t.classList.contains("active-nav")?t.classList.contains("active-nav")&&i.forEach(s=>s.classList.remove("active-nav")):(i.forEach(s=>s.classList.remove("active-nav")),t.classList.add("active-nav"))})}),document.querySelector("main").addEventListener("click",function(){i.forEach(t=>t.classList.remove("active-nav"))})}function H(){A.addEventListener("click",function(){h.classList.toggle("active-search")})}document.querySelector("[feedback]").innerHTML=M(V);function F(){const t=document.getElementById("feedback-emogi"),e=document.getElementById("feedback-text"),s=document.getElementById("feedback-email"),r=document.getElementById("text-alert"),a=document.getElementById("feedback-close-btn"),o=document.getElementById("feedback-open-btn"),l=document.getElementById("feedback-container");document.addEventListener("DOMContentLoaded",function(){let c;t.querySelectorAll("a").forEach(function(m){m.addEventListener("click",function(){const d=m.getAttribute("type");c?t.classList.replace(`active-${c}`,`active-${d}`):t.classList.add(`active-${d}`),c=d,e.classList.replace("hidden","block")})}),e.querySelector("button").addEventListener("click",function(){e.querySelector("textarea").value!==""?(r.classList.replace("block","hidden"),r.textContent="Thanks for write a feedback!",s.classList.replace("hidden","block")):(r.classList.replace("hidden","block"),r.textContent="Please write something and send us a feedback!")}),a.addEventListener("click",function(){l.classList.replace("flex","hidden")}),o.addEventListener("click",function(){l.classList.replace("hidden","flex")}),s.querySelector("button").addEventListener("click",function(){s.querySelector("input").value!==""?(r.classList.replace("block","hidden"),r.textContent="Thanks for feedback!",l.classList.replace("flex","hidden")):(l.classList.replace("hidden","flex"),r.classList.replace("hidden","block"),r.textContent="Please make sure the email is correct or required!")})})}F();$();H();j();export{v as a,g as b,x as n};
