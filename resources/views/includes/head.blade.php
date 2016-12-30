<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>activeWorkplan</title>

    <!-- CSS -->
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/global/header-footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/general/signup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/general/dataprotection.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/global/modal.css')}}">

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>


</head>