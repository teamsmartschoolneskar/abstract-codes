<?php
    //koneksi ke database
        include 'koneksi.php';

    //tangkap data dari form
        $id = $_POST['id'];
        $nama = htmlspecialchars($_POST['nama']);
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

    //ubah data ke database
        $data = mysqli_query($conn, "UPDATE data_siswa SET nama='$nama', nis='$nis', kelas='$kelas', nisn='$nisn', nik='$nik',
                tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', agama='$agama', jenis_kelamin='$jenis_kelamin',
                alamat='$alamat', no_akta_lahir='$no_akta_lahir', no_kartu_keluarga='$no_kartu_keluarga', no_kip='$no_kip', 
                no_seri_ijazah_smp='$no_seri_ijazah_smp', smp_asal='$smp_asal', sd_asal='$sd_asal', koordinat_rumah='$koordinat_rumah',
                jarak_rumah_ke_sekolah='$jarak_rumah_ke_sekolah', hobi='$hobi', minat='$minat', bakat='$bakat', prestasi='$prestasi', 
                pelanggaran='$pelanggaran', melanjutkan_ke_instansi='$melanjutkan_ke_instansi', nama_ayah='$nama_ayah', tempat_lahir_ayah='$tempat_lahir_ayah', 
                tanggal_lahir_ayah='$tanggal_lahir_ayah', agama_ayah='$agama_ayah', nik_ayah='$nik_ayah', no_ktp_ayah='$no_ktp_ayah', 
                pendidikan_terakhir_ayah='$pendidikan_terakhir_ayah', pekerjaan_ayah='$pekerjaan_ayah', gaji_ayah='$gaji_ayah', 
                nama_ibu='$nama_ibu', tempat_lahir_ibu='$tempat_lahir_ibu', tanggal_lahir_ibu='$tanggal_lahir_ibu', agama_ibu='$agama_ibu',
                nik_ibu='$nik_ibu', no_ktp_ibu='$no_ktp_ibu', pendidikan_terakhir_ibu='$pendidikan_terakhir_ibu', 
                pekerjaan_ibu='$pekerjaan_ibu', gaji_ibu='$gaji_ibu' WHERE id='$id'");
        var_dump($data);
        die;

    //kembali ke index
        header("location:index.php");

?>
