<?php
session_start(); 
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Access database to SQLite converter</title>
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1990 12:00:00 GMT" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="copyright" content="&copy; 2000-2020 D. Babic." />
    <!-- Bootstrap 4.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
         integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
         crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
         integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
         crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/style.css" />
</head>
<body>

</header>
    <main>
      
      
        <h1>Access database to SQLite converter</h1>
  <?php
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      printf('<b>%s</b></a>', $_SESSION['message']);
      unset($_SESSION['message']);
         
    }
  ?>
      <div id="page-content" class="container-fluid">   
		<form action="upload.php" method="post"
			enctype="multipart/form-data">

			<div class="form-group row">
				<div class="col-lg-4">
					<label for="file">Database File:</label>
				</div>
				<div class="col-lg-8">
					<input type="file" class="form-control" id="file" name="uploadedFile" accept=".db,.mdb,.accdb"/>
					<small id="fileHelp" class="form-text text-muted">Select MS Access database file to upload (db,mdb,accdb) (50MB max).</small>  
					
				</div>
			</div>
			<div class="form-group row">
				<div class="col-lg-12 pull-right">
					<button type="submit" name="uploadBtn" value="Upload" class="btn btn-primary">Upload and Convert</button>
					<button type="reset" class="btn btn-secondary">Reset</button>
				</div>
			</div>
		</form>
	</div>
  </main>
  <footer id="footer">
    <div class="container-fluid">
        <hr/>
<p><strong>About</strong></p>

<p>This is an online Microsoft Access database conversion tool to convert old and new Access database formats to Sqlite database for now. It is built with <a href="http://jackcess.sourceforge.net">Jackess</a>, a Java library for reading and writing MS Access databases. It supports Access 97 and all versions 2000-2013. Depending on file size, the conversion might take a few minutes! Please wait to see: <b>File is successfully converted! Click on here to download the file.</b></p>
            <span property="dc:creator">Drazen D. Babic</span>
          </p>
          <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" alt="Creative Commons License" style="border-width:0" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>.
        </div>
    </div>
</footer>
</body>
</html>
