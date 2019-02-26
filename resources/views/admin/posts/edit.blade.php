@extends('layouts.app')


@section('content')

    @include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            Edit post {{$post->title}}
        </div>

        <div class="card-body">
            <form action="{{route('post.update',['id'=>$post->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{$post->title}}">
                </div>
                <div class="card-body">
                    <label for="featured">Featured image</label>
                    <div class="form-group">
                        <input type="file" name="featured" class="form-control-file border" >
                    </div>
                    <div class="form-group">
                        <label for="category">Select a Category</label>
                        <select name="category_id" id="category" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="card-body">
                        <label for="contents">Content</label>
                        <textarea name="contents" id="contents" cols="5" rows="5" class="form-control">{{$post->cotents}}</textarea>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">
                                Update post
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>






@stop
