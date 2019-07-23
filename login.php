<?php include 'header.php'?>

<style>
    .container{
        height: 600px;
        background-image: url("./shoes/kiatuone.jpeg.jpg");
        background-size: cover;



    }

</style>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="loginHandler.php" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="password" class="form-control" id="pwd">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox">Remember password</label>
                </div>
                <button type="submit" name="login" class="btn btn-default" style="background-color: black;font-color:white">Login</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

