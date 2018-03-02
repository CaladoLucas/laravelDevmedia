<?php
//model
class UserModel{
  public function listAll(){
    return array(
      ["nome"=>"Alfredo"],
      ["nome"=>"Bruce"],
      ["nome"=>"Catabolizador"],
      ["nome"=>"Doentionho"]
    );
  }
}

//Controller
class MainController{
  public function home(){
    $user = new UserModel();
    $list = $user->listAll();
    return $list;
  }
}

//View

$MainController = new MainController();
$list = $MainController->home();
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>
     </title>
   </head>
   <body>
     <h1>Lista de Usuários:</h1>
     <ul>
       <?php foreach ($list as $user): ?>
         <li><?php echo $user['nome'] ?></li>
      <?php endforeach; ?>
     </ul>
   </body>
 </html>
