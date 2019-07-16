<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Silahkan Login</title>
<link rel="stylesheet" href="css_login/style.default.css" type="text/css" />
<link rel="stylesheet" href="css/style.shinyblue.css" type="text/css" />
<link rel="icon" type="ico" href="icon.ico">
<link rel="icon" type="ico" href="logo.png">
<script type="text/javascript" src="js_login/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js_login/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js_login/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js_login/modernizr.min.js"></script>
<script type="text/javascript" src="js_login/bootstrap.min.js"></script>
<script type="text/javascript" src="js_login/jquery.cookie.js"></script>
<script type="text/javascript" src="js_login/custom.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#login').submit(function(){
            var u = jQuery('#username').val();
            var p = jQuery('#password').val();
            if(u == '' && p == '') {
                jQuery('.login-alert').fadeIn();
                return false;
            }
        });
    });
</script>
</head>

<body class="loginpage" style="background:url(img/bg.jpg)">

<div class="loginpanel">
    <div class="loginpanelinner">
        <div class="logo animate0 bounceIn"><img src="img/logo.png" alt="" /></div>
        <form id="login" action="log.php?op=in" method="post">
            <div class="inputwrapper login-alert">
                <div class="alert alert-error">Username Dan Password Masih Kosong</div>
            </div>
            <div class="inputwrapper animate1 bounceIn">
                <input type="text" name="username" id="username" placeholder="Username" />
            </div>
            <div class="inputwrapper animate2 bounceIn">
                <input type="password" name="password" id="password" placeholder="Password" />
            </div>
            <div class="inputwrapper animate3 bounceIn">
                <button name="submit">LOGIN</button>
            </div>
        </form>
    </div>
</div>

<div class="loginfooter">
   
</div>

</body>
</html>
