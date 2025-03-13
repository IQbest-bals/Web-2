<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

/*  MENENTUKAN LULUS ATAU TIDAK MENGGUNAKAN IF ELSE SISWA DI NYATAKAN LULUS JIKA NILAI TOTAL DENGAN PRESENTASE 30% UTS 35% UAS DAN TUGAS 35% MELEBIHI 55%*/

/* MENENTUKAN GRADE NILAI MENGGUNAKAN IF ELSE
0-35 = E
36-55 = D
56-69 = C
70-84 = B
85-100 = A
< 0 || > 100 = I
*/

if (!empty($proses)) {
    echo 'proses :' . $proses;
    echo '<br/>nama :' . $nama_siswa;
    echo '<br/>mata kuliah :' . $mata_kuliah;
    echo '<br/>nilai uts :' . $nilai_uts;
    echo '<br/>nilai uas :' . $nilai_uas;
    echo '<br/>nilai tugas praktikum :' . $nilai_tugas;
    //echo '<br/>nilai akhir :' . number_format($nilai_akhir, 2, ',' , '.');
    //echo '<br/>status :' . $status;
    //echo '<br/>grade :' . $grade;
    //echo '<br/>predikat :' . $predikat;
}