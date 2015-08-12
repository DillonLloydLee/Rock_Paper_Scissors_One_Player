<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    session_start();

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("game.twig");
    });

    $app->get("/results", function() use ($app) {
        $this_RockPaperScissors = new RockPaperScissors;
        $this_game = $this_RockPaperScissors->game($_GET["player_one"], $_GET["player_two"]);
        return $app["twig"]->render("results.twig", array("gameinfo" => $this_game));
    });

    return $app;

 ?>
