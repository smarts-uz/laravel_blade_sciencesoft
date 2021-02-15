	<!doctype html>
	@if(\App\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
	<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	@else
	<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	@endif
	<head>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="app-url" content="{{ getBaseURL() }}">
		<meta name="file-base-url" content="{{ getFileBaseURL() }}">

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Favicon -->
		<!-- google font -->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

		<!-- aiz core css -->
		<link rel="stylesheet" type="text/css" src="{{ asset('assets/css/vendors.css') }}">
		@if(\App\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
		<link rel="stylesheet" type="text/css" src="{{ asset('assets/css/bootstrap-rtl.min.css') }}">
		@endif
		<link rel="stylesheet" type="text/css" src="{{ asset('assets/css/aiz-core.css') }}">
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" type="text/css" />

		<script>
			var AIZ = AIZ || {};
		</script>

	</head>
	<body >
		<div class="aiz-main-wrapper">
			<div class="aiz-content-wrapper">
				<div class="aiz-main-content">
					<div class="px-15px px-lg-25px">
						@yield('content')
					</div>
				</div><!-- .aiz-main-content -->
			</div><!-- .aiz-content-wrapper -->
		</div><!-- .aiz-main-wrapper -->

		@yield('modal')

		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

		<script type="text/javascript" src="{{ asset('assets/js/vendors.js') }}" ></script>

		<script type="text/javascript" src="{{ asset('assets/js/aiz-core.js') }}" ></script>

		@yield('script')

		<script type="text/javascript">
			if ($('#lang-change').length > 0) {
				$('#lang-change .dropdown-menu a').each(function() {
					$(this).on('click', function(e){
						e.preventDefault();
						var $this = $(this);
						var locale = $this.data('flag');
						$.post('{{ route('language.change') }}',{_token:'{{ csrf_token() }}', locale:locale}, function(data){
							location.reload();
						});

					});
				});
			}
		</script>

	</body>
	</html>
