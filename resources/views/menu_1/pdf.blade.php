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
			</style>

			<div style="font-family:Arial; font-size:12px;">
				<center><h2>Laporan Data Mahasiswa</h2></center>	
			</div>
			<br>
			<p>Kepada Yth:</p>
			<p>Bapak/Ibu/Sdr:{{$siswa->reviewer}}</p>
			<p>Di</p>
			<p>Tempat</p>
			<table class="tg">
			  <tr>
			    
			    <th class="tg-3wr7">No<br></th>
			    <th class="tg-3wr7">NIM<br></th>
			    <th class="tg-3wr7">Nama Mahasiswa<br></th>
			    <th class="tg-3wr7">Prodi<br></th>
			    <th class="tg-3wr7">Konsentrasi<br></th>
			    <th class="tg-3wr7">Judul Proposal<br></th>
			    <th class="tg-3wr7">Pembimbing<br></th>
			    <th class="tg-3wr7">Waktu<br></th>
			    <th class="tg-3wr7">Ruang<br></th>
			  
			  </tr>
			  <tr>	
			                                      @php ($no = 1)

			    <td class="tg-rv4w" width="5%">{{$no++}}</td>
			    <td class="tg-rv4w" width="15%">{{$siswa->nim}}</td>
			    <td class="tg-rv4w" width="20%">{{$siswa->nama_lengkap}}</td>
			    <td class="tg-rv4w" width="20%">{{$siswa->prodi}}</td>
			    <td class="tg-rv4w" width="10%">{{$siswa->konsentrasi}}</td>
			    <td class="tg-rv4w" width="10%">{{$siswa->rencana_skripsi}}</td>
			    <td class="tg-rv4w" width="10%">{{$siswa->dosen_1}}<p>	    {{$siswa->dosen_2}}
</p></td>
			    <td class="tg-rv4w" width="10%">{{$siswa->tanggal}}</td>
			    <td class="tg-rv4w" width="10%">{{$siswa->ruang}}</td>
					 
			</table>
		</body>
	</head>
</html>



