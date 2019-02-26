@extends('layouts.app')


@section('content')

    @include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            Create a new post
        </div>

        <div class="card-body">
            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
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
                    <textarea name="contents" id="contents" cols="10" rows="5" class="form-control"></textarea>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Store post
                        </button>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>






    @stop
