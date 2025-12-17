<?php

	//upload.php

	//basename: trả về tên file từ đường dẫn

	$target_dir = "upload/"; //đường dẫn đến thư mục upload

	//Lấy thông tin từ form gửi lên

	$file_size = $_FILES["fileupload"]["size"];

	//echo $file size:

	//die();

	$filename = basename ($_FILES["fileupload"] ["name"]);

	//die(filesize($filename));

	$file_ext = strtolower(pathinfo ($filename, PATHINFO_EXTENSION)); // Lấy ra phần mở rộng

	//die($file_ext);

	$allow_file_type = ["jpg", "docx", "pdf", "txt", "xlsx", "pptx"]; //Ví dụ chỉ cho phép các loại này

	$file_path= $target_dir . $filename;

	//die(filesize($filename));

	if(in_array($file_ext, $allow_file_type)) {
		if (file_exists($file_path))
		{
		echo "File đã tồn tại <br>";
		}
		else if ($file_size > 5000000) {
		echo "Kich thước file quá lớn. Hệ thống chỉ cho phép max 5M <br>";
		}
	else
	{
		move_uploaded_file ($_FILES['fileupload'] ['tmp_name'], $file_path); //upload file to server
		echo "Upload file thành công <br>";
	}
	}
	else
	{
	echo "Upload file không thành công do không được phép <br>";
	}

	echo "<a href 'testupload.php'> quay lại </a>";
?>