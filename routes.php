<?php

/** @var \Illuminate\Contracts\Routing\Registrar $router */
$router = app('router');

$router->group(config('uit.lighthouse::route', []), function () use ($router): void {
    $routeName = config('uit.lighthouse::route_name', 'graphql');
    $controller = config('uit.lighthouse::controller');

    $methods = config('uit.lighthouse::route_enable_get', false)
    ? ['GET', 'POST']
    : ['POST'];

    $router->match($methods, $routeName, [
        'as' => 'lighthouse.graphql',
        'uses' => $controller,
    ]);
});


// Route::get('graphql/schema.graphql', function(){

//     $schemesBody = '';
//     $schemes = \Uit\Lighthouse\Models\Schema::published()->get();
//     foreach ($schemes as $schema) {
//         $schemesBody .= $schema->schema;
//     }

//     return $schemesBody;

// });
