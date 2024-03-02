@extends('layouts.admin.app')

@push('css')
<style>
    .hidden {
      display: none;
    }
  </style>
    <link rel="stylesheet" href="{{ asset('backend/css/jquery.minicolors.css') }}">
@endpush

@section('content')
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="h6 mb-0 py-5px">Update Admin Settings</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3 mt-3">
                            <div class="col-12">
                                <h6 class="h6 mb-0 py-5px">Additional setting</h6>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="title" class="form-label"><b>Favicon</b></label>
                                <input type="file" id="logo" name="logo" class="form-control" accept="image/*"
                                    >
                                    <div class="pt-2">
                                        <img src="" height="50" alt="Logo">
                                    </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="title" class="form-label"><b>Meta Title</b></label>
                                <input type="text" id="title" name="title" placeholder="Write hare..."
                                    class="form-control" value="" required>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="title" class="form-label"><b>Meta Description</b></label>
                                <input type="text" id="title" name="title" placeholder="Write hare..."
                                    class="form-control" value="" required>
                            </div>
                             {{-- ------------  --}}
                            <div class="col-12">
                                <h6 class="h6 mb-0 py-5px">Navber Settings</h6>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="title" class="form-label"><b>Navber Logo</b></label>
                                <input type="file" id="logo" name="logo" class="form-control" accept="image/*"
                                    >
                                    <div class="pt-2">
                                        <img src="" height="50" alt="Logo">
                                    </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="title" class="form-label"><b>Navber Button Text</b></label>
                                <input type="text" id="title" name="title" placeholder="Write button text..."
                                    class="form-control" value="" required>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="title" class="form-label"><b>Navber Button Url</b></label>
                                <input type="text" id="title" name="title" placeholder="#"
                                    class="form-control" value="" required>
                            </div>
                        </div>
                        {{-- ------------  --}}
                        <div class="row g-3 mt-3">
                            <div class="col-12">
                                <h6 class="h6 mb-0 py-5px">Footer Top Section</h6>
                                <div class="row g-3 mt-1">
                                    <p class="p  col-12">Frist Division</p>
                                    <div class="col-md-4 col-sm-6">
                                        <label for="title" class="form-label"><b>Title</b></label>
                                        <input type="text" id="title" name="title" placeholder="Write hare..."
                                            class="form-control" value="" required>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label for="title" class="form-label"><b>Description</b></label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required>Write Description...</textarea>  
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label for="title" class="form-label"><b>Button Text</b></label>
                                        <input type="text" id="title" name="title" placeholder="Write hare..."
                                            class="form-control" value="" required>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label for="title" class="form-label"><b>Button Url</b></label>
                                        <input type="text" id="title" name="title" placeholder="#"
                                            class="form-control" value="" required>
                                    </div>
                                </div>
                                <div class="row g-3 mt-1">
                                    <p class="p  col-12">Second Division</p>
                                    <div class="col-md-4 col-sm-6">
                                        <label for="title" class="form-label"><b>Title</b></label>
                                        <input type="text" id="title" name="title" placeholder="Write hare..."
                                            class="form-control" value="" required>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label for="title" class="form-label"><b>Description</b></label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required>Write Description...</textarea>  
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label for="title" class="form-label"><b>Button Text</b></label>
                                        <input type="text" id="title" name="title" placeholder="Write hare..."
                                            class="form-control" value="" required>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label for="title" class="form-label"><b>Button Url</b></label>
                                        <input type="text" id="title" name="title" placeholder="#"
                                            class="form-control" value="" required>
                                    </div>
                                </div>
                                <div class="row g-3 mt-1">
                                    <p class="p  col-12">Third Division</p>
                                    <div class="col-md-4 col-sm-6">
                                        <label for="title" class="form-label"><b>Title</b></label>
                                        <input type="text" id="title" name="title" placeholder="Write hare..."
                                            class="form-control" value="" required>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label for="title" class="form-label"><b>Description</b></label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required>Write Description...</textarea>  
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label for="title" class="form-label"><b>Button Text</b></label>
                                        <input type="text" id="title" name="title" placeholder="Write hare..."
                                            class="form-control" value="" required>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label for="title" class="form-label"><b>Button Url</b></label>
                                        <input type="text" id="title" name="title" placeholder="#"
                                            class="form-control" value="" required>
                                    </div>
                                </div>
                            </div>

                        </div>
                        {{-- ------------  --}}
                        {{-- ------------  --}}
                        <div class="row g-3 mt-3">
                            <div class="col-12">
                                <h6 class="h6 mb-0 py-5px">Footer Bottom Section</h6>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="title" class="form-label"><b>Fotter Logo</b></label>
                                <input type="file" id="logo" name="logo" class="form-control" accept="image/*"
                                    >
                                    <div class="pt-2">
                                        <img src="" height="50" alt="Logo">
                                    </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="title" class="form-label"><b>Fotter Description</b></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required>Write hare...</textarea>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="title" class="form-label"><b>Facebook Page Iframe </b></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required>Paste Iframe code...</textarea>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="title" class="form-label"><b>Contact Us  Address</b></label>
                                <input type="text" id="title" name="title" placeholder="Write hare..."
                                    class="form-control" value="" required>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="title" class="form-label"><b>Contact Us Email Address</b></label>
                                <input type="email" id="title" name="title" placeholder="Write hare..."
                                    class="form-control" value="" required>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="title" class="form-label"><b>Contact Us Mobile Number</b></label>
                                <input type="number" id="title" name="title" placeholder="017xx-xxxxxx"
                                    class="form-control" value="" required>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="title" class="form-label"><b>Facebook</b></label>
                                <input type="text" id="title" name="title" placeholder="#"
                                    class="form-control" value="" required>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="title" class="form-label"><b>Youtube</b></label>
                                <input type="text" id="title" name="title" placeholder="#"
                                    class="form-control" value="" required>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="title" class="form-label"><b>Twitter</b></label>
                                <input type="text" id="title" name="title" placeholder="#"
                                    class="form-control" value="" required>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="title" class="form-label"><b>Instragram</b></label>
                                <input type="text" id="title" name="title" placeholder="#"
                                    class="form-control" value="" required>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="title" class="form-label"><b>Slack</b></label>
                                <input type="text" id="title" name="title" placeholder="#"
                                    class="form-control" value="" required>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label for="title" class="form-label"><b>Footer Copyright Text</b></label>
                                <input type="text" id="title" name="title" placeholder="Write hare"
                                    class="form-control" value="" required>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-10 col-sm-6">
                                    <label for="title" class="form-label"><b>About Us Link Title</b></label>
                                    <input type="text" id="title" name="title" placeholder="Write hare"
                                        class="form-control" value="" required>
                                </div>
                                <div class="col-md-2 col-sm-6">
                                  <i  style="cursor: pointer" class=" h3 mt-4 pt-2 mx-5 fas fa-plus " onclick="addInputElements()"></i>
                                </div>
                                <div row g-3 id="inputsContainer">
                                    {{-- ----------- --}}
                                </div>
                            </div>
                        {{-- ------------  --}}
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

<script>
    let clickCount = 0;
  
    function addInputElements() {      
      const inputsContainer = document.getElementById("inputsContainer");
      clickCount++;

      const text = document.createElement("h6"); 
      text.classList.add("my-3");
      text.innerHTML = "Add New";

      const maindiv1 = document.createElement("div");
      maindiv1.appendChild(text);
      const div1 = document.createElement("div");
      maindiv1.classList.add("col-12","my-2");
      const lable1 = document.createElement("Label");
      lable1.classList.add("form-label");
      //lable1.setAttribute("for","title");
      lable1.innerHTML = "Link Title";
      const input1 = document.createElement("input");
      input1.classList.add('form-control');
      input1.type = "Link Title";
      input1.placeholder = "Write hare...";
      div1.appendChild(lable1);
      div1.appendChild(input1);
      maindiv1.appendChild(div1);
      
      const maindiv2 = document.createElement("div");
      const div2 = document.createElement("div");
      maindiv2.classList.add("col-12","my-2");
      const lable2 = document.createElement("Label");
      lable2.classList.add("form-label");
      //lable2.setAttribute("for","url");
      lable2.innerHTML = "Link Url";
      const input2 = document.createElement("input");
      input2.classList.add('form-control');
      input2.type = "text";
      input2.placeholder = "#";
      div2.appendChild(lable2)
      div2.appendChild(input2);
      maindiv2.appendChild(div2);
      
      const maindiv3 = document.createElement("div");
      const div3 = document.createElement("div");
      maindiv3.classList.add("col-12","my-2");
      const lable3 = document.createElement("Label");
      lable3.classList.add("form-label");
      //lable3.setAttribute("for","Serial");
      lable3.innerHTML = "Serial";
      const input3 = document.createElement("input");
      input3.classList.add('form-control');
      input3.type = "text";
      input3.placeholder = "write hare...";
      div3.appendChild(lable3);
      div3.appendChild(input3);
      maindiv3.appendChild(div3);
  
      inputsContainer.appendChild(maindiv1);
      inputsContainer.appendChild(maindiv2);
      inputsContainer.appendChild(maindiv3);
  
      if (clickCount === 1) {
        maindiv1.classList.add("hidden");
        maindiv2.classList.add("hidden");
        maindiv3.classList.add("hidden");
      }
    }
  </script>
@endpush
