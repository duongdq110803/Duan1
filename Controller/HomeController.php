<?php
class HomeController{
    public function home(){
       $thoitrangModel = new Thoitrang();
        $dataAll = $thoitrangModel->getDataAll();
        include('Views/home.php');
    }
public function add(){
       $thoitrangModel = new Thoitrang();
       if(isset($_POST['add'])){
        $tenao = $_POST['tenao'] ?? '';
        $Gia = $_POST['Gia'] ?? '';
        $thuonghieu = $_POST['thuonghieu'] ?? '';
        $anhsanpham_image = $_POST['anhsanpham_image'] ?? '';
        $thoitrangModel = new Thoitrang();
        $thoitrangModel->addData($tenao, $Gia, $thuonghieu, $anhsanpham_image);
       }
        include('Views/add.php');
    }
public function edit(){
       $id = $_GET['id'] ?? 0;
       $thoitrangModel = new Thoitrang();
       $thoitrangCurrent = $thoitrangModel->getDataById($id);
       print_r($thoitrangCurrent);
       if(isset($_POST['edit'])){
        $tenao = $_POST['tenao'] ?? '';
        $Gia = $_POST['Gia'] ?? '';
        $thuonghieu = $_POST['thuonghieu'] ?? '';
        $anhsanpham_image = $_POST['anhsanpham_image'] ?? '';
        $thoitrangModel = new Thoitrang();
        $thoitrangModel->editData($id, $tenao, $Gia, $thuonghieu, $anhsanpham_image);
       }
        include('Views/edit.php');
    }
public function delete(){
       $thoitrangModel = new Thoitrang();
        
    }
}