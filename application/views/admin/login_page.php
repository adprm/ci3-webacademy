<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 text-center mt-5 mx-auto p-4 text-white">
                <h1 class="h2">Login Admin</h1>
                <p class="lead">Please enter the Admin Panel</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-5 mx-auto mt-5 text-white">
                <form action="<?= site_url('admin/login') ?>" method="POST">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="email or username" required />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="password" required />
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="rememberme" id="rememberme" />
                                <label class="custom-control-label" for="rememberme"> Remember me</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn w-100" value="Login" />
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>

<style>
body {
    background-color: #300030;
}
</style>