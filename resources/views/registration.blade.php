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

<body>
<div class="h-10 bg-[#d71212] text-2xl text-center text-white "> Marry Me
    
</div>
    <form action="{{route('registrationprocess')}}" method="post">
        <div class="container px-28 py-3">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            <div>
                <h3 class="center  text-2xl py-3"><b>Basic Information</b> </h3>
                <div class="flex gap-3">
                    <div class="w-1/2">
                        <label for="fname"><b>First Name</b></label>
                        <input type="text" class="form-control w-full px-3 py-1.5 text-base text-gray-700 border border-gray-300 rounded focus:text-gray-700 focus:border-blue-600 focus:outline-none" placeholder="First Name" name="fname" required>
                    </div>
                    <div class="w-1/2">
                        <label for="lname"><b>Last Name</b></label>
                        <input type="text" class="form-control w-full px-3 py-1.5 text-base text-gray-700 border border-gray-300 rounded focus:text-gray-700 focus:border-blue-600 focus:outline-none" placeholder="Last Name" name="lname" required>
                    </div>
                </div>
                <div class="flex gap-3">
                    <div class="w-1/2">
                        <label for="email"><b>Email</b></label>
                        <input type="text" class="form-control w-full px-3 py-1.5 text-base text-gray-700 border border-gray-300 rounded focus:text-gray-700 focus:border-blue-600 focus:outline-none" placeholder="Enter Email" name="email" required>
                    </div>
                    <div class="w-1/2">
                        <label for="psw"><b>Password</b></label>
                        <input type="password" class="form-control w-full px-3 py-1.5 text-base text-gray-700 border border-gray-300 rounded focus:text-gray-700 focus:border-blue-600 focus:outline-none" placeholder="Enter Password" name="password" required>
                    </div>
                </div>
                <div class="flex gap-3">

                    <div class="w-1/2">
                        <label for="dob"><b>DOB</b></label>
                        <input type="date" class="form-control w-full px-3 py-1.5 text-base text-gray-700 border border-gray-300 rounded focus:text-gray-700 focus:border-blue-600 focus:outline-none" placeholder="DOB" name="dob" required>
                    </div>
                    <div class="w-1/2">
                        <label for="gender"><b>Gender</b></label>
                        <div class="flex">
                            <div class="form-control px-3 py-1.5 text-gray-700">
                                <input class="" type="radio" name="gender" value="1" required>
                                <label class="" for="gender">Male</label>
                            </div>
                            <div class="form-control px-3 py-1.5 text-gray-700">
                                <input class="" type="radio" name="gender" value="2" required>
                                <label class="" for="gender">Female</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-3">

                    <div class="w-1/2">
                        <label for="income"><b>Annual Income</b></label>
                        <input type="text" class="form-control w-full px-3 py-1.5 text-base text-gray-700 border border-gray-300 rounded focus:text-gray-700 focus:border-blue-600 focus:outline-none" name="income" required>
                    </div>

                    <div class="w-1/2">
                        <label for="occupation"><b>Occupation</b></label>
                        <select class="form-control w-full px-3 py-1.5 text-base text-gray-700 border border-gray-300 rounded focus:text-gray-700 focus:border-blue-600 focus:outline-none" name="occupation" >
                            <option>Select</option>
                            <option value="1">Private Job</option>
                            <option value="2">Government Job</option>
                            <option value="3">Bussiness</option>
                        </select>
                    </div>
                </div>
                <div class="flex gap-3">

                    <div class="w-1/2">
                        <label for="familytype"><b>Family Type</b></label>
                        <select class="form-control w-full px-3 py-1.5 text-base text-gray-700 border border-gray-300 rounded focus:text-gray-700 focus:border-blue-600 focus:outline-none" name="familytype" >
                            <option>Select</option>
                            <option value="1">Joint Family</option>
                            <option value="2">Nuclear Family</option>
                        </select>
                    </div>

                    <div class="w-1/2">
                        <label for="manglik"><b>Manglik</b></label>
                        <select class="form-control w-full px-3 py-1.5 text-base text-gray-700 border border-gray-300 rounded focus:text-gray-700 focus:border-blue-600 focus:outline-none" name="manglik">
                            <option>Select</option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="center  text-2xl py-3"><b>Partner Preference</b> </h3>

                <div class="flex gap-3">

                <div class="w-1/2">
                        <label for="expected_income"><b>Expected Income</b></label>
                        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;" class="form-control w-full px-3 text-base text-gray-700 border border-gray-300 rounded focus:text-gray-700 focus:border-blue-600 focus:outline-none text-right" name="expected_income">
                        <div id="slider-range"></div>

                    </div>

                    <div class="w-1/2">
                        <label for="partner_occupation"><b>Partner Occupation</b></label>
                        <select class="form-control w-full px-3 py-1.5 text-base text-gray-700 border border-gray-300 rounded focus:text-gray-700 focus:border-blue-600 focus:outline-none" name="partner_occupation">
                            <option>Select</option>
                            <option value="1">Private Job</option>
                            <option value="2">Government Job</option>
                            <option value="3">Bussiness</option>
                        </select>
                    </div>
                </div>
                <div class="flex gap-3">

                    <div class="w-1/2">
                        <label for="partner_familytype"><b>Partner Family Type</b></label>
                        <select class="form-control w-full px-3 py-1.5 text-base text-gray-700 border border-gray-300 rounded focus:text-gray-700 focus:border-blue-600 focus:outline-none" name="partner_familytype">
                            <option>Select</option>
                            <option value="1">Joint Family</option>
                            <option value="2">Nuclear Family</option>
                        </select>
                    </div>

                    <div class="w-1/2">
                        <label for="partner_manglik"><b>Manglik</b></label>
                        <select class="form-control w-full px-3 py-1.5 text-base text-gray-700 border border-gray-300 rounded focus:text-gray-700 focus:border-blue-600 focus:outline-none" name="partner_manglik">
                            <option>Select</option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>




            </div>















            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <button type="submit" class="btn bg-[#d71212] text-white w-full px-3 py-1.5 rounded">Register</button>


            Or Sign Up With Google

            <div class="g-signin2 center" data-onsuccess="onSignIn"></div>
        </div>

</body>

</html>