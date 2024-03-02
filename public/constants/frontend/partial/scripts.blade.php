<!-- Custom Scripts hidden -->
<script type="module" src="{{asset('js/extends.js')}}"></script>

<script
  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
  integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
></script>

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