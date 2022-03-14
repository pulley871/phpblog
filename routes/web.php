<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use \Illuminate\Support\Facades\DB;
use App\Models\Post;
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

Route::get('/', function () {


    return view('welcome');
});
//Route::get('/post/{id}', [PostsController::class, 'index']);
Route::resource('posts', PostsController::class);
Route::get('/contact',[PostsController::class, 'contact']);

Route::get('post/{id}', [PostsController::class, 'show_post']);


/*
|--------------------------------------------------------------------------
| ORM
|--------------------------------------------------------------------------
*/
Route::get('/find', function(){
    $post = Post::where('users_count', '<', 50)->firstOrFail();

    return $post;


});










/* SQL QUERIES EXAMPLES*/


Route::get('/insert', function(){
    DB::insert('insert into posts(title,content) values(?,?)',['Test2', 'PHP laravel is the coolest thing since butter']);

});
//Route::get('/read', function(){
//    $results = DB::select('select * from posts where id=?',[1]);
//    return view('post', compact('results'));
//});
//Route::get('/update', function(){
//    $updated = DB::update('update posts set title = "Updated title" where id = ?',[1]);
//});
//
//Route::get('/delete', function(){
//    DB::delete('delete from posts where id=?', [1]);
//});
