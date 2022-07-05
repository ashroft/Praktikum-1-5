<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Praktikum02</title>
</head>

<body>
    <h2 class="m-3">Form Nilai Siswa</h2>
    <hr>
    <div class="d-flex justify-content-center w-100">
        <form class="form-horizontal" method="GET" action="form_nilai.php">
            <div class="form-group row">
                <label for="" class="col-4 col-form-label d-flex justify-content-end font-weight-bold">Nama Lengkap</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            </div>
                        </div>
                        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" required="required" class="form-control" aria-describedby="HelpBlock">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label d-flex justify-content-end font-weight-bold">Mata Kuliah</label>
                <div class="col-8">
                    <select id="matkul" name="matkul" placeholder="Mata Kuliah" class="custom-select" required="required" aria-describedby="select1HelpBlock">
                        <option value="DDP">Dasar-Dasar Pemrogaman</option>
                        <option value="BDI">Basis Data I</option>
                        <option value="WEBI">Pemrogaman Web</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="uts" class="col-4 col-form-label d-flex justify-content-end font-weight-bold">Nilai UTS</label>
                <div class="col-8">
                    <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control" required="required" aria-describedby="text2HelpBlock">
                </div>
            </div>
            <div class="form-group row">
                <label for="uas" class="col-4 col-form-label d-flex justify-content-end font-weight-bold">Nilai UAS</label>
                <div class="col-8">
                    <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control" required="required" aria-describedby="text3HelpBlock">
                </div>
            </div>
            <div class="form-group row">
                <label for="tugas" class="col-4 col-form-label d-flex justify-content-end font-weight-bold">Nilai Tugas/Praktikum</label>
                <div class="col-8">
                    <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="text" class="form-control" required="required" aria-describedby="text1HelpBlock">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button type="submit" value="Simpan" name="proses" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>

    <?php
    $proses = $_GET['proses'];
    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $tugas = $_GET['tugas'];

    echo 'Proses : ' . $proses;
    echo '<br/>Nama : ' . $nama;
    echo '<br/>Mata Kuliah : ' . $matkul;
    echo '<br/>Nilai UTS : ' . $uts;
    echo '<br/>Nilai UAS : ' . $uas;
    echo '<br/>Nilai Tugas/Praktikum : ' . $tugas;
    ?>
</body>
</html>
