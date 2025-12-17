<!DOCTYPE html>
<html lang='vi'>
	<head>
		<meta lang = "vi" charset ="UTF-8">
		<title> Lap trinh huong doi tuong </title>
	</head>
	<body>
		<h2>Chao mung ban den khoa hoc lap trinh</h2>
		<?php 
			class student
			{
				// Cac thuoc tinh
				private $name;
				private $age;
				private $gender;
				
				// Cau tu 
			
				public function__construct(){
					
				}
				public function__construct($name){
				$this->name = $name;
				}
				public function__construct($name, $age){
				$this->name = $name;
				$this->age = $age;
				}
				public function__construct($name, $age, $gender){
				$this->name = $name;
				$this->age = $age;
				$this->gender = $gender;
				}
				
				//  Cac phuong thuc
				public function setName($name){
				$this->name = $name;
				}
				
				public function getName (){
				return $this->name;
				}
				
				public function setAge ($age){
				$this->age = $age;
				}
				
				public function setgender (gender){
				$this->gender = $gender;
				}
				public function printStudent(){
					echo "Name: " . $this->name . " -- ";
					echo "Age: " . $this->age . " -- ";
					echo "Gender: " . $this->gender . "<br>";
				}
			}
			// ket thuc khai bao lop
			
			// Su dung lop
			$students1 = new Student("Nguyen Van Anh",20,"Nam" );	// Tao doi tuong
			$students2 = new Student("Nguyen Thi Hoa",20,"Nu" );
			$students3 = new Student("Bui Thi Anh",29,"Nu" );	
			$students4 = new Student("Do Thi Hoai",21,"Nu" );	
			$students5 = new Student("Dao Thi Hang",28,"Nu" );	
			 // In thông tin từng sinh viên
			$student1->printStudent();
			echo "<hr>";
			$student2->printStudent();
			echo "<hr>";
			$student3->printStudent();
			echo "<hr>";

			//  Gán các đối tượng vào mảng để dùng trong foreach
			$students = [$student1, $student2, $student3];
		?>

    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
        </tr>
        <?php
        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>" . $student->getName() . "</td>";
            echo "<td>" . $student->getAge() . "</td>";
            echo "<td>" . $student->getGender() . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
		
	</body>
</html>