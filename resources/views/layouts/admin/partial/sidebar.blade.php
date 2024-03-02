<aside class="bg-dark aside aside-fixed d-flex flex-column">
    <div class="brand">
        <a href="{{ Route('admin.dashboard') }}" class="brand-logo">
            <img class="lazyload" data-src="{{ $logo }}" height="60" alt="Logo">
        </a>

        <button class="brand-toggle btn btn-sm px-0  @if (Session::has('sidebar-collapse')) active @endif">
            <span class="svg-icon svg-icon svg-icon-xl">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24"
                    height="24" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                        <path
                            d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                            fill="#3699FF" fill-rule="nonzero"
                            transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)">
                        </path>
                        <path
                            d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                            fill="#3699FF" fill-rule="nonzero" opacity="0.3"
                            transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)">
                        </path>
                    </g>
                </svg>
            </span>
        </button>
    </div>
    <!-- End Brand Area -->

    <div class="aside-menu-wrapper pt-4">
        <div class="aside-menu overflow-auto c-scrollbar-light" style="height: calc(100vh - 119px);">
            <ul class="menu-nav">
                @php
                    $root_menus = App\Models\AdminMenu::root()
                        ->with(['children', 'actions'])
                        ->where('status', 1)
                        ->orderBy('order', 'asc')
                        ->get();
                    $route_name = \Request::route()->getName();

                    $all_routes = collect(\Route::getRoutes())->map(function ($route) {
                        return $route->getName();
                    });
                    $admin_routes = [];
                    foreach ($all_routes as $item) {
                        if (strpos($item, 'admin.') !== false) {
                            $admin_routes[] = $item;
                        }
                    }
                @endphp
                @foreach ($root_menus as $key => $root_menu)
                    @php
                        $root_actions = [];
                        if (!is_null($root_menu->route)) {
                            $root_actions[] = $root_menu->route;
                        }
                        foreach ($root_menu->actions as $root_action) {
                            $root_actions[] = $root_action->route;
                        }
                        foreach ($root_menu->children as $child) {
                            if (!is_null($child->route)) {
                                $root_actions[] = $child->route;
                            }
                            foreach ($child->actions as $child_action) {
                                $root_actions[] = $child_action->route;
                            }
                            foreach ($child->children as $menu) {
                                if (!is_null($menu->route)) {
                                    $root_actions[] = $menu->route;
                                }
                                foreach ($menu->actions as $menu_action) {
                                    $root_actions[] = $menu_action->route;
                                }
                            }
                        }
                    @endphp

                    @if (auth()->user()->can($root_menu->permission->name))
                        <li
                            class="menu-item root-menu {{ count($root_menu->children) > 0 ? 'has-submenu' : '' }} {{ in_array($route_name, $root_actions) ? 'menu-item-active' : '' }}">
                            <a href="{{ !is_null($root_menu->route) && in_array($root_menu->route, $admin_routes) ? Route($root_menu->route, $root_menu->id ?? null) : '#' }}"
                                class="menu-link">
                                 
                                <span class="svg-icon menu-icon">
                                    @if (!is_null($root_menu->icon))
                                        {!! $root_menu->icon !!}
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24">
                                                </rect>
                                                <rect fill="#000000" x="4" y="4" width="7"
                                                    height="7" rx="1.5"></rect>
                                                <path
                                                    d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                    fill="#000000" opacity="0.3"></path>
                                            </g>
                                        </svg>
                                    @endif
                                </span>
                                <span class="menu-text">{{ $root_menu->name }}</span>
                            </a>
                            <div class="menu-submenu">
                                <ul class="menu-subnav">
                                    @foreach ($root_menu->children as $key => $child)
                                        @php
                                            $child_actions = [];
                                            foreach ($child->actions as $child_action) {
                                                $child_actions[] = $child_action->route;
                                            }
                                        @endphp
                                        @if (auth()->user()->can($child->permission->name))
                                            <li
                                                class="menu-item {{ count($child->children) > 0 ? 'has-submenu' : 'no-sub' }} {{ in_array($route_name, $child_actions) ? 'menu-item-active' : '' }}">
                                                <a href="{{ !is_null($child->route) && in_array($child->route, $admin_routes) ? Route($child->route) : '#' }}"
                                                    class="menu-link {{ $route_name == $child->route ? 'active' : '' }}">
                                                    <span class="menu-text">{{ $child->name }}</span>
                                                </a>
                                                <div class="menu-submenu">
                                                    <ul class="menu-subnav">
                                                        @foreach ($child->children as $key => $menu)
                                                            @if (auth()->user()->can($menu->permission->name))
                                                                <li
                                                                    class="menu-item {{ !is_null($menu->actions) && in_array($route_name, json_decode($menu->actions)) ? 'menu-item-active' : '' }}">
                                                                    <a href="{{ !is_null($menu->route) && in_array($menu->route, $admin_routes) ? Route($menu->route) : '#' }}"
                                                                        class="menu-link {{ $route_name == $menu->route ? 'active' : '' }}">
                                                                        <span
                                                                            class="menu-text">{{ $menu->name }}</span>
                                                                    </a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
        <!-- End Aside Menu -->

        <div class="d-flex align-items-center social-wrapper" style="height: 55px; border-top: 1px solid #cbd0dd;">
            <ul class="w-100 p-2 d-flex align-items-center justify-content-center social">
                @if($admin_setting && $admin_setting->facebook)
                <li>
                    <a class="p-2 d-block social-link" href="{{ $admin_setting->facebook }}" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor" width="24"
                            height="24">
                            <path
                                d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z" />
                        </svg>
                    </a>
                </li>
                @endif
                @if($admin_setting && $admin_setting->twitter)
                <li>
                    <a class="p-2 d-block social-link" href="{{ $admin_setting->twitter }}" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor" width="24"
                            height="24">
                            <path
                                d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z" />
                        </svg>
                    </a>
                </li>
                @endif
                @if($admin_setting && $admin_setting->linkedin)
                <li>
                    <a class="p-2 d-block social-link" href="{{ $admin_setting->linkedin }}" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor" width="24"
                            height="24">
                            <path
                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                        </svg>
                    </a>
                </li>
                @endif
                @if($admin_setting && $admin_setting->whatsapp)
                <li>
                    <a class="p-2 d-block social-link" href="{{ $admin_setting->whatsapp }}" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor"
                            width="24" height="24">
                            <path
                                d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z" />
                        </svg>
                    </a>
                </li>
                @endif
                @if($admin_setting && $admin_setting->google)
                <li>
                    <a class="p-2 d-block social-link" href="{{ $admin_setting->google }}" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor"
                            width="24" height="24">
                            <path
                                d="M90.2 228.2c8.9-42.4 37.4-77.7 75.7-95.7 3.6 4.9 28 38.8 50.7 79-64 17-120.3 16.8-126.4 16.7zM314.6 154c-33.6-29.8-79.3-41.1-122.6-30.6 3.8 5.1 28.6 38.9 51 80 48.6-18.3 69.1-45.9 71.6-49.4zM140.1 364c40.5 31.6 93.3 36.7 137.3 18-2-12-10-53.8-29.2-103.6-55.1 18.8-93.8 56.4-108.1 85.6zm98.8-108.2c-3.4-7.8-7.2-15.5-11.1-23.2C159.6 253 93.4 252.2 87.4 252c0 1.4-.1 2.8-.1 4.2 0 35.1 13.3 67.1 35.1 91.4 22.2-37.9 67.1-77.9 116.5-91.8zm34.9 16.3c17.9 49.1 25.1 89.1 26.5 97.4 30.7-20.7 52.5-53.6 58.6-91.6-4.6-1.5-42.3-12.7-85.1-5.8zm-20.3-48.4c4.8 9.8 8.3 17.8 12 26.8 45.5-5.7 90.7 3.4 95.2 4.4-.3-32.3-11.8-61.9-30.9-85.1-2.9 3.9-25.8 33.2-76.3 53.9zM448 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48zm-64 176c0-88.2-71.8-160-160-160S64 167.8 64 256s71.8 160 160 160 160-71.8 160-160z" />
                        </svg>
                    </a>
                </li>
                @endif
            </ul>
        </div>
        <!-- End Social Area -->
    </div>
    <!-- End Sidebar Menu Area -->

</aside>
<!-- End Sidebar -->

<div class="d-lg-none aside-overlay brand-toggle"></div>
<!-- Aside Overlay -->

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.brand-toggle').on('click', function() {
                $.ajax({
                    url: "{{ Route('admin.sidebar') }}",
                    method: 'POST',
                });
            });
        });
    </script>
@endpush
