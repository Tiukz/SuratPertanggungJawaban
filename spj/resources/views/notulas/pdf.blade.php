<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Notula</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12pt;
            line-height: 1.5;
            /* margin: 4cm 3cm 3cm 4cm; */
        }
        .wrapper{
            padding:  0 1cm 0 2cm  ;
        }
        .kop {
            text-align: center;
            margin-bottom: 20px;
            padding-left: 1cm;
        }
        .kop img {
            width: 600px;
            height: auto;
        }
        .judul {
            text-align: center;
            font-size: 14pt;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .table{
            width: 100%; margin-bottom: 8px; font-family: Arial, sans-serif; font-size: 12pt; empty-cells: show;
        }
        
        .label {
            width: 120px; vertical-align: top;
        }
        .colon {
           width: 10px; vertical-align: top;
        }
        .value{
            text-align: justify;
        }

        .section-title {
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 6px;
        }
        .ttd-con {
        width: 100%;
        position: relative;
      }
      .ttd {
        position: absolute;
        right: 0;
      }
        
    </style>
</head>
<body>

    <div class="kop">
        <img src="{{ public_path('images/Picture1-spd.png') }}" alt="Logo">
    </div>

    <div class="judul">NOTULA 1</div>
    <div class="wrapper">
<table class="table">
    <tr class="info-row">
        <td class="label" >Rapat</td>
        <td class="colon">:</td>
        <td class="value">{{ $notula->rapat }}</td>
    </tr>
    <tr class="info-row">
        <td class="label">Tanggal</td>
        <td class="colon">:</td>
        <td class="value">{{ \Carbon\Carbon::parse($notula->tanggal)->translatedFormat('l, d F Y') }}</td>
    </tr>

    <tr class="info-row">
        <td class="label">Surat Undangan</td>
        <td class="colon">:</td>
        <td class="value">{{ $notula->surat_undangan }}</td>
    </tr>
    <tr class="info-row">
        <td class="label">Waktu</td>
        <td class="colon">:</td>
        <td class="value">{{ $notula->waktu_mulai }} - {{ $notula->waktu_selesai }}</td>
    </tr>
     
   <tr>
        <td class="label">Acara</td>
        <td class="colon">:</td>
        <td class="value">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quia architecto, 
            commodi neque optio hic dignissimos rem maxime voluptatem aliquam dicta, 
            delectus doloribus repellat aut? Eveniet amet velit repellendus quae?
        </td>
    </tr>
</table>

     <br>
    
     <table class="table">
         <p>Pimpinan Rapat</p>
    <tr class="info-row">
        <td class="label">Ketua</td>
        <td class="colon">:</td>
        <td class="value">{{ $notula->ketua }}</td>
    </tr>
    <tr class="info-row">
        <td class="label">Pencatat</td>
        <td class="colon">:</td>
        <td class="value">{{ $notula->pencatat }}</td>
    </tr>
    <tr>
        <td>
            <br>
        </td>
        
    </tr>  
    
    <tr>
        <td class="label">Peserta Rapat</td>
        <td class="colon">:</td>
        <td class="value">{{ $notula->peserta }}</td>
    </tr>
    </table>







    <div class="section-title">Pembahasan:</div>
    <ol>
        
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore itaque, reiciendis deserunt incidunt repellat fuga repellendus nisi quam cumque doloribus rem mollitia, consectetur sint ex quisquam assumenda facere ipsum nulla.</li>
         <li>sdffsafs</li>   
    </ol>

    <div class="section-title">Sesi Diskusi:</div>
    <ol>
        
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore itaque, reiciendis deserunt incidunt repellat fuga repellendus nisi quam cumque doloribus rem mollitia, consectetur sint ex quisquam assumenda facere ipsum nulla.</li>
         <li>sdffsafs</li>   
    </ol>

    <div class="section-title">Hasil Diskusi:</div>
    <ol>
        
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore itaque, reiciendis deserunt incidunt repellat fuga repellendus nisi quam cumque doloribus rem mollitia, consectetur sint ex quisquam assumenda facere ipsum nulla.</li>
         <li>sdffsafs</li>   
    </ol>




    <br><br>
   <div class="ttd-con">
      <table class="ttd">
        <tr>
          <td>Pimpinan Rapat</td>
        </tr>
        <tr>
          <td>Ketua Panitia Workshop Kewirausahaan</td>
        </tr>
        <tr>
          <td>
            <img src="" alt="" />
          </td>
        </tr>
        <tr>
            <td><br><br><br></td>
        </tr>
        <tr>
          <td>Nama Panjang SPd</td>
        </tr>
        <tr>
          <td>NIP 0248248029904</td>
        </tr>
      </table>
    </div>




</body>
</html>
