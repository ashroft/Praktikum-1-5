<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.2.2/css/fixedHeader.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Daftar AccountBank</title>
</head>

<body>
    <div style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <table class="table table-striped table-dark" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No.Account</th>
                    <th>Pemilik</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "class_accountBank.php";
                $ahmad = new BankAccount("C001", 6000000, "Ahmad");
                $budi = new BankAccount("C002", 5350000, "Budi");
                $kurniawan = new BankAccount("C003", 2500000, "Kurniawan");
                $totalAccount = array(1 => $ahmad, $budi, $kurniawan);
                foreach ($totalAccount as $no => $value) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $value->account() . "</td>";
                    echo "<td>" . $value->customer . "</td>";
                    echo "<td>" . $value->saldo() . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <hr>
        <p>Ahmad nabung 1.000.000</br>
            Ahmad transfer 1.500.000 ke Kurniawan dan 500.000 ke Budi</br>
            Budi tarik uang 2.500.000</p>
        <hr>
        <table class="table table-striped table-dark" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No.Account</th>
                    <th>Pemilik</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $ahmad->deposit(1000000);
                $ahmad->transfer($budi, 1500000);
                $ahmad->transfer($kurniawan, 500000);
                $budi->withdraw(2500000);
                $totalAccount = array(1 => $ahmad, $budi, $kurniawan);
                foreach ($totalAccount as $no => $value) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $value->account() . "</td>";
                    echo "<td>" . $value->customer . "</td>";
                    echo "<td>" . $value->saldo() . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>