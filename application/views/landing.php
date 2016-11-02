<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>beeracademy.png">
        <title>The Beer Academy</title>
        
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
        <link href="<?php echo base_url(); ?>assets/bootstrap3/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/css/landing.css" rel="stylesheet"/>
    </head>
    
    <body>
    <div class="login-form">
        <h1>TheBeerAcademy</h1>
        <form method="post" action="<?php echo site_url('login') ?>">
         <div class="form-group ">
           <input type="text" class="form-control" placeholder="Username " id="UserName" name="user">
           <i class="fa fa-user"></i>
         </div>
         <div class="form-group log-status">
           <input type="password" class="form-control" placeholder="Password" id="Passwod" name="pass">
           <i class="fa fa-lock"></i>
         </div>
          <a class="link" href="#">Lost your password?</a>
         <input type="submit" class="log-btn" ></button>
        </form>
    
   </div>
        
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/bootstrap3/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/landing.js"></script>
    </body>

<script>

</script>
    
</html>
