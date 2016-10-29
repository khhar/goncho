<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	<link rel="stylesheet" href="/public/css/bootstrap.css" />
    <link rel="stylesheet" href="/public/css/style.css" />
  	<script src="/public/js/jquery.js"></script>
  	<script src="/public/js/bootstrap.js"></script>
    <script src="/public/js/init.js"></script>
  </head>
    <body>
        <nav class="navbar navbar-inverse" >
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="http://kino.dev/adminaccount">Kino</a>
              </div>
              <ul class="nav navbar-nav">
                <li class="active"><a href="http://kino.dev/adminaccount">Home</a></li> 
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="http://kino.dev/adminaccount"><?php echo $this->admin_inf['name'] ?></a></li>
                <li><a href="/admin/logOut"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
              </ul>
            </div>
        </nav>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
          <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete</h4>
              </div>
              <div class="modal-body">
                <p>You really want to delete this film?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger yes" data-dismiss="modal">Yes</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
              </div>
            </div>
          </div>
        </div>

