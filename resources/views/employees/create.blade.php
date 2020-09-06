<!DOCTYPE html>
<html>
<head>
	<title>Employee</title>
</head>
<body>
	<a href="/employees">Back</a><br/>
<h1>Create Employee</h1>
@if (count($errors) > 0)
  <div class="alert alert-danger">
     <ul>
  	    @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
     </ul>
  </div>
@endif
<form action="/employees/store" method="post">
	@csrf
	nip : <br/><input type="text" name="nip" value="{{old('nip')}}"><br/>
	name : <br/><input type="text" name="name" value="{{old('name')}}" ><br/>
	division ID : <br/><input type="text" name="division_id" value="{{old('division_id')}}"><br/>
	position ID : <br/><input type="text"name="position_id" value="{{old('position_id')}}"><br/>
	company ID : <br/><input type="text"name="company_id" value="{{old('company_id')}}"><br/>
	address : <br/><input type="text" name="address" value="{{old('address')}}"><br/>
	Date of Birth : <br/><input type="date" name="date_of_birth" value="{{old('date_of_birth')}}"><br/>
	Join Date : <br/><input type="date" name="join_date" value="{{old('join_date')}}"><br/>
	Status : <br/><input type="text"name="status" value="{{old('status')}}"><br/>
	NPWP : <br/><input type="text"name="npwp" value="{{old('npwp')}}"><br/>
	KTP : <br/><input type="text"name="ktp" value="{{old('ktp')}}"><br/>
	Marital Status : <br/><select name="marital_status">
						<option value="tk">TK</option>
						<option value="k0">K0</option>
						<option value="k1">K1</option>
						<option value="k2">K2</option>
						<option value="k3">K3</option>
					</select><br/>
	Phone Number : <br/><input type="text"name="phone_number" value="{{old('phone_number')}}"><br/>
	Profile Image : <br/><input type="text"name="profile_img" value="{{old('profile_img')}}"><br/>
	<br/><button type="submit" value="submit">SUBMIT</button><br/>
</form>
</body>
</html>