<?php
session_start();
require_once('db.php');
class userController{
    public function userLogin($username, $password){
        global $conn;
        $stm = $conn->prepare("select * from users where username = ? and password = ?");
        $stm->bind_param('ss',$username, $password);
        $stm->execute();
        $stm->bind_result($username, $password);
        $kq = [];
        while($stm->fetch()){
            $kq[] = new User($username, $password);
        }
        if(count($kq)>0){
            $_SESSION['username'] = $kq[0]->username;
            header('Location: index.php');
            exit();
        }
        else{
            $_SESSION['resLogin'] = "Sai tài khoản hoặc mật khẩu";
        }
    }
}
class User{
    public function __construct($us, $psd)
    {
        $this->username = $us;
        $this->password = $psd;
    }
    public $username;
    public $password;
}
?>