<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    function revString($str){
        $reversed = "";
        for($i = strlen($str) - 1; $i >= 0; $i--){
            $reversed .= $str[$i];
        }
        return $reversed;
    }
    if($password === revString($username)){
        echo "Login Berhasil";   
    }else{
        echo "Login Gagal : Password harus kebalikan username";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Username : <input type="text" name="username" required><br>
        Password : <input type="password" name="password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>