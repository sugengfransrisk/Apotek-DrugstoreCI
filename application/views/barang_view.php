<?php
	error_reporting(0);
	$conn = @mysql_connect("localhost","root","");
	@mysql_select_db("ul2_rpl1", $conn);
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 <style>
		table
		{
			background-color: #ff0000;
			border: 1px solid #CCCCCC;
			border-radius: 20px;

		}

		td 
		{
			padding: 5px;
		}

		body
		{
			color: #3366ff;
			font-size: 15px; 
			font-weight: normal;
			font-family:  Segoe UI;
		}

		.td_judul
		{
			padding: 8px;
			font-weight: bold;
			border-bottom: 1px dotted #9e9e9e;
			text-align: center;
			background-color: #CCCCCC;

		}
		
		.td_utama 
		{
			padding: 15px;
			font-weight: bold;
			font-size: 30px; 
			color: #FFFFFF;
			padding-left: 20px;
		}

		.td_isi
		{
			background-color: #FFFFFF;
			border-bottom: 1px solid #CCCCCC;
		}

		.tombol
		{
			background-color: #669900;
			border: 1px solid #CCCCCC;
			padding: 5px;
			font-weight: bold;
			color: #FFFFFF;
			font-size: 15px; 
			border-radius: 5px;
			font-family:  Segoe UI;
		}

		.tombol:hover
		{
			background-color: #3e5b00;
		}

		.input
		{
			border: 1px solid #CCCCCC;
			padding: 5px;
			font-family:  Segoe UI;
		}
  </style>
 </head>
 <body>
  <table'>
	<tr>
		<td'>
			Penjualan<br>
		</td>
	</tr>
	<tr>
		<td>
			
		</td>
	</tr>
		</tr>
	<tr>
		<td>
			<strong> Data Penjualan</strong>
			<br><br>
			<table>
			<form method='post' action='barang_view.php'>
			<tr>
					<td width='50%'>
					<strong>Cari Data : </strong><input type="text" name="cari" class='input' value='<?php echo $_POST["cari"];?>'> <input type="submit" name='tombol_cari' value='Cari' class='tombol'>
				</td>
				<td width='100%' align='right'>
					<a href='barang_add.php'>Add Data</a>
				</td>
			</tr>
 <tr>
                    <td>No.</td>
                    <td class='td_judul' width='*'>Nama Barang</td>
                    <td class='td_judul' width='*'>Kode Barang</td>
                    <td class='td_judul' width='*'>Stok</td>
                    <td class='td_judul' width='*'>Harga </td>
                    <td class='td_judul' width='30%'>Action</td>
                </TR>
                
                <?php
                    if ($_POST["cari"]<>"")
                    {
                        $q_cari="where nama like '%".$_POST["cari"]."%'";
                    }
                    
                    $q_barang = @mysql_query("select * from barang ".$q_cari." order by id asc");
                    while ($d_barang = @mysql_fetch_array($q_barang))
                    {
                        $no++;
                ?>
                <TR>
                    <td class='td_isi' align='center'><?php echo $no;?>.</td>
                    <td class='td_isi'><?php echo $d_barang["nama_barang"];?></td>
                    <td class='td_isi'><?php echo $d_barang["kode_barang"];?></td>
                    <td class='td_isi'><?php echo $d_barang["stok"];?></td>
                    <td class='td_isi'><?php echo $d_barang["harga"];?></td>
                    <td class='td_isi' align='center'>
                        <a href='barang_edit.php?id=<?php echo $d_barang["id"]?>'>Edit</a> | <a href='barang_delete.php?id=<?php echo $d_barang["id"]?>'>Delete</a>
                    </td>
                </TR>               
                <?php
                    }
                ?>
        </td>
    </tr>
		</td>
	</tr>
  </table>
 </body>
</html>
