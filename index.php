<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->

    <title>Contact</title>
</head>
<body>
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white"></i> Contact us.
                    </div>
                    <div class="card-body">
                        <form action="" method="">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Subject</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter subject" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" placeholder="Enter message" rows="6" required></textarea>
                            </div>
                            <div class="mx-auto">
                            <button type="submit" class="btn btn-primary text-right">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>

$(document).ready(function(){

  $("#name").focusout(function() {
      check_name();
    });
  $("#email").focusout(function() {
    check_email();
  });
  $("#username").focusout(function() {
      check_username();
    });
  $("#message").focusout(function() {
      check_message();
    });
function check_name() {
        
    var fullname_length = $("#name").val().length;
    
    if( $.trim( $('#name').val() ) == '' ){
      $("#fullname_error_message").html("Input is blank!");
      $("#fullname_error_message").show();
      error_fullname = true;
      $("#name").addClass("is-invalid");
      }else if(fullname_length < 5 || fullname_length > 50) {
      $("#fullname_error_message").html("Should be between 5-50 characters");
      $("#fullname_error_message").show();
      error_fullname = true;
      $("#name").addClass("is-invalid");
      }else{
      $("#fullname_error_message").hide();
      $("#name").removeClass("is-invalid");
    }
  }
function check_email() {
    
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    var email_length = $("#email").val().length;
    
    if( $.trim( $('#email').val() ) == '' ){
      $("#email_error_message").html("Input is blank!");
      $("#email_error_message").show();
      error_email = true;
      $("#email").addClass("is-invalid");
      }else if(!(pattern.test($("#email").val()))) {
      $("#email_error_message").html("Invalid email address");
      $("#email_error_message").show();
      error_email = true;
      $("#email").addClass("is-invalid");
      } else {
      $("#email_error_message").hide();
      $("#email").removeClass("is-invalid");
      }  
  }
function check_username() {
        
    var fullname_length = $("#username").val().length;
    
    if( $.trim( $('#username').val() ) == '' ){
      $("#username_error_message").html("Input is blank!");
      $("#username_error_message").show();
      error_fullname = true;
      $("#username").addClass("is-invalid");
      }else if(fullname_length < 5 || fullname_length > 50) {
      $("#username_error_message").html("Should be between 5-30 characters");
      $("#username_error_message").show();
      error_fullname = true;
      $("#username").addClass("is-invalid");
      }else{
      $("#username_error_message").hide();
      $("#username").removeClass("is-invalid");
    }
  }
function check_message() {
        
    var message_length = $("#message").val().length;
    
    if( $.trim( $('#message').val() ) == '' ){
      $("#username_error_message").html("Input is blank!");
      $("#username_error_message").show();
      error_fullname = true;
      $("#message").addClass("is-invalid");
      }else if(fullname_length < 5 || fullname_length > 50) {
      $("#username_error_message").html("Should be between 5-30 characters");
      $("#username_error_message").show();
      error_fullname = true;
      $("#message").addClass("is-invalid");
      }else{
      $("#username_error_message").hide();
      $("#message").removeClass("is-invalid");
    }
  }
});
</script>
</main>
</body>
</html>
