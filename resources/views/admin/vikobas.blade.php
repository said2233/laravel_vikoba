<!DOCTYPE html>
<html lang="en" class="antialiased">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View orders</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
    <!--Replace with your tailwind.css once created-->


    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

    <style>
        /*Overrides for Tailwind CSS */

        /*Form fields*/
        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
            color: #4a5568;
            /*text-gray-700*/
            padding-left: 1rem;
            /*pl-4*/
            padding-right: 1rem;
            /*pl-4*/
            padding-top: .5rem;
            /*pl-2*/
            padding-bottom: .5rem;
            /*pl-2*/
            line-height: 1.25;
            /*leading-tight*/
            border-width: 2px;
            /*border-2*/
            border-radius: .25rem;
            border-color: #edf2f7;
            /*border-gray-200*/
            background-color: #edf2f7;
            /*bg-gray-200*/
        }

        /*Row Hover*/
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff;
            /*bg-indigo-100*/
        }

        /*Pagination Buttons*/
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Current selected */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #667eea !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Hover */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #667eea !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Add padding to bottom border */
        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            /*border-b-1 border-gray-300*/
            margin-top: 0.75em;
            margin-bottom: 0.75em;
        }

        /*Change colour of responsive icon*/
        table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
            background-color: #667eea !important;
            /*bg-indigo-500*/
        }
    </style>



</head>

<body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">




    <!--Container-->
    <div class="container w-full md:w-4/5 xxxl:w-3/5  mx-auto px-2">
        <p>Total Sum of Hisa: {{ $totalHisaSum }}</p>


        {{--  <a class="bg-blue-500 text-white px-2 py-1 rounded" href="/admin/products/create">Ongeza bidhaa</a>  --}}


        <!--Title-->
        {{--  <h1 class="flex items-center font-sans font-bold break-normal text-lime-500 px-2 py-8 text-xl md:text-2xl">
            Users of the system. <a class="bg-blue-500 text-white px-2 py-0.1 rounded text-right"
                href="/home">Nyuma</a>
        </h1>  --}}


        <!--Card-->
        <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <a class="bg-blue-500 text-white px-2 py-1 rounded text-right" href="/home">Back</a>



            <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th data-priority="1">No</th>
                        <th data-priority="2">Name</th>
                        <th data-priority="3">Hisa</th>
                        <th data-priority="4">Created at</th>
                        {{--  <th data-priority="5">Action</th>  --}}
                        {{--  <th data-priority="7"></th>  --}}
                    </tr>
                </thead>

                <tbody>
                    @foreach ($vikobas as $vikoba)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $vikoba->user->name }}</td>
                            <td>{{ $vikoba->hisa }}</td>
                            <td>{{ $vikoba->created_at }}</td>

                            {{--  <td class="border">
                                <a
                                    class="bg-green-500 text-white rounded-md px-2 py-0.5 shadow-md"href="">Edit</a>

                                <a
                                    class="bg-green-500 text-white rounded-md px-2 py-0.5 shadow-md"href="">Approve</a>
                                <a
                                    class="bg-red-500 text-white rounded-md px-2 py-0.5 shadow-md"href="">Delete</a>
                            </td>  --}}
                        </tr>
                    @endforeach



                </tbody>

            </table>
            {{ $vikobas->links() }}


        </div>
        <!--/Card-->


    </div>
    <!--/container-->





    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>

</body>

</html>
