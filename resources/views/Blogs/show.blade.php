@extends('layouts.app')
@section('main')
<div class="container">
<div clss="row jsutify-content-center" >
    <div class="col-sm-8 mt-4">
        <div class="card p-4">
           <p>Title:{{$blog->name}}</p>
            <p>Content:{{$blog->description}}</p>
                <img src="http://127.0.0.1:8000/blogs/{{$blog->image}}" class="rounded" width="50%" height="50%" />
                <p>Comments:{{$blog->comments}}</p>
        </div>
    </div>
</div>

</div>

@endsection