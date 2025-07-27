<?php
class thoitrang extends Database {
 public function getDataAll(){
    $sql = 'SELECT * FROM thoitrang';
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
 }
 public function addData($tenao, $Gia, $thuonghieu, $anhsanpham_image){
      $sql = "INSERT INTO thoitrang(tenao, Gia, thuonghieu, anhsanpham_image) 
      VALUES ('".$tenao."', '".$Gia."', '".$thuonghieu."', '".$anhsanpham_image."')";
      echo $sql;die();
   $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
 }
   public function getDataById($id){
      $sql = 'SELECT * FROM thoitrang WHERE id = '.$id;
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
   }
 public function editData($id, $tenao, $Gia, $thuonghieu, $anhsanpham_image){
      $sql = "UPDATE thoitrang
      SET tenao = '".$tenao."',
       Gia = '".$Gia."',
       thuonghieu = '".$thuonghieu."',
       anhsanpham_image ='".$anhsanpham_image."'
      WHERE id = $id";
      echo $sql;die();
   $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
  }
 }