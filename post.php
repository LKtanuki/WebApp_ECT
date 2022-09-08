<h1>Webboard Tanukiii</h1>
<hr>
<div align="center">
    <?php
        echo "ต้องการดูกระทู้หมายเลข ".$_GET["id"];
    ?>
</div>
<br>
<form action="verify.php" method="post"> 
        <table style="border: 2px solid black; width: 40%;" align="center" >
            <tr>
                <td align="center" style="background-color: #6CD2FE;">แสดงความคิดเห็น</td>
            </tr>
            <tr>   
                <td align="center"><textarea name="coment" rows="2" cols="50"></textarea></td>                
            </tr>
            <tr>
                <td align="center"><input type="submit" value="ส่งข้อความ"></td>
            </tr>
        </table>
    </form>
    <div align="center">
      <a href="index.html">กลับไปหน้าหลัก</a>
    </div>
    