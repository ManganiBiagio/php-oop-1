<?php
require_once "./classes/Movie.php";
require_once "./classes/Generes.php";
require_once "./dates/movieDb.php";
require_once "./classes/Actor.php";


// $myMovie=new Movie("prova",["pippo","pluto"],1940,4.5);
// $yourMovie=new Movie("indiana jones",["Harrison Ford"],2022,5);
// $gen_action=new Generes("action");
// $gen_romantic=new Generes("romantic");
// $myMovie->setGeneres([$gen_action]);
//var_dump($myMovie);
//var_dump($yourMovie);

$movieList=[];
foreach($movieListInfo as $movie){
    $newMovie=new Movie($movie["title"],$movie["actors"],$movie["year_production"],$movie["vote"],$movie["generes"],$movie["regia"]);
    $movieList[]=$newMovie;

}

 //var_dump($movieList);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1>Php Object Film</h1>
        <div class="row">
        <?php foreach ($movieList as $movie) { ?>
            <div class="col">
            <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $movie->getTitle() ?></h5>
                            <div class="card-text">Voto:<?php echo $movie->getVote()  ?></div>
                            <div class="card-text">Anno di produzione:<?php echo $movie->getYear_production()  ?></div>
                            <h6>Attori:</h6>
                            <ul>
                            <?php foreach ($movie->getActors() as $actor) { ?>
                                <li><?php echo $actor->getFullName() ?></li>
                                <?php } ?>
                                
                            </ul>
                            <h6>Generi:</h6>
                            <ul>
                            <?php foreach ($movie->getGeneres() as $gen) { ?>
                                <li><?php echo $gen->getGen_type() ?></li>
                                <?php } ?>
                                
                            </ul>
                            <h6>Regia:</h6>
                            <ul>
                            <?php foreach ($movie->getRegia() as $reg) { ?>
                                <li><?php echo $reg->getFullName() ?>
                                <?php if(!is_null($reg->getStyle()[0])){ ?>
                                <span><strong>Stile:</strong><?php echo $reg->getStyle()[0] ?></span>
                                <?php } ?>
                            
                            </li>
                                <?php } ?>
                                
                            </ul>
                        </div>
                    </div>

            </div>
         <?php } ?>
        </div>



    </div>

   

</body>

</html>