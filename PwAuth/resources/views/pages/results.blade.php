@extends('layouts/main')

@section('title')
    Design Storm - Inspiration for Developers
@endsection

@section('content')
  <div id="site-section">
    <div class="container">
      <div id="results">
        <div>
          <div class="search-container">
            <form action="/results" method="post">
              @csrf
              <input class="search" type="text" value="{{$keyword}}" placeholder="Search" name="query">
            </form>
          </div>
          <div class="boxes">
            <div class="row">
              @foreach ($filteredData as $image)
              <div class="col-md-3">
                <div class="box">
                  <div style="position: relative; background: url('{{$image->urls->small}}') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px;">
                    @php
                        $codedUrl = $image->urls->small;
                    @endphp
                   <a href="/projects/images/{{$image->id}}/add?image_url={{$codedUrl}}"><div class="add-btn "><i class="fa fa-check" aria-hidden="true"></i></div></a>
                  </div>
                  {{-- Display tags --}}
                  {{-- @foreach ($image->tags as $tag)
                    <h4>
                      {{$tag->title}}
                    </h4>
                  @endforeach --}}
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
