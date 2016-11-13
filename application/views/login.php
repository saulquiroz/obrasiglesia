<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">  
      <title>Obras Iglesia - Login</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
        <!-- 
        Visual Admin Template
        http://www.templatemo.com/preview/templatemo_455_visual_admin
        -->
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
      <link href="<?php echo base_url(); ?>assets/login/css/font-awesome.min.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>assets/login/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>assets/login/css/templatemo-style.css" rel="stylesheet">
      
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body class="light-gray-bg">
    <div class="templatemo-content-widget templatemo-login-widget white-bg">
      <header class="text-center">
            <div class=""></div>
            <h1>BIENVENIDO</h1>
          </header>
          <form action="<?php echo base_url(); ?>acceso" class="templatemo-login-form" method="POST">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>             
                    <input type="text" name="username" class="form-control" placeholder="Nombre de Usuario">           
                </div>  
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>              
                    <input type="password" name="password" class="form-control" placeholder="******">           
                </div>  
            </div>              
              <div class="form-group">
                <div class="checkbox squaredTwo">
                    <input type="checkbox" id="c1" name="cc" />
                <label for="c1"><span></span>Recordar Usuario</label>
                </div>            
              </div>
            <div class="form-group">
              <button type="submit" class="templatemo-blue-button width-100">Login</button>
            </div>
          </form>
    </div>
   
  </body>
</html>