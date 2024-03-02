<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AboutExternalLinkController;
use App\Http\Controllers\Admin\AboutUSBottomController;
use App\Http\Controllers\Admin\AboutUSTopController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BoardMemberController;
use App\Http\Controllers\Admin\CareerPageBottomController;
use App\Http\Controllers\Admin\CareerToopController;
use App\Http\Controllers\Admin\CareerVacantPostionController;
use App\Http\Controllers\Admin\ClientMessageController;
use App\Http\Controllers\Admin\ClientNavigationMenuController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\ContactUsMainController;
use App\Http\Controllers\Admin\ContacUsController;
use App\Http\Controllers\Admin\FaqOneController;
use App\Http\Controllers\Admin\ImageGalleryController;
use App\Http\Controllers\Admin\JMCListController;
use App\Http\Controllers\Admin\MCListController;
use App\Http\Controllers\Admin\NewsAndArticleController;
use App\Http\Controllers\Admin\SBPageBannerController;
use App\Http\Controllers\Admin\SBPageStickerController;
use App\Http\Controllers\Admin\SBPageXBannerController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TeamTopController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\VideoGalleryController;
use App\Http\Controllers\Admin\WorkoutSectionController;
use App\Http\Controllers\Admin\WorksAreaDetailsController;
use App\Http\Controllers\client\ClientController;
use Illuminate\Support\Facades\Route;

Route::get("extra", function(){
  return '<h1>Now Times: <span></span><script>setInterval(()=>document.querySelector("span").innerHTML = new Date().toLocaleTimeString() ,1000)</script></h1>';
})->name("");

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['admin_permission']], function () {
  Route::resource('/client-navigation-menu', ClientNavigationMenuController::class);
  Route::resource('/slider', SliderController::class);
  Route::resource('/blog', BlogController::class);
  Route::resource('/testimonial', TestimonialController::class);
  Route::resource('/workout-section', WorkoutSectionController::class);
  Route::resource('/video-gallery', VideoGalleryController::class);
  Route::resource('/image-gallery', ImageGalleryController::class);
  Route::resource('/team-top', TeamTopController::class); 
  Route::resource('/faq', FaqOneController::class); 
  Route::resource('/sticker-banner-page-top', SBPageBannerController::class); 
  Route::resource('/stickers', SBPageStickerController::class); 
  Route::resource('/x-banner', SBPageXBannerController::class); 
  Route::resource('/career-top', CareerToopController::class); 
  Route::resource('/career-vacant-postion', CareerVacantPostionController::class); 
  Route::resource('/careerpagebottom', CareerPageBottomController::class); 
  Route::resource('/mclist', MCListController::class); 
  Route::resource('/jmclist', JMCListController::class); 
  Route::resource('/board-member', BoardMemberController::class); 
  Route::resource('/news-and-article', NewsAndArticleController::class); 
  Route::resource('/works-area-details', WorksAreaDetailsController::class); 
  Route::resource('/about-external-link', AboutExternalLinkController::class); 
  Route::resource('/about', AboutController::class);
  Route::resource('/contact', ContactUsController::class);
  Route::resource('/client-message', ClientMessageController::class);

  /**
   * @ignore Controllers and routes
   */

  Route::resource('/about-us-top', AboutUSTopController::class); 
  Route::resource('/about-us-bottom', AboutUSBottomController::class); 
  Route::resource('/contact-us', ContacUsController::class); 
  Route::resource('/contact-main', ContactUsMainController::class); 

  /**
   * @ignore block ended!
   */
});   

// This routing group only applicable for front-end public's pages!
Route::group(['as' => 'frontend.'], function () {
  Route::controller(ClientController::class)->group(function(){
    Route::get('/', 'home')->name('home');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog/{slug}', 'singleBlog')->name('single_blog');
    Route::get('/image-gallery', 'imageGallery')->name('image_gallery');
    Route::get('/video-gallery', 'videoGallery')->name('video_gallery');
    Route::get('/team', 'team')->name('team');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/about', 'about')->name('about');
    Route::get('/sticker-and-banner', 'stickerAndBanner')->name('sticker_and_banner');
  });
  
  Route::post('/store-client-message', [ClientMessageController::class, 'store'])->name('store_client_message');

});