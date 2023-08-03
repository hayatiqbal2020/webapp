<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    @include('header')
    <div class="container">
        <form method="POST" action="/usertype/update/{{$usertype->id}}">
            @csrf   
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">User Type</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="user_type" name="user_type" value="{{$usertype->user_type}}" />
                </div>
            </div>
            
            <input type="submit" name="submit" id="btn-submit" value="Update" class="btn btn-primary" />
        </form>
    </div>
</body>

</html>