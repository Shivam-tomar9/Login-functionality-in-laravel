<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminBlogsController;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::controller(AdminAuthController::class)->group(function () 
    
    {


        Route::match(['get', 'post'], 'login', 'login')->name('login');
       
        
    });

      Route::middleware(IsAdmin::class)->group(function () {

      Route::controller(AdminController::class)->group(function (){
          Route::get('dashboard', 'dashboard')->name('dashboard');
          Route::post('dashboard', 'dashboard')->name('dashboard');   
          Route::any('logout', 'logout')->name('logout');         
      });


    
     

    });



   //   Route::middleware(IsAdmin::class)->group(function () {

   //      Route::controller(AdminController::class)->group(function (){
   //          Route::get('dashboard', 'dashboard')->name('dashboard');
   //          Route::post('dashboard', 'dashboard')->name('dashboard');   
   //          Route::any('logout', 'logout')->name('logout');         
   //      });

   //      Route::controller(AdminContactController::class)->group(function (){
   //       Route::get('contact-get','contactGet')->name('contact-get');
   //       Route::get('contact-delete/{id}','contactDelete')->name('contact-delete');
        
   //      });

   //      Route::controller(AdminBlogsController::class)->group(function (){
   //      Route::get('blog','createBlog')->name('blog');
   //      Route::post('blog-post','blogPost')->name('blog-post');
   //      Route::get('list-blog','listBlog')->name('list-blog');
   //      Route::get('edit-blog/{id}','blogEdit')->name('edit-blog');
   //      Route::post('update-blog/{id}','updateBlog')->name('update-blog');
   //      Route::delete('delete-blog/{id}','deleteBlog')->name('delete-blog');
   //      });
        
   //   });


});