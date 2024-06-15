<?PHP
include_once("../Model/M_NV.php");
class Ctrl_NV{
     public function invoke() {
        if(isset($_GET['stid'])){
            $modelNV = new Model_NV();
            $NV =$modelNV->getNVDetail($_GET['stid']);
            include_once("../View/NVDetail.php");
        }
        else if(isset($_GET['stid1'])){
            $modelNV = new Model_NV();
            $NV =$modelNV->getNVDetail($_GET['stid1']);
            $departments = $modelNV->getIDsPB();
            include_once("../View/updateNV.php");
        }
        else if(isset($_GET['mod1'])){
            $modelNV = new Model_NV();
            $departments = $modelNV->getIDsPB();
            include_once("../View/insertNV.php");
        }
        else if(isset($_GET['mod2'])){
            $modelNV = new Model_NV();
            $NVList =$modelNV->getAllNV();
            include_once("../View/NVList1.php");
        }
        else if(isset($_GET['mod3'])){
            $modelNV = new Model_NV();
            $NVList =$modelNV->getAllNV();
            include_once("../View/NVList3.php");
        }
        else if(isset($_GET['mod4'])){
            include_once("../View/searchNV.php");
        }
        else if(isset($_POST['insert'])){
            $ID=$_REQUEST['IDNV'];
            $Hoten=$_REQUEST['Hoten'];
            $IDPB=$_REQUEST['IDPB'];
            $Diachi=$_REQUEST['Diachi'];
            $modelNV = new Model_NV();
            $modelNV->insertNV($ID,$Hoten,$IDPB,$Diachi);
            header("Location:C_NV.php");
        }
        else if(isset($_POST['update'])){
            $ID=$_REQUEST['IDNV'];
            $Hoten=$_REQUEST['Hoten'];
            $IDPB=$_REQUEST['IDPB'];
            $Diachi=$_REQUEST['Diachi'];
            $modelNV = new Model_NV();
            $modelNV->updateNV($ID,$Hoten,$IDPB,$Diachi);
            $NVList =$modelNV->getAllNV();
            include_once("../View/NVList1.php");
        } 
        else if(isset($_POST['search'])){
            $txt=$_REQUEST['txt'];
            $rad =$_REQUEST['r'];
            $modelNV = new Model_NV();
            $NVList =$modelNV->Search($txt,$rad);
            include_once("../View/NVList2.php");
        }
        else if(isset($_POST['delete'])){
            $ids = $_REQUEST['IDNVS'];
            $modelNV = new Model_NV();
            $modelNV->deleteEmployee($ids);
            $NVList =$modelNV->getAllNV();
            include_once("../View/NVList3.php");
        }
        else{
            $modelNV = new Model_NV();
            $NVList =$modelNV->getAllNV();
            include_once("../View/NVList.php");
        }
     }
};
$C_NV = new Ctrl_NV();
$C_NV->invoke();
?>