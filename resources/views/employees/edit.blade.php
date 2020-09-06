<!DOCTYPE html>
<html>
<head>
	<title>Employee</title>
</head>
<body>
	<a href="/employees">Back</a><br/>
<h1>Edit Employee </h1>
@if (count($errors) > 0)
  <div class="alert alert-danger">
     <ul>
  	    @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
     </ul>
  </div>
@endif
<form action="/employees/update/{{$employees->id}}" method="post">
	@csrf
	nip : <br/><input type="text" name="nip" value="{{$employees->nip}}"><br/>
	name : <br/><input type="text" name="name" value="{{$employees->name}}" ><br/>
	division ID : <br/><input type="text" name="division_id" value="{{$employees->division_id}}"><br/>
	position ID : <br/><input type="text"name="position_id" value="{{$employees->position_id}}"><br/>
	company ID : <br/><input type="text"name="company_id" value="{{$employees->company_id}}"><br/>
	address : <br/><input type="text" name="address" value="{{$employees->address}}"><br/>
	Date of Birth : <br/><input type="date" name="date_of_birth" value="{{$employees->date_of_birth}}"><br/>
	Join Date : <br/><input type="date" name="join_date" value="{{$employees->date_of_birth}}"><br/>
	Status : <br/><input type="text"name="status" value="{{$employees->status}}"><br/>
	NPWP : <br/><input type="text"name="npwp" value="{{$employees->npwp}}"><br/>
	KTP : <br/><input type="text"name="ktp" value="{{$employees->ktp}}"><br/>
	Marital Status : <br/><select name="marital_status">
						<option value="{{$employees->marital_status}}">TK</option>
						<option value="{{$employees->marital_status}}">K0</option>
						<option value="{{$employees->marital_status}}">K1</option>
						<option value="{{$employees->marital_status}}">K2</option>
						<option value="{{$employees->marital_status}}">K3</option>
					</select><br/>
	Phone Number : <br/><input type="text"name="phone_number" value="{{$employees->phone_number}}"><br/>
	Profile Image : <br/><input type="text"name="profile_img" value="{{$employees->profile_img}}"><br/>
	<br/><button type="submit" value="submit">SUBMIT</button><br/>
</form>
</body>
</html>