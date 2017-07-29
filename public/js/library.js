    /*dropdown-menu*/
    $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');    
            });
    });
/*main page carousel*/
$(function(){
    // Activate Carousel
    $("#fade-effect").carousel({interval: 3000});
});
/*anniversary carousel*/
$(function(){
    // Activate Carousel
    $("#anniversary-carousel").carousel({interval: 8000});
});
/*fresh books carousel*/
