$(document).ready(function(){


    //  Toggle box

  $('.user-search__check__side__hold__head').on('click', function(){
      console.log('clicked');

      $(this).next(".user-search__check__side__hold__box").slideToggle();
  });


  $('.show-side-control').on('click', function(){
    var fixedSide = $('.user-search__check');
    fixedSide.toggleClass('visible');
    if(fixedSide.hasClass('visible')){
      fixedSide.animate({
        right:0
      },500);
    }else{
      fixedSide.animate({
        right:"-200px"
      },500);
    }
  });



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


