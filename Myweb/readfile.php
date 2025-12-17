<?php
	// Mở file
	// Đọc file
	// Đóng file
	// cờ kiểm tra đọc đến cuối file chứa feof
	// fgets đọc 1 dòng
	// fgetc đọc từng ký tự
	// fwrite để ghi văn bản vào file
	// Một số mode đọc ghi: r: read; w: ghi; a: append 
	
	// Đọc file
	// c1: đọc theo theo từng dòng
	$filename = "data.txt";
	$file = fopen($filename, 'r'); // r: chỉ có đọc không thôi 
	while (!feof($file)) {  
	echo fgets($file); // fgets: để đọc từng thông tin, dòng ra màn hình 
	echo '<br>';
	fclose($file);
	echo "Đọc file thành công";
	}

	// c2 
	// $fileName = "data.txt";
	// readfile($fileName);
	 
	// c3
	
	$filename = 'data.txt';
	$file = fopen($filename, 'r');
	echo fread($file, "10"); //đọc 10byte từ file
	echo filesize('data.txt'). "<br>";
	echo fread($file, filesize('data.txt')). "<br>"; // fread trả về string thông qua tham số filesize mở ra rồi mới đọc dc 
	
	echo file_get_contents($filename);  // đọc nội dung của file trả về 1 string, ko cần mở vẫn đọc đc liên quan đến rủi ro và bảo mật, phân quyền xem ai có quyền đc file này 
	
	// Ghi file
	/* $fileName = "data.txt";
	$file = fopen($filename, 'w');  
	$txt1 =  " Nội dung mới sẽ được ghi vào file";
	fwrite($file, $txt1);
	$txt2 = "Nội dung tiếp theo sẽ ghi vào file";
	fwrite($file, $txt2);
	fclose($file);
	echo "Ghi file thành công";
	*/
	
?>