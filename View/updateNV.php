
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <title>Document</title>
</head>
<body>

<div class="col-5 offset-4 mt-4">
    <form name="form" action="../Controller/C_NV.php" method='post'>
      <div class="card">
        <div class="card-header">
          <b>Chỉnh sửa nhân viên </b>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="IDNV">Mã nhân viên</label>
            <input type="text" class="form-control" name="IDNV" value='<?php echo $NV->IDNV; ?>' readonly>
          </div>
          <div class="form-group">
            <label for="Hoten">Tên nhân viên</label>
            <input type="text" class="form-control" name="Hoten" value='<?php echo  $NV->Hoten; ?>'>
          </div>
          <div class="form-group">
            <label for="IDPB">Phòng ban</label>
            <select class="form-control" name="IDPB" >

           <?php
                echo ' <option value="' . $NV->IDPB. '">' . $NV->IDPB . ' </option>';
                foreach ($departments as $depart) {
                if ($depart != $NV->IDPB) {
                echo ' <option  value=' . $depart . '>' . $depart . '</option>';
                }
  
                    }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="Diachi">Địa chỉ</label>
            <input type="text" class="form-control" name="Diachi" value='<?php echo  $NV->Diachi; ?>'>
          </div>
        </div>
        <div class="card-footer text-muted">
          <input type="reset" class="float-right btn btn-primary ml-2" value="Reset">
          <input type="submit" class="float-right btn btn-primary" name="update" value="OK">
          
        </div>
      </div>
    </form>
    
  </div>
      <a href="javascript:history.back();"><button class="btn btn-primary float-right " style="margin-right:30px ;">Quay Lai</button>
</body>
</html>