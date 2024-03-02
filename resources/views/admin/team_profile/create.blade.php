@extends('layouts.admin.app')

@section('content')
<div class="border">
<div class="border d-flex justify-content-between p-2 card-header">
<h6 class="h6 mb-0 text-uppercase ">Add Testimonial</h6>
<a href="" class="btn btn-primary btn-sm text-uppercase">
    Go Back 
</a>
</div>
<form class="mt-5 mx-3 p-2"  action="{{Route('admin.teamprofile.store')}}" method="POST" enctype="multipart/form-data"> 
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
      <input type="text" name="name" class="form-control" placeholder="Enter Name...." value="">
    </div>
    <div class="mb-3">
        <label for="positon" class="form-label">Positon<span class="text-danger">*</span></label>
        <input type="text" name="positon" class="form-control" placeholder="Enter Name...." value="">
      </div>
    <div class="mb-3">
        <label for="image" class="form-label require"> Profile Image
        <span class="text-danger">(300x260)</span>
        </label>
    <input type="file" class="form-control custom-input input-number"  name="image" placeholder="Select here...">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Management Type<span class="text-danger">*</span></label>
    <select class="form-select" name="type" aria-label="Default select example" id="type1" onclick="toggleInput(this)">
        <option  selected disabled>Open this select menu</option>
        <option value="1" onclick="toggleInput(this)">One</option>
        <option value="fgggggh" onclick="toggleInput(this)">Two</option>
      </select>
    </div>
    <div class="mb-3">
        <label for="type" class="form-label require">Add New Management Type</label>
    <input type="text" name="newtype" class="form-control" placeholder="Enter New type Name...." value="" id="type2" onclick="toggleInput(this)">
    </div>
    <div class=" text-end px-3 py-2">
        <button type="submit" class="btn btn-primary btn-sm">Update</button>
    </div>
  </form>
</div>
@endsection

@push('js')
<script type="text/javascript">
 function toggleInput(input) {
  if (input.id === "type1") {
    document.getElementById("type2").disabled = !document.getElementById("type2").disabled;
    
  } else {
    document.getElementById("type1").disabled = !document.getElementById("type1").disabled;
    
  }
  if (select.id === "type1") {
    document.getElementById("type2").disabled = !document.getElementById("type2").disabled;
  } else {
    document.getElementById("type1").disabled = !document.getElementById("type1").disabled;
  }
}   
</script>
@endpush