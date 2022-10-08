<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            border: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            padding: 30px;
            line-height: 20px;
        }

        .container {
            max-width: 100%;
        }

        .flex-contain {
            display: inline-flex;
        }

        .tabel-peserta {
            margin-left: 20px;
        }

        .tabel {
            margin-left: 100px;
        }

        table {
            text-align: left;
            border: 1px solid black;
            border-collapse: collapse;
        }

        th {
            border: 1px solid black;
            padding-left: 5px;
        }

        td {
            border: 1px solid black;
            padding-left: 5px;
            width: 40px;
        }

        header {
            font-size: 24px;
            font-weight: 600;
            margin-top: 20px;
            margin-bottom: 40px;
            padding-left: 20px;
        }

        footer {
            text-align: center;
            margin-top: 50px;
        }
    </style>

</head>

<body>
    <?php

    $listPeserta = [
        "Peserta 1", "Peserta 2",
        "Peserta 3", "Peserta 4",
        "Peserta 5", "Peserta 6",
        "Peserta 7", "Peserta 8",
        "Peserta 9", "Peserta 10"
    ]

    ?>

    <div class="container">
        <header>Praktikum 05 - PHP Objects</header>
        <div class="flex-contain">
            <div class="tabel-peserta">
                <p>Daftar Peserta:</p>
                <table>
                    <tr>
                        <th>No</th>
                        <th style="width: 200px;">Nama Peserta</th>
                    </tr>
                    <?php
                    $counter = 1;
                    for ($i=0; $i < count($listPeserta); $i++) {
                        $nomor = $i+1; 
                        echo "<tr>";
                            echo "<td>$counter</td>";
                            echo "<td>$listPeserta[$i]</td>";
                        echo "</tr>";
                        $counter++;
                    }
                    $counter = 1;
                    ?>
                </table>
            </div>
            <div class="tabel">
                <p>Kelompok 1:</p>
                <table>
                    <tr>
                        <th>No</th>
                        <th style="width: 200px;">Nama Peserta</th>
                    </tr>
                    <?php
                    
                    shuffle($listPeserta); 
                    
                    for ($i=0; $i < 3; $i++) {
                        $nomor = $i + 1;
                        echo "<tr>";
                            echo "<td>$counter</td>";
                            echo "<td>$listPeserta[$i]</td>";
                        echo "</tr>";
                        $counter ++;
                    }
                    $counter = 1;
                    ?>
                </table>
            </div>
            <div class="tabel">
                <p>Kelompok 2:</p>
                <table>
                    <tr>
                        <th>No</th>
                        <th style="width: 200px;">Nama Peserta</th>
                    </tr>
                    <?php
                    
                    for ($i=3; $i < 6; $i++) {
                        $nomor = $i + 1;
                        echo "<tr>";
                            echo "<td>$counter</td>";
                            echo "<td>$listPeserta[$i]</td>";
                        echo "</tr>";
                        $counter ++;
                    }
                    $counter = 1;
                    ?>
                </table>
            </div>
            <div class="tabel">
                <p>Kelompok 3:</p>
                <table>
                    <tr>
                        <th>No</th>
                        <th style="width: 200px;">Nama Peserta</th>
                    </tr>
                    <?php
                    
                    for ($i=6; $i < count($listPeserta); $i++) {
                        $nomor = $i + 1;
                        echo "<tr>";
                            echo "<td>$counter</td>";
                            echo "<td>$listPeserta[$i]</td>";
                        echo "</tr>";
                        $counter ++;
                    }
                    ?>
                </table>
            </div>
        </div>


        <footer>
            {212410102030} - {Muhamad Faisal Fachrul Ulum}
        </footer>
    </div>

</body>

</html>