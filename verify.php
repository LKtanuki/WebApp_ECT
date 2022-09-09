<h1 align="center">Webboard Tanukiii</h1>
<hr>
<div align="center">
<?php
    if($_POST["login"] == "admin" && $_POST["password"] == "ad1234"){
        echo "ยินดีต้อนรับคุณ ADMIN";
    }elseif($_POST["login"] == "member" && $_POST["password"] == "mem1234"){
        echo "ยินดีต้อนรับคุณ MEMBER";
    }else{
        echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
    }
?>
    
<div align="center">
      <a href="index.php">กลับไปหน้าหลัก</a>
</div>