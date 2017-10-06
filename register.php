<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Environs Movement</title>
  <!-- Styleshssseet-->
  <link rel="stylesheet" href="stylesheet.css" />
  <!-- Tell the browsers to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

  <div class="col-sm-9">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading">
					<strong>Register</strong>
				</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form">

                        <div class="form-group">
                         	<div class="col-sm-9">
                                <input type="text" class="form-control" id="inputNames3" placeholder="Full Name" required="">
							</div>
                        </div>
						<div class="form-group">
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required="">
                            </div>
                        </div>
						<div class="form-group">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Confirm Password" required="">
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success btn-sm">Sign in</button>
                                <button type="reset" class="btn btn-default btn-sm">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">Already Registered? <a href="login.php" class="">Login here</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
