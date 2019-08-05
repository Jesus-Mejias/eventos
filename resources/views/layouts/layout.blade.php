<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{!!asset ('css/app.css') !!}">
</head>

<body>


    @yield('content')

    {{-- @include('partials.footer') --}}

    <script type="text/javascript" href="{!! asset('js/app.js') !!}" ></script>

</body>
</html>