	<?php echo "hello world <br/>"; ?>
	<?php echo "Chào mừng các bạn đến với lập trình PHP với freetuts"; ?>
	<?php
		$sinhvien = '';
		$lop = "";
		$sinhvien = "Thế giới của tôi";
		echo "<br/>";
		echo $sinhvien;
		$array_sinhvien = array(
			'16vlh' => $sinhvien,
			'16vlth' => "Cả bầu trời"
		);
		echo "<br/>";
		print_r($array_sinhvien['16vlh']);
		$nam = array(
    		1990,
    		1991,
    		1992,
    		1993,
    		1994,
    		1995
		);
		echo "<br/>";
		foreach($nam as $key => $value){
	   	echo $value;
	   	echo " ";
		}
	?>
	
	<?php
	
		$id = $_GET['id'];
		echo $id;
		$title = $_GET['title'];
		echo $title
		
	?>
	<?php
	
	?>