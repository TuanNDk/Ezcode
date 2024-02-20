<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title') - JVCI </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="stylesheet" href="../../../assets/font-icon/themify-icons-font/themify-icons/themify-icons.css">


    <link rel="stylesheet" href="../../../assets/css/show-pass.css">


    <!-- Custom fonts for this template-->
    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style>
    .top-bar {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 2016;
        width: 100%;
    }

    .side-bar {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 100000;
    }
</style>

<body id="page-top" class="bg-light">
    <!-- Page Wrapper -->
    <div class="container-fluid">
        <div class="row">

            @include('layouts.header')

            @include('layouts.sidebar')


            <!-- Begin Page Content -->
            <div class="row mt-3 p-0 mb-5">
                <div class="col-md bg-light ps-4 mt-3">
                    <!-- Page Heading -->
                    <div class="content">
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->


            @include('layouts.footer')
        </div>
        <!-- End of Page Wrapper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>


        <!-- Bootstrap core JavaScript-->
        <script src="../../../vendor/jquery/jquery.min.js"></script>
        <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../../../assets/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="../../../vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../../../assets/js/demo/chart-area-demo.js"></script>
        <script src="../../../assets/js/demo/chart-pie-demo.js"></script>

        <script src="../../../assets/js/show-pass.js"></script>
        <script type="text/javascript" src="../../../assets/ckeditor/ckeditor.js"></script>
</body>

</html>
