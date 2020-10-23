
$(document).ready(function(){


//show and hide header responsive
    $('.header__hold__nav-close').on('click', function(){
         $('.header__hold__nav').fadeToggle(500);
    });


    // set owl carousel for slider
    var owlSlider = $(".slider .owl-carousel");
    owlSlider.owlCarousel({
        rtl:true,
        items:1,
        loop:true,
        nav:true,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true
    });


    // set owl carousel for fields in responsive

        var fieldsWidth = $('.fields').innerWidth();
        if(fieldsWidth < 768){
            $('.fields div.row').addClass('owl-carousel');
        }else{
            $('.fields div.row').removeClass('owl-carousel')
        }

        var owlFields = $(".fields .owl-carousel");
        owlFields.owlCarousel({
            rtl:true,
            items:2,
            loop:true,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true

    });




});
    // vedioo code

    $('.society__vedio__playicon').click(function() {
        $(this).fadeOut(1000);
        $('.society__vedio__my-vedio').delay(1000).fadeIn(1500);
        $('.society__vedio__my-vedio iframe').attr("src", $(".society__vedio__my-vedio iframe").attr("src").replace("autoplay=0", "autoplay=1"));

    });

    //open Search overlay with Js
    function openSearch(){
        document.getElementById('mySearchOverlay').style.display = 'block';
        document.getElementById('body').style.overflow = "hidden";
    }

    function closeSearch(){
        document.getElementById("mySearchOverlay").style.display = 'none';
        document.getElementById('body').style.overflow = "inherit";

    }











