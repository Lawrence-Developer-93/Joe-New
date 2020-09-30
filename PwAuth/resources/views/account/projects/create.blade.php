@extends('layouts/account')


@section('title')
    Account - Dashboard
@endsection

@section('content')
  <div>
      <div class="row">
          <div class="col-md-10">
            <h1>Projects</h1>
            <h6>This is where all of your projects are located.</h6>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="row">
              <div class="col-md-10">
                <label for="title">
                  Title
                </label>
              </div>
              <div class="col-md-2">
                <a href="/account/projects/create">Add New Project</a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-10">
                <form action="/account/projects" method="POST">
                    @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <input type="text" name="title" class="@error('title') is-invalid @enderror">
                        @error('title')
                          <div class="alert alert-danger">{{ $message }}</div>
                          <br>
                        @enderror
                    </div>
                  </div>
                  <button type="submit">Save</button>
                </form>
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

