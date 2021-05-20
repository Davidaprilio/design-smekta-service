$(document).ready(function() {
	const t = window.location.href ;
  // var t = window.location.origin + window.location.pathname;
  $(".body .sideBar .nav .nav-item .nav-link").each((function() {
    if (this.href.toLowerCase() === t.toLowerCase() || this.href.toLowerCase() + '#' == t.toLowerCase()) {
      $(this).addClass("active")
	  }
	}));
  $(".body .sideBar .nav .nav-item a.nav-link").click(function(event) {
    $('.navbar .loading').addClass('show');
  	event.preventDefault();
  	window.location.href = this.href;
	});
})
