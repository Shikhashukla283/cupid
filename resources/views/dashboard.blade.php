<?php
$site_url = "https://" . $_SERVER['SERVER_NAME'] . "/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

    <script src="https://cdn.tailwindcss.com"></script>
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
<header class="header-bg flex items-center justify-between gap-3 px-8 bg-[#d71212] text-white text-2xl">
        <div class="flex items-center gap-3">
            <div data-iconToShow>
                Marry Me
            </div>
        </div>
        <!-- Avatar div here -->
        <div><a href="{{route('logout')}}">Logout</a></div>
    </header>

    
    <div class="flex">
 
        <div class="container flex dynamic-height flex-grow">
            <div class="container-products px-8 py-1 flex gap-3 flex-wrap flex-grow basis-2/3 overflow-auto">

                <p class="text-center text-sm w-full font-bold bg-[#d71212] text-white">{{$value->first_name}} {{$value->last_name}}</p>
                
                
                                <?php  if($value->email=="admin@gmail.com"){?>

                                        <form action="{{route('dashboard')}}" method="get">
<div class="flex gap-3">

                                                                <div class="w-1/2">
                        <label for="gender"><b>Gender</b></label>
                        <div class="flex">
                            <div class="form-control px-3 py-1.5 text-gray-700">
                                <input class="" type="radio" name="gender" value="1">
                                <label class="" for="gender">Male</label>
                            </div>
                            <div class="form-control px-3 py-1.5 text-gray-700">
                                <input class="" type="radio" name="gender" value="2">
                                <label class="" for="gender">Female</label>
                            </div>
                        </div>
                    </div>
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
                    <div class="w-1/2">
                        <label for="expected_income"><b>Expected Income</b></label>
                        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;" class="form-control w-full px-3 text-base text-gray-700 border border-gray-300 rounded focus:text-gray-700 focus:border-blue-600 focus:outline-none text-right" name="expected_income">
                        <div id="slider-range"></div>
                    </div>
                                <button type="submit" class="btn bg-[#d71212] text-white px-2  rounded">Filter</button>

                    </div>
                    </form>








                                <?php } ?>
              <p class="text-center text-sm w-full font-bold">Here are some perfect Matches for You</p>
            @foreach($user1st as $user)
                    <div class="card shadow-2xl capitalize w-[229px] h-[210px] p-0">
                       <div class="text-sm font-bold mb-2 bg-[#d71212] rounded-t-lg pl-4">{{$user->first_name}} {{$user->last_name}}</div>
                       <div class="p-5">

                        <div class="text-xs font-bold mb-2">dob: {{$user->dob}}</div>
                        <div class="text-xs font-bold mb-2">annual income: {{$user->annual_income}}</div>
                        <div class="text-xs font-bold mb-2">occupation: {{$user->occupation}}</div>
                        <div class="text-xs font-bold mb-2">family type: {{$user->family_type}}</div>
                        <div class="text-xs font-bold mb-2">manglik: {{$user->manglik}}</div>
                   
                        </div>
                    </div>
                    
            @endforeach



            </div>
           
        </div>

    </div>

</body>

</html>