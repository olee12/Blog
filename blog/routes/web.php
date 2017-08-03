<?php

Route::get( '/' , 'PostsController@index' );
Route::get( '/posts/create' , 'PostsController@create' );
Route::post('/posts','PostsController@store');
Route::get( '/posts/{post}' , 'PostsController@show' );

/**
Route::get('/',function (){
	return view('posts.index');
});

*/


/**
 * GET /posts
 * GET /posts/create
 * POST /posts
 * GET /posts/{id}/edit
 * GET /posts/{id}
 * PATCH /posts/{id}
 * DELETE /posts/{id}
 */