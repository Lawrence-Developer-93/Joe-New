@extends('layouts/account')


@section('title')
    Account - Dashboard
@endsection

@section('content')
  <div>
      <div class="row">
          <div class="col-md-10">
            <h1>Edit Projects</h1>
            <h6>Edit your work.</h6>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="row">
              <div class="col-md-10">
                <form action="/account/projects/{{$project->id}}" method="POST">
                    @method('PUT')
                    @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <label for="title">
                        Title
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <input type="text" name="title" value="{{$project->title}}">
                    </div>
                  </div>
                  <div class="img-section">
                      <div class="row">
                        @foreach ($project->images as $image)
                          <div class="col-md-3">
                            <div class="box">
                                <div style="position: relative; background: url('{{$image->image_url}}') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px;">
                                </div>
                                <a href="/projects/images/{{$image->image_info}}/delete" onclick="confirm('Are you sure about that?')" class="delete-btn">Delete</a>
                            </div>
                          </div>
                        @endforeach
                      </div>
                  </div>
                  <button type="submit">Save</button>
                </form>
              </div>
                <div class="col-md-2">
                    <center>
                        <a href="/account/projects/{{$project->id}}/delete" onclick="confirm()" class="delete-btn">Delete</a>
                    </center>
                </div>
            </div>
          </div>
        </div>
        
      </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
  <script>
    
  </script>
@endsection

