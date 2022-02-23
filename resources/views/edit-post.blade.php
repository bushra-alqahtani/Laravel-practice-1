<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>edit post </title>
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
                edit post
            </div>




                <div class="card-body">



                    @if (Session::has('post_updated'))        
                    
                  <div class="alert alert-success">
                      {{Session::get('post_updated')}}  
                  </div>
              @endif


                    <form action="{{ route('update.post') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$post->id}}" name="id">
                        <div class="mb-3">
                          <label for="title" class="form-label">title</label>
                          <input type="title" class="form-control"  value="{{$post->title}}" id="title" name="title">
                        
                        </div>

                        <div class="mb-3">
                          <label for="body" class="form-label">body</label>
                          <textarea type="body" class="form-control" id="body" name="body">{{$post->body}}</textarea>
                        
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                </div>
     </div>
    </div>
</div>
</div>



</body>
</html>