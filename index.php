<!DOCTYPE html>
<html>
<head>
	  <!DOCTYPE html>
  <html>
    <head>
     <link rel="stylesheet" type="text/css" href="style/bootstrap.css">
     
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
        
	<style type="text/css">
		#myDiv{
			left: 50%;
		    margin-left: -100px;
		    top: 30%;
		    margin-top: -20px;
		    position: absolute;
		    z-index: 19 !important;
		}
	</style>
	  
</head>
<body onload="loadingAjax('myDiv');">
<div id="myDiv">
        <img id="loading-image" src="loading.gif" style="display:none;"/>
    </div>

<div class="container">

				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah">Add New</button>
			</p>
				<div id="data-mahasiswa">
				</div>
		</div>
	</div>
	
</div>
</body>
</html>



	<div id="modal-tambah" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form role="form" id="form-tambah" method="post" action="input.php">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Menambahkan Mahasiswa</h4>
				</div>
					<div class="modal-body">
						
						<div class="form-group">
							<label>Nama</label>
							<input class="form-control" id="nama" name="nama">
							<p style="color:red" id="error_nama"></p>
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<div class="radio">
								<label>
									<input type="radio" name="jenis_kelamin" value="Laki-laki" checked>Laki-laki
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
								</label>
							</div>
							<p style="color:red" id="error_jenis_kelamin"></p>
						</div>
						<div class="form-group">
							<label>Telepon</label>
							<input class="form-control" id="telepon" name="telepon">
							<p style="color:red" id="error_telepon"></p>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea id="alamat" name="alamat" class="form-control" rows="3"></textarea>
							<p style="color:red" id="error_alamat"></p>
						</div>							
										
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary" >Simpan</button>
					</div>
				</form>		
			</div>
		</div>
	</div>
	
	
	<div id="modal-edit" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form role="form" id="form-edit" method="post" action="input.php">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Menambahkan Mahasiswa</h4>
				</div>
					<div class="modal-body">
						<div id="data-edit">
						
						</div>				
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary" >Simpan</button>
					</div>
				</form>		
			</div>
		</div>
	</div> 


    <!-- Masukan Kode Jquery disini-->
  <script type="text/javascript" src="style/jquery.js"></script>
	<script type="text/javascript" src="style/bootstrap.js"></script>	
	<script type="text/javascript" src="script.js"></script>	

<!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>