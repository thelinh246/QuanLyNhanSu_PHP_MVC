<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
        function reset() {
        document.f1.txt.value="";
       document.f1.r.checked=false;
    }
</script>

<body>
    <div class="col-5 offset-4 mt-4">
               <form action="../Controller/C_NV.php" method="post" name="f1">
               <table align="center">
                 
                   <tr>
                       <td>
                       <input type="radio" id="1" name="r" value="IDNV" >
                        <label for="r">IDNV</label>
                       </td>
                       <td>
                       <input type="radio" id="2" name="r" value="Hoten">
                       <label for="r">HoTen</label></td>
                       <td>
                       <input type="radio" id="3" name="r" value="IDPB">
                       <label for="r">IDPB</label></td>
                       
                       <td>
                       <input type="radio" id="4" name="r" value="Diachi">
                       <label for="r">Diachi</label></td>   
                   </tr>
                   <tr>
           
                   </tr>
                   <tr>
                       
                   <td> <input type="text" name="txt" id="txt" placeholder="Nhập vào ...."></td>
                       <td><button type="submit" name="search"  >OK</button>
                           <button type="button" onclick="reset()">Reset</button>
                        </td>
           
                   </tr>
               </table>
               </form>
    </div>
    <a align="center" href="javascript:history.back();"><button  class="btn btn-primary float-right " style="margin-right:30px ;">Quay Lai</button>
</body>
</html>



  

