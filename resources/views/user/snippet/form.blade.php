@extends('layouts.main')

@section('content')

<div class="first-content content">
  <div class="container" style="min-height:600px;margin-top:30px">
    
      
      <div class="row">
        
        <div class="col-md-8" style="background:white;padding:20px">
          <h4 class="form-title">Tambah Snippet</h4>

          <form class="form-horizontal" action="/action_page.php">
            
            <div class="form-group">
              <label class="control-label col-sm-2" for="framework">Framework:</label>
              <div class="col-sm-9">
                <select name="framework" id="framework" class="form-control">
                  <option value="">- Silahkan Pilih Framework -</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="title">Title:</label>
              <div class="col-sm-9"> 
                <input type="text" class="form-control" id="title" name="title">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-2" for="description">Description:</label>
              <div class="col-sm-9"> 
                <textarea name="description" id="description" rows="5" class="form-control"></textarea>
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-2" for="code">Code:</label>
              <div class="col-sm-9"> 
                <textarea name="code" id="code" rows="5" class="form-control"></textarea>
              </div>
            </div>

            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-9">
                <button type="submit" class="btn btn-primary pull-right">Create</button>
              </div>
            </div>

          </form>
        </div>
      
      </div>

    </div>

  </div>
</div>

@endsection