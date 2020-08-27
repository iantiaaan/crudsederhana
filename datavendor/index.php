<!DOCTYPE html>
<html>

<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/search.css">
    <script type="text/javascript" src="assets/DataTables/media/js/jquery.js"></script>
    <script type="text/javascript" src="assets/DataTables/media/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/dataTables.bootstrap.css">
</head>

<body>
<div class="container">
    <br>
    <h4>Data Vendor PT. Danora Agro Prima</h4>
<?php

    include "koneksi.php";

    //Cek apakah ada nilai dari method GET dengan nama id_anggota
    if (isset($_GET['id_anggota'])) {
        $id_anggota=htmlspecialchars($_GET["id_anggota"]);

        $sql="delete from anggota where id_anggota='$id_anggota' ";
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                header("Location:index.php");

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus. </div>";

            }
        }
?>

<a href="create.php" class="btn btn-primary" role="button">Tambah Data</a>
<a href="cetak.php" class="btn btn-primary" role="button">Cetak</a>

<div class="table-responsive">

    <table class="table table-bordered table-hover table-striped data">
        <br>
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Perusahaan</th>
            <th>PIC Nama</th>
            <th>Bidang Perusahaan</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No Telepon</th>
            <th colspan='2'>Aksi</th>

        </tr>
        </thead>


        <?php
        include "koneksi.php";
        $sql="select * from anggota order by id_anggota desc";

        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["username"];   ?></td>
                <td><?php echo $data["nama"];       ?></td>
                <td><?php echo $data["bidang"];     ?></td>
                <td><?php echo $data["alamat"];     ?></td>
                <td><?php echo $data["email"];      ?></td>
                <td><?php echo $data["no_hp"];      ?></td>
                <td>
                    <a href="update.php?id_anggota=<?php echo htmlspecialchars($data['id_anggota']); ?>" class="btn btn-warning" role="button">Update</a>
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id_anggota=<?php echo $data['id_anggota']; ?>" class="btn btn-danger" role="button">Delete</a>
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>


    </table>
</div>

</div>
</body>
    
    <script type="text/javascript">
    $(document).ready(function(){
        $('.data').DataTable();
    });
</script>

</html>