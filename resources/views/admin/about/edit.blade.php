@extends('layouts.admin.app')

@push('css')
    <link rel="stylesheet" href="{{ asset('backend/css/jquery.minicolors.css') }}">
@endpush

@section('content')
    <form action="{{ Route('admin.about.update', isset($data->id) ? $data->id : '1') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="h6 mb-0 py-5px">
                            @if ($data)
                                Update About
                            @else   
                                Create About
                            @endif
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-4 col-6">
                                <label for="title" class="form-label require"><b>About Faq Heading</b></label>
                                <input type="text" required placeholder="Contact Heading" class="form-control custom-input" id="title" name="title" value="{{ $data ? $data->title : '' }}" minlength="6" maxlength="254" />
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="faq_title" class="form-label require"><b>About Faq Title</b></label>
                                <input type="text" required placeholder="About Faq Title" class="form-control custom-input" id="faq_title" name="faq_title" value="{{ $data ? $data->faq_title : '' }}" minlength="6" maxlength="254" />
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="white_faq_name" class="form-label require"><b>About White Faq Name</b></label>
                                <input type="text" required placeholder="About About White Faq Name" class="form-control custom-input" id="white_faq_name" name="white_faq_name" value="{{ $data ? $data->white_faq_name : '' }}" minlength="6" maxlength="254" />
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="black_faq_name" class="form-label require"><b>About About Black Faq Name</b></label>
                                <input type="text" required placeholder="About About Black Faq Name" class="form-control custom-input" id="black_faq_name" name="black_faq_name" value="{{ $data ? $data->black_faq_name : '' }}" minlength="6" maxlength="254" />
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="social_work_heading" class="form-label require"><b>About Social Work Heading</b></label>
                                <input type="text" required placeholder="About Social Work Heading" class="form-control custom-input" id="social_work_heading" name="social_work_heading" value="{{ $data ? $data->social_work_heading : '' }}" minlength="6" maxlength="254" />
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="social_work_title" class="form-label require"><b>About Social Work Title</b></label>
                                <input type="text" required placeholder="About Social Work Title" class="form-control custom-input" id="social_work_title" name="social_work_title" value="{{ $data ? $data->social_work_title : '' }}" minlength="6" maxlength="254" />
                            </div> 
                            <div class="col-md-4 col-6">
                                <label for="link" class="form-label require"><b>About Join Button Link</b></label>
                                <input type="text" required placeholder="About Social Work Title" class="form-control custom-input" id="link" name="link" value="{{ $data ? $data->link : '' }}" minlength="6" maxlength="254" />
                            </div> 
                            <div class="col-12">
                                <label for="title" class="form-label require">
                                    <b>About Description</b>
                                </label>
                                <textarea id="description" name="description" cols="30" rows="10" class="description">
                                    {!! $data ? $data->description : '' !!}
                                </textarea>
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="title" class="form-label require">
                                    <b>White Faq Description</b>
                                </label>
                                <textarea id="white_faq_description" name="white_faq_description" cols="30" rows="10" class="short_description">
                                    {!! $data ? $data->white_faq_description : '' !!}
                                </textarea>
                            </div> 
                            <div class="col-md-4 col-6">
                                <label for="title" class="form-label require">
                                    <b>Black Faq Description</b>
                                </label>
                                <textarea id="black_faq_description" name="black_faq_description" cols="30" rows="10" class="short_description">
                                    {!! $data ? $data->black_faq_description : '' !!}
                                </textarea>
                            </div> 
                            <div class="col-md-4 col-6">
                                <label for="title" class="form-label require">
                                    <b>Social Work Description</b>
                                </label>
                                <textarea id="social_work_description" name="social_work_description" cols="30" rows="10" class="short_description">
                                    {!! $data ? $data->social_work_description : '' !!}
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