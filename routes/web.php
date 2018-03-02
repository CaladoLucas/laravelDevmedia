<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('contato',function(){
  return "Página de Contato!";
});

Route::post('contato',function(){
  return "Realizando um Post!";
});

Route::put('contato',function(){
  return "Realizando um put!";
});

Route::delete('contato',function(){
  return "Realizando um delete!";
});

Route::match(['get','post'],'sobre',function(){
  return "Trabalhando com match!";
});

Route::any('todos',function(){
  $url = url('nova');
  return "Trabalhando com todos!".$url;
});

Route::get('artigo/{id}',function($id){
  return "Artigo id: {$id}";
});

Route::get('produto/{id?}',function($id=null){
  return "Produto id: {$id}";
});

Route::get('link',['as'=>'link',function(){
  return 'link <a href="'.route('detalhe').'">Detalhe</a>';
}]);

Route::get('teste',['as'=>'detalhe',function(){
  return "teste";
}]);

Route::group(['prefix'=>'admin'],function(){
  Route::get('contato',function(){
    return "Página de Admin Contato!";
  });
  Route::get('sobre',function(){
    return "Página de Admin Sobre!";
  });
});
