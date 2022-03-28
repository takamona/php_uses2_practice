<?php
 
 //外部ファイルの読み込み
 
 require_once "User2.php";
 
 
 //物語開始
    
    $kobayashi = new User("小林",19,"male");
    
    $shima = new User("島",49,"male");
    
    // $kobayashi->hello();
    
    // $kobayashi->drink();
    
    // $shima->hello();
    
    // $shima->drink();
    
    //ユーザーの一覧作成
    
    $users = array();
    
    $users[] = $kobayashi;
    
    $users[] = $shima;
    
    $users[] = new User("山田", 80,"female");
    
    // var_dump($users);
    
    //ユーザー一覧を表示
    
    // foreach($users as $user){
    //     print "{$user->name}\n";
    //     print "{$user->age}歳\n";
    //     print $user->drink();
    // }
    
    //HTML ファイルを表示
    
    include_once "index_view.php";
    
    
    