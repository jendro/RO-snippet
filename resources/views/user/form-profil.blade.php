@extends('layouts.main')

@section('content')

<div class="first-content content">
  <div class="container" style="min-height:600px;margin-top:30px">
    
      
      <div class="row">
        
        <div class="col-md-8" style="background:white;padding:20px">
          <h4 class="form-title">Edit Profil</h4>

          <form enctype="multipart/form-data" method="post" class="form-horizontal" action="{{ route('user.update',['user'=>$user->id]) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label class="control-label col-sm-2" for="avatar">Profil Image:</label>
              <div class="col-sm-9">
                <div class="snippet-image" style="margin-bottom:10px"> 
                    <img style="width:100px;height:100px" class="user-image" src="{{ $user->avatar }}" alt=""> 
                </div>
                <input type="file" class="form-control" name="avatar" id="avatar">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="nickname">Nickname:</label>
              <div class="col-sm-9"> 
                <input type="text" class="form-control" id="nickname" name="nickname" value="{{ $user->nickname }}">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-2" for="name">Name:</label>
              <div class="col-sm-9"> 
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email:</label>
              <div class="col-sm-9"> 
                <input readonly type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-2" for="bio">Bio:</label>
              <div class="col-sm-9"> 
                <textarea name="bio" id="bio" rows="5" class="form-control">{{ $user->bio }}</textarea>
              </div>
            </div>

            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-9">
                <button type="submit" class="btn btn-primary pull-right">Update</button>
              </div>
            </div>

          </form>
        </div>
      
      </div>

    </div>

  </div>
</div>

@endsection