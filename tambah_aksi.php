<?php
    //koneksi ke database
        include 'koneksi.php';

    //tangkap data yang dikirim dari form
        $nama = $_POST['nama'];
        $nis = htmlspecialchars($_POST['nis']);
        $kelas = htmlspecialchars($_POST['kelas']);
        $nisn = htmlspecialchars($_POST['nisn']);
        $nik = htmlspecialchars($_POST['nik']);
        $tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
        $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
        $agama = htmlspecialchars($_POST['agama']);
        $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $no_akta_lahir = htmlspecialchars($_POST['no_akta_lahir']);
        $no_kartu_keluarga = htmlspecialchars($_POST['no_kartu_keluarga']);
        $no_kip = htmlspecialchars($_POST['no_kip']);
        $no_seri_ijazah_smp = htmlspecialchars($_POST['no_seri_ijazah_smp']);
        $smp_asal = htmlspecialchars($_POST['smp_asal']);
        $sd_asal = htmlspecialchars($_POST['sd_asal']);
        $koordinat_rumah = htmlspecialchars($_POST['koordinat_rumah']);
        $jarak_rumah_ke_sekolah = htmlspecialchars($_POST['jarak_rumah_ke_sekolah']);
        $hobi = htmlspecialchars($_POST['hobi']);
        $minat = htmlspecialchars($_POST['minat']);
        $bakat = htmlspecialchars($_POST['bakat']);
        $prestasi = htmlspecialchars($_POST['prestasi']);
        $pelanggaran = htmlspecialchars($_POST['pelanggaran']);
        $melanjutkan_ke_instansi = htmlspecialchars($_POST['melanjutkan_ke_instansi']);
        $nama_ayah = htmlspecialchars($_POST['nama_ayah']);
        $tempat_lahir_ayah = htmlspecialchars($_POST['tempat_lahir_ayah']);
        $tanggal_lahir_ayah = htmlspecialchars($_POST['tanggal_lahir_ayah']);
        $agama_ayah = htmlspecialchars($_POST['agama_ayah']);
        $nik_ayah = htmlspecialchars($_POST['nik_ayah']);
        $no_ktp_ayah = htmlspecialchars($_POST['no_ktp_ayah']);
        $pendidikan_terakhir_ayah = htmlspecialchars($_POST['pendidikan_terakhir_ayah']);
        $pekerjaan_ayah = htmlspecialchars($_POST['pekerjaan_ayah']);
        $gaji_ayah = htmlspecialchars($_POST['gaji_ayah']);
        $nama_ibu = htmlspecialchars($_POST['nama_ibu']);
        $tempat_lahir_ibu = htmlspecialchars($_POST['tempat_lahir_ibu']);
        $tanggal_lahir_ibu = htmlspecialchars($_POST['tanggal_lahir_ibu']);
        $agama_ibu = htmlspecialchars($_POST['agama_ibu']);
        $nik_ibu = htmlspecialchars($_POST['nik_ibu']);
        $no_ktp_ibu = htmlspecialchars($_POST['no_ktp_ibu']);
        $pendidikan_terakhir_ibu = htmlspecialchars($_POST['pendidikan_terakhir_ibu']);
        $pekerjaan_ibu = htmlspecialchars($_POST['pekerjaan_ibu']);
        $gaji_ibu = htmlspecialchars($_POST['gaji_ibu']);

    //input data ke database
        $data = mysqli_query($conn, "INSERT INTO data_siswa VALUES
                ('', '$nama', '$nis', '$kelas', '$nisn', '$nik', '$tempat_lahir', '$tanggal_lahir', '$agama', '$jenis_kelamin', '$alamat',
                '$no_akta_lahir', '$no_kartu_keluarga', '$no_kip', '$no_seri_ijazah_smp', '$smp_asal', '$sd_asal', '$koordinat_rumah', 
                '$jarak_rumah_ke_sekolah', '$hobi', '$minat', '$bakat', '$prestasi', '$pelanggaran', '$melanjutkan_ke_instansi', '$nama_ayah',
                '$tempat_lahir_ayah', '$tanggal_lahir_ayah', '$agama_ayah', '$nik_ayah', '$no_ktp_ayah', '$pendidikan_terakhir_ayah', '$pekerjaan_ayah',
                '$gaji_ayah', '$nama_ibu', '$tempat_lahir_ibu', '$tanggal_lahir_ibu', '$agama_ibu', '$nik_ibu', '$no_ktp_ibu', '$pendidikan_terakhir_ibu', '$pekerjaan_ibu', '$gaji_ibu')");
        var_dump($data);
        die;

    //kembali ke index
        header("location:index.php"); 
?>
