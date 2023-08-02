<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </head>

    <body>
        <a href="/usertype/create" class="btn btn-primary" style="float: right;"> New Record </a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User type</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Updated at</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usertypes as $usertype)
                <tr>
                    <th scope="row">{{ $loop->iteration  }}</th>
                    <td>{{ $usertype->user_type}}</td>
                    <td>{{ $usertype->created_at}}</td>
                    <td>{{ $usertype->updated_at}}</td>
                    <td>
                        <a class="btn btn-success" href="/usertype/edit/{{$usertype->id}}">Edit</a>
                        <a class="btn btn-danger" href="/usertype/destroy/{{$usertype->id}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>