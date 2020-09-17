<?php
declare(strict_types=1);

function getMapData($map,$possibleTiles){
    if(isset($_SESSION['mapData'])){
        return $_SESSION['mapData'];
    }
    $mapData = '';
    mt_srand(1337);
    for($y = 0;$y < $map['height'];$y++){
        for($x = 0;$x<$map['width'];$x++){
            $mapData .= mt_rand(0,count($possibleTiles)-1);
        }
    }
    $_SESSION['mapData'] = $mapData;
    return $mapData;
}
function viewMap() {
    

    $tile = [
        'width'=>64,
        'height'=>64
    ];

    $viewPort = [
        'width'=>17,
        'height'=>9
    ];
    $map = [
        'width'=>500,
        'height'=>500
    ];
    $currentPosition = [
        'y'=>0,
        'x'=>0
    ];

    $possibleTiles = [
        'gras',
        'water',
        'dirt'
    ];
    $mapData = getMapData($map,$possibleTiles);
    $halfViewPortWidth = floor($viewPort['width'] / 2);
    $halfViewPortHeight = floor($viewPort['height'] / 2);
    $viewPort['left'] = $currentPosition['x'] - $halfViewPortWidth;
    $viewPort['top'] = $currentPosition['y'] - $halfViewPortHeight;
    $viewPort['right'] = $viewPort['left'] + $viewPort['width'];
    $viewPort['bottom'] = $viewPort['top'] + $viewPort['height'];

    $data = [
       'viewPort'=>$viewPort,
       'tile'=>$tile,
       'possibleTiles'=>$possibleTiles,
       'mapData'=>$mapData,
       'map'=>$map
    ];
    return render('map', $data);
}
