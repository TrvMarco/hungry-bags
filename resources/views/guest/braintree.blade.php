<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://js.braintreegateway.com/web/dropin/1.24.0/js/dropin.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <div class="py-12 pt-5">
        @csrf
        <div id="dropin-container" style="display: flex;justify-content: center;align-items: center;"></div>
        <div style="display: flex;justify-content: center;align-items: center; color: white">
            <a id="submit-button" class="btn btn-sm btn-success">Submit payment</a>
        </div>
    </div>
</body>
        <script>
            var button = document.querySelector('#submit-button');
            braintree.dropin.create({
                authorization: '{{$token}}',
                container: '#dropin-container'
            }, 
            function (createErr, instance) {
                button.addEventListener('click', function () {
                    instance.requestPaymentMethod(function (err,payload){
                        (function($) {
                            $(function() {
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });
                                $.ajax({
                                    type: "POST",
                                    url: "{{route('token')}}",
                                    data: {nonce : payload.nonce},
                                    success: function (data) {
                                        console.log(data)
                                        window.location.href = '/list-order';
                                        console.log('success',payload.nonce)
                                    },
                                    error: function (data) {
                                        console.log(data)
                                        window.location.href = '/list-order';
                                        console.log('error',payload.nonce)
                                    }
                                });
                            });
                        })(jQuery);
                    });
                });a
            });
        </script>
</html>
        



    