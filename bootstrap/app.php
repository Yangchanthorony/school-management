
<?php

use App\Http\Middleware\Admin\AdminMiddleware;
use App\Http\Middleware\Admin\AdminRedirect;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Routing\Router;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(

        using: function (Router $router){
            $router->middleware('web')->group(base_path('routes/web.php'));
            $router->middleware('web')->group(base_path('routes/teacher.php'));
            $router->middleware('web')->group(base_path('routes/principal.php'));
            $router->middleware('web')->group(base_path('routes/guardian.php'));  
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'auth.admin' => AdminMiddleware::class,
            'guest.admin' => AdminRedirect::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
