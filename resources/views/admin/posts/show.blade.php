@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col">
        <div class="row">
            <div class="card w-100">
                <div class="card-body">
                  <h3 class="card-title"><strong>{{$post->title}}</strong></h3>
                  <img src="{{ asset('storage/' . $post->image)}}" alt="">
                </div>
              </div>
        </div>
    </div>
</div>
@endsection