<?php layout('layouts/game'); ?>

<?php section('content'); ?>
<div class="card">
    <div class="card-header">
    Map
    </div>
    <div class="card-body">
    <div class="viewport">
        <div class="mapWrapper" style="width:<?=$viewPort['width']*$tile['width'] ?>px;
        height:  <?= $viewPort['height']*$tile['height']?>px">
            <div class="map" style="top:<?= (($viewPort['top']*$tile['height'])*-1) ?>px;
            left:<?= (($viewPort['left']*$tile['width'])*-1) ?>px">
            <?php for($y = $viewPort['top']; $y< $viewPort['bottom'];$y++):?>
                <?php for($x = $viewPort['left'];$x<$viewPort['right'];$x++):
                     $left = $x * $tile['width'];
                     $top = $y * $tile['height'];
                     $tileName = 'empty';
                     if($x >= 0 && $y >=0  && $x<=$map['width'] && $y <= $map['height']){
                        $tileKey = ( $x+$y*$map['width']);
                        $tiledata = substr($mapData,$tileKey,1);
                        $tileName =  $possibleTiles[$tiledata];
                     }
                    ?> 
                    <div class="tile terrain <?= $tileName?>" style="width:<?=$tile['width']?>px;
                    height:<?=$tile['height']?>px;
                    top:<?= $top?>px;
                    left:<?=$left?>px;
                    ">
                </div>

                <?php endfor;?>
            <?php endfor;?>
             
            </div>
        </div>
    </div>
    </div>
</div>
<?php section('content'); ?>



<?php layout('layouts/game'); ?>