<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Form Validation</title>
</head>

<body>
    <div class="container mb-5">
        <div class="jumbotron">
            <h3>JavaScript Form Validation</h3>
            
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" id="add-user-form" novalidate>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="user name" value="" required>
                        <div class="invalid-feedback">Name is required</div>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="user email" value="" required>
                        <div class="invalid-feedback">Email is required</div>

                    </div>
                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="text" class="form-control" name="number" placeholder="phone number" value="" pattern="[0-9]{10}" required>
                        <div class="invalid-feedback">Phone number is required only 10 digits</div>

                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="password" placeholder="user password" value="" pattern="[0-9]{6}" required>
                        <div class="invalid-feedback">Password is required only 6 digits</div>


                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Address" value="" required>
                        <div class="invalid-feedback">Address is required</div>


                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Father Name</label>
                        <input type="text" class="form-control" name="father_name" placeholder="Father name" value="" required>
                        <div class="invalid-feedback">Father Name is required</div>


                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Mother Name</label>
                        <input type="text" class="form-control" name="mother_name" placeholder="Mother Name" value="" required>
                        <div class="invalid-feedback">Mother Name is required</div>


                    </div>
                </div>
               
                <div class="col-sm-12">
                   <input type="submit" value="Register" name="register" class="btn btn-primary">
                   <!-- <a href="login.php" name="submit" class="btn btn-primary">Already login</a> -->

                   
                </div>

            </div>
        </form>
        </div>
    </div>
    <script>
const addForm = document.getElementById("add-user-form");
// form validation with the help of javascript
addForm.addEventListener("submit", (e)=>{
    // e.preventDefault();
    if(addForm.checkValidity() === false){
        e.preventDefault();
        e.stopPropagation();
        addForm.classList.add('was-validated');
        return false;
    }
});

</script>
</body>

</html>