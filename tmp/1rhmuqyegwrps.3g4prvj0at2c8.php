<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>F3 Sample Project</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="app/css/workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="app/css/signin.css" rel="stylesheet">

</head>

<body>

    <div class="container">

        <form class="form-signin" method="POST" action="/authenticate">
            <h2 class="form-signin-heading">Please sign in</h2>
            <label class="sr-only">Username</label>
            <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username" required=""
                autofocus="">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="">

            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="app/js/workaround.js"></script>


</body>

</html>