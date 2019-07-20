<?php   

Route::get('auth/github', 'Auth\GithubController@redirectToProvider')->name('auth.github');
Route::get('auth/github/callback', 'Auth\GithubController@handleProviderCallback')->name('auth.github.callback');
Route::get('logout', 'Auth\GithubController@logout')->name('logout');

Route::get('/', 'Snippet\SnippetController@index')->name('home');
Route::get('/about', 'AboutController')->name('about');

Route::get('/snippet/add', 'User\SnippetController@add')->name('snippet.add');
Route::post('/snippet/create', 'User\SnippetController@post')->name('snippet.create');

Route::get('/{user}/admin', 'User\AdminController@index')->name('user.admin');
Route::get('/{user}/profil/edit', 'User\AdminController@edit')->name('user.edit');
Route::get('/{user}', 'Snippet\UserController')->name('snippet.user');

Route::get('/search', 'Snippet\SearchController')->name('snippet.search');
Route::get('/tag/{tag}', 'Snippet\TagController')->name('snippet.tag');
Route::get('/framework/{framework}', 'Snippet\FrameworkController')->name('snippet.framework');
Route::get('/snippet/{snippet}', 'Snippet\SnippetController@detail')->name('snippet.detail');