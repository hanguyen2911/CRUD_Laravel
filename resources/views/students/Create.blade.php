<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{route('students.store')}}" enctype="multipart/form-data" method="POST" role="form">
            @csrf
            <center><h2>Add a new car</h2></center>
            
            <div class="form-group">
                <lable for=""><h5>Student Name</h5></lable>
                <input type="text" name="studname" class="form-control" id="" placeholder="Input name"
                >
            </div>

            <!-- <div class="form-group">
                <lable for=""><h5>Image</h5></lable>
                <input type="file" name="image" class="form-control" id="" placeholder="Input field" />
            </div> -->
            <div class="form-group">
                <lable for=""><h5>Course</h5></lable>
                <input type="text" name="course" class="form-control" id="" placeholder="Input course"
                >
            </div>
            <div class="form-group">
                <lable for=""><h5>fee</h5></lable>
                <input type="text" name="fee" class="form-control" id="" placeholder="Input fee"
                >
            </div>
            
            <input type="submit" class="btn btn-primary"></input>
        </form>
    </div>
</body>

</html>