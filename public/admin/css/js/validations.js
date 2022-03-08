$.validator.addMethod("fullName", function(value, element) {
return this.optional(element) || /^[a-zA-Z\s]*$/.test(value);
}, "Please enter a valid  name");

$.validator.addMethod("email", function(value, element) {
return this.optional(element) || /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value);
}, "Please enter a valid Email address");

$.validator.addMethod("subject", function(value, element) {
return this.optional(element) || /^[a-zA-Z'.,-\s]*$/.test(value);
}, "Please enter a valid  subject");

// $.validator.addMethod("message", function(value, element) {
// return this.optional(element) || /^[a-zA-Z'.,-\s]*$/.test(value);
// }, "Please enter a valid  message");

$("#form").validate({

    rules:{
        fullName:{
           required:true,
            maxlength:100,
            minlength:3,
            fullName:true,


        },
        email: {
           required:true,
            maxlength: 35,
            email:true,
        },
        subject:{
             required:true,
             maxlength:100,
             subject:true,

        },
        message:{
            required:true,
             maxlength:5000,
             


        },

       

    },

    messages: {
        fullName: {
            maxlength:"Name valid upto 45 to 100",
            minlength:"Name not valid below 3 characters",


        },
        email:{
            email : "Please enter a valid email",
            maxlength: "Email should not be greater then 35 characters",
        },
        subject:{
            maxlength:"Subject length is 100",
            subject:"Subject take only alphanumeric values",

       },
       message:{
        maxlength:"Maximum character is 5000",
        },

        

    },
    errorPlacement: function(error, element) {
        element.css('background', '#ffff');
        error.insertAfter(element);
     }

});


function submitUserForm() {
    var response = grecaptcha.getResponse();
    if(response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        return false;
    }
    return true;
}

function verifyCaptcha() {
    document.getElementById('g-recaptcha-error').innerHTML = '';
}



$("#quote").validate({

    rules:{
        fullName:{
           required:true,
            maxlength:100,
            minlength:3,
            fullName:true,


        },
        email: {
           required:true,
            maxlength: 35,
            email:true,
        },
        subject:{
             required:true,
             maxlength:100,
             subject:true,

        },
        message:{
            required:true,
             maxlength:5000,
             message:true,


        },

       

    },

    messages: {
        fullName: {
            maxlength:"Name valid upto 45 to 100",
            minlength:"Name not valid below 3 characters",


        },
        email:{
            email : "Please enter a valid email",
            maxlength: "Email should not be greater then 35 characters",
        },
        subject:{
            maxlength:"Subject length is 100",
            subject:"Subject take only alphanumeric values",

       },
       message:{
        maxlength:"Maximum character is 5000",
        },

    },
    errorPlacement: function(error, element) {
        element.css('background', '#ffff');
        error.insertAfter(element);
     }

});

function submitUserForms() {
    var response = grecaptcha.getResponse();
    if(response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        return false;
    }
    return true;
}

function verifyCaptcha() {
    document.getElementById('g-recaptcha-error').innerHTML = '';
}



