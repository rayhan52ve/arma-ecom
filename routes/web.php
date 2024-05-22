<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminProductOrderController;
use App\Http\Controllers\Admin\ManageUserController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\Admin\ExpenseTypeController;
use App\Http\Controllers\Admin\PayrollController;
use App\Http\Controllers\Admin\WebsiteInfoController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Customer\CustomerOrderController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EmployeeOrServiceProvider\EmployeeOrderController;
use App\Http\Controllers\EmployeeOrServiceProvider\ServiceProviderController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductSubCategoryController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\ServiceSubCategoryController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Customer\CustomerProfileController;
use App\Http\Controllers\Customer\ReviewController;
use App\Http\Controllers\EmployeeOrServiceProvider\EmployeeProfileController;

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

// Route::get('/', function () {
//     return view('Frontend.modules.index');
// });
Route::name('front.')->group(function () {
    Route::get('/', [FrontendController::class, 'index'])->name('home');
    Route::get('/about', [FrontendController::class, 'about'])->name('about');
    Route::get('/services', [FrontendController::class, 'services'])->name('services');
    Route::get('/all-products', [FrontendController::class, 'products'])->name('products');
    Route::get('/career-choice', [FrontendController::class, 'career'])->name('career');
    Route::resource('career', CareerController::class)->only('store');
    Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
    Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
    Route::post('/send-email', [EmailController::class, 'store'])->name('email.store');
    Route::get('/search', [FrontendController::class, 'search'])->name('search');
});

//Invoice
Route::get('/invoice/{id}',[FrontendController::class,'invoice'])->name('invoice')->middleware('auth');
// chat
Route::resource('chat', ChatController::class)->only('store')->middleware('auth');
Route::resource('chat', ChatController::class)->except('store')->middleware('isAdmin');
// chat

//product Cart
Route::post('/add-to-cart', [CartController::class, 'add_to_cart'])->name('add_to_cart');
Route::post('/update-cart/{id}', [CartController::class, 'updateCart'])->name('update_cart');
Route::get('/delete-cart/{id}', [CartController::class, 'delete'])->name('delete_cart');
Route::any('/checkout', [CartController::class, 'checkout'])->name('checkout');
//product Cart

Auth::routes();

Route::get('/home', [HomeController::class, 'tech_web_index'])->name('home');

Route::get('/all/logout', [HomeController::class, 'tech_web_logout'])->name('all.logout');

Route::get('customer/book-order/{id}', [CustomerOrderController::class, 'bookOrder'])->name('customer.bookOrder');
Route::post('customer/auth-order', [CustomerOrderController::class, 'authOrder'])->name('customer.authOrder');
Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'customer', 'as' => 'customer.'], function () {
        Route::get('/home', [CustomerController::class, 'index'])->name('home');
        Route::get('/profile', [CustomerProfileController::class, 'profile'])->name('profile');
        Route::put('/profile-update/{id}', [CustomerProfileController::class, 'profile_update'])->name('profile_update');

        Route::get('/order-list', [CustomerOrderController::class, 'orderList'])->name('orderList');
        Route::get('/product-order-list', [CustomerOrderController::class, 'productOrderList'])->name('productOrderList');
        Route::post('/store-order', [CustomerOrderController::class, 'storeOrder'])->name('storeOrder');
        Route::post('/store--product-order/{id}', [CustomerOrderController::class, 'storeProductOrder'])->name('storeProductOrder');
        // Route::delete('/orders/{id}', [CustomerOrderController::class, 'destroy'])->name('order.destroy');
        Route::post('/order-add-time/{id}', [CustomerOrderController::class, 'addTime'])->name('addTime');

        Route::get('/customer-payment/{id}', [CustomerOrderController::class, 'customerPayment'])->name('customerPayment');

        //review
        Route::resource('review',ReviewController::class);
    });
});

Route::middleware(['auth', 'isEmployee'])->group(function () {
    Route::group(['prefix' => 'service-provider', 'as' => 'serviceProvider.'], function () {
        Route::get('/home', [ServiceProviderController::class, 'index'])->name('home');
        Route::get('/profile', [EmployeeProfileController::class, 'profile'])->name('profile');
        Route::put('/profile-update/{id}', [EmployeeProfileController::class, 'profile_update'])->name('profile_update');

        Route::get('/accepted-order-list', [EmployeeOrderController::class, 'acceptedOrderList'])->name('acceptedOrderList');
        Route::get('/completed-order-list', [EmployeeOrderController::class, 'completedOrderList'])->name('completedOrderList');

        Route::put('/order-status/{id}', [EmployeeOrderController::class, 'updateOrderStatus'])->name('orderStatus');
        Route::put('/order-countdown/{id}', [EmployeeOrderController::class, 'orderCountdown'])->name('orderCountdown');

        // product order
        Route::get('/pending-product-order-list', [EmployeeOrderController::class, 'pendingProductOrderList'])->name('pendingProductOrder');
        Route::get('/accepted-product-order-list', [EmployeeOrderController::class, 'acceptedProductOrderList'])->name('acceptedProductOrder');
        Route::get('/declined-product-order-list', [EmployeeOrderController::class, 'declinedProductOrderList'])->name('declinedProductOrder');
        Route::get('/completed-product-order-list', [EmployeeOrderController::class, 'completedProductOrderList'])->name('completedProductOrder');
        // product order
    });
});

// Route::match(['get','post'],'/',[AdminLoginController::class,'login'])->name('login');
Route::match(['get','post'],'/emp-register',[RegisterController::class,'employee_register'])->name('employeeRegister');

// admin auth middleware start -------------------------------
Route::name('')
    ->prefix('admin')
    ->middleware(['auth', 'isAdmin'])
    ->group(function () {
        Route::get('home', [HomeController::class, 'tech_web_adminHome'])->name('admin.home');
        Route::get('/profile', [AdminProfileController::class, 'profile'])->name('admin.profile');
        Route::put('/profile-update/{id}', [AdminProfileController::class, 'profile_update'])->name('admin.profile_update');

        Route::resource('career', CareerController::class)->only('index','destroy')->names('admin.career');

        //Manage Services
        Route::resource('service-category', ServiceCategoryController::class);
        Route::resource('service-sub-category', ServiceSubCategoryController::class);
        Route::resource('service', ServiceController::class);
        //Manage Services

        //Manage Products
        Route::resource('product-category', ProductCategoryController::class)->names('admin.productCategory');
        Route::resource('product-sub-category', ProductSubCategoryController::class)->names('admin.productSubCategory');
        Route::resource('product', ProductController::class)->names('admin.product');
        Route::delete('product-gallery-delete/{id}', [ProductController::class, 'productGalleryDestroy'])->name('admin.productGallery.destroy');
        Route::get('/get-sub-category-by-category', [ProductController::class, 'getSubCategoryByCategory'])->name('get-sub-category-by-category');
        //Manage Products


        Route::resource('manage-user', ManageUserController::class)->names('admin.user');
        Route::get('/employee-list', [ManageUserController::class, 'employee'])->name('admin.employeeList');
        Route::get('/out-house-employee-list', [ManageUserController::class, 'employeeOutHouse'])->name('admin.employeeOutHouse');
        Route::get('/user-status{id}', [ManageUserController::class, 'userStatus'])->name('admin.userStatus');

        //service order
        Route::get('/pending-order-list', [AdminOrderController::class, 'pendingOrderList'])->name('admin.pendingOrderList');
        Route::get('/accepted-order-list', [AdminOrderController::class, 'acceptedOrderList'])->name('admin.acceptedOrderList');
        Route::get('/declined-order-list', [AdminOrderController::class, 'declinedOrderList'])->name('admin.declinedOrderList');
        Route::get('/completed-order-list', [AdminOrderController::class, 'completedOrderList'])->name('admin.completedOrderList');

        Route::put('/order-status/{id}', [AdminOrderController::class, 'updateOrderStatus'])->name('admin.orderStatus');
        //service order

        //product order
        Route::get('/pending-product-order-list', [AdminProductOrderController::class, 'pendingOrderList'])->name('admin.pendingProductOrder');
        Route::get('/accepted-product-order-list', [AdminProductOrderController::class, 'acceptedOrderList'])->name('admin.acceptedProductOrder');
        Route::get('/declined-product-order-list', [AdminProductOrderController::class, 'declinedOrderList'])->name('admin.declinedProductOrder');
        Route::get('/completed-product-order-list', [AdminProductOrderController::class, 'completedOrderList'])->name('admin.completedProductOrder');

        Route::put('/product-order-status/{id}', [AdminProductOrderController::class, 'updateOrderStatus'])->name('admin.productOrderStatus');
        //product order


        //report
        Route::get('/sales-report', [ReportController::class, 'salesReport'])->name('admin.salesReport');
        Route::get('/produt-sales-report', [ReportController::class, 'productSalesReport'])->name('admin.productSalesReport');
        Route::get('/service-pay-report', [ReportController::class, 'servicePayReport'])->name('admin.servicePayReport');
        Route::get('/expense-report', [ReportController::class, 'expenseReport'])->name('admin.expenseReport');
        Route::get('/service-profit-report', [ReportController::class, 'serviceProfitReport'])->name('admin.serviceProfitReport');
        //report

        //payroll
        Route::resource('payroll', PayrollController::class)->names('admin.payroll')->except('show');
        Route::get('employee-orders/{id}', [PayrollController::class, 'employeeDetail'])->name('admin.employeeDetail');
        Route::put('payroll-status/{id}', [PayrollController::class, 'payrollStatus'])->name('admin.payrollStatus');
        Route::get('payroll-history', [PayrollController::class, 'payrollHistory'])->name('admin.payrollHistory');
        //payroll

        //expense Type
        Route::resource('expense-type', ExpenseTypeController::class)->names('admin.expenseType');
        //expense Type

        //expense
        Route::resource('expense', ExpenseController::class)->names('admin.expense');
        //expense

        //coupon
        Route::resource('coupon', CouponController::class)->names('admin.coupon');
        //coupon

        //offer
        Route::resource('offer', OfferController::class)->names('admin.offer');
        Route::put('/add-offer/{id}', [OfferController::class, 'updateOffer'])->name('admin.addOffer');
        Route::put('/remove-offer/{id}', [OfferController::class, 'updateOffer'])->name('admin.removeOffer');

        //offer

        //Settings
        Route::resource('banner', BannerController::class)->names('admin.banner');
        Route::resource('about-us', AboutUsController::class)->names('admin.aboutUs')->only('index','store');
        Route::resource('website-info', WebsiteInfoController::class)->names('admin.websiteInfo')->only('index', 'store');

        //logot route start
        Route::get('/logoimg', [LogoController::class, 'tech_web_logo_setting'])->name('logoimg');
        Route::post('/store/logoimg', [LogoController::class, 'tech_web_store_logoimg'])->name('store.logoimg');
        //logo route end
        // Settings

        //language start
        Route::get('/english_language', [LanguageController::class, 'tech_web_english_language'])->name('english.language');
        Route::get('/bangla_language', [LanguageController::class, 'tech_web_bangla_language'])->name('bangla.language');

        //language  end
    });
// admin auth middleware end -------------------------------
