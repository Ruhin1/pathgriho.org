@php $additional_resource = fn($key) => App\Helper\AdditionalResources::appInfo($key); @endphp
@extends('layouts.client.app') @section('page-title') || Contact @endsection

@section('contents')

<!-- Main Contents -->
<main class="mt-20">
  <div class="container font-oswald">
    <h1
      class="mt-10 text-3xl md:text-5xl font-oswald font-semibold text-center text-primary capitalize"
    >
      {{ $contact->heading }}
    </h1>
    <h2
      class="pt-4 pb-5 mb-5 text-3xl md:text-2xl font-oswald font-semibold text-center text-secondary capitalize border-b border-solid border-slate-300/60"
    >
      {{ $contact->title }}
    </h2>
    <div class="text-md opacity-80 font-oswald text-center">
      <div class="text-lg text-justify">{!! $contact->description !!}</div>
    </div>

    <!-- Contact Feedback Form -->
    <div
      class="flex flex-col xl:flex-row my-20 border-slate-200 border-solid border shadow-[0_2px_4px_0_rgba(0,0,0,0.12)]"
    >
      <!-- ----------------  -->
      <div class="w-full bg-primary text-slate-100 p-4 md:p-8">
        <h2
          class="text-4xl font-bold mb-4 text-center capitalize border-b border-solid border-slate-300 w-full pb-4"
        >
          {{ $contact->form_heading }}
        </h2>
        <div class="text-xl text-justify py-6">
          {!! $contact->form_description !!}
        </div>
        <div class="flex flex-col gap-y-4">
          <p class="text-xl pt-4">
            <i class="fas fa-address-card pr-3"></i>
            {{ $additional_resource('address') }}
          </p>
          <p class="text-xl flex flex-col">
            <a
              class="opacity-80 hover:opacity-100"
              href="mailto:{{ $additional_resource('primary_email') }}"
              ><i class="fas fa-envelope-open-text pr-2"></i>{{
              $additional_resource('primary_email') }}</a
            >
            <a
              class="opacity-80 hover:opacity-100"
              href="mailto:{{ $additional_resource('secondary_email') }}"
              ><i class="fas fa-envelope-open-text pr-2"></i>{{
              $additional_resource('secondary_email') }}</a
            >
          </p>
          <p class="text-xl flex flex-col">
            <a
              class="opacity-80 hover:opacity-100"
              href="phone:{{ $additional_resource('primary_phone') }}"
              ><i class="fas fa-phone-volume pr-2"></i>{{
              $additional_resource('primary_phone') }}</a
            >
            <a
              class="opacity-80 hover:opacity-100"
              href="phone:{{ $additional_resource('secondary_phone') }}"
              ><i class="fas fa-phone-volume pr-2"></i>{{
              $additional_resource('secondary_phone') }}</a
            >
          </p>
        </div>
      </div>
      <!-- ----------------  -->
      <div class="w-full p-4 md:p-8">
        <h2
          class="text-4xl font-oswald font-bold text-primary border-b border-solid border-slate-300 w-full pb-4 text-center"
        >
          {{ $contact->form_title }}
        </h2>
        <form class="mt-6" action="" method="POST" id="contact-form">
          <div class="py-1.5">
            <label class="block mb-2" for="name">
              <span class="font-semibold text-xl text-slate-700">Name</span>
              <span class="text-2xl text-red-600 font-poppins font-bold"
                >*</span
              ></label
            >
            <input
              class="p-2 w-full border outline-none bg-slate-100 focus:border-red-400 border-slate-200 border-solid shadow-[1px_1px_4px_0_rgba(0,0,0,0.12)] font-mono"
              type="text"
              name="name"
              placeholder="Full Name"
              required
            />
            <strong class="text-red-500 mt-1 hidden">Name is unvalid</strong>
          </div>
          <div class="py-1.5">
            <label class="block mb-2" for="name">
              <span class="font-semibold text-xl text-slate-700">E-mail</span>
              <span class="text-2xl text-red-600 font-poppins font-bold"
                >*</span
              ></label
            >
            <input
              class="p-2 w-full border outline-none bg-slate-100 focus:border-red-400 border-slate-200 border-solid shadow-[1px_1px_4px_0_rgba(0,0,0,0.12)] font-mono"
              type="text"
              name="phone"
              placeholder="e.g. example@gmail.com"
              required
            />
            <strong class="text-red-500 mt-1 hidden">E-mail is unvalid</strong>
          </div>
          <div class="py-1.5">
            <label class="block mb-2" for="name">
              <span class="font-semibold text-xl text-slate-700"
                >Mobile Number</span> 
                <span class="text-2xl text-red-600 font-poppins font-bold"
                >*</span
              ></label
            >
            <input
              class="p-2 w-full border outline-none bg-slate-100 focus:border-red-400 border-slate-200 border-solid shadow-[1px_1px_4px_0_rgba(0,0,0,0.12)] font-mono"
              type="text"
              name="email"
              placeholder="+88 (018) 19xxxxxx"
              required
            />
            <strong class="text-red-500 mt-1 hidden"
              >Mobile Number is unvalid</strong
            >
          </div>
          <div class="py-1.5">
            <label class="block mb-2" for="name">
              <span class="font-semibold text-xl text-slate-700">Address</span>
              <span class="text-2xl text-red-600 font-poppins font-bold"
                >*</span
              ></label
            >
            <input
              class="p-2 w-full border outline-none bg-slate-100 focus:border-red-400 border-slate-200 border-solid shadow-[1px_1px_4px_0_rgba(0,0,0,0.12)] font-mono"
              type="text"
              name="address"
              placeholder="e.g. 15/9 Cicada, New York, USA."
              required
            />
            <strong class="text-red-500 mt-1 hidden">Address is unvalid</strong>
          </div>
          <div class="my-3">
            <label class="block mb-2" for="name">
              <span class="font-semibold text-xl text-slate-700">Message</span>
              <span class="text-2xl text-red-600 font-poppins font-bold"
                >*</span
              ></label
            >
            <textarea
              class="p-2 w-full border outline-none bg-slate-100 focus:border-red-400 border-slate-200 border-solid shadow-[1px_1px_4px_0_rgba(0,0,0,0.12)] font-mono"
              name="message"
              placeholder="write your massage"
              required
              cols="30"
              rows="4"
            ></textarea>
            <strong class="text-red-500 mt-1 hidden">phone is unvalid</strong>
          </div>
          <div class="flex w-full items-end justify-end pt-4">
            <button
              class="font-bold text-xl text-slate-200 px-8 duration-500 hover:tracking-wide pt-2 pb-2.5 rounded-md bg-primary hover:drop-shadow-primary capitalize hover:bg-secondary"
            >
              send now <i class="far fa-paper-plane ml-6"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="w-full">
    <h1 class="border-b border-solid border-slate-300 pb-6 mb-6 text-3xl md:text-5xl font-oswald font-semibold text-center text-secondary capitalize">
      {{ $contact->map_title }}
    </h1>

    <div class="w-full mb-0" id="contact-map-iframe">
      {!! $additional_resource('map_url') !!}
    </div>
  </div>
</main>

@endsection 

@push('style')
<style>
  #contact-map-iframe iframe {
    width: 100% !important;
    min-height: 80vh !important;
    height: 100%;
  }
</style>
@endpush

@push('js')
<script>
  $(document).ready(function () {
    $("#main-header").removeClass("transparent-header dark-header");

    $.ajaxSetup({
      headers: {
        "X-CSRF-TOKEN": "{{ csrf_token() }}",
      },
    });

    $("#contact-form").submit(function (event) {
      event.preventDefault();

      $.ajax({
        url: "{{ Route('frontend.store_client_message') }}",
        method: "POST",
        data: $(this).serialize(),
        success: function (data) {
          alert(data.message);
          event.target.reset();
        },
        error: function (error) {
          alert(
            "There is an serious error occurred, Please try again." +
              "Error: " +
              error?.message
          );
        },
      });
    });
  });
</script>

@endpush
