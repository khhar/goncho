<div class="col-sm-1"></div>
    <div class="col-sm-10">
        <div class="col-sm-12">
            <div class="col-sm-2"></div>
            <div class="panel panel-success col-sm-8 voting-success">
                <div class="panel-body">The vote was successful</div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="container">
            <?php
            $p=0; 
            foreach($this->allFilms as $allFilms): 
            ?>
                <div class="row">
                    <div class="col-sm-1">
                        <input class="vote" type="radio" val="" name="optradio" data="<?=$allFilms['id'];?>">
                    </div>                
                    <div class="progress col-sm-10">
                        <div class="progress-bar" role="progressbar" aria-valuenow="<?=$allFilms['votes'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$this->perArray[$p];?>;">
                        </div>
                        <span class="progress-type"><?=$allFilms['film_name'];?></span>
                        <span class="progress-completed"><?=$this->perArray[$p];?></span>
                    </div>
                </div>
            <?php
            $p++;
            endforeach; 
            ?>
        </div>
    </div>
<div class="col-sm-1"></div>


