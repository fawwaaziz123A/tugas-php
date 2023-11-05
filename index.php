<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                include 'koneksi.php';
                $query = mysqli_query($conn, "SELECT * FROM `anggota`ORDER BY id_anggota ASC ");
                ?>
                <H1>DATA ANGGOTA PERPUSTAKAAN </H1>
                <a class="btn btn-primary" style="margin-bottom:5px" href="tambah.php?">
                    Tambah Data </a>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Nama
                        </th>
                          <th>
                            Username
                        </th>
                        <th>
                            Password
                        </th>
                        <th>
                            Jenis kelamin
                        </th>
                        <th>
                            Telpon
                        </th>
                        <th>
                            Alamat
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Tanggal_entry
                        </th>
                        <th>
                            Role
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                    <?php
                    if (mysqli_num_rows($query) >0) {
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $data["id_anggota"] ?>
                                </td>
                                <td>
                                    <?php echo $data["nama"] ?>
                                </td>
                                <td>
                                    <?php echo $data["username"] ?>
                                </td>
                                <td>
                                    <?php echo $data["password"] ?>
                                </td>
                                <td>
                                    <?php echo $data["sex"] ?>
                                </td>
                                <td>
                                    <?php echo $data["telp"] ?>
                                </td>
                                <td>
                                    <?php echo $data["alamat"] ?>
                                </td>
                                <td>
                                    <?php echo $data["email"] ?>
                                </td>
                                <td>
                                    <?php echo $data["tgl_entry"] ?>
                                </td>
                                
                                <td>
                                    <?php echo $data["role"] ?>
                                <td> <a href="proses_hapus.php?nama=<?php echo $data["nama"] ?>" class="label label-danger"> Delete
                                    </a> &nbsp; <a href="edit.php?nama=<?php echo $data["nama"] ?>" class="label label-warning">
                                        Ubah </a></td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>