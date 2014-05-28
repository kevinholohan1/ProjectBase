<?php

// Slim auto loader
require 'vendor/autoload.php';

// Project specific libs & functions
require_once 'libs/common.php';
require_once 'libs/functions.php';

// Project auto loader
require_once 'Autoloader.php';

// Instantiate Slim 
$app = new \Slim\Slim();

$app->group("/api", function() use ($app) {
        // Library group
        $app->group('/library', function () use ($app) {

                // Get book with ID
                $app->get('/books/:id', function ($id) {
                        echo "<p>TEST {$id}";
                    });

                // Update book with ID
                $app->put('/books/:id', function ($id) {
                        
                    });

                // Delete book with ID
                $app->delete('/books/:id', function ($id) {
                        
                    });
            });
    });

$app->get('/Person/:id', function ($id) {

        $person = ModelFactory::create("person");
//        echo $id;
        if ($person->loadFromDB($id)) {
//        $person->email = "martin@nohope.ie";
//        echo "<p>DELETED = " . $person->delete();
//        $person->writeOrUpdateDB();

            $viewData =
                array(
                    "name" => $person->get('name')
            );

            $view = ViewFactory::createTwigView("Home");
            $view->display($viewData);
        }
        else echo "NO LOAD;";
    });



$app->run();
?>
