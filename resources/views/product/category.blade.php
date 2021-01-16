
@extends('layouts.app')

@section('content')
<div class="clearfix">
        @if(Session()->has('status'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">X</button>
            {{Session()->get('status')}}
          </div>
        @endif
        <a href="/product/category/create" class="btn btn-success btn-sm float-right"><i class="fas fa-plus"></i> Create new category</a>
        <table class="table table-striped">
          <thead>

            <tr>
              <th scope="col">ID</th>
              <th scope="col">Category</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
              <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td>
                  <a href="/product/category/{{$category->id}}/edit" class="btn btn-warning">Edit</a>
                </td>
                <td>
                <form action="/product/category/{{$category->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="Delete" class="btn btn-danger">
                </form>
                </td>
              </tr>
            @endforeach
            <tr><td colspan=4 class="text-center"></td></tr>
          </tbody>
        </table> 
        {{$categories->links()}}
        </div>
@endsection