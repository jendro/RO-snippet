@extends('layouts.main')

@section('content')

<div class="first-content content">
  <div class="container" style="min-height:600px;margin-top:30px">
    
      
      <div class="row">
        
        <div class="col-md-8" style="background:white;padding:20px">
          <h4 class="form-title">Edit Profil</h4>

          <form class="form-horizontal" action="/action_page.php">
            
            <div class="form-group">
              <label class="control-label col-sm-2" for="framework">Profil Image:</label>
              <div class="col-sm-9">
                <div class="snippet-image" style="margin-bottom:10px"> 
                    <img src="{{ asset('img/testimonials/05.jpg') }}" alt=""> 
                </div>
                <input type="file" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="username">Username:</label>
              <div class="col-sm-9"> 
                <input type="text" class="form-control" id="username" name="username">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email:</label>
              <div class="col-sm-9"> 
                <input type="text" class="form-control" id="email" name="email">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-2" for="bio">Bio:</label>
              <div class="col-sm-9"> 
                <textarea name="bio" id="bio" rows="5" class="form-control"></textarea>
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