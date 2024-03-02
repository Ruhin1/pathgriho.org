@extends('layouts.admin.app') @section('content')
<div class="border">
  <div class="border d-flex justify-content-between p-2 card-header">
    <h6 class="h6 mb-0 text-uppercase">Add Top section content</h6>
  </div>
  <form
    class="mt-5 mx-3"
    action="{{ route('admin.team-top.update','') }}"
    method="POST"
    enctype="multipart/form-data"
  >
    @csrf
    <div class="row">
      <div class="mb-3 col-6 col-md-12">
        <label for="title" class="form-label">Main Title</label>
        <input
          type="text"
          name="title"
          class="form-control"
          placeholder="Enter Title...."
          value="{{$data['title']}}"
        />
      </div>
      <div class="mb-3 col-6 col-md-4">
        <label for="first_title" class="form-label">First Heading</label>
        <input
          type="text"
          name="first_title"
          class="form-control"
          placeholder="Enter Heading..."
          value="{{$data['first_title']}}"
        />
      </div>
      <div class="mb-3 col-6 col-md-4">
        <label for="second_title" class="form-label">Second Heading</label>
        <input
          type="text"
          name="second_title"
          class="form-control"
          placeholder="Enter Heading..."
          value="{{$data['second_title']}}"
        />
      </div>
      <div class="mb-3 col-6 col-md-4">
        <label for="third_title" class="form-label">Third Heading</label>
        <input
          type="text"
          name="third_title"
          class="form-control"
          placeholder="Enter Heading..."
          value="{{$data['third_title']}}"
        />
      </div>
      <div class="mb-3 col-6 col-md-4">
        <label for="fourth_title" class="form-label">Fourth Heading</label>
        <input
          type="text"
          name="fourth_title"
          class="form-control"
          placeholder="Enter Heading..."
          value="{{$data['fourth_title']}}"
        />
      </div>
      <div class="mb-3 col-6 col-md-4">
        <label for="btn_title" class="form-label">Button Heading</label>
        <input
          type="text"
          name="btn_title"
          class="form-control"
          placeholder="Enter Heading..."
          value="{{$data['btn_title']}}"
        />
      </div>
      <div class="mb-3 col-6 col-md-4">
        <label for="btn_link" class="form-label">Button Link</label>
        <input
          type="text"
          name="btn_link"
          class="form-control"
          placeholder="Enter Heading..."
          value="{{$data['btn_link']}}"
        />
      </div>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea name="description" class="description" cols="30" rows="10">
          {{ $data['description'] }}  
        </textarea
      >
    </div>
    <div class="mb-3">
      <label for="image" class="form-label require">
        Banner Image
        <span class="text-danger">(1920x700)</span>
      </label>
      <input
        type="file"
        class="form-control custom-input input-number"
        name="image"
        placeholder="Select here..."
      />
    </div>
    <div class="row">
      <div class="col-12">
        <img src="{{asset($data['image'])}}" height="200" alt="image" />
      </div>
    </div>
    <div>
      <input type="hidden" name="oldimage" value="{{$data['image']}}" />
    </div>
    <div class="text-end px-3 py-2">
      <button type="submit" class="btn btn-primary btn-sm card-footer">
        Update
      </button>
    </div>
  </form>
</div>
@endsection

@push('js')
<script type="text/javascript"></script>
@endpush
