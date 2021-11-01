<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h1>Tambah Data Siswa</h1>
    <br><br>
    <a href="index.php">Kembali</a>
    <br>
    <h3>Data Siswa</h3>
    <div class="form">
        <form method="POST" action="tambah_aksi.php">
        <div class="table">
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td><input type="text" name="nama"></td> 
                </tr>
                <tr>
                    <td>NIS</td>
                    <td><input type="text" name="nis"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td><input type="text" name="kelas"></td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td><input type="text" name="nisn"></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td><input type="text" name="nik"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempat_lahir"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="text" name="tanggal_lahir"></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td><input type="text" name="agama"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="text" name="jenis_kelamin"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>No. Akta Lahir</td>
                    <td><input type="text" name="no_akta_lahir"></td>
                </tr>
                <tr>
                    <td>No. Kartu Keluarga</td>
                    <td><input type="text" name="no_kartu_keluarga"></td>
                </tr>
                <tr>
                    <td>No. KIP</td>
                    <td><input type="text" name="no_kip"></td>
                </tr>
                <tr>
                    <td>No. Seri Ijazah SMP</td>
                    <td><input type="text" name="no_seri_ijazah_smp"></td>
                </tr>
                <tr>
                    <td>SMP Asal</td>
                    <td><input type="text" name="smp_asal"></td>
                </tr>
                <tr>
                    <td>SD Asal</td>
                    <td><input type="text" name="sd_asal"></td>
                </tr>
                <tr>
                    <td>Koordinat Rumah</td>
                    <td><input type="text" name="koordinat_rumah"></td>
                </tr>
                <tr>
                    <td>Jarak Rumah ke Sekolah</td>
                    <td><input type="text" name="jarak_rumah_ke_sekolah"></td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td><input type="text" name="hobi"></td>
                </tr>
                <tr>
                    <td>Minat</td>
                    <td><input type="text" name="minat"></td>
                </tr>
                <tr>
                    <td>Bakat</td>
                    <td><input type="text" name="bakat"></td>
                </tr>
                <tr>
                    <td>Prestasi</td>
                    <td><input type="text" name="prestasi"></td>
                </tr>
                <tr>
                    <td>Pelanggaran</td>
                    <td><input type="text" name="pelanggaran"></td>
                </tr>
                <tr>
                    <td>Melanjutkan ke Instansi</td>
                    <td><input type="text" name="melanjutkan_ke_instansi"></td>
                </tr>
            </table>
            <br><br>
    <h3>Data Orang Tua</h3>
    <h4>Data Ayah</h4>
            <table>
                <tr>
                    <td>Nama Ayah</td>
                    <td><input type="text" name="nama_ayah"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir Ayah</td>
                    <td><input type="text" name="tempat_lahir_ayah"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir Ayah</td>
                    <td><input type="text" name="tanggal_lahir_ayah"></td>
                </tr>
                <tr>
                    <td>Agama Ayah</td>
                    <td><input type="text" name="agama_ayah"></td>
                </tr>
                <tr>
                    <td>NIK Ayah</td>
                    <td><input type="text" name="nik_ayah"></td>
                </tr>
                <tr>
                    <td>No. KTP Ayah</td>
                    <td><input type="text" name="no_ktp_ayah"></td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir Ayah</td>
                    <td><input type="text" name="pendidikan_terakhir_ayah"></td>
                </tr>
                <tr>
                    <td>Pekerjaan Ayah</td>
                    <td><input type="text" name="pekerjaan_ayah"></td>
                </tr>
                <tr>
                    <td>Gaji Ayah</td>
                    <td><input type="text" name="gaji_ayah"></td>
                </tr>
            </table>
            <br><br>
    <h4>Data Ibu</h4>
            <table>
                <tr>
                    <td>Nama Ibu</td>
                    <td><input type="text" name="nama_ibu"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir Ibu</td>
                    <td><input type="text" name="tempat_lahir_ibu"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir Ibu</td>
                    <td><input type="text" name="tanggal_lahir_ibu"></td>
                </tr>
                <tr>
                    <td>Agama Ibu</td>
                    <td><input type="text" name="agama_ibu"></td>
                </tr>
                <tr>
                    <td>NIK Ibu</td>
                    <td><input type="text" name="nik_ibu"></td>
                </tr>
                <tr>
                    <td>No. KTP Ibu</td>
                    <td><input type="text" name="no_ktp_ibu"></td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir Ibu</td>
                    <td><input type="text" name="pendidikan_terakhir_ibu"></td>
                </tr>
                <tr>
                    <td>Pekerjaan Ibu</td>
                    <td><input type="text" name="pekerjaan_ibu"></td>
                </tr>
                <tr>
                    <td>Gaji Ibu</td>
                    <td><input type="text" name="gaji_ibu"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
                <br>
            </table>
        </form>
        </div><!-- div untuk tabel --> 
    </div>
</body>
</html>
