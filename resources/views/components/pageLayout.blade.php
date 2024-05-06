<div>
    <!-- He who is contented is rich. - Laozi -->
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield("title","page layout default title") </title>
    @yield("head-content")
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <script src="{{asset("js/bootstrap.bundle.min.js")}}"></script>

    <script src="{{asset("js/jquery.min.js")}}"></script>

</head>
<body class="bg-dark-subtle">
    @yield("body-content","default body content")
</body>
</html>
