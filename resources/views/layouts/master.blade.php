<!doctype html>
<html lang="en">
  	<head>
		<meta charset="utf-8">
		<!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>
			{{ config('app.name') }}
			@isset($page_title)
				| {{ $page_title }}
			@endisset
		</title>

		<!-- Google Font: Source Sans Pro -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<!-- Bootstrap -->
		<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">

        @yield('css')
    </head>
  	<body>

		<div class="wrapper d-flex">

			<!-- Content Wrapper. Contains page content -->
				@yield('content')
			<!-- /.content-wrapper -->

		</div>

		<!-- jQuery -->
		<script src="{{asset('jquery/jquery-3.6.0.min.js')}}"></script>

		<!-- Bootstrap 4 -->
		<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

		@yield('script')
  </body>
</html>
