<html lang="en">
<!-- <script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" /> -->

<!-- This is for the jQuery Datatable-->
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css"> -->
  
<!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script> -->
<!-- jQuery Datatable code ends -->

<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Project engaging in society's pain to help in the process of redemption for any man freely offered by God.">
    <link rel="stylesheet" href="{{ asset('resources/assets/bootstrap/css/bootstrap.min.css') }}">
    @yield('stylesheets')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="{{ asset('resources/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/Header-Dark.css') }}">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    @stack('styles')
</head>

<body id="page-top">
	@include('layouts.header')
		@yield('content')
	@include('layouts.footer')
	
	@stack('scripts')
<!--     <script type="text/javascript" src="resources/assets/js/jquery.min.js"></script> -->
    <script type="text/javascript" src="{{ asset('resources/assets/js/jquery.min.js') }}"></script>
<!--     <script type="text/javascript" src="resources/assets/bootstrap/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="{{ asset('resources/assets/bootstrap/js/bootstrap.min.js') }}"></script>
<!--     <script type="text/javascript" src="resources/assets/js/bs-init.js"></script> -->
    <script type="text/javascript" src="{{ asset('resources/assets/js/bs-init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!--     <script type="text/javascript" src="resources/assets/js/grayscale.js"></script> -->
    <script type="text/javascript" src="{{ asset('resources/assets/js/grayscale.js') }}"></script>
</body>

<!-- <script src = "./interestGroup/dataTable.js"></script> -->
<!-- <script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script> -->
</html>