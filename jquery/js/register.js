$(function(){
    var $registerform = $("#ragister"); 
    $.validator.addMethod("noSpace", function(value, element){
        return value == '' || value.trim().length != 0
   }, "Space are not allowed");
    
    if ($registerform.length){
       $registerform.validate({
          rules:{
                username:{
                    required: true,
                    noSpace:true
                    },
               email:{
                   required: true,
                    email: true
               },
               password:{
                   required: true
                  
               },
               confirm_password:{
                   required: true,
                   equalTo: '#password'
               },
               fname:{
                   required: true
               },
               lname:{
                   required: true
               },
               gender:{
                   required: true
               },
               hobby:{
                   required: true
               },
               gender:{
                   required: true
               },
               country:{
                   required: true
               },
               address:{
                   required: true
               }
                    },
                    messages:{
                        username:{
                            required:'This field is mandatorey!'
                     },
                        email:{
                            required: 'This field is mandatorey!',
                            email: 'Please enter a valid email!'
                        },
                        password:{
                            required: 'This field is mandatorey!'
                        },
                        confirm_password:{
                            required: 'This field is mandatorey!',
                            equalTo: 'Plese enter the same password'

                        },
                        fname:{
                            required: 'This field is mandatorey!'
                        },
                        lname:{
                            required: 'This field is mandatorey!'
                        },
                        gender:{
                            required: 'This field is mandatorey!'
                        },
                        hobby:{
                            required: 'This field is mandatorey!'
                        },
                        country:{
                            required: 'This field is mandatorey!'
                        },
                        address:{
                            required: 'This field is mandatorey!'
                        }
             },
             errorPlacement: function(error, element){
                 if (element.is(":radio")) {
                     error.appendTo(element.parents(".gender"));
                     
                 } else if(element.is(":checkbox")){
                      error.appendTo(element.parents('.hobby'));
                 }else{
                     error.insertAfter(element);
                 }
             }
        })  
   }
});