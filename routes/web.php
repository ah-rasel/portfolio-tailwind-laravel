<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\AddUser;
use App\Http\Livewire\Admin\Categories\AddNewCategory;
use App\Http\Livewire\Admin\Categories\AllCategories;
use App\Http\Livewire\Admin\Categories\EditCategory;
use App\Http\Livewire\Admin\Post\AllPosts;
use App\Http\Livewire\Admin\Post\CreatePost;
use App\Http\Livewire\Admin\Post\EditPost;
use App\Http\Livewire\EditUser;
use App\Http\Livewire\Permission\AddPermission;
use App\Http\Livewire\Permission\AddRoles;
use App\Http\Livewire\Permission\EditRole;
use App\Http\Livewire\Permissions;
use App\Http\Livewire\Portfolio\AllMessages;
use App\Http\Livewire\Portfolio\Cmd\CmdPage;
use App\Http\Livewire\Portfolio\ContactSection;
use App\Http\Livewire\Portfolio\ExpertiseArea;
use App\Http\Livewire\Portfolio\OfferSection;
use App\Http\Livewire\Portfolio\PortfolioEducationSection;
use App\Http\Livewire\Portfolio\PortfolioHeaderSection;
use App\Http\Livewire\Portfolio\RecentWorks;
use App\Http\Livewire\PortfolioFloatingSection;
use App\Http\Livewire\PortfolioIntroSection;
use App\Http\Livewire\Roles;
use App\Http\Livewire\User\Category\ViewCategories;
use App\Http\Livewire\User\Post\AllPosts as PostAllPosts;
use App\Http\Livewire\User\Post\PostsUnderCategory;
use App\Http\Livewire\User\Post\SinglePost;
use App\Http\Livewire\Users;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'viewHomePage'])->name('home');
Route::get('/check',[BlogController::class,'index'])->name('check');

// CMD
Route::get('/cmd',CmdPage::class);

// User Categories
Route::get('/categories',ViewCategories::class);

// Posts
Route::get('/posts/{category:slug}',PostsUnderCategory::class)->name('posts.of.category');
Route::get('/post/{post:slug}',SinglePost::class)->name('post.view');
Route::get('/blog',PostAllPosts::class)->name('posts.show');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::prefix('portfolio')->group(function () {
        Route::get('/',PortfolioHeaderSection::class)->name('portfolio');
        Route::get('/floating',PortfolioFloatingSection::class)->name('portfolio.floating');
        Route::get('/intro',PortfolioIntroSection::class)->name('portfolio.intro');
        Route::get('/qualification',PortfolioEducationSection::class)->name('portfolio.qualification');
        Route::get('/offer',OfferSection::class)->name('portfolio.offer');
        Route::get('/experience',ExpertiseArea::class)->name('portfolio.expertise');
        Route::get('/work',RecentWorks::class)->name('portfolio.work');
        Route::get('/contact',ContactSection::class)->name('portfolio.contact');
    });
    
    Route::prefix('admin')->group(function (){
        Route::get('/messages',AllMessages::class)->name('portfolio.messages');
    //  Admin  Posts
        Route::get('/posts',AllPosts::class)->name('admin.posts.index');
        Route::get('/post/create',CreatePost::class)->name('post.create');
        Route::get('/post/{post}/edit',EditPost::class)->name('post.edit');

    // Admin Categories

        Route::get('/categories',AllCategories::class)->name('admin.category.index');
        Route::get('/category/create',AddNewCategory::class)->name('category.create');
        Route::get('/category/{category}/edit',EditCategory::class)->name('category.edit');

        Route::get('/users',Users::class)->name('admin.users.index');
        Route::get('/user/create',AddUser::class)->name('admin.users.create');
        Route::get('/user/{user}/edit',EditUser::class)->name('admin.users.edit');
        // Roles
        Route::get('/role/create',AddRoles::class)->name('admin.roles.create');
        Route::get('/roles',Roles::class)->name('admin.roles.index');
        Route::get('/role/{role}/edit',EditRole::class)->name('admin.roles.edit');
        // Permissions
        Route::get('/permissions',Permissions::class)->name('admin.permissions.index');
        Route::get('/permission/create',AddPermission::class)->name('admin.permissions.create');
    });
    


});




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
/*
Route::get('/', function () {
    return view('index');
});*/

/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/
