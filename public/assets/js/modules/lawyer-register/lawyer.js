
$(document).ready(function(){
     // run the datepicker for the birthday input
 
        $( "#lawyer-birthday" ).datepicker();

    
});

//code for image profile preview

function profilePreview(input){
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.lawyer-profile-picture')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
//code for image profile preview

function cardPreview(input){
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.lawyer__register__card__img')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

