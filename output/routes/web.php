<?php

use App\Models\InsightsUpdate;
use App\Models\WorksGallery;
use App\Models\Review;

Route::get('/', function () {
    $insights = InsightsUpdate::oldest()->get();
    $works = WorksGallery::all();
    $usedTags = WorksGallery::whereNotNull('tag')->distinct()->pluck('tag')->toArray();
    $workTags = array_intersect_key(WorksGallery::TAG_SELECT, array_flip($usedTags));
    $reviews = Review::all();
    return view('frontend.home', compact('insights', 'works', 'workTags', 'reviews'));
})->name('home');

Route::view('about', 'frontend.about')->name('about');
Route::view('services', 'frontend.services')->name('services');
Route::view('portfolio', 'frontend.work-listing')->name('portfolio');
Route::view('work-detail', 'frontend.work-detail')->name('work.detail');
Route::view('careers', 'frontend.careers')->name('careers');
Route::view('news-blogs', 'frontend.news-blogs')->name('news.blogs');
Route::view('news-blog-detail', 'frontend.blog-detail')->name('blog.detail');
Route::view('contact', 'frontend.contact')->name('contact');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Insights Updates
    Route::delete('insights-updates/destroy', 'InsightsUpdatesController@massDestroy')->name('insights-updates.massDestroy');
    Route::post('insights-updates/media', 'InsightsUpdatesController@storeMedia')->name('insights-updates.storeMedia');
    Route::post('insights-updates/ckmedia', 'InsightsUpdatesController@storeCKEditorImages')->name('insights-updates.storeCKEditorImages');
    Route::resource('insights-updates', 'InsightsUpdatesController');

    // Works Gallery
    Route::delete('works-galleries/destroy', 'WorksGalleryController@massDestroy')->name('works-galleries.massDestroy');
    Route::post('works-galleries/media', 'WorksGalleryController@storeMedia')->name('works-galleries.storeMedia');
    Route::post('works-galleries/ckmedia', 'WorksGalleryController@storeCKEditorImages')->name('works-galleries.storeCKEditorImages');
    Route::resource('works-galleries', 'WorksGalleryController');

    // Reviews
    Route::delete('reviews/destroy', 'ReviewsController@massDestroy')->name('reviews.massDestroy');
    Route::post('reviews/media', 'ReviewsController@storeMedia')->name('reviews.storeMedia');
    Route::post('reviews/ckmedia', 'ReviewsController@storeCKEditorImages')->name('reviews.storeCKEditorImages');
    Route::resource('reviews', 'ReviewsController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
