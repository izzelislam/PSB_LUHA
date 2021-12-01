<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>PSB-LUHA - sistem penerimaan santri baru</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('deskapp/vendors/images/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('deskapp/vendors/images/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('deskapp/vendors/images/favicon-16x16.png') }}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	@include('admin.includes.style')
  @stack('addon-style')
</head>
<body>
	@include('admin.includes.navbar')

	@include('admin.includes.sidebar')

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
        @yield('content')
			</div>


			<div class="footer-wrap pd-20 mb-20 card-box d-flex justify-content-between px-3">
				<small>	develop by <a href="www.bangfkr002@gmail.com">Bangfkr002@gmail.com</a> </small>
				<strong>	DIVISI IT-LUHA {{ date('Y') }} </strong>
			</div>

		</div>
	</div>
  @include('admin.includes.script')
  @stack('addon-script')
</body>
</html>