<?php
    $success_msg = getTempSession('success');
    $error_msg = getTempSession('error');
?>
<html>
  <head>
    <title>Login Page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=${encoding}">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/validationEngine.jquery.css" type="text/css"/>
  </head>
  <body>
      <form name="regiteration" id="registration" action="<?php echo base_url('register.php') ?>" method="post">
          <table>
            <thead>
                <tr>
                    <th>New User? Regiser</th> 
                </tr>
            </thead>
            <tbody>
                <tr><td><input type="text" name="fullname" id="fullname" placeholder="Name" class="validate[required]" /></td></tr>
                <tr><td><input type="text" name="city" id="city" placeholder="City" class="validate[required]" /></td></tr>
                <tr><td><input type="text" name="email" id="email" placeholder="Enter Email id" class="validate[required,custom[email]]" /></td></tr>
                <tr><td><input type="password" name="password" id="password" placeholder="Enter Password" class="validate[required]" /></td></tr>
                <tr><td><input type="submit" name="Register" value="Register" /></td></tr>
            </tbody>
        </table>
      </form>
      <form name="login" id="login" action="<?php echo base_url('login.php') ?>" method="post">
          <table>
            <thead>
                <tr>
                    <th>Existing User? Login</th> 
                </tr>
            </thead>
            <tbody>
                <tr><td><input type="text" name="email" id="email" placeholder="Enter Email id" class="validate[required,custom[email]]" /></td></tr>
                <tr><td><input type="password" name="password" id="password" placeholder="Enter Password" class="validate[required]" /></td></tr>
                <tr><td><input type="submit" name="Login" value="Login" /></td></tr>
            </tbody>
        </table>
      </form>
      OR
      <div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="false"></div>
      <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=239204622194&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <script src="<?php echo base_url() ?>js/jquery-1.8.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url() ?>js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript">
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#registration, #login").validationEngine();
                        <?php if(!empty($success_msg)) {
                        ?>
                                alert('<?php echo $success_msg ?>');
                        <?php
                        } ?>
                        <?php if(!empty($error_msg)) {
                        ?>
                                alert('<?php echo $error_msg ?>');
                        <?php
                        } ?>
		});
       </script>
  </body>
</html>
