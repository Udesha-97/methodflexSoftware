@extends('layout.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Form</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('students.index') }}"> Back</a>
            <br>
            <br>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('students.store') }}" method="POST">
    @csrf
     <div class="row">
        
            <div class="col-xs-4 col-sm-4 col-md-4">
                <strong>First Name :</strong>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{ old('first_name') }}">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <strong>Last Name :</strong>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ old('last_name') }}">
            </div>
        {{-- </div> --}}
        {{-- <div class="form-row"> --}}
          
            <div class="col-xs-4 col-sm-4 col-md-4">
                <strong>Address :</strong>
                <input type="text" name="address" class="form-control" placeholder="Address" value="{{ old('address') }}">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <strong>Phone No :</strong>
                <input type="text" name="phone_no" class="form-control" placeholder="Phone No" value="{{ old('phone_no') }}">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <strong>Date Of Birth :</strong>
                <input type="text" name="dob" class="form-control" placeholder="Date Of Birth" value="{{ old('dob') }}">
            </div>
            
        {{-- </div> --}}
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
           <br>     
           <br>     
           <br>     
           <br>     
            <button type="submit" class="btn btn-success" >Submit</button>
            <input type="reset" value="Reset" class="btn btn-primary">
               
        </div>
        </div>
    </div>
   
</form>
@endsection