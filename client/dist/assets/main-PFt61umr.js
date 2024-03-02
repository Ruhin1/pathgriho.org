import{n as l,a as r,b as o}from"./extends--3mitrXC.js";document.getElementById("top-navigation-list").innerHTML=l.map(t=>`
                    <li class="group relative 2xl:h-full flex items-start gap-4 2xl:gap-0 2xl:items-center justify-center" onclick="childMenu(event)">
                      <a class="font-medium capitalize text-lg font-oswald text-slate-600 group-hover:drop-shadow-primary group-hover:text-primary group-[.active-nav]:text-primary group-[.active-nav]:drop-shadow-primary flex gap-1 items-center group-hover:items-end justify-center duration-500"
                        href="#">
                        <span class="capitalize">${t.name}</span>

                        ${t.child.length?r:""}
                        
                      </a>

                      <!-- Child Menus -->

                      <ul class="hidden group-[.active-nav]:block group-hover:block 2xl:absolute top-20 left-0 font-oswald bg-primary text-slate-200 text-sm font-medium">
                         
                        ${t.child.map(a=>`<li class="duration-300 relative px-6 py-3 hover:bg-secondary group groupchild" >
                                <a class="font-medium capitalize text-md font-oswald text-slate-100 flex gap-1 items-start justify-start duration-500 groupchild group-[child.active-nav]:bg-secondary"
                                  href="${a.href}">
                                  <span class="capitalize text-sm text-nowrap">${a.name}</span>
                                  
                                   ${a.children.length?o:""}
                                </a>

                                <!-- Children -->
                                <ul
                                  class="hidden group-[child.active-child-nav]:block group-[child:hover]:block 2xl:absolute top-0 left-32 m-3 2xl:my-0 2xl:mr-0 2xl:ml-3.5 font-oswald bg-primary text-slate-200 text-sm font-medium"
                                >
                                  ${a.children.map(e=>`
                                      <li class="duration-300">
                                        <a
                                          href="${e.href}"
                                          class="h-full block text-nowrap px-6 py-3 duration-500 hover:bg-secondary hover:text-slate-100"
                                          >${e.name}</a
                                        >
                                      </li>`).join("")} 
                                </ul>
                              </li>`).join("")}
                         
                      </ul>
                    </li>
              `).join("");
