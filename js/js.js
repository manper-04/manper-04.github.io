
$(function() {
	$.scrollUp({
	  scrollImg: true
	});

window.addEventListener('load',() => {
	setTimeout(carga,1500);
	function carga(){
	 $("#preloader").addClass("d-none");
		document.getElementById('contenido').className = '';
		$("#carouselExampleFade").addClass("animated fadeInDown");
		$("#sec-habilidades").addClass("animated fadeInLeft");
		$("#sec-habilidades2").addClass("animated fadeInRight");
	}
});
    $(function(){
  $.scrollUp({
      scrollImg: true
  });

  var scroll = new SmoothScroll('a[href*="#"]', {
	// Selectors
	ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
	header: null, // Selector for fixed headers (must be a valid CSS selector)

	// Speed & Easing
	speed: 500, // Integer. How fast to complete the scroll in milliseconds
	offset: 0, // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
	easing: 'easeInOutCubic', // Easing pattern to use
	customEasing: function(time) {

	  // Function. Custom easing pattern
	  // If this is set to anything other than null, will override the easing option above

	  // return <your formulate with time as a multiplier>

	  // Example: easeInOut Quad
	  return time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time;

	},

	// Callback API

	before: function(anchor, toggle) {}, // Callback to run before scroll
	after: function(anchor, toggle) {} // Callback to run after scroll
  });

  $(document).ready(function(e) {

	before: function (anchor, toggle) {}, // Callback to run before scroll
	after: function (anchor, toggle) {} // Callback to run after scroll
});

	$(document).ready(function(e){

	$('.cntl').cntl({

	// The amount of "scroll padding" to allow 
	// The more, the later the state will be revealed
	revealbefore: 300,

	// The animate class
	// This class should have animation rules in css
	anim_class: 'cntl-animate',

	// A callback once the state has been revealed
	onreveal: null

	});

	$('.cntl').cntl({

	  // The amount of "scroll padding" to allow
	  // The more, the later the state will be revealed
	  revealbefore: 300,

	  // The animate class
	  // This class should have animation rules in css
	  anim_class: 'cntl-animate',

	  // A callback once the state has been revealed
	  onreveal: null

	});

  });