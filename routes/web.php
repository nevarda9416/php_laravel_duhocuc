<?php

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

Auth::routes();

// Backend
Route::get('cms/login', ['as' => 'login', 'uses' => 'Admin\Auth\LoginController@getLogin']);
Route::post('cms/login', ['uses' => 'Admin\Auth\LoginController@postLogin']);
Route::get('cms/logout', ['as' => 'logout', 'uses' => 'Admin\Auth\LoginController@logout']);
// Password Reset Routes...
Route::post('password/email', [
    'as' => 'password.email',
    'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset', [
    'as' => 'password.request',
    'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('dat-lai-mat-khau', [
    'as' => 'password.update',
    'uses' => 'Auth\ResetPasswordController@reset'
]);
Route::get('password/reset/{token}', [
    'as' => 'password.reset',
    'uses' => 'Auth\ResetPasswordController@showResetForm'
]);
// Registration Routes...
Route::get('register', [
    'as' => 'register',
    'uses' => 'Auth\RegisterController@showRegistrationForm'
]);
Route::post('register', [
    'uses' => 'Auth\RegisterController@register'
]);
Route::group(['middleware' => 'auth', 'prefix' => 'cms'], function () {
    // Trang dashboard
    Route::get('dashboard', 'Admin\DashboardController@index');
    // Trang quản trị category
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', ['uses' => 'Admin\CategoryController@index']);
        Route::get('{id?}', ['as' => 'index', 'uses' => 'Admin\CategoryController@index']);
        Route::post('store', ['uses' => 'Admin\CategoryController@store']);
        Route::get('show/{id?}', ['as' => 'show', 'uses' => 'Admin\CategoryController@show']);
        Route::get('edit/{id?}', ['as' => 'edit', 'uses' => 'Admin\CategoryController@edit']);
        Route::post('update/{id?}', ['as' => 'update', 'uses' => 'Admin\CategoryController@update']);
        Route::get('delete/{id?}', ['uses' => 'Admin\CategoryController@destroy']);
    });
    // QUẢN TRỊ TAGS
    Route::group(['prefix' => 'tags',], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\TagsController@index']);
        Route::post('store', ['uses' => 'Admin\TagsController@store']);
        Route::get('show/{id?}', ['uses' => 'Admin\TagsController@show']);
        Route::get('edit/{id?}', ['uses' => 'Admin\TagsController@edit']);
        Route::post('edit/{id?}', ['uses' => 'Admin\TagsController@update']);
        Route::get('delete/{id?}', ['uses' => 'Admin\TagsController@destroy']);
        Route::get('search', ['uses' => 'Admin\TagsController@begin_search']);
        Route::post('search', ['uses' => 'Admin\TagsController@ajax_search']);
        Route::post('addtags', ['uses' => 'Admin\TagsController@add_tags']);
    });
    // Quản lý điểm đến
    Route::group(['prefix' => 'locations', 'as' => 'locations'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\LocationController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'Admin\LocationController@create']);
        Route::post('store', ['as' => 'store', 'uses' => 'Admin\LocationController@store']);
        Route::get('show/{id}', ['as' => 'show', 'uses' => 'Admin\LocationController@show']);
        Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'Admin\LocationController@edit']);
        Route::post('update/{id}', ['as' => 'update', 'uses' => 'Admin\LocationController@update']);
        Route::get('delete/{id}', ['as' => 'delete', 'uses' => 'Admin\LocationController@destroy']);
    });
    // Quản lý điểm du lịch
    Route::group(['prefix' => 'destinations', 'as' => 'destinations'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\DestinationController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'Admin\DestinationController@create']);
        Route::post('store', ['as' => 'store', 'uses' => 'Admin\DestinationController@store']);
        Route::get('show/{id}', ['as' => 'show', 'uses' => 'Admin\DestinationController@show']);
        Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'Admin\DestinationController@edit']);
        Route::post('update/{id}', ['as' => 'update', 'uses' => 'Admin\DestinationController@update']);
        Route::get('delete/{id}', ['as' => 'delete', 'uses' => 'Admin\DestinationController@destroy']);
    });
    // Trang quản trị các page tĩnh
    Route::group(['prefix' => 'pages', 'as' => 'pages', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\PageController@index']);
        Route::get('create', ['uses' => 'Admin\PageController@create']);
        Route::post('store', ['uses' => 'Admin\PageController@store']);
        Route::get('show/{id?}', ['uses' => 'Admin\PageController@show']);
        Route::get('edit/{id?}', ['uses' => 'Admin\PageController@edit']);
        Route::post('update/{id?}', ['uses' => 'Admin\PageController@update']);
        Route::get('delete/{id?}', ['uses' => 'Admin\PageController@destroy']);
    });
    // Các trang tin tức
    // Route cũ
    Route::group(['prefix' => 'posts', 'as' => 'posts', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\PostsController@index']);
        Route::get('create/{type}', ['as' => 'create', 'uses' => 'Admin\PostsController@create']);
        Route::post('store/{type}', ['as' => 'store', 'uses' => 'Admin\PostsController@store']);
        Route::get('show/{id}', ['as' => 'show', 'uses' => 'Admin\PostsController@show']);
        Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'Admin\PostsController@edit']);
        Route::post('update/{id}', ['as' => 'update', 'uses' => 'Admin\PostsController@update']);
        Route::get('delete/{id}', ['as' => 'delete', 'uses' => 'Admin\PostsController@destroy']);
        Route::get('preview/{id}', ['as' => 'preview', 'uses' => 'Admin\PostsController@preview']);
        Route::get('search', ['as' => 'search', 'uses' => 'Admin\PostsController@search']);
    });
    // Trang quản trị những câu hỏi thường gặp
    Route::group(['prefix' => 'frequently-questions', 'as' => 'q&a'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\QuestionController@index']);
        Route::get('create', ['uses' => 'Admin\QuestionController@create']);
        Route::post('store', ['uses' => 'Admin\QuestionController@store']);
        Route::get('show/{id?}', ['uses' => 'Admin\QuestionController@show']);
        Route::get('show/{question_id?}/answer/{action?}/{answer_id?}', ['uses' => 'Admin\QuestionController@show']);
        Route::get('edit/{id?}', ['uses' => 'Admin\QuestionController@edit']);
        Route::get('edit/{question_id?}/answer/{action?}/{answer_id?}', ['uses' => 'Admin\QuestionController@edit']);
        Route::post('update/{id?}', ['uses' => 'Admin\QuestionController@update']);
        Route::get('delete/{id?}', ['uses' => 'Admin\QuestionController@destroy']);
    });
    Route::group(['prefix' => 'frequently-answers', 'as' => 'q&a'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\AnswerController@index']);
        Route::get('create', ['uses' => 'Admin\AnswerController@create']);
        Route::post('store', ['uses' => 'Admin\AnswerController@store']);
        Route::get('show/{id?}', ['uses' => 'Admin\AnswerController@show']);
        Route::get('edit/{id?}', ['uses' => 'Admin\AnswerController@edit']);
        Route::post('update/{id?}', ['uses' => 'Admin\AnswerController@update']);
        Route::get('delete/{id?}', ['uses' => 'Admin\AnswerController@destroy']);
        Route::get('index/all', ['uses' => 'Admin\AnswerController@indexAllAnswersToElasticsearch']);
    });
    // Đường dẫn allow upload ảnh từ trong ckeditor
    Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');
    // Trang quản trị role
    Route::group(['prefix' => 'roles', 'as' => 'roles', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\RoleController@index']);
        Route::get('create', ['uses' => 'Admin\RoleController@create']);
        Route::post('store', ['uses' => 'Admin\RoleController@store']);
        Route::get('show/{id?}', ['uses' => 'Admin\RoleController@show']);
        Route::get('edit/{id?}', ['uses' => 'Admin\RoleController@edit']);
        Route::post('update/{id?}', ['uses' => 'Admin\RoleController@update']);
        Route::get('delete/{id?}', ['uses' => 'Admin\RoleController@destroy']);
    });
    // Trang quản trị user
    Route::group(['prefix' => 'users', 'as' => 'users', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\UserController@index']);
        Route::get('create', ['uses' => 'Admin\UserController@create']);
        Route::post('store', ['uses' => 'Admin\UserController@store']);
        Route::get('show/{id?}', ['uses' => 'Admin\UserController@show']);
        Route::get('edit/{id?}', ['uses' => 'Admin\UserController@edit']);
        Route::post('update/{id?}', ['uses' => 'Admin\UserController@update']);
        Route::get('delete/{id?}', ['uses' => 'Admin\UserController@destroy']);
    });
    // Cấu hình website
    Route::group(['prefix' => 'setting', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\SettingController@index']);
        Route::post('allowGetDynamicContent', ['uses' => 'Admin\SettingController@allowGetDynamicContent']);
    });
    // Quản trị thông tin website
    Route::group(['prefix' => 'contact', 'as' => 'settings', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\SettingController@contact']);
        Route::post('store', ['uses' => 'Admin\SettingController@storeContact']);
    });
    // Trang quản trị widget
    Route::group(['prefix' => 'widgets'], function () {
        Route::get('{page}/{position}', ['uses' => 'Admin\WidgetController@getPosition']);
        Route::post('{page}/{position}', ['uses' => 'Admin\WidgetController@postPosition']);
    });
    Route::post('html/update', ['uses' => 'Admin\SettingController@updateHTML']);
    // Tài khoản của tôi
    Route::group(['prefix' => 'account'], function () {
        Route::match(array('GET', 'POST'), '/profile', ['uses' => 'Admin\MyAccountController@profile']);
    });
    // Quản lý đối tác
    Route::group(['prefix' => 'partner'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\PartnersController@index']);
        Route::post('store', ['uses' => 'Admin\PartnersController@store']);
        Route::get('show/{id?}', ['uses' => 'Admin\PartnersController@show']);
        Route::get('edit/{id?}', ['uses' => 'Admin\PartnersController@edit']);
        Route::post('edit/{id?}', ['uses' => 'Admin\PartnersController@update']);
        Route::get('delete/{id?}', ['uses' => 'Admin\PartnersController@destroy']);
    });
    // Quản lý comment (Đối tác nói về chúng tôi)
    Route::group(['prefix' => 'comments'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\CommentController@index']);
        Route::post('store', ['uses' => 'Admin\CommentController@store']);
        Route::get('edit/{id?}', ['uses' => 'Admin\CommentController@edit']);
        Route::post('update/{id?}', ['uses' => 'Admin\CommentController@update']);
        Route::get('delete/{id?}', ['uses' => 'Admin\CommentController@destroy']);
    });
    // Quản lý người dùng đăng ký
    Route::group(['prefix' => 'customers'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\CustomerController@index']);
    });
    // Quản trị menu
    Route::group(['prefix' => 'menu', 'as' => 'menu'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\MenuController@index']);
        Route::post('/store', ['uses' => 'Admin\MenuController@store']);
        Route::get('/edit/{id?}', ['uses' => 'Admin\MenuController@edit']);
        Route::post('/update/{id?}', ['uses' => 'Admin\MenuController@update']);
        Route::get('/delete/{id?}', ['uses' => 'Admin\MenuController@destroy']);
        Route::post('/order', ['uses' => 'Admin\MenuController@order']);
    });
    // QUẢN TRỊ BANNER
    Route::group(['prefix' => 'banner',], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\BannerController@index']);
        Route::post('/store', ['uses' => 'Admin\BannerController@store']);
        Route::get('/show/{id?}', ['uses' => 'Admin\BannerController@show']);
        Route::get('/edit/{id?}', ['uses' => 'Admin\BannerController@edit']);
        Route::post('/edit/{id?}', ['uses' => 'Admin\BannerController@update']);
        Route::get('/delete/{id?}', ['uses' => 'Admin\BannerController@destroy']);
        Route::get('/search', ['uses' => 'Admin\BannerController@search_form']);
        Route::post('/search', ['uses' => 'Admin\BannerController@search_submit']);
    });
    // Thư viện ảnh
    Route::group(['prefix' => 'media', 'as' => 'media'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\MediaController@index']);
        Route::get('/create', ['as' => 'create', 'uses' => 'Admin\MediaController@create']);
        Route::post('/store', ['as' => 'store', 'uses' => 'Admin\MediaController@store']);
        Route::get('/show/{id}', ['as' => 'show', 'uses' => 'Admin\MediaController@show']);
        Route::get('/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\MediaController@edit']);
        Route::post('/update/{id}', ['as' => 'update', 'uses' => 'Admin\MediaController@update']);
        Route::get('/delete/{id}', ['as' => 'delete', 'uses' => 'Admin\MediaController@destroy']);
    });
});

// Frontend
Route::group(['middleware' => 'web'], function () {
    Route::get('/',  ['uses' => 'HomepageController@index']);
    Route::get('dang-ky',  ['uses' => 'Auth\RegisterController@index']);
    Route::post('dang-ky',  ['uses' => 'Auth\RegisterController@create']);
    Route::post('dang-nhap',  ['uses' => 'Auth\LoginController@postLogin']);
    Route::get('quen-mat-khau',  ['uses' => 'Auth\ForgotPasswordController@index']);
    Route::post('quen-mat-khau',  ['uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('thoat',  ['uses' => 'Auth\LoginController@logout']);
    Route::get('gioi-thieu-chung', ['uses' => 'PageController@about']);
    Route::get('du-hoc', ['uses' => 'StudyAbroadController@index']);
    Route::get('du-hoc/{slug}', ['uses' => 'StudyAbroadController@detail']);
    Route::get('khoa-hoc-ngon-ngu', ['uses' => 'SchoolController@course']);
    Route::get('truong-hoc', ['uses' => 'SchoolController@index']);
    Route::get('truong-hoc/{slug}', ['uses' => 'SchoolController@detail']);
    Route::get('nganh-hoc', ['uses' => 'SchoolController@major']);
    Route::get('hoc-bong', ['uses' => 'SchoolController@scholarship']);
    Route::get('hoi-thao', ['uses' => 'PageController@seminar']);
    Route::get('goc-tu-van', ['uses' => 'PageController@consultation']);
    Route::get('doi-tac', ['uses' => 'PageController@partner']);
    Route::get('tuyen-dung', ['uses' => 'PageController@recruitment']);
    Route::get('lien-he', ['uses' => 'PageController@contact']);
    Route::get('{slug}', ['uses' => 'PageController@detail']);
    Route::post('register/newsletter_subcriber ', 'FormController@subcribe');
});
