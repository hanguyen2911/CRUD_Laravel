<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    table,
    th,
    td {
        font-size: 20px;
        width: 2000px;
        margin-top: 20px;
    }

    th {
        background-color: #00BFFF;
        font-size: 25px;
        color: black;
    }

    .btn {
        font-size: 25px;
    }

    /* th {
		background-color: #9F81F7;
		font-size: 25px;
		color: black;
	} */
    /* td {
		background-color:#CECEF6;
		
		color: black;
	} */
    .containe {

        margin-left: 50px;
        margin-right: 50px;
    }

    .search {
        width: 400px;
        height: 47px;
    }

    .search-container {
        text-align: center;
    }
</style>

<body>
    <div class="containe">
        @if(Session::has('success'))
        <div class="alert alert-success">
            <p>{{ Session::get('success') }}</p>
        </div>
        @endif

        <div class="pull-left">
            <h2>Danh sách sinh viên</h2>
        </div>

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-success" onclick="window.location='{{ route('students.create') }}'">Add a new student</a>
                </div>
            </div>
        </div>



        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Fee</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>

            <tbody>
                @php
                $stt=0;
                @endphp
                @foreach($students as $student)

                <tr>
                    <td>{{ ++$stt }}</td>
                    <td>{{ $student->studname }}</td>
                    <td>{{ $student->course }}</td>
                    <td>{{ $student->fee }}</td>
                    <td>
                        <form action="{{ route('students.destroy', $student->id) }}" method="post">
                            <!-- <button type="button" class="btn btn-info"onclick="window.location='/students/{{ $student->id }}/show'">Show</button> -->
                            <button type="button" class="btn btn-primary" onclick="window.location='/students/{{ $student->id }}/edit'">Edit</button>
                            @csrf
                            @method('delete')
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <button name="delete" class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</body>

</html>