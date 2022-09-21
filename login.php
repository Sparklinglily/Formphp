<?php
session_start();

//Database connection

require_once 'misc/database.php';

$error= "";


if(isset($_POST['username'])){

    $user= $_POST['username'];
    $pass= $_POST['password'];

    echo" $user : $pass <br>";

    //checking if user exists
    $sql= "SELECT * FROM users WHERE username = '$user' AND password= '$pass' ";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)  > 0){
        $_SESSION['user']= $user;
        header('Location: profile.php');
    }

    else {

        $error= "

        <div class='error'> Username or password incorrect </div> ";
    }
}

?>










    <!DOCTYPE html>
    <head>
        <title>Login Form</title>


        <style>

            body {
                background-color: grey;
                font-family: monospace;
            }

            form {
                background-color: white;
                margin: 5%;
                padding: 10px;
                height: auto;
                line-height: 20px;
            }

            img {
                border-radius: 50%;
                margin-left: 35%;
            }

            input[type=submit] {
                background-color: rgb(38, 158, 38);
                color: white;
                width: 100%;
                padding: 5px;
                margin: 5px;
                border: none;
            }


            button {
                background-color: rgb(202, 61, 61);
                color: white;
                border: none;
                padding: 5px;
            }

            span {
                float: right;
            }

            footer {
                background-color: silver;
                margin: 0%;
                padding: 10px;
            }

            input[type=text], input[type=password]{
                width: 95%;
                margin: 5px;
                padding: 2px;
            
                outline: none;
            }

            label {
                font-weight: bolder;
            }

            input[type=submit]:hover {
                background-color:rgb(97, 158, 97); ;
                cursor: pointer;
                transform: scale(.89);
            } 


            input[type=submit]:active {
                background-color: brown;
            }

            .error {
                width: 80%;
                display: block;
                background: red ;
                padding: 10px 5px;
                border-radius: 10px;
              



                



            }


        </style>

    </head>

    <body>
        
    <form method="POST" action="">

        <img src="4.jpg" width="30%"> <br>


        <label> Username</label>  <br>
        <input type="text" placeholder="Enter your username" name="username"> <br>

        <?= $error ?>

        <label> Password</label>  <br>
        <input type="password" placeholder="*******" name="password" > <br>

        <input type="submit" value="Login"> <br>

        <input type="checkbox" checked> Remember me <br>


        <footer>
            <button>Cancel</button>
            <span>Forgot   <a href="www.facebook.com"> password? </a>        </span>
        </footer>

    </form>
    </body>
