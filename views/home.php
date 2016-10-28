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
                <a class="navbar-brand" href="http://localhost/kino/">Kino</a>
              </div>
              <ul class="nav navbar-nav">
                <li class="active"><a href="http://localhost/kino/">Home</a></li> 
              </ul>
            </div>
        </nav>
        <div class="col-sm-1"></div>
            <div class="col-sm-10">
               <div class="container">
                <?php foreach($this->allFilms as $allFilms): ?>
                    <div class="row">
                        <div class="col-sm-1">
                            <input class="vote" type="radio" name="optradio" data="<?=$allFilms['id'];?>">
                        </div>                
                        <div class="progress col-sm-10">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                            <span class="progress-type"><?=$allFilms['film_name'];?></span>
                            <span class="progress-completed"><?=$allFilms['votes'];?></span>
                        </div>
                
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <div class="col-sm-1"></div>
    </body>
</html>

