<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\CityController;

use App\Http\Controllers\StateController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


route::get('/redirect', [HomeController::class, 'redirect'])->middleware('auth', 'verified');

route::get('/', [HomeController::class, 'index']);

// route::get('/home', [HomeController::class, 'index']);

route::get('/categories', [HomeController::class, 'categories']);

route::get('/books_by_categories/{id}', [HomeController::class, 'books_by_categories']);

route::get('/find_books', [HomeController::class, 'find_books']);

route::get('/careers', [HomeController::class, 'careers']);

route::get('/about_us', [HomeController::class, 'about_us']);

route::get('/contact_us', [HomeController::class, 'contact_us']);



route::get('/book_categories', [AdminController::class, 'book_categories']);

route::post('/upload_book_categories', [AdminController::class, 'upload_book_categories']);

Route::get('/edit_book_categories/{id}', [AdminController::class, 'edit_book_categories']);

Route::get("/delete_book_categories/{id}", [AdminController::class, "delete_book_categories"]);

Route::post("/update_book_categories/{id}", [AdminController::class, "update_book_categories"]);



route::get('/books', [AdminController::class, 'books']);

route::post('/upload_books', [AdminController::class, 'upload_books']);

Route::get('/edit_books/{id}', [AdminController::class, 'edit_books']);

Route::get("/delete_books/{id}", [AdminController::class, "delete_books"]);

Route::post("/update_books/{id}", [AdminController::class, "update_books"]);



Route::get("/download_books/{file}", [AdminController::class, "download_books"]);

Route::get("/view_books/{id}", [AdminController::class, "view_books"]);





route::post('/addcart/{id}', [HomeController::class, 'addcart']);

route::post('/add_paper_cart/{id}', [HomeController::class, 'add_paper_cart']);

route::get('/search_books', [HomeController::class, 'search_books']);

route::get('/search_books2', [HomeController::class, 'search_books2']);

route::get('/show_my_cart', [HomeController::class, 'show_my_cart']);

route::get('/deletecart/{id}', [HomeController::class, 'deletecart']);

route::get('/read_book_abstract/{id}', [HomeController::class, 'read_book_abstract']);





route::get('/marital_status', [AdminController::class, 'marital_status']);

route::post('/upload_marital_statuses', [AdminController::class, 'upload_marital_statuses']);





route::get('/should_we_contact_them', [AdminController::class, 'should_we_contact_them']);

route::post('/upload_should_we_contact_them', [AdminController::class, 'upload_should_we_contact_them']);





route::get('/teaching_experience', [AdminController::class, 'teaching_experience']);

route::post('/upload_teaching_experience', [AdminController::class, 'upload_teaching_experience']);




route::get('/travel_for_work', [AdminController::class, 'travel_for_work']);

route::post('/upload_travel_for_work', [AdminController::class, 'upload_travel_for_work']);




route::get('/medical_conditions', [AdminController::class, 'medical_conditions']);

route::post('/upload_medical_conditions', [AdminController::class, 'upload_medical_conditions']);



route::get('/has_sub_categories', [AdminController::class, 'has_sub_categories']);

route::post('/upload_has_sub_categories', [AdminController::class, 'upload_has_sub_categories']);




route::get('/application_form', [AdminController::class, 'application_form']);

route::post('/upload_application_form', [AdminController::class, 'upload_application_form']);

Route::get("/delete_application_form/{id}", [AdminController::class, "delete_application_form"]);

Route::get("/download_application_form/{form}", [AdminController::class, "download_application_form"]);

Route::get("/view_application_form/{id}", [AdminController::class, "view_application_form"]);



Route::get("/users_download_application_form/{form}", [HomeController::class, "users_download_application_form"]);





Route::post("/users_send_email", [HomeController::class, "users_send_email"]);




Route::post("/submit_career_form", [HomeController::class, "submit_career_form"]);







Route::post('getStates',[StateController::class,'getStates'])->name('getStates');

Route::post('getCities',[CityController::class,'getCities'])->name('getCities');






Route::get("/download_application_form", [HomeController::class, "download_application_form"]);






Route::get("/admin_seeing_careers", [AdminController::class, "admin_seeing_careers"]);





route::get('/admin_paper_categories', [AdminController::class, 'admin_paper_categories']);

route::post('/upload_paper_categories', [AdminController::class, 'upload_paper_categories']);

Route::get('/edit_paper_categories/{id}', [AdminController::class, 'edit_paper_categories']);

Route::get("/delete_paper_categories/{id}", [AdminController::class, "delete_paper_categories"]);

Route::post("/update_paper_categories/{id}", [AdminController::class, "update_paper_categories"]);







route::get('/paper_categories', [HomeController::class, 'paper_categories']);

route::get('/list_paper_categories/{id}', [HomeController::class, 'list_paper_categories']);







route::get('/books_under_paper', [AdminController::class, 'books_under_paper']);

route::post('/upload_books_under_paper', [AdminController::class, 'upload_books_under_paper']);

Route::get('/edit_books_under_paper/{id}', [AdminController::class, 'edit_books_under_paper']);

Route::get("/delete_books_under_paper/{id}", [AdminController::class, "delete_books_under_paper"]);

Route::post("/update_books_under_paper/{id}", [AdminController::class, "update_books_under_paper"]);



Route::get("/download_books_under_paper/{filee}", [AdminController::class, "download_books_under_paper"]);

Route::get("/view_books_under_paper/{id}", [AdminController::class, "view_books_under_paper"]);




route::get('/books_by_paper_categories/{id}', [HomeController::class, 'books_by_paper_categories']);



Route::get("/paystack", [HomeController::class, "paystack"]);



Route::post("/verify_payment", [HomeController::class, "verify_payment"]);



Route::get("/transactions", [AdminController::class, "transactions"]);

Route::get("/orders", [AdminController::class, "orders"]);







route::get('/show_my_books', [HomeController::class, 'show_my_books']);



Route::get("/users_download_books/{book}", [HomeController::class, "users_download_books"]);



Route::get("/download_paper_books/{book}", [HomeController::class, "download_paper_books"]);



Route::get("/download_my_books/{mybook}", [HomeController::class, "download_my_books"]);



route::get('/read_paper_book_abstract/{id}', [HomeController::class, 'read_paper_book_abstract']);