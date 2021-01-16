
@extends('layouts.app')

@section('content')
<div class="clearfix">
  <h1>Products</h1> 
        @if(Session()->has('status'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">X</button>
            {{Session()->get('status')}}
          </div>
        @endif
        <a href="/product/create" class="btn btn-success btn-sm float-right"><i class="fas fa-plus"></i> Create new product</a>

        <table class="table table-striped">         
          <thead>          
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">IMG</th>
              <th scope="col">Description</th>
              <th scope="col">Price</th>
              <th scope="col">Category</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
              <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td> <img src="{{asset('images/product_images')}}/{{$product->image}}" alt="{{$product->name}}" width="120px" height="120px" class="img-thumbnail"></td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>
                <select>
                @foreach($categories as $category)
                <option value={{$category->id}} {{$product->category_id===$category->id ? 'selected':''}}>{{$category->name}}</option>
                @endforeach
                </select></td>
                <td>
                  <a href="/product/{{$product->id}}/edit" class="btn btn-warning">Edit</a>
                </td>
                <td>
                <form action="/product/{{$product->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="Delete" class="btn btn-danger">
                </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{$products->links()}}
      </div>
@endsection