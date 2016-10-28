<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	<link rel="stylesheet" href="/kino/public/css/bootstrap.css" />
    <link rel="stylesheet" href="/kino/public/css/style.css" />
  	<script src="/kino/public/js/jquery.js"></script>
  	<script src="/kino/public/js/bootstrap.js"></script>
    <script src="/kino/public/js/init.js"></script>
  </head>
    <body>
        <nav class="navbar navbar-inverse" >
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="http://localhost/kino/adminaccount">Kino</a>
              </div>
              <ul class="nav navbar-nav">
                <li class="active"><a href="http://localhost/kino/adminaccount">Home</a></li> 
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="http://localhost/kino/adminaccount"><?php echo $this->admin_inf['name'] ?></a></li>
                <li><a href="/kino/admin/logOut"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
              </ul>
            </div>
        </nav>

