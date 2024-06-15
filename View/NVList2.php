<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>

<body>
    <div class="box" style="padding:50px 50px ;">
        <table border="1" width="100%" class="table table-striped">
            <caption style="padding-left: 33.3%;">Du lieu truy xuat tu bang nhan vien</caption>
            <TR>
                <TH>STT</TH>
                <TH>IDNV</TH>
                <TH>Hoten</TH>
                <TH>IDPB</TH>
                <TH>Diachi</TH>
            </TR>
            <?php
            if (sizeof($NVList) > 0) {
                for ($i = 1; $i<=sizeof($NVList); $i++) {
                    echo '<TR><TD>'.$i.'</TD><TD>'.$NVList[$i]->IDNV.'</TD><TD>'.$NVList[$i]->Hoten.'</TD><TD>'.$NVList[$i]->IDPB.'</TD><TD>'.$NVList[$i]->Diachi.'</TD></TR>';

                }
            } else {
                echo "Khong ton tai";
            }
            ?>
        </TABLE>
        <a href="../"><button class="btn btn-primary float-right " style="margin-right:30px ;">Quay Lai</button>
    </div>
</body>

</html>