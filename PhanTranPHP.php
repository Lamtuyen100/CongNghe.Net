<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $database = "libery";

        $connect = mysqli_connect($serverName, $userName, $password, $database) or die("Connect Fail");

        $soDongMuonHT = 20;
        $soTrangHienTai = $_GET["page"];
        $thuTuDongHT = ($soTrangHienTai - 1) * $soDongMuonHT;
        $soDong = mysqli_query($connect, "SELECT * FROM thanhvien LIMIT ".$soDongMuonHT." OFFSET ".$thuTuDongHT." ");

        $tongSoDongDB = mysqli_query($connect, "SELECT * FROM thanhvien");
        $tongSoDongDB = $tongSoDongDB->num_rows;
        $tongSoTrang = ceil($tongSoDongDB / $soDongMuonHT);
    ?>
    <div>
        <center>
            <?php while($row = mysqli_fetch_array($soDong)){ ?>
                <table border="1">
                    <tr>
                        <td width="100px"><?= $row['username'] ?></td>
                        <td width="50px"><?= $row['password'] ?></td>
                        <td width="240px"><?= $row['ho'] ?></td>
                    </tr>
                </table>
            <?php } ?>
            <br>
            <?php for($i=1; $i<=$tongSoTrang ; $i++){ ?>
                <a href="?page=<?= $i ?>">Trang <?= $i ?></a>
            <?php } ?>
        </center>
    </div>

</body>
</html>