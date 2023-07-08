<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="assets/vendor/ckeditor5/build/ckeditor.js"></script>
    <script src="assets/vendor/ckfinder/ckfinder.js"></script>
</head>

<body>
    <div id="editor"></div>
    <button id="ckfinder">CKFINder</button>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
        
    @endif

    <form action="{{route('password.reset')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" id="elementId" name="email" value="">
        <input type="submit" value="Submit">
    </form>

    @if(isset($email))

    <form action="{{route('password.email')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" id="elementId" name="email" value="{{$email}}">
        <input type="hidden" name="token" value="{{$token}}">
        <input type="password" name="password">
        <input type="password" name="password_confirmation">
        <input type="submit" value="Submit">
    </form>
    @endif
    <script>
        ClassicEditor
	.create( document.querySelector( '#editor' ), {
		ckfinder: {
			uploadUrl: 'assets/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
		}
	} )
	.catch( error => {
		console.error( error );
	} );

        document.querySelector('#ckfinder').addEventListener('click', function() {
            CKFinder.modal({
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function(finder) {
                    finder.on('files:choose', function(evt) {
                        var file = evt.data.files.first();
                        var output = document.getElementById(elementId);
                        output.value = file.getUrl();
                    });

                    finder.on('file:choose:resizedImage', function(evt) {
                        var output = document.getElementById(elementId);
                        output.value = evt.data.resizedUrl;
                    });
                }
            });
        });
    </script>
</body>

</html>
