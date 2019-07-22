@extends('layouts.main')

@section('content')

<div class="first-content content">
  <div class="container" style="min-height:600px;margin-top:30px">
    
      
      <div class="row">
        
        <div class="col-md-8" style="background:white;padding:20px">
          <h4 class="form-title">
            <a href="{{ route('user.admin',['user'=>Auth::user()->id]) }}">Snippet</a> <i class="fa fa-angle-right"></i> 
            Tambah Snippet
          </h4>

          <form method="POST" class="form-horizontal" action="{{ route('snippet.create') }}">
            @csrf
            <div class="form-group">
              <label class="control-label col-sm-2" for="framework_id">Framework:</label>
              <div class="col-sm-9">
                <select required name="framework_id" id="framework_id" class="form-control">
                  <option value="">- Silahkan Pilih Framework -</option>
                  @foreach($framework_r as $framework)
                    <option @if(old('framework_id')==$framework->id) selected @endif value="{{ $framework->id }}">{{ $framework->framework }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="title">Title:</label>
              <div class="col-sm-9"> 
                <input autocomplete="off" required type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-2" for="description">Description:</label>
              <div class="col-sm-9"> 
                <textarea required name="description" id="description" rows="5" class="form-control">{{ old('description') }}</textarea>
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-2" for="code">Code:</label>
              <div class="col-sm-9"> 
                <textarea required name="code" id="code" rows="20" class="form-control">{{ old('code') }}</textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="code">Tag :</label>
              <div class="col-sm-9"> 
                <input type="text" name="tag" id="tag" data-role="tagsinput" value="{{ old('tag') }}">
              </div>
            </div>

            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-9">
                <button type="submit" class="btn btn-primary pull-right">Create</button>
                <a class="btn btn-warning pull-right mgr10" href="{{ route('user.admin',['user'=>Auth::user()->id]) }}">Cancel</a>
              </div>
            </div>

          </form>
        </div>
      
      </div>

    </div>

  </div>
</div>

<script>
$(document).ready(function(){
  $(".bootstrap-tagsinput input").keypress(function(e){
    if(e.which==13){
      e.preventDefault();
    }
  });
});
</script>
@endsection