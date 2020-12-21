<?php



Route::get('/', function () {return view('pages.index');});
//auth & user
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password-change', 'HomeController@changePassword')->name('password.change');
Route::post('/password-update', 'HomeController@updatePassword')->name('password.update');
Route::get('/user/logout', 'HomeController@Logout')->name('user.logout');

//Admin
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::get('admin/home', 'AdminController@index');
Route::post('admin', 'Admin\LoginController@login');


// Password Reset Routes...
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update'); 
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');


//Admin Section
        //categories
        Route::get('admin/categories', 'Admin\Category\CategoryController@category')->name('categories');
        Route::post('admin/store/category', 'Admin\Category\CategoryController@StoreCategory')->name('store.category');
        Route::get('edit/category/{id}', 'Admin\Category\CategoryController@UpdateCategoryPage');
        Route::post('update/category/{id}', 'Admin\Category\CategoryController@UpdateCategory');
        Route::get('delete/category/{id}', 'Admin\Category\CategoryController@DeleteCategory');

        //Sub Categories
        Route::get('admin/subcategories', 'Admin\Category\SubCategoryController@SubCategory')->name('sub.categories');
        Route::post('admin/store/subcategory', 'Admin\Category\SubCategoryController@StoreSubCategory')->name('store.subcategory');
        Route::get('edit/subcategory/{id}', 'Admin\Category\SubCategoryController@UpdateSubCategoryPage');
        Route::post('update/subcategory/{id}', 'Admin\Category\SubCategoryController@UpdateSubCategory');
        Route::get('delete/subcategory/{id}', 'Admin\Category\SubCategoryController@DeleteSubCategory');

        //Brand
        Route::get('admin/brands', 'Admin\Category\BrandController@brand')->name('brands');
        Route::post('admin/store/brand', 'Admin\Category\BrandController@StoreBrand')->name('store.brand');
        Route::get('edit/brand/{id}', 'Admin\Category\BrandController@UpdateBrandPage');
        Route::post('update/brand/{id}', 'Admin\Category\BrandController@UpdateBrand');
        Route::get('delete/brand/{id}', 'Admin\Category\BrandController@DeleteBrand');

        //Coupons
        Route::get('admin/coupons', 'Admin\Category\CouponController@Coupon')->name('admin.coupons');
        Route::post('admin/store/coupon', 'Admin\Category\CouponController@StoreCoupon')->name('store.coupon');
        Route::get('edit/coupon/{id}', 'Admin\Category\CouponController@UpdateCouponPage');
        Route::post('update/coupon/{id}', 'Admin\Category\CouponController@UpdateCoupon');
        Route::get('delete/coupon/{id}', 'Admin\Category\CouponController@DeleteCoupon');

        //Newslaters
        Route::get('admin/newslaters', 'Admin\Category\NewslaterController@Newslater')->name('admin.newslaters');
        Route::post('admin/store/newslater', 'Admin\Category\NewslaterController@StoreNewslater')->name('store.newslater');
        Route::get('edit/newslater/{id}', 'Admin\Category\NewslaterController@UpdateNewslaterPage');
        Route::post('update/newslater/{id}', 'Admin\Category\NewslaterController@UpdateNewslater');
        Route::get('delete/newslater/{id}', 'Admin\Category\NewslaterController@DeleteNewslater');

        //Product
        Route::get('admin/products', 'Admin\ProductController@index')->name('admin.products');
        Route::get('admin/product/add', 'Admin\ProductController@create')->name('admin.addproduct');
        Route::post('admin/store/product', 'Admin\ProductController@store')->name('store.product');
        Route::get('edit/product/{id}', 'Admin\ProductController@UpdateProductPage');
        Route::post('update/product/{id}', 'Admin\ProductController@UpdateProduct');
        Route::post('image-update/product/{id}', 'Admin\ProductController@UpdateImageProduct');
        
        Route::get('inactive/product/{id}', 'Admin\ProductController@inactive');
        Route::get('active/product/{id}', 'Admin\ProductController@active');
        Route::get('delete/product/{id}', 'Admin\ProductController@DeleteProduct');
        Route::get('view/product/{id}', 'Admin\ProductController@ViewProduct');

        //For Show Sub Category With Ajax
        Route::get('get/subcategory/{id}', 'Admin\ProductController@GetSubcat');