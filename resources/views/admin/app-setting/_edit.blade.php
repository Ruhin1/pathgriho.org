@extends('layouts.admin.app')

@push('css')
    <link rel="stylesheet" href="{{ asset('backend/css/jquery.minicolors.css') }}">
@endpush

@section('content')
    <form action="{{ Route('admin.settings.update', (isset($data->id) ? $data->id : '0')) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="h6 mb-0 py-5px">
                            @if ($data)
                                Update Site Items
                            @else   
                                Create Site Items
                            @endif
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <!-- Title Part ends -->
                            <div class="col-md-4 col-6">
                                <label for="title" class="form-label require"><b>App Title</b></label>
                                <input type="text"  placeholder="Page Title" class="form-control custom-input" id="title" name="title" value="{{ $data ? $data->title : '' }}" maxlength="254" />
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="home_title" class="form-label require"><b>Home Page Title</b></label>
                                <input type="text"  placeholder="Home Page Title" class="form-control custom-input" id="home_title" name="home_title" value="{{ $data ? $data->home_title : '' }}" maxlength="254" />
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="faq_title" class="form-label require"><b>Faq Page Title</b></label>
                                <input type="text"  placeholder="Faq Page Title" class="form-control custom-input" id="faq_title" name="faq_title" value="{{ $data ? $data->faq_title : '' }}" maxlength="254" />
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="services_title" class="form-label require"><b>Services Page Title</b></label>
                                <input type="text"  placeholder="Services Page Title" class="form-control custom-input" id="services_title" name="services_title" value="{{ $data ? $data->services_title : '' }}" maxlength="254" />
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="about_title" class="form-label require"><b>About Page Title</b></label>
                                <input type="text"  placeholder="About Page Title" class="form-control custom-input" id="about_title" name="about_title" value="{{ $data ? $data->about_title : '' }}" maxlength="254" />
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="search_title" class="form-label require"><b>Search Page Title</b></label>
                                <input type="text"  placeholder="Search Page Title" class="form-control custom-input" id="search_title" name="search_title" value="{{ $data ? $data->search_title : '' }}" maxlength="254" />
                            </div>

                            <!-- Credentials Part -->
                            <div class="col-md-4 col-6">
                                <label for="phone_one" class="form-label require"><b>Primary Phone</b></label>
                                <input type="text"  placeholder="0187******" class="form-control custom-input" id="phone_one" name="phone_one" value="{{ $data ? $data->phone_one : '' }}" minlength="9" maxlength="254" placeholder="http://www." />
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="phone_two" class="form-label require"><b>Secondary Phone</b></label>
                                <input type="text"  placeholder="0187******" class="form-control custom-input" id="phone_two" name="phone_two" value="{{ $data ? $data->phone_two : '' }}" minlength="9" maxlength="254" />
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="email" class="form-label require"><b>E-mail</b></label>
                                <input type="email"  placeholder="ex@gmail.com" class="form-control custom-input" id="email"
                                    name="email" value="{{ $data ? $data->email : '' }}" minlength="11" maxlength="254" />
                            </div>

                            <!-- Links Part -->
                            <div class="col-md-4 col-sm-6">
                                <label for="facebook" class="form-label"><b>Facebook</b></label>
                                <input type="text" id="facebook" name="facebook" placeholder="Facebook"
                                    class="form-control" value="{{ $data ? $data->facebook : '' }}">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="twitter" class="form-label"><b>Twitter</b></label>
                                <input type="text" id="twitter" name="twitter" placeholder="Twitter"
                                    class="form-control" value="{{ $data ? $data->twitter : '' }}">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="linkedin" class="form-label"><b>Linkedin</b></label>
                                <input type="text" id="linkedin" name="linkedin" placeholder="Linkedin"
                                    class="form-control" value="{{ $data ? $data->linkedin : '' }}">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="whatsapp" class="form-label"><b>Whatsapp</b></label>
                                <input type="text" id="whatsapp" name="whatsapp" placeholder="Whatsapp"
                                    class="form-control" value="{{ $data ? $data->whatsapp : '' }}">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="youtube" class="form-label"><b>Youtube</b></label>
                                <input type="text" id="youtube" name="youtube" placeholder="youtube"
                                    class="form-control" value="{{ $data ? $data->youtube : '' }}">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="pinterest" class="form-label"><b>Pinterest</b></label>
                                <input type="text" id="pinterest" name="pinterest" placeholder="Pinterest"
                                    class="form-control" value="{{ $data ? $data->pinterest : '' }}">
                            </div>
                            <div class="col-4">
                                <label for="basic_title_one" class="form-label"><b>Address</b></label>
                                <input type="text" id="basic_title_one" name="basic_title_one" placeholder="Address"
                                    class="form-control" value="{{ $data ? $data->basic_title_one : '' }}">
                            </div>
                            <div class="col-4">
                                <label for="basic_title_three" class="form-label"><b>Set Office Hours</b></label>
                                <input type="text" id="basic_title_three" name="basic_title_three" placeholder="office time"
                                    class="form-control" value="{{ $data ? $data->basic_title_three : '' }}">
                            </div>
                            <div class="col-4">
                                <label for="map_url" class="form-label"><b>Goggle Map Embed Url</b></label>
                                <input type="text" id="map_url" name="map_url" placeholder="https://www.map.google.com"
                                    class="form-control" value="{{ $data ? $data->map_url : '' }}">
                            </div>

                            <!-- Images Part -->
                            <div class="col-md-4 col-6">
                                <label for="favicon" class="form-label"><b>App Favicon Image</b> <span class="text-danger">(32x32)</span></label>
                                <input type="file" id="favicon" name="favicon" class="form-control" accept="image/*" />
                                @if ($data && file_exists($data->favicon))
                                    <div class="pt-2">
                                        <img src="{{ asset($data->favicon) }}" height="50" alt="Logo"/>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="header_bg_image" class="form-label"><b>App Logo Image</b> <span class="text-danger">(250x150)</span></label>
                                <input type="file" id="logo" name="logo" class="form-control" accept="image/*"
                                    {{ $data && file_exists($data->logo) ? '' : '' }}>
                                @if ($data && file_exists($data->logo))
                                    <div class="pt-2">
                                        <img src="{{ asset($data->logo) }}" height="50" alt="Logo"/>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="secondary_logo" class="form-label"><b>Secondary Logo Image</b> <span class="text-danger">(500x300)</span></label>
                                <input type="file" id="footer_animation_image" name="secondary_logo" class="form-control" accept="image/*" />
                                @if ($data && file_exists($data->secondary_logo))
                                    <div class="pt-2">
                                        <img src="{{ asset($data->secondary_logo) }}" height="50" alt="Logo"/>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="banner_image" class="form-label"><b>Banner Image</b> <span class="text-danger">((1920x1080))</span></label>
                                <input type="file" id="banner_image" name="banner_image" class="form-control" accept="image/*" />
                                @if ($data && file_exists($data->banner_image))
                                    <div class="pt-2">
                                        <img src="{{ asset($data->banner_image) }}" height="50" alt="Logo"/>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="banner_animation_image" class="form-label"><b>Banner Animation Image</b></label>
                                <input type="file" id="banner_animation_image" name="banner_animation_image" class="form-control" accept="image/*" />
                                @if ($data && file_exists($data->banner_animation_image))
                                    <div class="pt-2">
                                        <img src="{{ asset($data->banner_animation_image) }}" height="50" style="max-width: 200px;" alt="Logo"/>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="map_image" class="form-label"><b>Home Page Map Image</b> <span class="text-danger">(600x600)</span></label>
                                <input type="file" id="map_image" name="map_image" class="form-control" accept="image/*" />
                                @if ($data && file_exists($data->map_image))
                                    <div class="pt-2">
                                        <img src="{{ asset($data->map_image) }}" height="50" alt="Logo"/>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="footer_image" class="form-label"><b>Footer Image</b> <span class="text-danger">(1920x300)</span></label>
                                <input type="file" id="footer_image" name="footer_image" class="form-control" accept="image/*" />
                                @if ($data && file_exists($data->footer_image))
                                    <div class="pt-2">
                                        <img src="{{ asset($data->footer_image) }}" height="50" alt="Logo"/>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="footer_animation_image" class="form-label"><b>Footer Animation Image</b></label>
                                <input type="file" id="footer_animation_image" name="footer_animation_image" class="form-control" accept="image/*" />
                                @if ($data && file_exists($data->footer_animation_image))
                                    <div class="pt-2">
                                        <img src="{{ asset($data->footer_animation_image) }}" height="50" alt="Logo"/>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="basic_title_five" class="form-label"><b>Footer Text</b></label>
                                <input type="text" id="basic_title_five" name="basic_title_five" placeholder="Footer Text"
                                    class="form-control" value="{{ $data ? $data->basic_title_five : '' }}" />
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="basic_title_four" class="form-label"><b>Processing Page Title</b></label>
                                <input type="text" id="basic_title_four" name="basic_title_four" placeholder="Processing Page Title"
                                    class="form-control" value="{{ $data ? $data->basic_title_four : '' }}">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="meta_title" class="form-label"><b>Meta Title</b></label>
                                <input type="text" id="meta_title" name="meta_title" placeholder="meta title"
                                    class="form-control" value="{{ $data ? $data->meta_title : '' }}">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="meta_keyword" class="form-label"><b>Meta Keyword</b></label>
                                <input type="text" id="meta_keyword" name="meta_keyword" placeholder="meta keywords"
                                    class="form-control" value="{{ $data ? $data->meta_keyword : '' }}">
                            </div>
                            <div class="col-12">
                                <label for="meta_description" class="form-label"><b>Meta Description</b></label>
                                <textarea name="meta_description" id="meta_description" cols="10" rows="6" class="form-control text-area" placeholder="Write here your meta descriptions...">
                                    {!! $data ? $data->meta_description : '' !!}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <div class="py-1">
                            <button type="submit" class="btn btn-sm btn-primary">
                                @if ($data)
                                    Update Now  
                                @else   
                                    Create Now 
                                @endif
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('js')
    <script type="text/javascript" src="{{ asset('backend/js/jquery.minicolors.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            if ($('.color').length) {
                $(".color").each(function() {
                    $(this).minicolors();
                });
            }
        });
    </script>
@endpush