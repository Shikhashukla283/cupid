<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    
<meta name="google-signin-client_id" content="1085999285161-ded2e00bvr4i978d19f3jpr1d6t72np0.apps.googleusercontent.com.apps.googleusercontent.com">

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="{{asset('public/css/form.css')}}"> -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );
  </script>
</head>

<body class="justify-center flex flex-col items-center py-14">

    <form action="javascript:void(0);" method="post" id="login-form">
        <div class="container px-4 py-4 w-[80%] border border-red-300 h-auto ">
            <h1>Login</h1>
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            <div>
           
                <div class="center gap-3">
                    <div class="">
                        <label for="email"><b>Email</b></label>
                        <input type="text" class="form-control w-full px-3 py-1.5 text-base text-gray-700 border border-gray-300 rounded focus:text-gray-700 focus:border-blue-600 focus:outline-none" id="user_gmail" placeholder="Enter Email" name="email" required>
                    </div>
                    <div class="">
                        <label for="psw"><b>Password</b></label>
                        <input type="password" class="form-control w-full px-3 py-1.5 text-base text-gray-700 border border-gray-300 rounded focus:text-gray-700 focus:border-blue-600 focus:outline-none" id="user_password" placeholder="Enter Password" name="password" required>
                    </div>
                </div>





            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <button type="submit" class="btn bg-[#d71212] w-full px-4 py-1.5 rounded"  onclick="return LoginAdminProcess($(this))">Login</button>


            Or Login With Google

            <div class="g-signin2 center" data-onsuccess="onSignIn"></div>
        </div>
    </div>
</form>
<script>

    var base_url='http://localhost/cupidproject/';
    function LoginAdminProcess (objectElement)
{
    $('#spinner').show();
    $('#loadername').html('Loading..');
    var status=0;
    var user_name =$('#user_gmail').val();
    if(user_name.trim()=='')
    {
        $('#user_gmail').attr('style','border:1px solid red;height:45px; padding:15px;');
        $('#spinner').hide();
        $('#loadername').html('Sign In');
        status=1;
    }
    var password =$('#user_password').val();
    if(password.trim()=='')
    {
    $('#user_password').attr('style','border:1px solid red;height:45px; padding:15px;');
    $('#spinner').hide();
    $('#loadername').html('Sign In');
    status=1;
    }
    if(status==1)
    {
        return false;
    }
    var datastring =$('#login-form').serialize();
    $.post(base_url+"login/loginAdminProcess",datastring,function(response){
      if(response.message=='ok')
      {
            $('#spinner').hide();
            $('#loadername').html('Sign In');
            $('#login-error').hide();   
            $('#login-success').show();
            window.location=base_url+"dashboard";
      }else{
            $('#spinner').hide();
            $('#loadername').html('Sign In');
            $('#login-success').hide();
            $('#login-error').show();   
      }
    });
}


</script>
</body>

</html>