<html>
	<head>
		<title>SJCS Batch Reunion Photo Upload</title>


		{{-- HTML::style('http://cdnjs.cloudflare.com/ajax/libs/dropzone/3.8.4/css/dropzone.css') --}}
		{{ HTML::style('bower_resources/dropzone/dist/min/dropzone.min.css') }}
		{{ HTML::style('bower_resources/bootstrap/dist/css/bootstrap.min.css') }}

		<script type="text/javascript">
			$(document).ready(function () {
				Dropzone.options.dz = {
					  maxFilesize: 10, 			// MB
					  addRemoveLinks: true,
					  acceptedFiles: "image/*",
				};
			});
		</script>
	</head>

	<body>

		{{ Form::open(array(
			'url' => '/upload',
			'files' => true,
			'class' => 'dropzone dz-clickable',
			'id'	=> 'dz'
		)) }}

		{{ Form::close() }}


		{{ HTML::script('bower_resources/jquery/dist/jquery.min.js') }}
		{{ HTML::script('bower_resources/dropzone/dist/min/dropzone.min.js') }}

	</body>

</html>