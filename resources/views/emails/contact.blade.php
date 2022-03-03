<!DOCTYPE html>
<html>
<head>
	<title>ຂໍ້ຄວາມລູກຄ້າ</title>
</head>
<body>
	<h2>ຂໍ້ຄວາມລູກຄ້າ</h2>
	
	<h3>
		ຊື່ລູກຄ້າ: {{ $request->name }} <br>
		ອີເມວລູກຄ້າ: {{ $request->email }}
	</h3>

	<br>
	
	<h3>ຂໍ້ຄວາມລູກຄ້າ:</h3>
	<p style="font-size: 17px">
		{{ $request->message }}
	</p>
</body>
</html>