<?php session_start(); ?>
<?php include('config.php'); ?>
<html>
        <head>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
        <div class="form-wrapper">
          <form action="#" method="post">
            <h3>Login dulu</h3>
    
             <div class="form-item">
                <input type="text" name="user" required="harus diisi" placeholder="Username" autofocus required></input>
             </div>
    
            <div class="form-item">
                <input type="password" name="pass" required="harus diisi" placeholder="Password" required></input>
            </div>
    
            <div class="button-panel">
                <input type="submit" class="button" title="Log In" name="login" value="Login"></input>
            </div>
          </form>
 <?php
    if (isset($_POST['login']))
        {
            $username = mysqli_real_escape_string($mysqli, $_POST['user']);
            $password = mysqli_real_escape_string($mysqli, $_POST['pass']);
            
            $query      = mysqli_query($mysqli, "SELECT * FROM user WHERE  password='$password' and username='$username'");
            $row        = mysqli_fetch_array($query);
            $num_row    = mysqli_num_rows($query);
            
            if ($num_row > 0) 
                {           
                    $_SESSION['id']=$row['id'];
                    header('location:home.php');
                    
                }
            else
                {
                    echo 'Username atau Password Salah';
                }
        }
     ?>
  
        </div>
    </body>
</html>