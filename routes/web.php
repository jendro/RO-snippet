<?php   

// Route::get('sitemap.xml',function(){
//     return view('sitemap');
// });

Route::get('auth/github', 'Auth\GithubController@redirectToProvider')->name('auth.github');
Route::get('auth/github/callback', 'Auth\GithubController@handleProviderCallback')->name('auth.github.callback');
Route::get('logout', 'Auth\GithubController@logout')->name('logout');

Route::get('/', 'Snippet\SnippetController@index')->name('home');
Route::get('/about', 'AboutController')->name('about');

Route::get('/snippet/add', 'User\SnippetController@add')->name('snippet.add');
Route::post('/snippet/create', 'User\SnippetController@create')->name('snippet.create');
Route::get('/snippet/{snippet}/edit', 'User\SnippetController@edit')->name('snippet.edit');
Route::put('/snippet/{snippet}/update', 'User\SnippetController@update')->name('snippet.update');
Route::get('/snippet/{snippet}/destroy', 'User\SnippetController@destroy')->name('snippet.destroy');

Route::post('/snippet/{snippet}/komentar/create', 'User\SnippetKomentarController@create')->name('komentar.create');
Route::get('/snippet/{snippet}/komentar/{komentar}/destroy', 'User\SnippetKomentarController@destroy')->name('komentar.destroy');

Route::get('/{user}/admin', 'User\AdminController@index')->name('user.admin');
Route::get('/{user}/profil/edit', 'User\AdminController@edit')->name('user.edit');
Route::put('/{user}/profil/update', 'User\AdminController@update')->name('user.update');

Route::get('/search', 'Snippet\SearchController')->name('snippet.search');
Route::get('/tag/{tag}', 'Snippet\TagController')->name('snippet.tag');
Route::get('/framework/{framework}', 'Snippet\FrameworkController')->name('snippet.framework');
Route::get('/{contributor}', 'Snippet\UserController')->name('snippet.user');

Route::get('/snippet/{framework}/{snippet}', 'Snippet\SnippetController@detail')->name('snippet.detail');
Route::post('/snippet/{snippet}/star', 'Snippet\SnippetStarController')->name('snippet.star');