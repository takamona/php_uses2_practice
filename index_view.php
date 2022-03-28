<!DOCTYPE html>

<html lang="ja">
    
    
<head>
    
<title>ユーザー一覧</title>
<link rel="stylesheet" href="style.css">
    
    
</head>
    
<body>

<h1>ユーザー一覧</h1>
<?php if(count($users)!==0): ?>
<P>現在のユーザーは<?= count($users)?>人です</P>
<?php foreach($users as $user): ?>
<ul>
    <li><?=$user->name?></li>
    <li><?=$user->age ?>歳</li>
    <li><?=$user->gender==="male"?"男性" : 女性 ?></li>
    <li><?=$user->drink() ?></li>
</ul>
<?php endforeach; ?>
<?php else: ?>
<p>ユーザーはまだ一人もいません。</p>
<?php endif; ?>
<p><a href="create.php">新規ユーザー登録</a></p>
</body>
</html>