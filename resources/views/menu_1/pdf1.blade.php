<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Laporan Data</title>
		<body>
        
			<style type="text/css">
				.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
				.tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
				.tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
				.tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
				.tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
				.tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}

				.grid-container {
  	</style>

			<div>
			Luaran	2: Surat Tugas Reviewer
			</div>
			<br>
			Kepada Yth:
			<p>Bapak/Ibu/Sdr : {{$siswa->id_reviewer}}</p> 
			<p>Di</p>
			<p>Tempat</p>
			<p>Terlampir disampaikan daftar mahasiswa yang akan mengikuti</p> <p>Seminar Proposal Skripsi sebagai berikut:</p>
			<table class="tg">
			  <tr>
			    
			    <th class="tg-3wr7">No<br></th>
			    <th class="tg-3wr7">NIM<br></th>
			    <th class="tg-3wr7">Nama<br></th>
			    <th class="tg-3wr7">Prodi <br></th>
			    <th class="tg-3wr7">Konsentrasi<br></th>
			    <th class="tg-3wr7">Judul Skripsi<br></th>
			    <th class="tg-3wr7">Pembimbing<br></th>
			    <th class="tg-3wr7">Waktu<br></th>
			    <th class="tg-3wr7">Ruang<br></th>
			  
			  </tr>
			  <tr>	
			                                      @php ($no = 1)

			    <td class="tg-rv4w" width="5%">{{$no++}}</td>
			    <td class="tg-rv4w" width="10%">{{$siswa->nim}}</td>
			    <td class="tg-rv4w" width="20%">{{$siswa->nama_lengkap}}</td>
			    <td class="tg-rv4w" width="15%">{{$siswa->prodi}}</td>
			    <td class="tg-rv4w" width="20%">{{$siswa->konsentrasi}}</td>
			    <td class="tg-rv4w" width="20%">{{$siswa->rencana_skripsi}}</td>
			    <td class="tg-rv4w" width="50%">1. {{$siswa->dosen_1}}<p>2. {{$siswa->dosen_2}}</p></td>
			    <td class="tg-rv4w" width="10%">{{$siswa->tanggal}}</td>
			    <td class="tg-rv4w" width="10%">{{$siswa->ruang}}</td>
			 
			</table>
			<div>
			
	<p>Untuk maksud tersebut diatas, bersama ini kami menugaskan</p><p> Bapak/Ibu/Sdr sebagai Ketua Penguji / Penguji I / Penguji II pada Sidang</p><p> Skripsi tersebut.</p>

<p>Demikian surat tugas ini disampaikan untuk dilaksanakan dengan sebaik-baiknya</p>
<div class="information">

    <table width="100%">
    <tr>
                <td align="left" style="width: 40%;">

	<p>Mengetahui,</p>
	<p>2019</p>
	<p>Dekan,</p>
	<br>
	<br>
	<p>...........................</p>
        {{$siswa->id_dekan}}

  <p>NIDN : {{$siswa->nidn_dekan}}     </p>
        </td>


    <td align="right" style="width: 40%;">
	<p>Serang, ............................</p>
  <br>
	<p>Ka. Prodi Manajemen / Akuntansi</p>
	<br>
	<br>
    <p>...........................</p>
    {{$siswa->id_kaprodi}}
		<p>NIDN : {{$siswa->nidn_kaprodi}}    </p>
</td>
</tr>
</table>
</div>



		</body>
	</head>
</html>



