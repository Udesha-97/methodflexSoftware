
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="jumbotron text-center">
    <h1>Student Registration Details</h1>
    <p>2021</p>

</div>
<div class="container">

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{$message}}
    </div>
      
    @endif

    <table  class="table table-bordered">
        <thead>
           <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Phone no</th>
            <th>DOB</th>
            <th></th>
            </tr> 
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{$student->first_name}}</td>
                <td>{{$student->last_name}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->phone_no}}</td>
                <td>{{$student->dob}}</td>
                <td>
                    
                    <form method="post"  action="{{route('students.destroy',$student->id)}}">
                        <a href="{{route('students.show',$student->id)}}" class="btn btn-info">SHOW</a> 
                        <a href="{{route('students.edit',$student->id)}}" class="btn btn-warning">EDIT</a> 
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="DELETE">
                    </form>
                </td>
            </tr> 
            @endforeach
    
        </tbody>
    </table>

</div>


