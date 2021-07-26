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
        <form action="postEmployee.php" method="post">
            <div class="card">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Salary</label>
                    <input type="number" name="salary" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Gender</label>
                <select name="gender" id="" class="form-control">
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                </div>
                <div class="form-group">
                    <label for="">Department</label>
                    <select name="dept" id="" class="form-control">
                    <option value="">Select</option>
                    <option value="IT">IT</option>
                    <option value="HR">HR</option>
                </select>
                </div>
                <div class="form-group">
                    <label for="">IsActive</label>
                    <select name="isActive" id="" class="form-control">
                    <option value="">Select</option>
                    <option value="active">Active</option>
                    <option value="inactive">InActive</option>
                </select>                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>

            </div>
        </form>
    </div>
</div>
</body>
</html>