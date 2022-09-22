<?php
session_start();
?>
<h1>Webboard Tanukiii</h1>
<hr>
<form action="#" method="get">
    <table>
        <tr>
            <td>ผู้ใช้ :</td>
            <td><?php echo $_SESSION['username'] ?></td>
        </tr>
        <tr>
            <td>หมวดหมู่ :</td>
            <td><select name="category">
                    <option value="all">--ทั้งหทด--</option>
                    <option value="general">เรื่องทั่วไป</option>
                    <option value="study">เรื่องเรียน</option>
                </select></td>
        </tr>
        <tr>
            <td>หัวข้อ :</td>
            <td><input type="text" name="postname"></td>
        </tr>
        <tr>
            <td>เนื้อหา :</td>
            <td><textarea name="content" rows="3" cols="20"></textarea></td>

        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="บันทึกข้อความ"></td>
        </tr>
    </table>
</form>
<hr>