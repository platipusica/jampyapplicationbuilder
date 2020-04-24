<?php
session_start();
   function run_in_background($dest_path, $Priority = 1)
   {
       if($Priority)
	       $PID = shell_exec("nohup nice -n 0 java -jar AccessConverter.jar --access-file $dest_path --task convert-sqlite 2> /dev/null & echo $!");
       else
           $PID = shell_exec("nohup $Command 2> /dev/null & echo $!");
       return($PID);
   }
   function is_process_running($PID)
   {
       exec("ps $PID", $ProcessState);
       return(count($ProcessState) >= 2);
   }

$message = ''; 
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload')
{
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // sanitize file-name
    $newFileName = md5(time() . $fileName);
    $newFileNameExt = $newFileName . '.' . $fileExtension;
    $FileNameSqlite = $newFileName . '.sqlite3';

    // check if file has one of the following extensions
    $allowedfileExtensions = array('accdb', 'mdb', 'db');

    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved
      $uploadFileDir = './upload/';
      $dest_path = $uploadFileDir . $newFileNameExt;
      //$_SESSION['dest_path'] = $dest_path;
  
  if(move_uploaded_file($fileTmpPath, $dest_path)) 

	{
	$ps = run_in_background($dest_path);
	  while(is_process_running($ps))
	   {
		   echo("Running . ");

		   ob_flush(); flush();
		   sleep(1);
	   }

        $message ='File is successfully converted! Click on here to download the file.<a href="download.php?download_file='.$FileNameSqlite.'"</a><div class="alert alert-dark">Download File</div>';
              }
              else 
              {
                $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
              }
            }
            else
            {
      $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'There is some error in the file upload. Please check the following error.<br>';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }
}
$_SESSION['message'] = $message;
header("Location: index.php");
