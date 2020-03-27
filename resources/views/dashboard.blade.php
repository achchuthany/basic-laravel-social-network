@extends('layouts.master')
@section('title')
    Dashboard - Social Networks
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-md-9 mt-2">
        <form method="post" action="{{route('post.create')}}">
            <div class="form-group">
                <label for="post" class="h3">Create Post</label>
                <textarea name="body" placeholder="What's on your mind, {{Auth::user() ? Auth::user()->first_name:''}}!" id="post" class="form-control bg-white text-dark" name="post" rows="3"></textarea>
            </div>
            <input type="submit" class="btn btn-sm btn-primary btn-block" name="submit" value="Post">
            <input type="hidden" value="{{Session::token()}}" name="_token">

        </form>
    </div>
</div>
<div class="row mt-3 justify-content-center">
    <div class="col-md-9 ">
        <div class="card-columns">

            <div class="card bg-transparent mb-3 h-100">
                <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <small class="text-muted float-right"> Last updated 3 mins ago</small>
                </div>
                <div class="card-footer justify-content-center">
                    <a  href="#" class="btn btn-sm btn-outline-primary">Like</a>
                    <a  href="#" class="btn btn-sm btn-outline-primary">Dislike</a>
                    <a  href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                    <a  href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                </div>
            </div>

            <div class="card bg-transparent mb-3 h-100">
                <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <small class="text-muted float-right"> Last updated 3 mins ago</small>
                </div>
                <div class="card-footer justify-content-center">
                    <a  href="#" class="btn btn-sm btn-outline-primary">Like</a>
                    <a  href="#" class="btn btn-sm btn-outline-primary">Dislike</a>
                    <a  href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                    <a  href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                </div>
            </div>

            <div class="card bg-transparent mb-3 h-100">
                <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's contentSome quick example text to build on the card title and make up the bulk of the card's content.</p>
                <small class="text-muted float-right"> Last updated 3 mins ago</small>
                </div>
                <div class="card-footer justify-content-center">
                    <a  href="#" class="btn btn-sm btn-primary">Like</a>
                    <a  href="#" class="btn btn-sm btn-outline-primary">Dislike</a>
                    <a  href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                    <a  href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                </div>
            </div>

            <div class="card bg-transparent mb-3 h-100">
                <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <small class="text-muted float-right"> Last updated 3 mins ago</small>
                </div>
                <div class="card-footer justify-content-center">
                    <a  href="#" class="btn btn-sm btn-outline-primary">Like</a>
                    <a  href="#" class="btn btn-sm btn-primary">Dislike</a>
                    <a  href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                    <a  href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                </div>
            </div>

            <div class="card bg-transparent mb-3 h-100">
                <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <small class="text-muted float-right"> Last updated 3 mins ago</small>
                </div>
                <div class="card-footer justify-content-center">
                    <a  href="#" class="btn btn-sm btn-primary">Like</a>
                    <a  href="#" class="btn btn-sm btn-outline-primary">Dislike</a>
                    <a  href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                    <a  href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                </div>
            </div>


            <div class="card bg-transparent mb-3 h-100">
                <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's contentSome quick example text to build on the card title and make up the bulk of the card's content Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <small class="text-muted float-right"> Last updated 3 mins ago</small>
                </div>
                <div class="card-footer justify-content-center">
                    <a  href="#" class="btn btn-sm btn-outline-primary">Like</a>
                    <a  href="#" class="btn btn-sm btn-outline-primary">Dislike</a>
                    <a  href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                    <a  href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                </div>
            </div>


            <div class="card bg-transparent mb-3 h-100">
                <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content</p>
                <small class="text-muted float-right"> Last updated 3 mins ago</small>
                </div>
                <div class="card-footer justify-content-center">
                    <a  href="#" class="btn btn-sm btn-outline-primary">Like</a>
                    <a  href="#" class="btn btn-sm btn-outline-primary">Dislike</a>
                    <a  href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                    <a  href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection