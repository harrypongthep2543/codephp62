<?php
require_once 'connectdb.php';
$id_user = "";
$username = "";
$status = "";
$strSQL = "";
if($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = "";
    if(isset($_GET["id_user"]) && $_GET["id_user"] != '') {
        $id_user = $_GET["id_user"];
        $username = $_GET["username"];
        $status = $_GET["status"];
    }else {
        //echo "id is null";
    }
}
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $status = "";
    $id_user = $_GET["id_user"];
    $username = $_POST["username"];
    $status = $_POST["status"];
    echo $username . " -- " .$status;
    $strSQL ="UPDATE user SET username='" .$username."',status=".$status." WHERE id_user=".$id_user;
    if(($username == "") && ($status == "")) {
        echo "ไม่สามารถเพิ่มข้อมูลได้";
    }else{
        echo $strSQL ;

        $result = $myconn->query($strSQL);
        if($result){
            echo "เพิ่มข้อมูลสำเร็จ";
        }else{
            echo "ไม่สามารถเพิ่มข้อมูลได้";
        }
    }
    }
    //echo $_POST["username"];



    //$strSQL ="INSERT INTO user`(username`, password_hash) ";
    //$strSQL .=" VALUES ('user03','password for user 03')";

    //$result = $myconn->query($strSQL);
    //if($result){
    //    echo "1";
    //}else{
    //    echo "2";
    //}
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <form action="update.php?id_user=<?=$id_user?>" method="POST">
        <table border="2">
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?=$username?>"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type="text" name="status" value="<?=$status?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="save"></td>
            </tr>
        </table>
    </form>
    </body>
    </html>
