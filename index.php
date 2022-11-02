<?php 

    if(isset($_POST['submit'])) {
        // array_push($datas, array($_POST)); 
        // $datas[] = $_POST;
        $noIndukKaryawan = $_POST['noIndukKaryawan'];
        $namaKaryawan = $_POST['namaKaryawan'];
        $jabatan = $_POST['jabatan'];
        $jamKerja = $_POST['jamKerja'];
        $gajiPokok = $_POST['gajiPokok'];
        $bonus = $_POST['bonus'];
        $gajiBersih = $_POST['gajiBersih'];

        if($jamKerja > 7) {
            $bonus = $gajiPokok / 10;
        } else {
            $bonus = 0;
        }

        $gajiTerima = $gajiPokok * $jamKerja;
        $gajiBersih = $gajiTerima + $bonus;
    }
    
?>
<!-- an']?></td>
                    <td><?= $data['jabatan']?></td>
                    <td><?= $data['gajiPokok']?></td>
                    <td><?= $data['jamKerja']?></td>
                    <td><?= $data['gajiTerima']?></td>
                    <td><?= $data['bonus']?></td>
                    <td><?= $data['gajiBersih']?></td> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS - Pemrogramamn Web 2</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

<body>


    <div class=" mt-5" style="margin: 100px;padding: 60px;background-color: #ffffff; border-radius: 18px;">
        <div class="d-flex flex-column text-center">
            <!-- <?php print_r($datas);?> -->
            <div class="mb-3">
                <h2 class="fw-bold" style="color: #333333">PT. ZHIDO MAXMOER</h2>
                <p>Jl. Nakkula Sadewa 13 - Klaten</p>
                <hr style="border: 2px dashed #68717D; letter-spacing: 6px;">
            </div>
            <h5 class="text-start fw-bold" style="color: #333333">DATA ENTRY KARYAWAN</h5>
        </div>


        <!-- FORM INPUTAN -->
        <form action="" method="post">
            <div class="row mt-3">
                <div class="col mb-3">
                    <label for="exampleInputEmail1" class="form-label">No.Induk Karyawan</label>
                    <input type="text" class="form-control" name="noIndukKaryawan" required>
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="col mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Karyawan</label>
                    <input type="text" class="form-control" name="namaKaryawan" required>
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
            </div>

            <div class="row">
                <div class="col mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                    <select class="form-select" name="jabatan">
                        <option selected>Pilih Jabatan</option>
                        <option value="Manager">Manager</option>
                        <option value="CEO">CEO</option>
                        <option value="Direktur">Direktur</option>
                        <option value="Staff">Staff</option>
                    </select>
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="col mb-3">

                    <label for="exampleInputEmail1" class="form-label">Gaji Pokok</label>
                    <input type="text" class="form-control" id="gajiPokok" name="gajiPokok" required>
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
            </div>

            <div class="row">
                <div class="col mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jam Kerja</label>
                    <select class="form-select" name="jamKerja" id="jamKerja">
                        <option selected disabled>Pilih Jam Kerja</option>
                        <option value="1">1 jam</option>
                        <option value="2">2 jam</option>
                        <option value="3">3 jam</option>
                        <option value="4">4 jam</option>
                        <option value="5">5 jam</option>
                        <option value="6">6 jam</option>
                        <option value="7">7 jam</option>
                        <option value="8">8 jam</option>
                        <option value="9">9 jam</option>
                        <option value="10">10 jam</option>
                    </select>
                </div>
                <div class="col mb-3">
                    <label for="exampleInputEmail1" class="form-label">Bonus</label>
                    <input type="text" class="form-control" id="bonus" name="bonus" disabled>
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gaji Terima</label>
                <input type="text" class="form-control gajiTerima" name="gajiTerima" disabled>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <input type="hidden" class="form-control gajiBersih" name="gajiBersih" disabled>

            <div class="d-grid gap-2">
                <button type="submit" name="submit" class="btn btn-lg btn-block btn-success fw-bold">Kirim</button>
            </div>
        </form>

    </div>


    <!-- Tampilan Tabel -->
    <div class=" mt-5" style="margin: 100px;padding: 60px;background-color: #ffffff; border-radius: 18px;">
        <div class="d-flex flex-column text-center">
            <div class="mb-3">
                <h2 class="fw-bold" style="color: #333333">PT. ZHIDO MAXMOER</h2>
                <p>Jl. Nakkula Sadewa 13 - Klaten</p>
                <hr style="border: 2px dashed #68717D; letter-spacing: 6px;">
            </div>
        </div>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama Karyawan</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Gaji Pokok</th>
                    <th scope="col">Jam Kerja</th>
                    <th scope="col">Gaji Terima</th>
                    <th scope="col">Upah Bonus</th>
                    <th scope="col">Gaji Bersih</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($_POST['submit'])) {?>
                <tr>
                    <td><?= $noIndukKaryawan;?></td>
                    <td><?= $namaKaryawan;?></td>
                    <td><?= $jabatan;?></td>
                    <td><?= $gajiPokok;?></td>
                    <td><?= $jamKerja;?></td>
                    <td><?= $gajiTerima;?></td>
                    <td><?= $bonus;?></td>
                    <td><?= $gajiBersih;?></td>
                </tr>
                <?php } else { ?>
                <tr>
                    <td colspan="10" class="text-center py-4">Data masih kosong</td>
                </tr>

                <?php }?>
            </tbody>
        </table>

    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

    $('#jamKerja').on('change', function() {
        var gajiPokok = $("#gajiPokok").val();
        var jamKerja = $("#jamKerja").val();

        if (jamKerja > 7) {
            var bonus = 0.1 * gajiPokok;
            $("#bonus").val(bonus);
        } else {
            $("#bonus").val(0);
        }

        var total = gajiPokok * jamKerja;
        $(".gajiTerima").val(total);
    });


});
</script>

</html>