<?php
    require "../../dbcon.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Thuan</title>
    <style>
        .title{
            background-color: green;
            color:yellow !important;
            text-align: center;
            padding: 5px;
        }   
        td{
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
     <table width="700" border="1" cellpadding="0" cellspacing="0">
    <tr>
        <td width="20%" class="title">Loai Tin</td>
        <td class="title">Tin</td>
    </tr>
    <tr>
        <td>
            <?php
                $qrLoaiTin = "SELECT * FROM loaitin";
                $loaitin = mysqli_query($qrLoaiTin);
                // $loai = mysql_fetch_assoc($loaitin);
                while($row_loaitin = mysql_fetch_array($loaitin)){
            ?>
            <a href="index.php?idLT=<?php echo $row_loaitin["idLT"]?>">
                    <?php echo $row_loaitin["Ten"]?>
            </a>
            <?php
            }
        ?>
        </td>
        <td>&nbsp;</td>
    </tr>
     </table>
</body>
</html>