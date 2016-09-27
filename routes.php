<?php
// Routes
    
$app->get('/install', function ($request, $response, $args) {

$this->db;

    $capsule = new \Illuminate\Database\Capsule\Manager;
    $capsule::schema()->create('articles', function (\Illuminate\Database\Schema\Blueprint $table) {
       $table->increments('id');
        $table->string('name');
        // Include created_at and updated_at
       $table->timestamps();
   });
   return $this->renderer->render($response, 'install.phtml', $args);
});


$app->get('/test', function ($request, $response, $args) {
    // Sample log message
    //$this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'test.phtml', $args);
});

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});






