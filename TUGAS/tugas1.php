<html>
<head>
	<title>Tugas Muhammad Khadafi</title>
</head>
<body>
	<?php
		$grade = 40;
		echo 'Nilai Grade = '.$grade. '<br>';
		/*
		Persyaratannya :
		A = 80 sd 100
		B = 70 sd 79
		C = 60 sd 69
		Tidak Lulus = < 60
		*/
		switch($grade){
				case $grade >= 80 && $grade <=100: echo 'Nilai Anda A';
					break;
				case $grade >= 70 && $grade <=79: echo 'Nilai Anda B';
					break;
				case $grade >= 60 && $grade <=69: echo 'Nilai Anda C';
					break;
				default: echo 'Anda Tidak Lulus';
		}
		
	?>
</body>
</html>
