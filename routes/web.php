<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AuthController;
use App\Http\Controllers\Admin\AdminController;
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/carRental', [HomeController::class, 'bookings'])->name('carRental');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/signUp', [HomeController::class, 'signUp'])->name('signUp');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/cars', [HomeController::class, 'car'])->name('cars');
Route::get('/login-client', [AuthController::class, 'show'])->name('login.client');
Route::post('/login-client', [AuthController::class, 'login'])->name('login');
Route::get('/admin', [AdminController::class, 'show'])->name('login.admin');
Route::post('/admin', [AdminController::class, 'login'])->name('Admin');
Route::get('/logout-client', [AuthController::class, 'logout'])->name('client.logout');
Route::match(['get', 'post'], '/book/{car_id}', [HomeController::class, 'book'])->name('book');
Route::match(['get', 'post'], '/create-account', [HomeController::class, 'createAccount'])->name('createAccount');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('acceuil');
Route::get('/User', [AdminController::class, 'User'])->name('User');
Route::get('/messages', [AdminController::class, 'messages'])->name('messages');
Route::get('/payments', [AdminController::class, 'payments'])->name('payments');
Route::get('/index', [AdminController::class, 'index'])->name('index');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout'); 
Route::get('/cars/{matricule}/edit', [AdminController::class, 'edit'])->name('cars.edit');
Route::post('/cars/{matricule}/update', [AdminController::class, 'update'])->name('cars.update');
Route::delete('/cars/{matricule}', [AdminController::class, 'destroy'])->name('cars.delete');
Route::get('/cars/create', [AdminController::class, 'create'])->name('cars.create');
Route::post('/cars/store', [AdminController::class, 'store'])->name('cars.store');
Route::get('/admin/reservations', [AdminController::class, 'reservations'])->name('admin.reservations');
Route::get('/admin/reservations/change-status', [AdminController::class, 'changeStatus'])->name('admin.reservations.changeStatus');
Route::get('/admin/reservations/return', [AdminController::class, 'confirmReturn'])->name('admin.reservations.confirmReturn');
Route::get('/client/{cin}', [AdminController::class, 'showClient'])->name('show');
Route::get('/client/{cin}/edit', [AdminController::class, 'editClient'])->name('client.edit');
Route::delete('/client/{cin}', [AdminController::class, 'destroyClient'])->name('client.destroy');
Route::put('/client/{cin}', [AdminController::class, 'updateClient'])->name('client.update');
Route::post('/message/lu/{id}', [AdminController::class, 'marquerCommeLu'])->name('messages.lu');
Route::delete('/messages/{id}', [AdminController::class, 'destroyMessage'])->name('messages.destroy');
Route::post('/contact', [HomeController::class, 'store'])->name('contact.send');
Route::get('/contrat/{id}', [AdminController::class, 'showContrat'])->name('contrat.show');
Route::get('/paiement/create', [AdminController::class, 'createpayment'])->name('paiement.create');
Route::post('/paiement/store', [AdminController::class, 'storepayment'])->name('paiement.store');
Route::get('/carssearch', [HomeController::class, 'search'])->name('search');





?>