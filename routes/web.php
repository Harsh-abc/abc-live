<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\HomeadminController; 
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\NewMediaController;

Route::get('/',[FrontendController::class, 'index']);

Route::get('/popup',[FrontendController::class, 'popupform']);



/* Static Pages */
Route::get('/thanks', function () {
    return view('frontend.thanks');
});
Route::get('/about', function () {
    return view('frontend.about');
});


/* ==== Services Section ==== */
Route::get('/website-design-and-development', function () {
    return view('frontend.services.website_design_and_development');
});
Route::get('/services', function () {
    return view('frontend.services.index');
});


/* Web Solutions */
Route::get('/website-design-and-development/business-website-design-and-development', function () {
    return view('frontend.services.web_solutions.interactive_solutions');
});


Route::get('/website-design-and-development/ecommerce-development', function () {
    return view('frontend.services.web_solutions.ecommerce_development');
});

Route::get('/website-design-and-development/custom-web-development', function () {
    return view('frontend.services.web_solutions.custom_webdevelopment');
});

Route::get('/website-design-and-development/website-redesign', function () {
    return view('frontend.services.web_solutions.website-redesign');
});

Route::get('/website-design-and-development/api-development-and-integration', function () {
    return view('frontend.services.web_solutions.api_development_and_integration');
});

Route::get('/website-design-and-development/website-maintenance-and-support', function () {
    return view('frontend.services.web_solutions.website_maintenance_and_support');
});

Route::get('/app-design-and-development/mobile-app-ui-ux-design', function () {
    return view('frontend.services.app_services.mobile_app_ui_ux_design');
});

Route::get('/app-design-and-development/android-app-development', function () {
    return view('frontend.services.app_services.android_app_development');
});

Route::get('/app-design-and-development/ios-app-development', function () {
    return view('frontend.services.app_services.ios_app_development');
});

Route::get('/app-design-and-development/web-app-development', function () {
    return view('frontend.services.app_services.web_app_development');
});

Route::get('/app-design-and-development/app-maintainance-and-support', function () {
    return view('frontend.services.app_services.app_maintainance_and_support');
});



// Route::get('/website-design-and-development/ecommerce-development', function () {
//     return view('frontend.services.web_solutions.ecommerce_development');
// });
// Route::get('/web-solutions/api-development-and-integration', function () {
//     return view('frontend.services.web_solutions.api_development_and_integration');
// });
// Route::get('/web-solutions/website-maintenance-and-support', function () {
//     return view('frontend.services.web_solutions.website_maintenance_and_support');
// });


/* UI/UX Design */
// Route::get('/ui-uxdesign/ui-design', function () {
//     return view('frontend.services.ui_uxdesign.ui_design');
// });
// Route::get('/ui-uxdesign/ux-experience', function () {
//     return view('frontend.services.ui_uxdesign.ux_experience');
// });
// Route::get('/ui-uxdesign/ux-audit', function () {
//     return view('frontend.services.ui_uxdesign.ux_audit');
// });


/* Digital Marketing */
Route::get('/digital-marketing/performance-marketing', function () {
    return view('frontend.services.digital_marketing.performance_marketing');
});
Route::get('/digital-marketing/content-marketing-and-writing', function () {
    return view('frontend.services.digital_marketing.content_writing');
});
Route::get('/digital-marketing/search-engine-marketing', function () {
    return view('frontend.services.digital_marketing.sem');
}); 
Route::get('/digital-marketing/search-engine-optimization', function () {
    return view('frontend.services.digital_marketing.seo');
});
Route::get('/digital-marketing/social-media-marketing', function () {
    return view('frontend.services.digital_marketing.social_media');
});

/* Branding and Creative Solution */
Route::get('/branding-and-creative-design/branding-solutions', function () {
    return view('frontend.services.branding_and_creative_design.branding_solutions');
});

Route::get('/branding-and-creative-design/logo-design', function () {
    return view('frontend.services.branding_and_creative_design.logo_design');
});

Route::get('/branding-and-creative-design/social-media-creatives', function () {
    return view('frontend.services.branding_and_creative_design.social_media_creatives');
});

Route::get('/branding-and-creative-design/design-and-animation', function () {
    return view('frontend.services.branding_and_creative_design.design_and_animation');
});

Route::get('/branding-and-creative-design/marketing-creatives', function () {
    return view('frontend.services.branding_and_creative_design.marketing_creatives');
});


/* Concept Design */
Route::get('/concept-design/branding-solutions', function () {
    return view('frontend.services.concept_design.branding_solutions');
});
Route::get('/concept-design/social-media-posts-design', function () {
    return view('frontend.services.concept_design.socialmedia_posts_design');
});
Route::get('/concept-design/design-and-animation', function () {
    return view('frontend.services.concept_design.design_and_animation');
});




Route::get('/services/email-marketing', function () {
    return view('frontend.services.email_marketing');
});
Route::get('/services/mobile-technologies', function () {
    return view('frontend.services.mobile_technologies');
});
Route::get('/services/online-marketing', function () {
    return view('frontend.services.online_marketing');
});
Route::get('/services/graphic-designing', function () {
    return view('frontend.services.graphic_designing');
});
Route::get('/services/print-media', function () {
    return view('frontend.services.print_media');
}); 





/*
Route::get('/services/concept-designing', function () {
    return view('frontend.services.concept_designing');
});
Route::get('/services/cms-development', function () {
    return view('frontend.services.cms_development');
});
*/



Route::post('/subscribes',[FrontendController::class, 'Subscribes'])->name('Subscribes.store');


Route::get('/clients', function () {
    return view('frontend.clients');
});

Route::get('/career', function () {
    return view('frontend.career.index');
});

Route::post('/career-add',[FrontendController::class, 'save_career'])->name('careerAdd');

Route::get('/career/job-details', function () {
    return view('frontend.career.job_detail');
});
Route::get('/career/graphic-designer', function () {
    return view('frontend.career.graphic_designer');
});
Route::get('/career/frontend-developer', function () {
    return view('frontend.career.frontend_developer');
});
Route::get('/career/backend-developer', function () {
    return view('frontend.career.backend_developer');
});

Route::get('/career/digital-marketing-manager', function () {
    return view('frontend.career.digital_marketing');
});



Route::get('/about', function () {
    return view('frontend.about');
});

/* Work */

Route::get('/works', function () {
    return view('frontend.work.index');
});
Route::get('/works/uidesign-development', function () {
    return view('frontend.work.uidesign_development');
});
Route::get('/works/interactive-solutions', function () {
    return view('frontend.work.interactive_solutions');
});
Route::get('/works/branding', function () {
    return view('frontend.work.branding');
});
Route::get('/works/app-development', function () {
    return view('frontend.work.app_development');
});
Route::get('/works/e-commerce', function () {
    return view('frontend.work.ecommerce');
});
Route::get('/works/digital-marketing', function () {
    return view('frontend.work.digital_marketing');
}); 

/*
$segment = request()->segment(2);
Route::get("/works/{$segment}", function () {
    return view('frontend.work.index');
});
*/

Route::get('/view', function () {
    return view('frontend.work.view');
});
Route::get('/view-static', function () {
    return view('frontend.work.view_static');
});

Route::get('/contact-us', function () {
    return view('frontend.contact');
});

Route::get('/privacy-policy', function () {
    return view('frontend.privacy_policy');
});
Route::get('/terms-conditions', function () {
    return view('frontend.terms_conditions');
});

Route::post('/contact-us',[FrontendController::class, 'save_enquires'])->name('contactUsAdd');

//Route::get('/','HomeController@index')->name('landing');
  


/* Work */

Route::get('/blogs', [FrontendController::class , 'blogpage']);

Route::get('/blog/{slug}', [FrontendController::class , 'bloginnerpage']);







  

/* 404 Redirect */   
Route::get('/404', function () {
    return view('frontend.404');
});	
Route::fallback(function () {
    return view('frontend.404');
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
  
  
  
  
  
/* ========== All Admin Routes List ========== */

Route::middleware(['auth', 'user-access:admin'])->group(function () {
   
/* ADMIN */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::get('/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::group(['prefix'=>'seo', 'as' =>'seo'], function(){
        
        // seo start here
        Route::get('/',[SeoController::class, 'Index'])->name('seo.index');
        Route::get('/add',[SeoController::class, 'add'])->name('seo.add.page');
        Route::post('/store',[SeoController::class, 'Store'])->name('seo.add.store');
        Route::get('/status/{status}/{id}', [SeoController::class, 'changeStatus'])->name('seo.status');;
        Route::get('/edit/{id}',[SeoController::class, 'edit'])->name('seo.edit.page');
        Route::post('/editStore',[SeoController::class, 'editStore'])->name('seo.edit.store');
        Route::get('/delete/{id}',[SeoController::class, 'deleteSeo'])->name('seo.delete.store');
                    
        // Route::get('/edit', function () {
        //     return view('admin.seo.edit');
        // });

        Route::get('/header-tags',[SeoController::class, 'headerIndex'])->name('seo.header.index');
        Route::get('/header-tagsadd',[SeoController::class, 'header_add'])->name('seo.header.add');
        Route::get('/header-tagstatus/{status}/{id}', [SeoController::class, 'headerSeoStatus'])->name('seo.header.status');
        Route::get('/header-tagsedit/{id}', [SeoController::class, 'headerSeoEdit'])->name('seo.header.edit');
        Route::post('/header-add',[SeoController::class, 'headerSeoStore'])->name('seo.store.page');
        Route::post('/header-update',[SeoController::class, 'headerSeoUpdate'])->name('seo.update.page');
        Route::get('/header-seo-delete/{id}',[SeoController::class, 'deleteHeaderSeo'])->name('seo.delete.store.tags');

        // SEO URL
        Route::get('/url/listing',[SeoController::class, 'UrlIndex'])->name('seo.url.index');
        Route::post('/url/store',[SeoController::class, 'UrlStore'])->name('seo.url.add.store');
        Route::get('/url/status/{status}/{id}', [SeoController::class, 'UrlchangeStatus'])->name('seo.url.status');;
        Route::get('/url/edit/{id}',[SeoController::class, 'Urledit'])->name('seo.url.edit.page');
        Route::post('/url/editStore',[SeoController::class, 'UrleditStore'])->name('seo.url.edit.store');
        Route::get('/url/delete/{id}',[SeoController::class, 'UrldeleteSeo'])->name('seo.url.delete.store');

        Route::get('url-listing', function () {
           
        });

        Route::get('add-url', function () {
            return view('admin.seo.add_url');
        });

        Route::get('edit-url', function () {
            return view('admin.seo.edit_url');
        });
        
    });  // SEO


    /* Blog */
    Route::group(['prefix'=>'blog', 'as' =>'blog'], function(){
       
        Route::get('/all-post',[BlogController::class, 'Index'])->name('blog.index');
        Route::get('/blog-add',[BlogController::class, 'add'])->name('blog.add');
        Route::post('/blog-store',[BlogController::class, 'blogStore'])->name('blog.store');
        Route::post('/blog-update',[BlogController::class, 'blogUpdate'])->name('blog.update');
        Route::get('/blog-details',[BlogController::class, 'blog_details'])->name('blog.details');
        Route::get('/blog-view',[BlogController::class, 'blog_view'])->name('blog.view');
        Route::get('/blog-edit/{id}',[BlogController::class, 'blog_edit'])->name('blog.edit');
        Route::get('/blog-delete/{id}',[BlogController::class, 'blog_delete'])->name('blog.delete');
        Route::get('/blog-categories',[BlogController::class, 'blog_categories'])->name('blog.categories');
        Route::get('/status/{status}/{id}', [BlogController::class, 'blogStatus'])->name('adminBlogStatus');
        Route::get('/bannerStatus/{status}/{id}', [BlogController::class, 'BlogBannerStatus'])->name('adminBlogBannerStatus');
        Route::get('/popularStatus/{status}/{id}', [BlogController::class, 'BlogPopularStatus'])->name('adminBlogPopularStatus');
        
        Route::post('/category-add',[BlogController::class, 'CategoriesAddEdit'])->name('categories.store');
        Route::post('/category-edit',[BlogController::class, 'CategoriesAddEdit'])->name('categories.update');
        Route::get('/blog-categories-status/{status}/{id}', [BlogController::class, 'statusCategories'])->name('blog.categories-status');
        Route::get('/blog-categories-delete/{id}', [BlogController::class, 'deleteCategories'])->name('blog.category-delete');

        Route::get('/blog-tags',[BlogController::class, 'TagsIndex'])->name('tags.index');
        Route::post('/tags-add',[BlogController::class, 'tagsAddEdit'])->name('tags.store');
        Route::post('/tags-edit',[BlogController::class, 'tagsAddEdit'])->name('tags.update');
        Route::get('/blog-tag-status/{status}/{id}', [BlogController::class, 'statusTags'])->name('blog.tags-status');
        Route::get('/blog-tag-delete/{id}', [BlogController::class, 'deleteTags'])->name('blog.tags-delete');        
        Route::post('/banner-store',[BlogController::class, 'bannerFileStore'])->name('blog.banner.upload.post');

        Route::post('/subcategory-add',[BlogController::class, 'SubCategoriesAddEdit'])->name('subcategories.store');
        Route::post('/subcategory-edit',[BlogController::class, 'SubCategoriesAddEdit'])->name('subcategories.update');

        Route::post('/delete-blog-photo',[BlogController::class, 'deleteBannerPhoto'])->name('blog.delete.banner.post');

        Route::post('/blog-sort',[BlogController::class, 'sorting'])->name('blogsort');
        Route::post('/edit-images',[BlogController::class, 'editBannerImgStore'])->name('blog.edit.img.post');
        Route::post('/blog-category-sort',[BlogController::class, 'BlogCategorySorting'])->name('blogcategorysorting');

            Route::get('/media', [NewMediaController::class, 'index'])->name('index');
   Route::post('/store/media', [NewMediaController::class, 'store'])->name('store');
    Route::get('/{media}', [NewMediaController::class, 'show'])->name('show');
    Route::put('/edit/{media}', [NewMediaController::class, 'update'])->name('update'); // changed here
    Route::delete('/{media}', [NewMediaController::class, 'destroy'])->name('.destroy');

    Route::get('/list', [NewMediaController::class, 'getMedia'])->name('list');

    }); // BLOG END


    Route::group(['prefix'=>'project', 'as' =>'project'], function(){

        Route::get('/', function () {
    return view('admin.projects.add_details');
});
    
        Route::post('/add',[ProjectController::class, 'projectStore'])->name('.store');

        Route::get('/listings',[ProjectController::class, 'index_view'])->name('.listing');

        Route::post('/projects-update/{id}', [ProjectController::class, 'updateThumbnail'])->name('.update');

      Route::get('/listings/edit/{id}', [ProjectController::class, 'edit'])->name('projects.edit');


        Route::post('/projects-edit/{id}',  [ProjectController::class, 'projectUpdate'])->name('.updateProject');

Route::get('/view', function () {
    return view('admin.projects.view');
});

Route::get('/projects-add', function () {
    return view('admin.projects.add');
});

Route::post('/projects-add/post',  [ProjectController::class, 'projectStoreThumbnail'])->name('project.store');


    });

    Route::get('/career', [HomeadminController::class, 'career_view']);
    
       
    Route::get('/newsletter-subscription',[HomeadminController::class, 'newsletter']);
    Route::get('/newsletter-subscription/delete/{id}',[HomeadminController::class, 'newsletter_Delete']); 
    Route::get('/inquiry',[HomeadminController::class, 'inquiry']);


}); // Admin

}); // Auth Admin




  

// Route::get('/admin/projects', function () {
//     return view('admin.projects.view');
// });
// Route::get('/admin/projects', function () {
//     return view('admin.projects.add');
// });



  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});