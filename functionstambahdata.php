<?php 
    //connect to database
    $conn = mysqli_connect("localhost", "root", "", "datasiswa");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ) {
              $rows[] = $row;
        }
    return $rows;
    }

    function tambah($data) {
        global $conn;
        $nis = $_POST["NIS"];
        $nama_lengkap = $_POST["Nama Lengkap"];
        $kelas = $_POST["Kelas"];
        $tempat_lahir = $_POST["NIS"];
        $tanggal_lahir = $_POST["Tanggal Lahir"];
        $agama = $_POST["Agama"];
        $jenis_kelamin = $_POST["Jenis Kelamin"];
        $nisn = $_POST["nisn"];
        $nik = $_POST["NIK"];
        $alamat = $_POST["Alamat"];
        $no_akta = $_POST["No. Akta Lahir"];
        $no_kk = $_POST["No. Kartu Keluarga"];
        $no_kip = $_POST["No. KIP"];
        $no_seri = $_POST["No. Seri Ijazah SMP"];
        $smp_asal = $_POST["SMP Asal"];
        $sd_asal = $_POST["SD Asal"];
        $koordinat_rumah = $_POST["Koordinat Rumah"];
        $jarak_kesekolah = $_POST["Jarak Rumah ke Sekolah"];
        $hobi = $_POST["Hobi"];
        $minat = $_POST["Minat"];
        $bakat = $_POST["Bakat"];
        $prestasi = $_POST["Prestasi"];
        $pelanggaran = $_POST["Pelanggaran"];
        $nama_ayah = $_POST["Nama Ayah"];
        $tempat_lahirayah = $_POST["Tempat Lahir Ayah"];
        $tanggal_lahirayah = $_POST["Tanggal Lahir Ayah"];
        $agama_ayah = $_POST["Agama Ayah"];
        $nik_ayah = $_POST["NIK Ayah"];
        $noktp_ayah = $_POST["No. KTP Ayah"];
        $pendidikan_ayah = $_POST["Pendidikan Terakhir Ayah"];
    }

?>
