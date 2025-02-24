<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- Responsive -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=1024">

		<link rel="shortcut icon" href="images/logo.png" type="image/x-icon" style="filter: filter: grayscale(100%);">
		<link rel="icon" href="assets/img/logo.png" type="image/x-icon" style="filter: filter: grayscale(100%);">

		<title>iLoc</title>

		<!-- Stylesheet  -->
		@include('sections.css')
        
        @yield('css')
	</head>

<body>

    <div class="page-wrapper"> 
        @include('components.preloader')
            
        @include('components.header')

        @yield('content')

        @include('components.footer')

    </div>

    @include('sections.script')
    
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'id',
                includedLanguages: 'en,id',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>
    @yield('script')
</body>
