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
            @foreach($posts as $post)
        <div class="card bg-transparent mb-3 h-100" data-postid="{{$post->id}}">
                <div class="card-body">
                <p class="card-text">{{$post->body}}</p>
                <small class="text-muted">By {{$post->user->first_name}} on {{$post->updated_at->diffForHumans()}} </small>
                </div>
                <div class="card-footer justify-content-center">
                    <a  href="#" class="btn btn-sm btn-outline-primary">Like</a>
                    <a  href="#" class="btn btn-sm btn-outline-primary">Dislike</a>
                    @if(Auth::user()->id == $post->user_id)
                    <a  href="#" class="btn btn-sm btn-outline-primary edit">Edit</a>
                    <a  href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="edit-modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Post</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                <div class="form-group">
                    <textarea name="edit-body" id="edit-body" class="form-control bg-white text-dark"  rows="3"></textarea>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" id="save-modal" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <script>
   var urlEdit  = "{{route('post.edit')}}" ;
   var token    =  "{{Session::token()}}" ; 
   </script>
@endsection