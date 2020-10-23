$(document).ready(function(){
  // run the datepicker for the birthday input

      $( "#lawyer-birthday" ).datepicker();



    // change the head text to fetch the tab text that we clicked on
    $('.lawyer-data__tabs__link').on('click', function(){
    var headData = $(this).text();
      $('.fixed-frame__up h3').text(headData);
    });


    // show the reservation statement after clicking on "fixed-frame__down__credit__info__btn" button
    $('.fixed-frame__down__credit__info__btn').on('click', function(){
        $('.fixed-frame__down__credit__info').hide();
        $('.reserve-statement').show();
    });

});


// function for show password in the edit password page

function showPassword() {
    var oldpass = document.getElementById("oldpass");
    if (oldpass.type === "password") {
      oldpass.type = "text";
    } else {
      oldpass.type = "password";
    }
  }
  

  // function for show password in the edit password page

function showBankAccount() {
    var oldAccount = document.getElementById("oldbank-account");
    if (oldAccount.type === "password") {
        oldAccount.type = "text";
    } else {
        oldAccount.type = "password";
    }
  }


      
