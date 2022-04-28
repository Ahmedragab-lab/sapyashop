<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Frontend;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],function () {
        Route::resource('/', Frontend\FrontendController::class);           // as a guest
        //========================================================================================================================================================
        Route::resource('/front', Frontend\FrontendController::class);      // as a auth user

        Route::post('/sendrequest', [Frontend\UserReqestController::class,'sendrequest'])->name('sendrequest');   // send request from front home page by ajax
        Route::post('/servrequest', [Frontend\UserReqestController::class,'servrequest'])->name('servrequest');   // send request from service page by ajax

        Route::resource('allservices',Frontend\Allservices::class); // go to all services page
        Route::resource('allproducts',Frontend\AllProducts::class); // go to all products page
        Route::resource('events',Frontend\AlleventController::class); // go to all Events page

        Route::resource('Last_event',Frontend\Allevents::class);// get last event
        Route::resource('Last_agrement',Frontend\Allagrements::class);// get last Agrement
        Route::get('lastservice/{id}',[Frontend\Allservices::class,'showlast'])->name('lastservice.showlast');// get last service

        Route::resource('allsections',Frontend\AllSections::class); // go to all Sections page
        Route::resource('allfeedback',Frontend\Allfeedback::class); // go to all feedback page
        Route::resource('Last_event',Frontend\Allevents::class);// get last event
        Route::resource('contact',Frontend\ContactController::class);  //go to contact page

        Route::get('/reserveServ', function () {
            return view('site.pages.reserveServ');
        });
        Route::middleware(['auth'])->group(function () {
            Route::resource('mycart',Frontend\CartController::class); // go to my cart page
            Route::resource('checkout',Frontend\CheckoutController::class); // go to checkout page to make order
            Route::resource('userprofile',Frontend\UserprofileController::class); //go to my profile
            Route::resource('order_details',Frontend\OrderDetailController::class); //go to my service order details
            Route::post('order_details',[Frontend\OrderDetailController::class , 'order_details'])->name('order_details'); //go to add service order from order details page
            Route::post('contact',[Frontend\ContactController::class , 'contact'])->name('contact'); //go to addcontact from contact page
            Route::get('step/{id}',[Frontend\OrderDetailController::class , 'showstep'])->name('step'); //go to trackstep from order details page
            Route::post('addrate',[Frontend\UserRateController::class , 'addrate'])->name('addrate'); //add rate
            Route::post('/searchtrackstep',[Frontend\OrderDetailController::class,'searchtrackstep'])->name('searchtrackstep');  // search for tracking step by order number
            Route::post('/addtocart', [Frontend\UserReqestController::class,'addtocart'])->name('addtocart');         // send request from product-details page by ajax
            Route::post('/delete_item', [Frontend\UserReqestController::class,'delete_item'])->name('delete_item');   // send request from mycart page by ajax to delete item
            Route::post('/update_qty',[Frontend\UserReqestController::class,'update_qty'])->name('update_qty');     // send request from mycart to update item quantity
        });

        require __DIR__.'/auth.php';
});


