$(document).ready(function() {
    $.validator.addMethod("format", function(value, element) {
        var domainRegex = /(.*?)[^w{3}.]([a-zA-Z0-9]([a-zA-Z0-9-]{0,65}[a-zA-Z0-9])?.)+[a-zA-Z]{2,6}/igm; 
        return this.optional(element) || domainRegex.test(String(value).toLowerCase());
              }, "برجاء إدخال عنوان بريد إلكتروني صحيح");

    $('#lawyerValidate').validate({
        
        rules: {
            name: {
                required:true
            },
            birth_date:{
                required:true
            },
            graduate_year:{
                required:true
            },
            password:{
                required:true,
                minlength:8
            },
            work_sector: {
                required:true
            },
            governorate: {
                required:true
            },
            country:{
                required:true
            },
            email:{
                required:true,
                email:true,
                format:true
            },
            user_mobile: {
                required: true,
                number:true,
                maxlength: 11
            },
            user_phone: {
                required: true,
                number:true,
                maxlength:8
            },
            experience_years: {
                required:true
            },
            user_card_id:{
                required:true,
                number: true,
                maxlength: 14
            }
        }
        
    });

    $('#lawyerValidate .form-control').bind('keyup blur click', function () { // fires on every keyup & blur
        if ($('#lawyerValidate').validate().checkForm()) {                   // checks form for validity
            $('#lowyer-form-btn').removeClass('fixed__btn__disabled').attr('disabled', false); // enables button
        } else {
            $('#lowyer-form-btn').addClass('fixed__btn__disabled').attr('disabled', true);   // disables button
        }
    });

});
