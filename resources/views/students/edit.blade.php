

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="jumbotron text-center">
    <div class="pull-left">
        <h2>Edit Student Details</h2>
    </div>
</div>
<div class="row">
        <div class="col-lg-12 margin-tb">
           
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
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
   

    <form action="{{ route('students.update',$student->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="form-row">
           
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <strong>First Name:</strong>
                    <br>
                    <input type="text" name="first_name" value="{{ $student->first_name }}" class="form-control" placeholder="First Namee" required>
              </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <strong>Last Name:</strong>
                    <br>
                    <input type="text" name="last_name" value="{{ $student->last_name }}" class="form-control" placeholder="Last Name " required>
              </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                <strong>Address:</strong>
                    <br>
                    <input type="text" name="address" value="{{ $student->address }}" class="form-control" placeholder="Address" required>
               </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <strong>Phone No:</strong>
                    <br>
                    <input type="text" name="phone_no" value="{{ $student->phone_no }}" class="form-control" placeholder="Phone No" required>
               </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <strong>Dob:</strong>
                    <br>
                    <input type="text" name="dob" value="{{ $student->dob }}" class="form-control" placeholder="DOB" required>
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <br>
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </div>
   
    </form>
    