<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>


    <title>Welcome</title>

    <link rel="stylesheet" type="text/css" href="CSS/Style2.css">
</head>
<body>
<div class="wrapper">
    <form class="form-signin" method="post" ACTION="Login.php">

        <h2 class="form-signin-heading">Forgot Password</h2>

        <input type="text" class="form-control" name="username" placeholder="UserName" required="" autofocus=""/>
        <input type="text" class="form-control" name="cont" placeholder="Contact Number" required="" autofocus=""/>

        <a href="Login.php"><-Back</a>
        <hr>
        <button class="btn btn-lg btn-primary btn-block" type="submit" style="">Make Request</button>
    </form>
</div>
</body>
</html>