<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/theme.css" rel="stylesheet" />
    {{-- <link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css"> --}}
</head>

<body>
@include('partials.navbarAdmin')
@yield('container')

<!-- ===============================================-->
                <!--    JavaScripts-->
                <!-- ===============================================-->
                <script src="vendors/@popperjs/popper.min.js"></script>
                <script src="vendors/bootstrap/bootstrap.min.js"></script>
                <script src="vendors/is/is.min.js"></script>
                <script
                    src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
                <script src="vendors/fontawesome/all.min.js"></script>
                <script src="assets/js/theme.js"></script>

                <link
                    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap"
                    rel="stylesheet">

</body>
</html>

