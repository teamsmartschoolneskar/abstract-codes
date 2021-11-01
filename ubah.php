<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>
<body>
    <h1>Ubah Data Siswa</h1>
    <br><br><br>
    <a href="index.php">Kembali</a>
    <br><br>
    <h3>Data Siswa</h3>
    <?php 
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($conn, "SELECT * FROM data_siswa WHERE id='$id'");
        while ($ds = mysqli_fetch_array($data)) {
    ?>
    <div class="form">
        <form method="POST" action="ubah_aksi.php">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $ds['id']; ?>">
                    <input type="text" name="nama" value="<?php echo $ds['nama']; ?>">
                </td>
            </tr>
            <tr>
                <td>NIS</td>
                <td><input type="text" name="nis" value="<?php echo $ds['nis']; ?>" readonly></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" value="<?php echo $ds['kelas']; ?>"></td>
            </tr>
            <tr>
                <td>NISN</td>
                <td><input type="text" name="nisn" value="<?php echo $ds['nisn']; ?>"></td>
            </tr>
            <tr>
                <td>NIK</td>
                <td><input type="text" name="nik" value="<?php echo $ds['nik']; ?>"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempat_lahir" value="<?php echo $ds['tempat_lahir']; ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="text" name="tanggal_lahir" value="<?php echo $ds['tanggal_lahir']; ?>"></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><input type="text" name="agama" value="<?php echo $ds['agama']; ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jenis_kelamin" value="<?php echo $ds['jenis_kelamin']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $ds['alamat']; ?>"></td>
            </tr>
            <tr>
                <td>No. Akta Lahir</td>
                <td><input type="text" name="no_akta_lahir" value="<?php echo $ds['no_akta_lahir']; ?>"></td>
            </tr>
            <tr>
                <td>No. Kartu Keluarga</td>
                <td><input type="text" name="no_kartu_keluarga" value="<?php echo $ds['no_kartu_keluarga']; ?>"></td>
            </tr>
            <tr>
                <td>No. KIP</td>
                <td><input type="text" name="no_kip" value="<?php echo $ds['no_kip']; ?>"></td>
            </tr>
            <tr>
                <td>No. Seri Ijazah SMP</td>
                <td><input type="text" name="no_seri_ijazah_smp" value="<?php echo $ds['no_seri_ijazah_smp']; ?>"></td>
            </tr>
            <tr>
                <td>SMP Asal</td>
                <td><input type="text" name="smp_asal" value="<?php echo $ds['smp_asal']; ?>"></td>
            </tr>
            <tr>
                <td>SD Asal</td>
                <td><input type="text" name="sd_asal" value="<?php echo $ds['sd_asal']; ?>"></td>
            </tr>
            <tr>
                <td>Koordinat Rumah</td>
                <td><input type="text" name="koordinat_rumah" value="<?php echo $ds['koordinat_rumah']; ?>"></td>
            </tr>
            <tr>
                <td>Jarak Rumah ke Sekolah</td>
                <td><input type="text" name="jarak_rumah_ke_sekolah" value="<?php echo $ds['jarak_rumah_ke_sekolah']; ?>"></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td><input type="text" name="hobi" value="<?php echo $ds['hobi']; ?>"></td>
            </tr>
            <tr>
                <td>Minat</td>
                <td><input type="text" name="minat" value="<?php echo $ds['minat']; ?>"></td>
            </tr>
            <tr>
                <td>Bakat</td>
                <td><input type="text" name="bakat" value="<?php echo $ds['bakat']; ?>"></td>
            </tr>
            <tr>
                <td>Prestasi</td>
                <td><input type="text" name="prestasi" value="<?php echo $ds['prestasi']; ?>"></td>
            </tr>
            <tr>
                <td>Pelanggaran</td>
                <td><input type="text" name="pelanggaran" value="<?php echo $ds['pelanggaran']; ?>"></td>
            </tr>
            <tr>
                <td>Melanjutkan ke Instansi</td>
                <td><input type="text" name="melanjutkan_ke_instansi" value="<?php echo $ds['melanjutkan_ke_instansi']; ?>"></td>
            </tr>
            <tr>
                <td>Nama Ayah</td>
                <td><input type="text" name="nama_ayah" value="<?php echo $ds['nama_ayah']; ?>"></td>
            </tr>
            <tr>
                <td>Tempat Lahir Ayah</td>
                <td><input type="text" name="tempat_lahir_ayah" value="<?php echo $ds['tempat_lahir_ayah']; ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir Ayah</td>
                <td><input type="text" name="tanggal_lahir_ayah" value="<?php echo $ds['tanggal_lahir_ayah']; ?>"></td>
            </tr>
            <tr>
                <td>Agama Ayah</td>
                <td><input type="text" name="agama_ayah" value="<?php echo $ds['agama_ayah']; ?>"></td>
            </tr>
            <tr>
                <td>NIK Ayah</td>
                <td><input type="text" name="nik_ayah" value="<?php echo $ds['nik_ayah']; ?>"></td>
            </tr>
            <tr>
                <td>No. KTP Ayah</td>
                <td><input type="text" name="no_ktp_ayah" value="<?php echo $ds['no_ktp_ayah']; ?>"></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir Ayah</td>
                <td><input type="text" name="pendidikan_terakhir_ayah" value="<?php echo $ds['pendidikan_terakhir_ayah']; ?>"></td>
            </tr>
            <tr>
                <td>Pekerjaan Ayah</td>
                <td><input type="text" name="pekerjaan_ayah" value="<?php echo $ds['pekerjaan_ayah']; ?>"></td>
            </tr>
            <tr>
                <td>Gaji Ayah</td>
                <td><input type="text" name="gaji_ayah" value="<?php echo $ds['gaji_ayah']; ?>"></td>
            </tr>
            <tr>
                <td>Nama Ibu</td>
                <td><input type="text" name="nama_ibu" value="<?php echo $ds['nama_ibu']; ?>"></td>
            </tr>
            <tr>
                <td>Tempat Lahir Ibu</td>
                <td><input type="text" name="tempat_lahir_ibu" value="<?php echo $ds['tempat_lahir_ibu']; ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir Ibu</td>
                <td><input type="text" name="tanggal_lahir_ibu" value="<?php echo $ds['tanggal_lahir_ibu']; ?>"></td>
            </tr>
            <tr>
                <td>Agama Ibu</td>
                <td><input type="text" name="agama_ibu" value="<?php echo $ds['agama_ibu']; ?>"></td>
            </tr>
            <tr>
                <td>NIK Ibu</td>
                <td><input type="text" name="nik_ibu" value="<?php echo $ds['nik_ibu']; ?>"></td>
            </tr>
            <tr>
                <td>No. KTP Ibu</td>
                <td><input type="text" name="no_ktp_ibu" value="<?php echo $ds['no_ktp_ibu']; ?>"></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir Ibu</td>
                <td><input type="text" name="pendidikan_terakhir_ibu" value="<?php echo $ds['pendidikan_terakhir_ibu']; ?>"></td>
            </tr>
            <tr>
                <td>Pekerjaan Ibu</td>
                <td><input type="text" name="pekerjaan_ibu" value="<?php echo $ds['pekerjaan_ibu']; ?>"></td>
            </tr>
            <tr>
                <td>Gaji Ibu</td>
                <td><input type="text" name="gaji_ibu" value="<?php echo $ds['gaji_ibu']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submt" value="SIMPAN PERUBAHAN"></td>
            </tr>
        </table>
        </form>
    </div>
    <?php
        }
    ?>
</body>
</htmlr
