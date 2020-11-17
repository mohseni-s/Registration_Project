<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ثبت نام کاربران</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body dir="rtl">
	<?php
	require('db.php');
	// If form submitted, insert values into the database.
	if (isset($_REQUEST['username'])){
			// removes backslashes
		$username = stripslashes($_REQUEST['username']);
			//escapes special characters in a string
		$username = mysqli_real_escape_string($con,$username); 
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		$trn_date = date("Y-m-d H:i:s");
			$query = "INSERT into `customer` (username, password, email)
	VALUES ('$username', '".md5($password)."', '$email')";
			$result = mysqli_query($con,$query);
			if($result){
				echo "<div class='form'>
	<h3>ثبت نام شما با موفقیت انجام شد.</h3>
	<br/>برای ورود روی  <a href='login.php'>اینجا</a> کلیک کنید</div>";
	
			}
		}else{
		
	?>
	<div class="form">
	<h3>ثبت نام کاربران</h1>
	<form name="registration" action="" method="post">
	<b dir="rtl" align="right"style="font-family:b nazanin;font-size:18px;">جنسیت  :  </b>
	    <select wi dir="rtl" align="right" name="c_gender" >
	    <option dir="rtl" align="right" >جنسیت مورد نظرتان را انتخاب نمایید.</option>
	    <option dir="rtl" align="right"value="مرد" >مرد</option>
	    <option dir="rtl" align="right"value="زن" >زن</option>
	    </select>
		<tr >
	
	<td dir="rtl" align="right"colspan="3" >
	<select dir="rtl" align="right"name="state" onChange="iranwebsv(this.value);">
	<option value="0">لطفا استان را انتخاب نمایید</option>
	<option value="تهران">تهران</option>
	<option value="گیلان">گیلان</option>
	<option value="آذربایجان شرقی">آذربایجان شرقی</option>
	<option value="خوزستان">خوزستان</option>
	<option value="فارس">فارس</option>
	<option value="اصفهان">اصفهان</option>
	<option value="خراسان رضوی">خراسان رضوی</option>
	<option value="قزوین">قزوین</option>
	<option value="سمنان">سمنان</option>
	<option value="قم">قم</option>
	<option value="مرکزی">مرکزی</option>
	<option value="زنجان">زنجان</option>
	<option value="مازندران">مازندران</option>
	<option value="گلستان">گلستان</option>
	<option value="اردبیل">اردبیل</option>
	<option value="آذربایجان غربی">آذربایجان غربی</option>
	<option value="همدان">همدان</option>
	<option value="کردستان">کردستان</option>
	<option value="کرمانشاه">کرمانشاه</option>
	<option value="لرستان">لرستان</option>
	<option value="بوشهر">بوشهر</option>
	<option value="کرمان">کرمان</option>
	<option value="هرمزگان">هرمزگان</option>
	<option value="چهارمحال و بختیاری">چهارمحال و بختیاری</option>
	<option value="یزد">یزد</option>
	<option value="سیستان و بلوچستان">سیستان و بلوچستان</option>
	<option value="ایلام">ایلام</option>
	<option value="کهگلویه و بویراحمد">کهگلویه و بویراحمد</option>
	<option value="خراسان شمالی">خراسان شمالی</option>
	<option value="خراسان جنوبی">خراسان جنوبی</option>
	<option value="البرز">البرز</option>
	</select>
	</td>
	<td colspan="3" >
	<b dir="rtl" align="right"style="font-family:b nazanin;font-size:18px;">نام استان  :  </b>
	</td>
	</tr>
	<tr >
	
	<td dir="rtl" align="right"colspan="3" >
	<select dir="rtl" align="right" name="city" id="city">
	<option dir="rtl" align="right"value="0">لطفا نام شهر را انتخاب نمایید.</option>
	</select>
	</td>
	<td colspan="3" >
	<b dir="rtl" align="right"style="font-family:b nazanin;font-size:18px;">نام شهر  :  </b>
	</td>
	<tr >
	
	<td colspan="3" >
	<input dir="rtl" align="right" type="text"    size="35" name="c_address" placeholder="آدرس خود را وارد نمایید." />
	</td>
	<td colspan="3" >
	<b dir="rtl" align="right" style="font-family:b nazanin;font-size:18px;">آدرس  :  </b>
	</td>
	</tr>
	<td colspan="3" >
	<input dir="rtl" align="right"type="text"    size="35" name="c_phone" placeholder="تلفن خود را وارد نمایید ." />
	</td>
	<td colspan="3" >
	<b dir="rtl" align="right" style="font-family:b nazanin;font-size:18px;">تلفن همراه  :  </b>
	</td>
	<b dir="rtl" align="right"style="font-family:b nazanin;font-size:18px;">نام کاربری  :  </b>
		<input type="text" name="username" placeholder="نام کاربری" required />
		<tr>
	<td colspan="3" >
	<input type="text" dir="rtl" align="right"   size="35" name="c_email" placeholder="ایمیل خود را وارد نمایید." />
	</td>
	<td colspan="3" >
	<b dir="rtl" align="right"style="font-family:b nazanin;font-size:18px;">ایمیل  :  </b>
	</td>
		</tr>
		<input type="email" name="email" placeholder="ایمیل" required />
		<b dir="rtl" align="right"style="font-family:b nazanin;font-size:18px;">کلمه عبور  :  </b>
		<input type="password" name="password" placeholder="رمز عبور" required />
		<input type="submit" name="submit" value="ثبت نام" />
	</form>
	</div>
	<?php } ?>
</body>
</html>