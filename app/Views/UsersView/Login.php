<?php require APPROOT . '/views/inc/header.php'; ?>

    <div class="login">

        <div class="">
            <h1 class="text-center">sign in</h1>

            <form action="<?php echo URLROOT; ?>/AdminController/Login" method="POST">

                <div class="title my-3">
                    <!-- <label for="email">Email :</label> -->
                    <input type="email" name="email" placeholder="Email" class="">
                </div>

                <div class="title my-3">
                    <!-- <label for="password">Password :</label> -->
                    <input type="password" name="password" placeholder="Password" class="">
                </div>

                <input type="submit" name="submit" value="SignIn" class="">

            </form>
        </div>

        <!-- <div class="an_introduction2">
            <h1>hello friends</h1>

            <h5>Enter Your Personal Details And Start Journey With Us</h5>

            <div class="link2">
                <a href="<?php echo URLROOT;?>/UserController/SignUp">SignUp</a> 
            </div>

        </div> -->

    </div>
    
