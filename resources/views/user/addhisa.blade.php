<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order your food.</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- bootstrap library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- css link -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">

    <!-- javascricpt bootstrap library -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    </style>



    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
        .gradient {
            background: linear-gradient(90deg, #25b43d 0%, #e19e0c 100%);
        }
    </style>
</head>

<body class="bg-lime-500">


    <div class="max-w-xl mx-auto pb-5 pt-8">
        {{--  <a class="bg-blue-500 text-white px-2 py-1 rounded" href="/admin/viewfood">Foods uploaded.</a>  --}}
        <h1 class="text-2xl pb-15px">Add your hisa.</h1>

        <hr>
        <br>
        <hr>
        <form action="{{ route('add-hisa') }}" method="post" class="mt-3" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="foodname">Your name</label>
                <input class="border border-gray-400 block w-full rounded-md py-1.5 text-center" type="text"
                    name="name" value="{{ Auth::user()->name }}" disabled>
            </div>


            <div>
                <label for="price">Hisa.</label>
                <input class="border border-gray-400 block w-full rounded-md py-1.5 text-center" placeholder="Your Hisa"
                    type="number" name="hisa" value="">
            </div>

            <div class="mt-3 text-right">
                <input class="bg-blue-500 text-white px-4 py-2" type="submit" value="ADD HISA">
            </div>

        </form>

    </div>


</body>




</html>
