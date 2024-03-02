@extends('layouts.admin.app')

@section('content')
<div class="row g-3">
    <div class="col-12">
        <form action="{{ Route('admin.trams-and-conditions.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">Trams And Conditions Edit</h6>
                        <a href="{{ Route('admin.trams-and-conditions.index') }}" class="btn btn-primary btn-sm text-uppercase">Go
                            Back</a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="title" class="form-label require"><b> Title</b></label>
                            <input type="text" placeholder="Title" class="form-control custom-input" id="title"
                                name="title" value="{{ $data->title }}">
                        </div>  
                        <div class="col-12">
                            <label for="serial" class="form-label require"><b>Priority serial</b></label>
                            <input type="number" value="{{ $data->serial }}" class="form-control custom-input input-number" id="serial" name="serial">
                        </div> 
                        <div class="col-12">
                            <label for="description" class="form-label"><b> Description</b></label>
                            <textarea name="description" id="description" class="description" cols="30" rows="10" required placeholder="Write here your Descriptions">{!! $data->description !!}</textarea>
                        </div> 
                    </div>
                </div>
                <div class="card-footer text-end px-3 py-2">
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection