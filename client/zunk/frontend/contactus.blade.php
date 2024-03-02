@extends('layouts.frontend.app')
@section('route_name') Contact US @endsection
@section('contents')
<section>
    <div class="container">
        <h1
        class="my-10 text-3xl md:text-5xl font-oswald font-semibold text-center text-secondary capitalize"
      >
      Contact Us
      </h1>
      <div class="text-md opacity-80 font-oswald text-center">
        <p>Any questions or remarks? Just write us a message!<br/><br/>

            Thank you for your interest in contacting JAAGO Foundation. We value your feedback, suggestions, and inquiries, and we are committed to providing you with the information and support you need.<br/><br/>
            
            To contact us, please fill out the form on this page with your name, email address, and message. We will respond to your inquiry as soon as possible, usually within 24-48 hours.<br/><br/>
            
            We also encourage you to follow us on social media for updates on our programs, events, and initiatives. You can find us on Facebook, Twitter, and Instagram using the links at the bottom of this page.<br/><br/>
            
            Thank you for your interest in JAAGO Foundation. We look forward to hearing from you soon!</p>
      </div>
      <div class="flex flex-col xl:flex-row my-20">
        <!-- ----------------  -->
        <div class="w-full  xl:w-50/100  font-oswald bg-black text-primary px-3 md:px-20 pt-20 pb-32">
            <h2 class=" text-4xl font-bold mb-4 text-center capitalize ">Contact Information</h2>
            <p class="text-xl text-center"> Fill up the form and our Team will get back to you soon.</p>
            <div class="mt-20 flex flex-col gap-y-7">
                <p class="text-xl"><i class="ri-map-pin-2-line text-2xl  mr-2"></i> JAAGO Foundation, House #57 Road #7/B Block #H Banani, 1213, Bangladesh</p>
                <p class="text-xl"><i class="ri-mail-line  mr-2 text-2xl"></i><a class="opacity-80 hover:opacity-100" href="">info@jaago.com.bd</a></p>
                <p class="text-xl" ><i class="ri-phone-fill  mr-2 text-2xl"></i><a class="opacity-80 hover:opacity-100" href="">+8801766666654</a></p>
            </div>
            <div class="flex gap-3 mt-8">
                <!-- ---------------- -->
                <a class="py-1 px-2 rounded-md bg-[#207BF3] text-2xl text-white duration-500 hover:opacity-80" href="#"><i class="ri-facebook-circle-line"></i></a>
                <!-- ---------------- -->
                <a class="py-1 px-2 rounded-md bg-[#000000] text-2xl text-white duration-500 hover:opacity-80" href="#"><i class="ri-twitter-x-line"></i></a>
                <!-- ---------------- -->
                <a class="py-1 px-2 rounded-md bg-[#FF0000] text-2xl text-white duration-500 hover:opacity-80" href="#"><i class="ri-youtube-line"></i></a>
                <!-- ---------------- -->
                <a class="py-1 px-2 rounded-md bg-[#F4009E] text-2xl text-white duration-500 hover:opacity-80" href="#"><i class="ri-instagram-line"></i></a>
            </div>
        </div>    
        <!-- ----------------  -->
        <div class="w-full xl:w-50/100 bg-slate-300 px-2 md:px-5 pt-12 pb-8 ">
          <h2 class="text-4xl font-oswald font-bold text-primary">Contact Us</h2>
          <form class="mt-6" action="" method="">
            <div class="my-3">
              <label class="font-bold text-xl block mb-2" for="name">Name <span class="text-sm font-oswald text-red-600">(Required)</span></label>
              <input class="p-2 w-full border outline-none focus:border-stone-400" type="text" name="" placeholder="Full Name" required>
              <strong class="text-red-500 mt-1 hidden">Name is unvalid</strong>
            </div>
            <div class="my-3">
              <label class="font-bold text-xl block mb-2" for="name">Email <span class="text-sm font-oswald text-red-600">(Required)</span></label>
              <input class="p-2 w-full border outline-none focus:border-stone-400" type="text" name="" placeholder="Email" required>
              <strong class="text-red-500 mt-1 hidden">email is unvalid</strong>
            </div>
            <div class="my-3">
              <label class="font-bold text-xl block mb-2" for="name">Phone <span class="text-sm font-oswald text-red-600">(Required)</span></label>
              <input class="p-2 w-full border outline-none focus:border-stone-400" type="number" name="" placeholder="Phone" required>
              <strong class="text-red-500 mt-1 hidden">phone is unvalid</strong>
            </div>
            <div class="my-3">
              <label class="font-bold text-xl block mb-2" for="name">Message <span class="text-sm font-oswald text-red-600">(Required)</span></label>
              <textarea class="p-2 w-full border outline-none focus:border-stone-400" name="" placeholder="write your massage" required cols="30" rows="10"></textarea>
              <strong class="text-red-500 mt-1 hidden">phone is unvalid</strong>
            </div>
            <button
          class="font-bold text-xl  text-slate-200 px-8 duration-500 hover:tracking-wide pt-2 pb-2.5 rounded-md bg-primary shadow-primary-deep uppercase"
        >
          submit
        </button>
          </form>
        </div>
      </div>
      <h1
        class="mb-12 text-3xl md:text-5xl font-oswald font-semibold text-center text-secondary capitalize"
      >
      Find Us on Google Map
      </h1>
      <div class="w-full mb-16">
        <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115947.87529012056!2d90.313918001751!3d24.748462222447063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37564f1007ad9b59%3A0x79a59cb060e32d6c!2sMymensingh!5e0!3m2!1sen!2sbd!4v1707327027404!5m2!1sen!2sbd"  height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      </div>
</section>
@endsection