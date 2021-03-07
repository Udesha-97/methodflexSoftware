<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="jumbotron text-center">
    <h2>Show Student Details</h2>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="form-group">
        <strong>First Name :</strong>
        {{$student->first_name}}
    </div>
    <div class="form-group">
        <strong>Last Name :</strong>
        {{$student->last_name}}
    </div>
    <div class="form-group">
        <strong>Address :</strong>
        {{$student->address}}
    </div>
    <div class="form-group">
        <strong>Phone No :</strong>
        {{$student->phone_no}}
    <div class="form-group">
        <strong>DOB :</strong>
        {{$student->dob}}
    </div>
</div>


