<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="resources/js/jquery-3.4.1.js"></script>
    <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css">
    <script src="resources/js/bootstrap.js"></script>
    <title>Log In</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 border">
                <div class="row d-flex justify-content-center">
                    <div class="col-6 col-sm-6 col-md-4 form-border my-5">
                        <img class="d-block mx-auto py-3" width="35%" src="resources/images/user.png" alt="user_photo">
                        <form>
                            <div class="form-group pt-5">
                                <input type="email" class="form-control" id="Email" placeholder="Email ID">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="Password" placeholder="Password">
                            </div>
                            <div class="form-group pt-5">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                                <a class="btn btn-info btn-block" href="Signup.html" role="button">If you have no
                                    account then Sign up</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>