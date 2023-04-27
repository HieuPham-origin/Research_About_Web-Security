<?php
require_once('db.php');
error_reporting(E_ERROR | E_PARSE);
class postController{
    public function get_all_posts(){
        global $conn;
        $stm = $conn->prepare("select * from posts order by post_id desc");
        $stm->execute();
        $stm->bind_result($post_id,$username, $post_content, $time_posted);
        $kq = [];
        while($stm->fetch()){
            $kq[] = new Post($post_id,$username, $post_content, $time_posted);
        }
        return $kq;
    }
    //tạo post khi có token
    // public function add_post($usname, $post_content,$ses){
    //     global $conn;
    //     $_SESSION['csrf_token'] = $ses;
    //     if(($_POST['token'])==$_SESSION['csrf_token']){
    //         $stm = $conn->prepare("insert into posts(username,post_content) values(?,?)");
    //         $stm->bind_param('ss',$usname, $post_content);
    //         $stm->execute();
    //     }
    //     else{
    //         echo "Bạn đã bị tấn công CSRF";
    //     } 
    // }
    //Tạo post chưa có token
    public function add_post($usname, $post_content){
        global $conn;
        $stm = $conn->prepare("insert into posts(username,post_content) values(?,?)");
        $stm->bind_param('ss',$usname, $post_content);
        $stm->execute();
    }
}
class Post{
    public function __construct($post_id,$username, $post_content, $time_posted)
    {
        $this->post_id = $post_id;
        $this->username = $username;
        $this->post_content = $post_content;
        $this->time_posted = $time_posted;
    }
    public $post_id;
    public $username;
    public $post_content;
    public $time_posted;
}
?>