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

			<div style="float: center;">
				<center>
					<b>

						LAPORAN PELAKSANAAN  SEMINAR PROPOSAL SKRIPSI
						PROGRAM STUDI : MANAJEMEN / AKUNTANSI 
						TAHUN AKADEMIK 2018-2019</b>		
					</center>
				</div>
				<br>
				<br>
				<br>
				<br>

				<table class="tg">
					<tr>

						<th class="tg-3wr7">No<br></th>
						<th class="tg-3wr7">NIM<br></th>
						<th class="tg-3wr7">Nama<br></th>
						<th class="tg-3wr7">Prodi <br></th>
						<th class="tg-3wr7">Konsentrasi<br></th>
						<th class="tg-3wr7">Judul Proposal<br></th>
						<th class="tg-3wr7">Dosen Pendamping<br></th>
						<th class="tg-3wr7">Tanggal<br></th>
						<th class="tg-3wr7">Jam<br></th>
						<th class="tg-3wr7">Ruang<br></th>

					</tr>
					<tr>	
						@foreach($siswa as $data)
						@php ($no = 1)

						<td class="tg-rv4w" width="10%">{{$loop->iteration}}</td>
						<td class="tg-rv4w" width="10%">{{$data->nim}}</td>
						<td class="tg-rv4w" width="20%">{{$data->nama_lengkap}}</td>
						<td class="tg-rv4w" width="15%">{{$data->prodi}}</td>
						<td class="tg-rv4w" width="20%">{{$data->konsentrasi}}</td>
						<td class="tg-rv4w" width="30%">{{$data->rencana_skripsi}}</td>
						<td class="tg-rv4w" width="30%">{{$dosen->nama_dosen}}</td>
						<td class="tg-rv4w" width="10%">{{$dosen->tanggal}}</td>
						<td class="tg-rv4w" width="10%">{{$dosen->jam}}</td>
						<td class="tg-rv4w" width="10%">{{$dosen->ruang}}</td>

					</tr>
					@endforeach
				</table>
				<div>


					<div class="information">

						<table width="100%" >
							<tr>
								<td align="left" style="width: 40%;">

									<p>Mengetahui,</p>
									<p>Wakil Rektor 1 Bidang Akademik</p>
									<p>Akutansi</p>
									<br>
									<br>
									<p>......................................</p>
									<p>Ir.Naufal Affandi. MM</p>
									<p>
									</p>
									<p>NIDN :     </p>
									</td>


									<td align="center" style="width: 40%;">
										<p style="padding-right: 120px;">Diperksa Oleh:</p>
										<p style="padding-right: 20px;">Dekan Fak. Ekonomi & Bisnis</p>
										<p>Ka. Prodi Manajemen / Akuntansi</p>
										<br>
										<br>
										<p>......................................</p>
										<p >Hj. Nugrahini Kusumawati,SE.M.Ak</p>
										<p style="padding-right: 194px;">NIDN:    </p>
									</td>

									<td align="right" style="width: 40%;">

										<p style="padding-right: 10px;">Serang,.........................</p>
										<br>
										<p style="padding-right: 20px;">Ka.Prodi Manajemen</p>
										
										<br>
										<br>
										<p>......................................</p>
										
											
										<p style="padding-right: 55px;">Ende,ST.MAB</p>
										<p style="padding-right: 105px;"> NIDN:</p>
										
									</td>	



								</tr>
							</table>
						</div>




					</body>
				</head>
				</html>



