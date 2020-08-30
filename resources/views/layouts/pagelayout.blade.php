<!DOCTYPE html>
<html lang="en">
<head>
<title>Laravel</title>
<!-- bootstrap minified css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- bootstrap minified js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
<!-- custom CSS -->
 <meta name="csrf-token" content="{{ csrf_token() }}">
<style>
h1{font-size:23px;
</style>
</head>
<body>
<div class="container">
<br/>
<br/> <br/>
@yield('page_content')
</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
 <script type="text/javascript">
           $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#contact-form').on('submit', function(event){
        event.preventDefault();
        $('#name-error').text('');
        $('#email-error').text('');
        $('#subject-error').text('');
        $('#message-error').text('');

        name = $('#name').val();
        email = $('#email').val();
        subject = $('#subject').val();
        message = $('#message').val();

        $.ajax({
          url: "{{route('send-enquiry')}}",
          type: "POST",
          data:{
              name:name,
              email:email,
              subject:subject,
              message:message,
          },
          success:function(response){
            console.log(response);
            if (response) {
              $('#success-message').text(response.success);
              $("#contact-form")[0].reset();
            }
          },
          error: function(response) {
              $('#name-error').text(response.responseJSON.errors.name);
              $('#email-error').text(response.ressponseJSON.errors.email);
              $('#subject-error').text(response.responseJSON.errors.subject);
              $('#message-error').text(response.responseJSON.errors.message);
          }
         });
        });
      </script>
</script>     
</body>
</html>
