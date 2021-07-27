<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "header.php"; ?>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form action="postSignup.php" method="post">
            <div class="card">
                <div class="form-group">
                    <?php echo @$_GET["msg"]; ?>
                </div>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="pass" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" name="cpass" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>

            </div>
        </form>
    </div>
</div>
</body>
</html>