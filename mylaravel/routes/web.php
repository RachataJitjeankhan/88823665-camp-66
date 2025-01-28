    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Mycontroller;

    Route::get('/mycontroller/{id?}', [Mycontroller::class, 'myfunction']);
    Route::post('/mycontroller/{id?}', [Mycontroller::class, 'myfunction']);
    Route::post('/mycontroller', [MyController::class, 'processInput']);

    Route::get('/myview', function () {
        return view('myview');
    });

    Route::post('/mycontroller', 
    [MyController::class, 'processInput']);
    
    Route::get('/login',
    [App\Http\Controllers\LoginController::class, 'index']);

    Route::get('/home',
    [App\Http\Controllers\HomeController::class, 'index']);

    Route::get('/register',
    [App\Http\Controllers\RegisterController::class, 'index']);

    Route::get('/',
    [App\Http\Controllers\HomeController::class, 'index']);