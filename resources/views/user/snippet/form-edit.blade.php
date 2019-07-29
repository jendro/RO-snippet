  @extends('layouts.main')

  @section('content')

  <div class="first-content content">
    <div class="container" style="min-height:600px;margin-top:30px">
      
        
        <div class="row">
          
          <div class="col-md-8" style="background:white;padding:20px">
            <h4 class="form-title">
              <a href="{{ route('user.admin',['user'=>Auth::user()->id]) }}">List Snippet</a> <i class="fa fa-angle-right"></i> 
              <a href="{{ route('snippet.detail',['contributor'=>$snippet->contributor_id,'snippet'=>$snippet->id]) }}">Detail Snippet</a> <i class="fa fa-angle-right"></i> 
              Edit Snippet
            </h4>

            

            <form method="POST" class="form-horizontal" action="{{ route('snippet.update',['route'=>$snippet->slug]) }}">
              @method("PUT")
              @csrf
              <div class="form-group">
                <label class="control-label col-sm-2" for="framework_id">Framework:</label>
                <div class="col-sm-9">
                  <select required name="framework_id" id="framework_id" class="form-control">
                    <option value="">- Silahkan Pilih Framework -</option>
                    @foreach($framework_r as $framework)
                      <option @if($snippet->framework_id==$framework->id) selected @endif value="{{ $framework->id }}">{{ $framework->framework }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="title">Title:</label>
                <div class="col-sm-9"> 
                  <input autocomplete="off" required type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $snippet->title }}">
                  @error('title')
                    <div class="alert alert-danger mgt5">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-sm-2" for="description">Description:</label>
                <div class="col-sm-9"> 
                  <textarea required name="description" id="description" rows="5" class="form-control">{{ $snippet->description }}</textarea>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-sm-2" for="code">Code:</label>
                <div class="col-sm-9"> 
                  <textarea required name="code" id="code" rows="20" class="form-control">{{ $snippet->code }}</textarea>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="code">Tag :</label>
                <div class="col-sm-9"> 
                  <input type="text" name="tag" id="tag" data-role="tagsinput" value="{{ $snippet->implodeTag() }}">
                </div>
              </div>

              <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-9">
                  <button type="submit" class="btn btn-primary pull-right">Update</button>
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