<?php
include_once("E_NV.php");
class Model_NV
{
   public function __construct()
   {
   }
   public function getAllNV()
   {
      $link = mysqli_connect("localhost:3307", "root",) or die("khong the ket noi");
      mysqli_select_db($link, "dulieu");
      $sql = "select * from nhanvien";
      $result = mysqli_query($link, $sql);
      $i = 0;
      $num_rows = mysqli_num_rows($result);
      while ($row = mysqli_fetch_array($result)) {
         $ID = $row['IDNV'];
         $Hoten = $row['Hoten'];
         $IDPB = $row['IDPB'];
         $Diachi = $row['Diachi'];
         $i++;
         $listNV[$i] = new Entity_NV($ID, $Hoten, $IDPB, $Diachi);
      }
      return $listNV;
   }
   public function getNVDetail($stid)
   {
      $allNV = $this->getAllNV();
      for ($i = 1; $i <= sizeof($allNV); $i++) {
         if ($allNV[$i]->IDNV === $stid) {
            return $allNV[$i];
         }
      }
   }
   public function insertNV($IDNV, $Hoten, $IDPB, $Diachi)
   {
      $link = mysqli_connect("localhost:3307", "root") or die("Khong the ket noi den CSDL MYSQL");
      mysqli_select_db($link, "dulieu");
      $sql = "insert into nhanvien values('$IDNV','$Hoten','$IDPB','$Diachi')";
      $rs = mysqli_query($link, $sql);
      mysqli_close($link);
   }
   public function updateNV($IDNV, $Hoten, $IDPB, $Diachi)
   {
      $link = mysqli_connect("localhost", "root") or die("khong the ket noi");
      mysqli_select_db($link, "dulieu");
      $sql = "UPDATE nhanvien SET Hoten ='" . $Hoten . "' , IDPB='" . $IDPB . "' , Diachi='" . $Diachi . "' where IDNV='" . $IDNV . "'";
      $result = mysqli_query($link, $sql);
      mysqli_close($link);
   }
   public function Search($txt, $rad)
   {
      $link = mysqli_connect("localhost:3307", "root") or die("khong the ket noi");
      mysqli_select_db($link, "dulieu");
      $sql = "select * from nhanvien where " . $rad . " = '" . $txt . "' ";
      $result = mysqli_query($link, $sql);
      $i = 0;
      $num_rows = mysqli_num_rows($result);
      if ($num_rows > 0) {
         while ($row = mysqli_fetch_array($result)) {
            $ID = $row['IDNV'];
            $Hoten = $row['Hoten'];
            $IDPB = $row['IDPB'];
            $Diachi = $row['Diachi'];
            $i++;
            $listNV[$i] = new Entity_NV($ID, $Hoten, $IDPB, $Diachi);
         }
      } else {
         $listNV = null;
      }
      return $listNV;
   }
   public function getIDsPB()
   {
      $link = mysqli_connect("localhost:3307", "root") or die("khong the ket noi");
      mysqli_select_db($link, "dulieu");
      $sql = "select IDPB from phongban ";
      $result = mysqli_query($link, $sql);
      $i = 0;
      while ($row = mysqli_fetch_array($result)) {
            $ID = $row['IDPB'];
            $i++;
            $departments[$i] = $ID; 
      }
      return $departments;

   }
   public function deleteEmployee($ids)
   {
      $link = mysqli_connect("localhost:3307","root") or die ("Khong the ket noi den CSDL MYSQL");
      mysqli_select_db($link, "dulieu");
      foreach($ids as $id) {
          $sql = "delete from nhanvien where IDNV = '$id'";
          $result = mysqli_query($link, $sql);
      } 
      mysqli_close($link);

   }
}
