<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Document</title>
</head>
<body>
<style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 16px;
            text-align: left;
        }

        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #333;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .tr {
            background-color: #4CAF50;
            color: white;
        }

        .btn-back {
            display: inline-block;
            padding: 10px 20px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn-back:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<button onclick="goBack()" class="btn-back">Back</button>
<script>
    function goBack() {
        window.history.back();
    }
</script>

<a class="btn btn-danger" href="<?php echo base_url('/rps/iprint') ?>/<?php echo $view->kode_matkul; ?>"> <i class="fa fa-print"></i> Print</a>

<table class="table">
    <tr class="tr">
          <th style="width: 4% ;">KODE</th>
          <th style="width: 4%;" >MATA KULIAH</th>
          <th style="width: 4%;" >SEMESTER</th>
          <th style="width: 4%;" >PRODI</th>
          <th style="width: 6% ;" >DESKRIPSI</th>
          <th style="width: 6% ;" >pertemuan 1</th>
          <th style="width: 6% ;" >pertemuan 2</th>
          <th style="width: 6% ;" >pertemuan 3</th>
          <th style="width: 6% ;" >pertemuan 4</th>
          <th style="width: 6% ;" >pertemuan 5</th>
          <th style="width: 6% ;" >pertemuan  6</th>
          <th style="width: 6% ;" >pertemuan 7</th>
          <th style="width: 6% ;" >pertemuan 8</th>
          <th style="width: 6% ;" >pertemuan 9</th>
          <th style="width: 6% ;" >pertemuan 10</th>
          <th style="width: 6% ;" >pertemuan 11</th>
          <th style="width: 6% ;" >pertemuan 12</th>
          <th style="width: 6% ;" >pertemuan 13</th>
          <th style="width: 6% ;" >pertemuan 14</th>
    </tr>

    <tr>
        <td><?php echo $view->kode_matkul ?></td>
        <td><?php echo $view->matkul ?></td>
        <td><?php echo $view->semester ?></td>
        <td><?php echo $view->prodi ?></td>
        <td><?php echo $view->deskripsi ?></td>
        <td><?php echo $view->materi_per1 ?></td>
        <td><?php echo $view->materi_per2 ?></td>
        <td><?php echo $view->materi_per3 ?></td>
        <td><?php echo $view->materi_per4 ?></td>
        <td><?php echo $view->materi_per5 ?></td>
        <td><?php echo $view->materi_per6 ?></td>
        <td><?php echo $view->materi_per7 ?></td>
        <td><?php echo $view->materi_per8 ?></td>
        <td><?php echo $view->materi_per9 ?></td>
        <td><?php echo $view->materi_per10 ?></td>
        <td><?php echo $view->materi_per11 ?></td>
        <td><?php echo $view->materi_per12 ?></td>
        <td><?php echo $view->materi_per13 ?></td>
        <td><?php echo $view->materi_per14 ?></td>
    </tr>
</table>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>