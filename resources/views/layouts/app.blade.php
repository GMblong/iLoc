<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- Responsive -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=1024">

		{{-- <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
		<link rel="icon" href="images/favicon.png" type="image/x-icon"> --}}

		<title>Vacasky - Tour & Travel Agency HTML-5 Template | Homepage 01</title>

		<!-- Stylesheet  -->
		@include('sections.css')
        @yield('css')
	</head>

<body>

    <div class="page-wrapper"> 

        @include('components.header')

        @yield('content')

        @include('components.footer')

    </div>

    @include('sections.script')
    @yield('script')
</body>
