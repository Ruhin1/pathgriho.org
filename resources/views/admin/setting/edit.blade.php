@extends('layouts.admin.app')

@section('content')
<form action="{{ Route('admin.site_information.update', '0') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row g-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">{{ __('Update Settings') }}</h6>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-md-4 col-6">
                            <label for="title" class="form-label require"><b>Title</b></label>
                            <input type="text" required placeholder="title" class="form-control custom-input" id="title"
                                name="title" value="{{ $data ? $data->title : '' }}" minlength="6">
                        </div>
                        <div class="col-md-4 col-6">
                            <label for="primary_mobile" class="form-label require"><b>Primary Phone</b></label>
                            <input type="number" class="form-control custom-input" id="primary_mobile"
                                name="primary_mobile" value="{{ $data ? $data->primary_mobile : '' }}"
                                placeholder="Primary Phone">
                        </div>
                        <div class="col-md-4 col-6">
                            <label for="secondary_mobile" class="form-label require"><b>Secondary
                                    Phone</b></label>
                            <input type="number" class="form-control custom-input" id="secondary_mobile"
                                name="secondary_mobile" value="{{ $data ? $data->secondary_mobile : '' }}"
                                placeholder="Secondary Phone">
                        </div>
                        <div class="col-md-4 col-6">
                            <label for="primary_email" class="form-label require"><b>Primary Email</b></label>
                            <input type="email" class="form-control custom-input" id="primary_email"
                                name="primary_email" value="{{ $data ? $data->primary_email : '' }}"
                                placeholder="Primary Email">
                        </div>
                        <div class="col-md-4 col-6">
                            <label for="secondary_email" class="form-label require"><b>Secondary
                                    Email</b></label>
                            <input type="email" class="form-control custom-input" id="secondary_email"
                                name="secondary_email" value="{{ $data ? $data->secondary_email : '' }}"
                                placeholder="Secondary Email">
                        </div>
                        <div class="col-md-4 col-6">
                            <label for="address" class="form-label"><b>Address</b></label>
                            <input type="text" class="form-control custom-input" id="address" name="address"
                                value="{{ $data ? $data->address : '' }}" placeholder="Address">
                        </div>
                        <div class="col-md-4 col-6">
                            <label for="description" class="form-label"><b>Description</b></label>
                            <input type="text" class="form-control custom-input" id="description" name="description"
                                value="{{ $data ? $data->description : '' }}" placeholder="Description">
                        </div>
                        <div class="col-md-4 col-6">
                            <label for="meta_keyword" class="form-label"><b>Meta Keyword</b></label>
                            <input type="text" class="form-control custom-input" id="meta_keyword" name="meta_keyword"
                                value="{{ $data ? $data->meta_keyword : '' }}" placeholder="Meta Keyword">
                        </div>
                        <div class="col-md-4 col-6">
                            <label for="meta_description" class="form-label"><b>Meta Description</b></label>
                            <input type="text" class="form-control custom-input" id="meta_description"
                                name="meta_description" value="{{ $data ? $data->meta_description : '' }}"
                                placeholder="Meta Description">
                        </div>

                        <!-- Images Part -->
                        <div class="col-lg-4 col-sm-6">
                            <label for="favicon" class="form-label"><b>Favicon Image</b> <span class="text-danger">(32x32)</span></label>
                            <input class="form-control" type="file" id="favicon" name="favicon" {{ is_null($data) ||
                                !file_exists($data->favicon) ? 'required' : '' }}
                            accept="image/*">
                            @if ($data && file_exists($data->favicon))
                            <div>
                                <img class="img-contain" src="{{ asset($data->favicon) }}" height="50" alt="Favicon">
                            </div>
                            @endif
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <label for="logo" class="form-label"><b>Logo Image</b> <span class="text-danger">(250x150)</span></label>
                            <input class="form-control" type="file" id="logo" name="logo" {{ is_null($data) ||
                                !file_exists($data->logo) ? 'required' : '' }}
                            accept="image/*">
                            @if ($data && file_exists($data->logo))
                            <div>
                                <img class="img-contain" src="{{ asset($data->logo) }}" height="50" alt="Logo">
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label for="footer_logo" class="form-label"><b>Footer Logo</b> <span class="text-danger">(250x150)</span></label>
                            <input class="form-control" type="file" id="footer_logo" name="footer_logo"
                                accept="image/*">
                            @if ($data && file_exists($data->footer_logo))
                            <div>
                                <img class="img-contain" src="{{ asset($data->footer_logo) }}" height="50"
                                    alt="Footer Logo">
                            </div>
                            @endif
                        </div>
                        <div class="col-12">
                            <label for="socialLinks" class="form-label"><b>Socail Links</b></label>
                            <div class="row gx-3 gy-2">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span
                                            class="input-group-text text-white d-inline-flex gap-2 justify-content-center"
                                            style="background-color: #1877F2; width: 42px;"><i
                                                class="fab fa-facebook-f"></i></span>
                                        <input type="text" class="form-control" name="facebook_page"
                                            placeholder="https://www." value="{{ $data ? $data->facebook_page : '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text text-white d-inline-flex justify-content-center"
                                            style="background-color: #FF0000; width: 42px;"><i
                                                class="fab fa-youtube"></i></span>
                                        <input type="text" class="form-control" name="youtube"
                                            placeholder="https://www." value="{{ $data ? $data->youtube : '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text text-white d-inline-flex justify-content-center"
                                            style="background-color: #1D9BF0; width: 42px;"><i
                                                class="fab fa-twitter"></i></span>
                                        <input type="text" class="form-control" name="twitter"
                                            placeholder="https://www." value="{{ $data ? $data->twitter : '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text text-white d-inline-flex justify-content-center"
                                            style="background-color: #0077B7; width: 42px;"><i
                                                class="fab fa-linkedin-in"></i></span>
                                        <input type="text" class="form-control" name="linkedin"
                                            placeholder="https://www." value="{{ $data ? $data->linkedin : '' }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group">
                                        <span class="input-group-text text-white d-inline-flex justify-content-center"
                                            style="background-color: #4f00b7; width: 42px;"><i
                                                class="fab fa-instagram"></i></span>
                                        <input type="text" class="form-control" name="instagram"
                                            placeholder="https://www." value="{{ $data ? $data->instagram : '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end p-3">
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection