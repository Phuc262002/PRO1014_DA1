@extends('layouts.client.master')

<form enctype="multipart/form-data">
    @csrf
    <input type="number" name="OTP_token">
    <input type="hidden" name="email" value="{{ $email }}">
    <input type="submit">
</form>


<button>Send OTP</button>

@section('js')
    <script>
        $(document).ready(function(){
            $('form').submit(function(e){
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "{{ route('verification.verify_OTP') }}",
                    type: 'POST',
                    data: formData,
                    success: function (data) {
                        if(data.status == 'success'){
                            Success(data.message);
                            setTimeout(function(){
                                window.location.href = "{{ route('home') }}";
                            }, 2000);
                        } else {
                            Error(data.message);
                        }
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            });
        });

        $('button').click(function(){
            $.ajax({
                url: "{{ route('auth.re_register') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                data: {
                    email: "{{ $email }}"
                },
                success: function (data) {
                    if(data.status == 'success'){
                        Success(data.message);
                    } else {
                        Error(data.message);
                    }
                },
            });
        });

    </script>

@endsection