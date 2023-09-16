<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome Admin.</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* ––––––––––––––––––––––––––––––––––––––––––––––––––
    Based on: https://codepen.io/nickelse/pen/YGPJQG
    Influenced by: https://sproutsocial.com/
  –––––––––––––––––––––––––––––––––––––––––––––––––– */


        /* #Mega Menu Styles
  –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .mega-menu {
            display: none;
            left: 0;
            position: absolute;
            text-align: left;
            width: 100%;
        }



        /* #hoverable Class Styles
  –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .hoverable {
            position: static;
        }

        .hoverable>a:after {
            content: "\25BC";
            font-size: 10px;
            padding-left: 6px;
            position: relative;
            top: -1px;
        }

        .hoverable:hover .mega-menu {
            display: block;
        }


        /* #toggle Class Styles
  –––––––––––––––––––––––––––––––––––––––––––––––––– */

        .toggleable>label:after {
            content: "\25BC";
            font-size: 10px;
            padding-left: 6px;
            position: relative;
            top: -1px;
        }

        .toggle-input {
            display: none;
        }

        .toggle-input:not(checked)~.mega-menu {
            display: none;
        }

        .toggle-input:checked~.mega-menu {
            display: block;
        }

        .toggle-input:checked+label {
            color: white;
            background: #2c5282;
            /*@apply bg-blue-800 */
        }

        .toggle-input:checked~label:after {
            content: "\25B2";
            font-size: 10px;
            padding-left: 6px;
            position: relative;
            top: -1px;
        }
    </style>
</head>

<body class="bg-gray-200 font-sans leading-normal tracking-normal">
    <nav class="relative bg-white border-b-2 border-gray-300 text-gray-900">
        <div class="container mx-auto flex justify-between">
            <div class="relative block p-4 lg:p-6 text-xl font-bold">
                <ma style="color: #FFA500">Maakulat Foods</ma>
            </div>
            <ul class="flex">

                <!--Regular Link-->

                <li class="" style="color: #FFA500">
                    <a href="#" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Welcome
                        {{ Auth::user()->name }}</a>
                </li>

                <li class="" style="color: #FFA500">
                    <a href="{{ route('add') }}"
                        class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Add users</a>
                </li>

                <li class="" style="color: #FFA500">
                    <a href="{{ route('admin-vikoba') }}"
                        class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">View vikoba
                    </a>
                </li>

                <li class="" style="color: #FFA500">
                    <a href="{{ route('profile.edit') }}"
                        class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">My
                        profie</a>
                </li>

                <button class="">

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button class="rounded-full bg-blue"> <a :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">

                            </a><b>{{ __('Log Out') }}</b></button>
                    </form>

                </button>

            </ul>
        </div>
    </nav>


    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
        <!--Card 1-->
        <div class="rounded overflow-hidden shadow-lg">
            <img class="w-full" src="{{ asset('/images/1.jpg') }}" alt="Mountain">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Pilau</div>
                <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et
                    perferendis eaque, exercitationem praesentium nihil.
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Enjoy
                    your self</span>

            </div>
        </div>
        <!--Card 2-->
        <div class="rounded overflow-hidden shadow-lg">
            <img class="w-full" src="{{ asset('/images/2.jpg') }}" alt="River">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">River</div>
                <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et
                    perferendis eaque, exercitationem praesentium nihil.
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Enjoy
                    your self</span>

            </div>
        </div>

        <!--Card 3-->
        <div class="rounded overflow-hidden shadow-lg">
            <img class="w-full" src="{{ asset('/images/3.jpg') }}" alt="Forest">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Chips</div>
                <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et
                    perferendis eaque, exercitationem praesentium nihil.
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Enjoy
                    your self</span>

            </div>
        </div>
    </div>
</body>

</html>
