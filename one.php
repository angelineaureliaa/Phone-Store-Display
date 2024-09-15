<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style type = "text/css">
    th {
        border: 1 px solid darkblue;
        background-color: darkblue;
    }
    td {
        border: 1px solid black;
        padding-right: 10px;
    }
    td.blank {
        border: 1px solid grey;
        background-color: grey;
        padding-right: 15px;
    }
</style>
<body>
    <form method = "GET" action = "one.php">
        <label> First Day is: </label>
        <select name = "firstday">
            <option value = "1" <?php if(isset($_GET['firstday']) && $_GET['firstday'] == '1') echo 'selected'; ?>> Monday </option>
            <option value = "2" <?php if(isset($_GET['firstday']) && $_GET['firstday'] == '2') echo 'selected'; ?>> Tuesday </option>
            <option value = "3" <?php if(isset($_GET['firstday']) && $_GET['firstday'] == '3') echo 'selected'; ?>> Wednesday </option>
            <option value = "4" <?php if(isset($_GET['firstday']) && $_GET['firstday'] == '4') echo 'selected'; ?>> Thursday </option>
            <option value = "5" <?php if(isset($_GET['firstday']) && $_GET['firstday'] == '5') echo 'selected'; ?>> Friday </option>
            <option value = "6" <?php if(isset($_GET['firstday']) && $_GET['firstday'] == '6') echo 'selected'; ?>> Saturday </option>
            <option value = "7" <?php if(isset($_GET['firstday']) && $_GET['firstday'] == '7') echo 'selected'; ?>> Sunday </option>
        </select>
        <input type = "submit" name = "submit" value = "Show Calendar">
    </form>

    <table>
        <tr>
            <th> Mon </th>
            <th> Tue </th>
            <th> Wed </th>
            <th> Thu </th>
            <th> Fri </th>
            <th> Sat </th>
            <th> Sun </th>
        </tr>
    </table>
</body>
<?php
    if (isset($_GET['firstday'])) {
        $firstday = intval($_GET['firstday']);
        $lebih = $firstday - 1;

        echo '<table>';
        echo '<tr>';
        $tanggalAwal = 1;
        $totalHari = 30;
        
        if ($lebih > 0) {
            echo '<td class = "blank" colspan = "' . $lebih . '"></td>';
        }
        
        for ($i = $lebih; $i < 7; $i++) {
            if ($tanggalAwal <= $totalHari) {
                echo '<td>' . $tanggalAwal . '</td>';
                $tanggalAwal++;
            } else {
                echo '<td class = "blank"></td>';
            }
        }
        echo '</tr>';

        while ($tanggalAwal <= $totalHari) {
            echo '<tr>';
            for ($i = 0; $i < 7; $i++) {
                if ($tanggalAwal <= $totalHari) {
                    echo '<td>' . $tanggalAwal . '</td>';
                    $tanggalAwal++;
                } else {
                    echo '<td class = "blank"></td>';
                }
            }
            echo '</tr>';
        }
        echo '</table>';
    }
    ?>
</html>