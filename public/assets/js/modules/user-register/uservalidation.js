$(document).ready(function() {
    $.validator.addMethod("format", function(value, element) {
        var domainRegex = /(.*?)[^w{3}.]([a-zA-Z0-9]([a-zA-Z0-9-]{0,65}[a-zA-Z0-9])?.)+[a-zA-Z]{2,6}/igm; 
        return this.optional(element) || domainRegex.test(String(value).toLowerCase());
              }, "برجاء إدخال عنوان بريد إلكتروني صحيح");

    $('#uservalidation').validate({

        rules: {
            name: {
                required: true,
                minlength:4
            },
            email: {
                required: true,
                email: true,
                format:true
            },
            password: {
                required: true,
                minlength:8
            }


        }
        
    });

    $('#uservalidation .form-control').on('keyup blur click', function () { // fires on every keyup & blur
        if ($('#uservalidation').valid() ){                   // checks form for validity
            console.log($('#form-btn'));
                $('#form-btn').removeClass('fixed__btn__disabled').attr('disabled', false); // enables button
            } else {
                $('#form-btn').addClass('fixed__btn__disabled').attr('disabled', true);   // disables button
            }
       
    });
});

