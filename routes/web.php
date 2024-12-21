<?php

use App\Action\ResponseProtocol;
use App\Http\Controllers\CityController;
use App\Models\City;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Route;


// ============= ⚙️ CORE ROUTES ⚙️ ===============
//
//

// routes:core ⚙️
// component load
Route::get('/comp/panel/{name}', function (string $name) {
    $viewPath = "components.panels.$name";
    if (view()->exists($viewPath)) {
        return view($viewPath);
    } else {
        return view("components.404");
    }
});

// ============= 🔓 CLIENT ROUTES 🔓 ===============
//
//

// routes:pages [client]
// site pages 📜
Route::get('/', function () {
    return view('pages.client.home');
});

Route::get('/home', function () {
    return view('pages.client.home');
})->name("client-home");

Route::get('/about', function () {
    return view('pages.client.about');
});

Route::get('/contact', function () {
    return view('pages.client.contact');
});

Route::get('/daham', function () {
    return view('pages.client.daham.daham');
});


// policy pages ⚖️
Route::get('/privacy-policy', function () {
    return view('pages.client.privacy-policy');
})->name("privacy-policy");

Route::get('/terms-and-conditions', function () {
    return view('pages.client.terms-and-conditions');
})->name('terms-and-conditions');



// user accounts pages 🙍‍♂️
Route::get('/login', function () {
    return view('pages.client.signin');
})->name("login");

Route::get('/register', function () {
    return view('pages.client.signup');
})->name("register");

Route::get('/account', function () {
    return view('pages.client.account');
});

Route::get('/forgot-password', function () {
    return view('pages.client.forgot-password');
});

//
// ==========================================


// ============= 🔒 ADMIN ROUTES 🔒 ===============
//
//

// routes:pages [admin]
Route::get('/admin/login', function () {
    return view('pages.admin.login');
})->name("admin-login");

Route::get('/admin/employee/login', function () {
    return view('pages.admin.employee_login');
})->name("employee-login");


// routes:admin
// Secure the actual admin route
// Route::middleware([AdminSessionAuthentication::class])->group(function () {
    Route::get('/admin', function () {
        return view('pages.admin.home');
    })->name('admin');

    // Name the route for better usage and redirection
    Route::get('/staff', function () {
        return view('pages.admin.home');
    })->name('staff');  // Name the route for better usage and redirection
// });

// ==========================================



// ============= 🧪 BACKEND ROUTES 🧪 ===============

//create city route group
Route::group(['prefix' => 'city'], function () {
    Route::get('/', [CityController::class, 'index']);
    Route::post('/add', [CityController::class, 'store']);

    Route::post('/update', [CityController::class, 'update']);
    Route::post('/delete', [CityController::class, 'destroy']);
});

// ==========================================