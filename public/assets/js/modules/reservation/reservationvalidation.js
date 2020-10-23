$(document).ready(function() {
    $.validator.addMethod("format", function(value, element) {
        var domainRegex = /(.*?)[^w{3}.]([a-zA-Z0-9]([a-zA-Z0-9-]{0,65}[a-zA-Z0-9])?.)+[a-zA-Z]{2,6}/igm; 
        return this.optional(element) || domainRegex.test(String(value).toLowerCase());
              }, "برجاء إدخال عنوان بريد إلكتروني صحيح");

    $('#lawyerprofile').validate({
        rules: {
            lawyername: {
                required:true,
                
            },
            lawyeremail:{
                required:true,
                email: true,
                format: true

            },
            lawyerbirthday:{
                required:true
            },
            mobile: {
                required:true,
                number:true,
                maxlength: 11
            },
            idcard: {
                required:true,
                number:true,
                maxlength: 14
            },
            governorate: {
                required:true
            },
            work_sector:{
                required:true
            }            


        }
        
    });    


    //validation for change password
      
    $('#passwordchange').validate({
        rules:{
            newpass:{
                required: true,
                minlength: 8
            },
            retypepass:{
                required:true,
                equalTo: '[name="newpass"]'
            }
        }
    });


        //validation for entering new creditcard
        $('#creditvalidation').validate({
            rules:{
                newcredit:{
                    required: true,
                    number:true,
                    maxlength: 16
                }
            }
        });


        //validation for sending message
        $('#sendmessage').validate({
            rules:{
                requestname:{
                    required:true
                },
                requestemail:{
                    required:true,
                    email: true,
                    format: true
                },
                requestmessage:{
                    required:true,
                    email: true,
                    format: true

                }
            }
        });

        
});
