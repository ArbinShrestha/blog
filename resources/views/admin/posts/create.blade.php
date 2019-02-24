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
                <div class="card-body">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
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
