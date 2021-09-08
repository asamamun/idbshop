<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IDB Shop</title>

<!-- Bootstrap Core CSS -->
	<link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">    

    <!-- MetisMenu CSS -->
	<link href="{{asset('vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">
    

    <!-- Custom CSS -->
	<link href="{{asset('dist/css/sb-admin-2.css')}}" rel="stylesheet">
    
    <!-- Custom Fonts -->
	<link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

	{{-- menu --}}
	@include('admin.user.menu')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
						@yield('content')
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
	<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('vendor/metisMenu/metisMenu.min.js')}}"></script>
	<!-- Custom Theme JavaScript -->
    <script src="{{asset('dist/js/sb-admin-2.js')}}"></script>
	@yield('scripts')
</body>

</html>
