use App\Http\Controllers\VendorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('welcome');
});

// Vendor Routes
Route::middleware(['auth', 'role:vendor'])->group(function () {
    Route::get('/vendor/dashboard', [VendorController::class, 'dashboard']);
    Route::resource('/vendor/products', ProductController::class);
});

// Admin Routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::resource('/admin/products', ProductController::class);
});

// Cart & Wishlist
Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index']);
    Route::post('/cart/add', [CartController::class, 'add']);
    Route::get('/wishlist', [CartController::class, 'wishlist']);
});

// Orders
Route::middleware('auth')->group(function () {
    Route::get('/orders', [OrderController::class, 'index']);
    Route::post('/orders/place', [OrderController::class, 'placeOrder']);
});

// Payment
Route::middleware('auth')->group(function () {
    Route::post('/payment/process', [PaymentController::class, 'process']);
});

// Reviews
Route::middleware('auth')->group(function () {
    Route::post('/reviews', [ReviewController::class, 'store']);
});
