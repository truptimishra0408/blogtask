@extends('layouts.app')
@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                   <p><b> blog edit #{{$blog->id}}</b></p>
                <form method="post" action="/blogs/{{$blog->id}}/update" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Ttitle</label>
                    <input type="text" name="name" class="form-control" value="{{old('name',$blog->name)}}">
                    @if($errors->has('name'))
                    <span class="text-danger">{{$errors->first('name')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" rows="4" class="form-control">{{old('description',$blog->description)}}</textarea>
                    @if($errors->has('description'))
                    <span class="text-danger">{{$errors->first('description')}}</span>
                    @endif
                </div>
                
                <div class="form-group">
                    <label>Image </label>
                    <input type="file" name="image" class="form-control">
                    @if($errors->has('image'))
                    <span class="text-danger">{{$errors->first('image')}}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
                </form>
                 </div>

                 <div class="form-group">
                    <label>Comments</label>
                    <textarea name="comments" rows="4" class="form-control">{{old('comments',$blog->description)}}</textarea>
                    @if($errors->has('comments'))
                    <span class="text-danger">{{$errors->first('comments')}}</span>
                    @endif
                </div>

        </div>

    </div>
    @endsection
