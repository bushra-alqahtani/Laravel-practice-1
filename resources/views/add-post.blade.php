<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>add post </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
 
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">
                add post
            </div>
               {{--  add new post  --}}
               
            <div class="card-body">
                    @if (Session::has('post_created'))        
                    
                        <div class="alert alert-success">
                            {{Session::get('post_created')}}  
                        </div>
                    @endif


                    <form action="{{ route('add.postsub') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="title"> title </label>
                          <input type="title" class="form-control" name="title">
                        
                        </div>

                        <div class="mb-3">
                          <label for="text" >description</label>
                          <textarea  name="body" class="form-control" rows="4"></textarea>
                        
                        </div>
                        <button type="submit" class="btn btn-primary">add new post</button>
                      </form>
                </div>
     </div>
    </div>
</div>
</div>



</body>
</html>