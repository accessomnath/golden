// Required Java Script


    $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
	
	/*Drop-down-end*/
	


$(document).ready(function(){
    $('#searchbar-custom').click(function(event){
        event.stopPropagation();
         $(".searchbar-custom-open").toggle();
    });
    $(".searchbar-custom-open").on("click", function (event) {
        event.stopPropagation();
    });
});
$(document).on("click", function () {
    $(".searchbar-custom-open").hide();
});
	/*Search-end*/
	



/*Hover-Effect*/


// For Demo purposes only (show hover effect on mobile devices)
			[].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
				el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
			} );
			
			/*Hover-Effect-End*/
			
			
			<!--Scroll to top--> 
if ($('#back-to-top').length) {
    var scrollTrigger = 100, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}

<!--Scroll to top End-->
			