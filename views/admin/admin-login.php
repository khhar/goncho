<html>
    <hedad>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<link rel="stylesheet" href="/public/css/bootstrap.css" />
      <link rel="stylesheet" href="/public/css/style.css" />
    	<script src="/public/js/jquery.js"></script>
    	<script src="/public/js/bootstrap.js"></script>
    </hedad>
    <body>
      <div class='col-sm-4'></div>
      <div class="col-sm-4 admin-login-cont">
        <div class="login-form">
          <form method="post" action="" role="login">
            <input type="text" name="email" placeholder="Email" required class="form-control input-lg" value="" />
            <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="" />
            <div class="pwstrength_viewport_progress"></div>
            <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
          </form>
        </div>
        <div class="alert alert-danger login-error" style="<?php if(!$this->error) { ?> display:none <?php } ?>"><?php echo $this->error; ?></div> 
      </div>
      <div class="col-sm-4"></div>
    </body>
</html>