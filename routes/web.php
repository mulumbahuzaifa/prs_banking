<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\ApplyLoanComponent;
use App\Http\Livewire\BlogDetailsComponent;
use App\Http\Livewire\BlogsComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ServiceDetailsComponent;
use App\Http\Livewire\ServicesComponent;
use App\Http\Livewire\ThankyouComponent;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeComponent::class);
Route::get('/services', ServicesComponent::class)->name('service');
Route::get('/service/{slug}', ServiceDetailsComponent::class)->name('service.detail');
Route::get('/apply-loan', ApplyLoanComponent::class)->name('apply');
Route::get('/about-us', AboutComponent::class)->name('about');
Route::get('/contact-us', ContactComponent::class)->name('contact');
Route::get('/blogs', BlogsComponent::class)->name('blogs');
Route::get('/blog-details/{slug}', BlogDetailsComponent::class)->name('blog.details');
Route::get('/thank-you', ThankyouComponent::class)->name('thankyou');

//For Customer
Route::middleware(['auth:sanctum',config('jetstream.auth_session'), 'verified'])->group(function(){
    // Route::get('/user/review/{property_id}', UserReviewComponent::class)->name('user.review');
});

//For Admin
Route::middleware(['auth:sanctum',config('jetstream.auth_session'), 'verified' , 'authadmin'])->group(function(){
    // Route::get('/admin/project/edit/{project_slug}', AdminEditProjectsComponent::class)->name('admin.editproject');
    // Route::get('/admin/projects/add', AdminAddProjectsComponent::class)->name('admin.addproject');
    // Route::get('/admin/projects', AdminProjectsComponent::class)->name('admin.projects');

    // Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.categories');
    // Route::get('/admin/categories/edit/{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategory');
    // Route::get('/admin/categories/add', AdminAddCategoryComponent::class)->name('admin.addcategory');


    // Route::get('/admin/branches', AdminBranchesComponent::class)->name('admin.branches');
    // Route::get('/admin/branches/edit/{address}', AdminEditBranchesComponent::class)->name('admin.editbranch');
    // Route::get('/admin/branches/add', AdminAddBranchesComponent::class)->name('admin.addbranch');

    // Route::get('/admin/staffs', AdminStaffsComponent::class)->name('admin.staffs');
    // Route::get('/admin/staffs/add', AdminAddStaffComponent::class)->name('admin.addstaff');

    // Route::get('/admin/orders', AdminOrderComponent::class)->name('admin.orders');
    // Route::get('/admin/contact-us', AdminContactComponent::class)->name('admin.contact');
    // Route::get('/admin/settings', AdminSettingComponent::class)->name('admin.settings');

    // Route::get('/admin/blogs', AdminBlogComponent::class)->name('admin.blogs');
    // Route::get('/admin/blogs/add', AdminAddBlogComponent::class)->name('admin.addblog');
    // Route::get('/admin/blogs/edit/{blog_slug}', AdminEditBlogComponent::class)->name('admin.editblog');

    // Route::get('/admin/project/amenities/{project_slug}', AdminAmenitiesComponent::class)->name('admin.amenities');
    // Route::get('/project/amenities/add/{project_slug}', AdminAddAmenitiesComponent::class)->name('admin.addamenities');
    // Route::get('/project/amenities/edit/{project_slug}', AdminEditAmenitiesComponent::class)->name('admin.editamenities');


    // Route::get('/admin-project-details-{project_slug}', AdminProjectDetailsComponent::class)->name('admin.details');
    // Route::get('/project-details-add-{project_slug}', AdminAddProjectDetailsComponent::class)->name('admin.adddetails');
    // Route::get('/project-details-edit-{project_slug}', AdminEditProjectDetailsComponent::class)->name('admin.editdetails');
});