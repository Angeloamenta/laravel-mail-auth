@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nome Post</th>
                    <th scope="col">img</th>
                    <th scope="col">Created</th>
                    <th scope="col" colspan="3">Buttons</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                      <td>{{$post['title']}}</td>
                      <td>{{$post['image']}}</td>
                      <td>{{$post['created_at']}}</td>
                      <td><a href="" class="btn btn-primary">View</a></td>
                      <td><a href="" class="btn btn-primary">Edit</a></td>
                      <td><a href="" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection