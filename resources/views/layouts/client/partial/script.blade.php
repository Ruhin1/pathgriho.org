
    <!-- Feedback scripts -->
    <!-- Custom Scripts hidden -->
<script type="module" src="{{ asset('assets/js/extends.js') }}"></script>

    <!-- jQuery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery-compat/3.0.0-alpha1/jquery.min.js"
      integrity="sha512-4GsgvzFFry8SXj8c/VcCjjEZ+du9RZp/627AEQRVLatx6d60AUnUYXg0lGn538p44cgRs5E2GXq+8IOetJ+6ow=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

<script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
></script>

<!-- Font Awesome Kit -->
<script src='https://kit.fontawesome.com/11e3e6af90.js' crossorigin='anonymous'></script> 

<script>
  $(document).ready(function () {
    $(".owl-carousel").owlCarousel({
      margin: 20,
      loop: true,
      autoplay: true,
      navigation: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1,
          nav: false,
        },
        600: {
          items: 1,
          nav: false,
        },
        1000: {
          items: 1,
          nav: false,
        },
      },
    });

    $(".owl-nav").removeClass("disabled");
    $(".owl-dots").removeClass("disabled");
  });

  function childMenu(event) {
    const child = event.target.closest("li.groupchild");
    child.classList.toggle("active-child-nav");
  }
</script>