
$(document).ready(function(){
     // run the datepicker for the birthday input
 
        $( "#userbirthDay" ).datepicker();

    
});

//code for image profile preview

function readURL(input){
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.user-profile-picture')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

