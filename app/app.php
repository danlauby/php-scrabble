<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Game.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(
        new Silex\Provider\TwigServiceProvider(),
        array('twig.path' => __DIR__.'/../views')
    );

    $app->get('/', function() use ($app) {
        return $app['twig']->render('play_game.html.twig');
    });

    $app->post('/word', function() use ($app) {
        $input_word = $_POST['word'];
        $new_game = new Game($input_word);
        $word = $new_game->getWord();
        $score = $new_game->compareLetters($input_word);
        return $app['twig']->render('score.html.twig', array('score' => $score, 'word' => $word));
    });
    return $app;
?>
