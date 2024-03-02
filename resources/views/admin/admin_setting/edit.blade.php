@extends('layouts.admin.app')

@push('css')
    <link rel="stylesheet" href="{{ asset('backend/css/jquery.minicolors.css') }}">
@endpush

@section('content')
    <form action="{{ Route('admin.admin-settings.update', '0') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="h6 mb-0 py-5px">Update Admin Settings</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-4 col-sm-6">
                                <label for="title" class="form-label"><b>Title</b></label>
                                <input type="text" id="title" name="title" placeholder="Ttitle"
                                    class="form-control" value="{{ $settings ? $settings->title : '' }}" required>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="logo" class="form-label"><b>Logo</b></label>
                                <input type="file" id="logo" name="logo" class="form-control" accept="image/*"
                                    {{ $settings && file_exists($settings->logo) ? '' : 'required' }}>
                                @if ($settings && file_exists($settings->logo))
                                    <div class="pt-2">
                                        <img src="{{ asset($settings->logo) }}" height="50" alt="Logo">
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="favicon" class="form-label"><b>Favicon</b></label>
                                <input type="file" id="favicon" name="favicon" class="form-control" accept="image/*"
                                {{ $settings && file_exists($settings->favicon) ? '' : 'required' }}>
                                @if ($settings && file_exists($settings->favicon))
                                    <div class="pt-2">
                                        <img src="{{ asset($settings->favicon) }}" height="50" alt="Favicon">
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="primary_color" class="form-label"><b>Primary Color</b></label>
                                <input type="text" id="primary_color" name="primary_color" placeholder="Primary Color"
                                    class="form-control color" value="{{ $settings ? $settings->primary_color : '' }}">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="secondary_color" class="form-label"><b>Secondary Color</b></label>
                                <input type="text" id="secondary_color" name="secondary_color"
                                    placeholder="Secondary Color" class="form-control color"
                                    value="{{ $settings ? $settings->secondary_color : '' }}">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="footer_text" class="form-label"><b>Footer Text</b></label>
                                <input type="text" id="footer_text" name="footer_text" placeholder="Footer Text"
                                    class="form-control" value="{{ $settings ? $settings->footer_text : '' }}" required>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="facebook" class="form-label"><b>Facebook</b></label>
                                <input type="text" id="facebook" name="facebook" placeholder="Facebook"
                                    class="form-control" value="{{ $settings ? $settings->facebook : '' }}">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="twitter" class="form-label"><b>Twitter</b></label>
                                <input type="text" id="twitter" name="twitter" placeholder="Twitter"
                                    class="form-control" value="{{ $settings ? $settings->twitter : '' }}">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="linkedin" class="form-label"><b>Linkedin</b></label>
                                <input type="text" id="linkedin" name="linkedin" placeholder="Linkedin"
                                    class="form-control" value="{{ $settings ? $settings->linkedin : '' }}">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="whatsapp" class="form-label"><b>Whatsapp</b></label>
                                <input type="text" id="whatsapp" name="whatsapp" placeholder="Whatsapp"
                                    class="form-control" value="{{ $settings ? $settings->whatsapp : '' }}">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="google" class="form-label"><b>Google</b></label>
                                <input type="text" id="google" name="google" placeholder="google"
                                    class="form-control" value="{{ $settings ? $settings->google : '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <div class="py-1">
                            <button type="submit" class="btn btn-sm btn-primary">Update Now</button>
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
