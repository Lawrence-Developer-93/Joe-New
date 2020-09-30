@extends('layouts/account')


@section('title')
    Account - Dashboard
@endsection

@section('content')
  {{-- @foreach ($project as $user_project) --}}
      
        {{-- <div class="no-project">
          <h1>
            Create Projects
          </h1>
            <h3>Looks like you don't have any projects right now.</h3>
            <hr>
            <h6>This is where all of your projects are located.</h6>
            <div class="row">
              <div class="col-md-12">
                <div class="box">
                  <div class="row">
                    <div class="col-md-10">
                      <form action="/account/projects" method="POST">
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
                            <input type="text" name="title">
                          </div>
                        </div>
                        
                        <button type="submit">Save</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div> --}}
     
        <div class="has-project">
          <h1>Projects</h1>
          {{-- @foreach ($project as $loopedProject) --}}
          <h6>This is where all of your projects are located. - @ {{$project[0]->user->name}}</h6>
          {{-- @endforeach --}}
          
            <div class="row">
                <div class="col-md-12">
                  <div class="box">
                    <div class="row">
                      <div class="col-md-10">
                        All of our projects
                      </div>
                      <div class="col-md-2">
                        <a href="/account/projects/create">Add New Project</a>
                      </div>
                    </div>
                    {{-- @foreach ($project as $loopedProject) --}}
                    <div class="row">
                      <div class="col-md-10">
                        <table>
                          <thead>
                            <tr>
                              <th>id</th>
                              <th>title</th>
                              <th>Edit</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($project as $user_project)
                              <tr>
                                <td>{{$user_project->id}}</td>
                                <td><a href="/account/projects/{{$user_project->id}}">{{$user_project->title}}</a></td>
                                <td><a href="/account/projects/{{$user_project->id}}/edit" class="edit-btn">Edit</a></td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                    {{-- @endforeach --}}
                  </div>
                </div>
              </div>
          </div>
         
            
     
  {{-- @endforeach --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
  <script>
    
  </script>
@endsection

