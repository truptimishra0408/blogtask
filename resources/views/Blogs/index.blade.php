@extends('layouts.app')
@section('main')
    <nav class="navbar navbar-expand-sm bg-danger">

        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-light"  href="/">BLOG</a>
          </li>
           </ul>
      
      </nav>
    <div class="container">
        <div class="text-right">
        <a href="blogs/create" class="btn btn-dark mt-2">New Post</a> 
        </div>
        </div>
    <div class="container">
      
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Sr no</th>
            <th>Ttitle</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($blogs as $blog)
          <tr>
            <td>{{$loop->index+1}}</td>
            <td><a class="text-dark" href="http://127.0.0.1:8000/blogs/{{$blog->id}}/show">{{$blog->name}}</a></td>
            <td>
             <img src="http://127.0.0.1:8000/blogs/{{$blog->image}}" class="rounded-square" width="50" height="50" />          
            </td>
            <td>
            <a href="blogs/{{ $blog->id}}/edit" class="btn btn-dark btn-sm">Edit</a>
            <a href="blogs/{{ $blog->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
    </div>
    
@endsection