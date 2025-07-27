<?php
class Database{
    protected $conn;
    //protected là dùng được cho cả lớp con của lớp cha
    //private chỉ dùng được trong class đó thôi
    public function __construct()
    {
        $host = 'localhost';
        $dbname = 'duannhom2_pro1';//Tên database
        $username = 'root';//Username mysql
        $password = '';
        try{
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //Kết nối thành công
        } catch(PDOException $e){
            echo $e->getMessage();
            //Lỗi kết nối
        }
    }
    
}