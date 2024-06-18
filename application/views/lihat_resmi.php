<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<style>
  /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
  .row.content {height: 1500px}

  /* Set gray background color and 100% height */
  .sidenav {
    background-color: #f1f1f1;
    height: 100%;
  }

  /* Set black background color, white text and some padding */
  footer {
    background-color: #555;
    color: white;
    padding: 15px;
  }

  /* On small screens, set height to 'auto' for sidenav and grid */
  @media screen and (max-width: 767px) {
    .sidenav {
      height: auto;
      padding: 15px;
    }
    .row.content {height: auto;} 
  }

  th{
    text-align: center;
  }
  .btn-create{
    margin-bottom: 10px;
  }
  .no_doc_rps h6{
    font-size: 10px;
  }
  .kop td{
    border: 1px solid #bdc3c7;
  }

  button {
      padding: 10px;
      margin-left: 30px;
      margin-top: 10px;
      font-size: 16px;
    }
</style>
</head>
<body>
<button onclick="printPage()">
  <i class="fas fa-print"></i> Print
</button>
<script>
  
  function printPage() {
    window.print();
  }
</script>

  <div class="container">
    <div class="row content">
      
      <table class="table text-center">
        <tr >
          <td colspan="4" style="border-bottom: 1px #bdc3c7 solid;"><h1>RENCANA PEMBELAJARAN SEMESTER (RPS)</h1></td>
        </tr>
        <tr>
          <td colspan="4" style="padding: 1px;" class="no_doc_rps"><h6 style="margin:0; padding: 0;">FM-PJM-011/Rev.00/25 Jan 2022</h6></td>
        </tr>
        <tr>
          <td colspan="4" ><img src="<?php echo base_url() ?>assets/foto/logoamikom.png" width="300"></td>
        </tr>
        <tr>
          <td colspan="4" ><h3 style="margin:0; padding: 0;">MATA KULIAH : <?php echo $querymtl->matkul. "(" . $querymtl->kode_matkul . ")";?></h3></td>
        </tr>
        <tr>
          <td colspan="4" ><h3 style="margin:0; padding: 0;">Program Studi: <?php echo $querymtl->prodi; ?></h3></td>
        </tr>
        <tr>
          <td>NO</td>
          <td>Tgl Berlaku</td>
          <td>Tgl Disusun</td>
          <td>Revisi</td>
        </tr>
        <tr>
          <td><?php 
          $count=0;
          $count = $count + 1;
          echo $count?></td>
          <td>2 Juni 2024</td>
          <td>2 Agustus 2023</td>
          <td>4</td>
        </tr>
        <tr>
          <td colspan="4"></td>
        </tr>
        <tr>
          <td>Disetujui oleh
            <p>Dekan Ilmu Komputer</p>
          </td>
          <td>Diperiksa oleh
          <p>Kaprodi D3TI</p>
        </td>
          <td>Disusun oleh
          <p>Koordinator MK</p>
        </td>
          <td>Dikendalikan oleh
          <p>Sekprodi D3TI</p>
        </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="4"><h2 style="margin:0; padding: 0;">UNIVERSITAS AMIKOM YOGYAKARTA</h1></td>
        </tr>
        <tr>
          <td colspan="4"><h2 style="margin:0; padding: 0;">YOGYAKARTA</h1></td>
        </tr>
        <tr>
          <td colspan="4"><h2 style="margin:0; padding: 0;">2023</h1></td>
        </tr>

      </table>

<br>

<table class="table text-center kop">
  <tr>
    <td rowspan="2">
      <img src="<?php echo base_url() ?>assets/foto/logoamikom.png" width="100">
    </td>
    <td rowspan="2">
      <h5>RENCANA PEMBELAJARAN SEMESTER (RPS)</h5>
      <h5>PROGRAM STUDI : <?php echo $querymtl->prodi;?></h5>
    </td>
    <td>
      <p><?php echo $querymtl->prodi;?></p>
      <p>2 Agustus 2023</p>
      <p>Revisi 4</p>
    </td>
    
  </tr>
  <tr>
    <td><p>2</p></td>
    
  </tr>
  
</table>

    <div class="row" style="margin-top: 20px; margin-bottom: 20px; background-color: #9d9d9d;"><h5>1. Identitas </h5></div>
    <table class="table table-center kop">
        <tr>
          <td>Program Studi</td>
          <td> <?php echo $querymtl->prodi;?></td>
          <td style="color: red;">Semester</td>
          <td style="color: red;"> <?php echo $querymtl->semester;?></td>
        </tr>

        <tr>
          <td>Nama&kkode mata kuliah</td>
          <td style="color: red;"> <?php echo $querymtl->matkul . "|" . $querymtl->kode_matkul;?></td>
          <td>bobot sks</td>
          <td style="color: red;">4 sks (2 teori & 2 praktikum)</td>
        </tr>

        <tr>
          <td>detail prosentasi penilaian</td>
          <td style="color:red; ">
            <li>keaktifan  10%</li>
            <li>UTS 30%</li>
            <li>UAS 30%</li>
            <li>Tugas 30%</li>
          </td>
          <td>querymtl pengampu</td>
          <td style="color: red;">ir. Bagus Wiguno P.hd</td>
        </tr>
        <tr>
          <td>Klasifikasi nilai</td>
          <td>
            <li>>80% = A</li>
            <li>>60 & <80 = B</li>
            <li>>40 & <60 = C</li>
            <li>>20 & < 20 = D</li>
          </td>
        </tr>
    </table>

    <div class="row" style="margin-top: 20px; margin-bottom: 20px; background-color: #9d9d9d;"><h5>2. Gambaran Umum/Deskripsi </h5></div>
    <div class="card">
      <p> <?php echo $querymtl->deskripsi; ?><br></p>
    </div>

    <div class="row" style="margin-top: 20px; margin-bottom: 20px; background-color: #9d9d9d;"><h5>3. Capaian Belajar </h5></div>
    <div class="card">
      <p>Bagian ini memuat:<br>
        • Capaian pembelajaran (CP) mata kuliah yang merupakan capaian pembelajaran utama yang tuntas (terselesaikan) saat mahasiswa menyelesaikan proses 
        pembelajaran pada mata kuliah ini.<br>
        • CP mata kuliah ini harus secara logis membentuk CP program studi (hard skill maupun soft skill) yang dibebankan pada mata kuliah (dan ditulis di poin 2 di atas). <br>
        • Kemampuan akhir yang diharapkan saat mahasiswa mempelajari masing-masing core units of learning (bahan kajian atau topik pokok). Kemampuan akhir ini 
        mendukung/membantu mahasiswa (merupakan stepping stones) untuk mencapai CP mata kuliah di akhir proses pembelajaran pada mata kuliah ini</p>
    </div>

    <table class="table text-center kop" style="margin-top: 50px;">
      <tr>
        <td rowspan="2">
          <img src="<?php echo base_url() ?>assets/foto/logoamikom.png" width="100">
        </td>
        <td rowspan="2">
          <h5>RENCANA PEMBELAJARAN SEMESTER (RPS)</h5>
          <h5>PROGRAM STUDI : <?php echo $querymtl->prodi; ?></h5>
        </td>
        <td>
          <p><?php echo $querymtl->kode_matkul; ?></p>
          <p>2 Agustus 2023</p>
          <p>Revisi 4</p>
        </td>
       
      </tr>
      <tr>
        <td><p>3</p></td>
       
      </tr>
      
    </table>
    
    
    <div class="row" style="margin-top: 20px; margin-bottom: 20px; background-color: #9d9d9d;"><h5>4. MATERI DAN DESKRIPSI </h5></div>
    <div class="container-fluid">

      <table class="table kop">
        <tr style="background-color: rgb(116, 116, 234);">
          <td>PERTEMUAN</td>
          <td>MATERI DAN DESKRIPSI</td>
        </tr>
        <tr style="color: red;">
          <td>PERTEMUAN 1</td>
          <td><?php echo $querymtl->materi_per1; ?></td>
        </tr>
        <tr style="color: red;">
          <td>PERTEMUAN 2</td>
          <td><?php echo $querymtl->materi_per2; ?></td>
        </tr>
        <tr style="color: red;">
          <td>PERTEMUAN 3</td>
          <td><?php echo $querymtl->materi_per3; ?></td>
        </tr>
        <tr style="color: red;">
          <td>PERTEMUAN 4</td>
          <td><?php echo $querymtl->materi_per4; ?></td>
        </tr>
        <tr style="color: red;">
          <td>PERTEMUAN 5</td>
          <td><?php echo $querymtl->materi_per5; ?></td>
        </tr>
        <tr style="color: red;">
          <td>PERTEMUAN 6</td>
          <td><?php echo $querymtl->materi_per6; ?></td>
        </tr>
        <tr style="color: red;">
          <td>PERTEMUAN 7</td>
          <td><?php echo $querymtl->materi_per7; ?></td>
        </tr>
        <tr style="color: red;">
          <td>PERTEMUAN 8</td>
          <td><?php echo $querymtl->materi_per8; ?></td>
        </tr>
        <tr style="color: red;">
          <td>PERTEMUAN 9</td>
          <td><?php echo $querymtl->materi_per9; ?></td>
        </tr>
        <tr style="color: red;">
          <td>PERTEMUAN 10</td>
          <td><?php echo $querymtl->materi_per10; ?></td>
        </tr>
        <tr style="color: red;">
          <td>PERTEMUAN 11</td>
          <td><?php echo $querymtl->materi_per11; ?></td>
        </tr>
        <tr style="color: red;">
          <td>PERTEMUAN 12</td>
          <td><?php echo $querymtl->materi_per12; ?></td>
        </tr>
        <tr style="color: red;">
          <td>PERTEMUAN 13</td>
          <td><?php echo $querymtl->materi_per13; ?></td>
        </tr>
        <tr style="color: red;">
          <td>PERTEMUAN 14</td>
          <td><?php echo $querymtl->materi_per14; ?></td>
        </tr>
      </table>

    </div>
    <div class="card" style="height: 70px;"></div>
</body>
</html>