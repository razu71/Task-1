<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Todo List</title>
</head>
<body>
    <div class="offset-lg-1 col-lg-10 mt-lg-5">
        <form action="{{route('todoStore')}}" method="POST">
            <div class="row">
                <div class="col-lg-12">
                    <input class="form-control" name="title" id="title" placeholder="Write a list">
                    <input class="form-control" name="description" id="description" placeholder="Write a description">
                    <input class="form-control" name="level" id="level" placeholder="Select a list">
                    <input class="form-control" name="date" id="date" placeholder="Select a date">
                </div>
                <div class="col-lg-2">
                    <button class="button">Add list</button>
                </div>
            </div>
        </form>
        <table class="table table-striped table-bordered table-hover dt-responsive dc-table">
            <thead class="thead">
                <tr>
                    <td>Todo Title</td>
                    <td>Description</td>
                    <td>Level</td>
                    <td>Date</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                   {{--  @foreach($todo as $list)
                        <td>{{$list->title}}</td>
                        <td>{{$list->description}}</td>
                        <td>{{$list->level}}</td>
                        <td>{{$list->date}}</td>
                        <td class="row ml-20">
                            <a class="btn btn-info btn-xs btn-flat" href=""><i class="icon fa fa-edit"></i></a>
                            <form action="#" method="POST">
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-xs btn-danger btn-flat"><i class="icon fa fa-trash"  onclick="return confirm('Are you sure to delete this ?');"></i></button>
                            </form>
                        </td>
                    @endforeach --}}
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
