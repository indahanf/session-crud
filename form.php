<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="background-color: lightblue; width: 1000px; padding: 1px;">
			<h1 style="text-align: center;">Pendaftaran</h1>
			<form name="isi" method="POST" action="lempar.php">
				<table border="0" width="250">
					<tr>
						<td>NIM</td>
						<td>:</td>
						<td width="900"><input type="text" name="nim_input" class="text-field" id="nim_id" placeholder="NIM"></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td width="900"><input type="text" name="nama_input" class="text-field" id="nama_id" placeholder="Input Nama"></td>
					</tr>

					<tr>
						<td>TTL</td>
						<td>:</td>
						<td width="800"><input type="text" name="ttl_input" class="text-field" id="ttl_id" placeholder="mm/dd/yyyy"></td>
					</tr>

					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>
							<input type="radio" name="jk_input" class="radiB" id="radioB" value="Laki-Laki">Laki-laki</input>
							<input type="radio" name="jk_input" class="radiB" id="radioB" value="Perempuan"><a href="lempar.php?nim=1234"> Perempuan</input>
						</td>
					</tr>

					<tr>
						<td>Kelas</td>
						<td>:</td>
						<td>
							<select name="kelas_input" class="dropdown" id="kelas_id">
								<option value="IF 40 01">IF 40 01</option>
								<option value="IF 40 02">IF 40 02</option>
								<option value="IF 40 03">IF 40 03</option>
								<option value="D3KA 38 04">D3KA 38 04</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>
							<textarea rows="5" cols="40%"></textarea>
						</td>
					</tr>					

					<tr>
						<td>Telepon</td>
						<td>:</td>
						<td width="900"><input type="text" name="telepon_input" class="text-field" id="telepon_id" placeholder="Telepon"></td>
					</tr>	

					<tr>
						<td>Email</td>
						<td>:</td>
						<td width="900"><input type="text" name="email_input" class="text-field" id="email_id" placeholder="Email"></td>
					</tr>

					<tr>
						<td colspan="2"></td>
						<td>
							<input type="submit" name="btnsubmit" class="btnsubmit" id="id_submit" value="Submit"/>
							<button type="button" name="btncnc" class="btncnc" id="id_cnc">Cancel</button>
						</td>	
						
					</tr>	
				</table>
			</form>
		</div>
</body>
</html>