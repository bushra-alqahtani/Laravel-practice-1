<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>  
  <div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
               post 
            </div>
                <div class="card-body">

                  @if (Session::has('post_removed'))        
                    
                  <div class="alert alert-success">
                      {{Session::get('post_removed')}}  
                  </div>
              @endif

                   </div>
                  
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">body</th>
            <th scope="col">view</th>
            <th scope="col">edit</th>
            <th scope="col">delete</th>
          </tr>
        </thead>
       
        <tbody>
          @foreach ($posts as $key=>$post)
          <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td> <a href="get-postid/{{$post->id}}" class="btn btn-success">view</a></td>
            <td> <a href="edit-post/{{$post->id}}" class="btn btn-info">edit</a></td>
            <td> <a href="remove-post/{{$post->id}}" class="btn btn-danger">delete</a></td>
            
            
          </tr>
         @endforeach
        </tbody>
      </table>
                </div></div>
</body>
</html>