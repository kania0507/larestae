@extends('layouts.app')

@section('content')

         <div class="row clearfix">
        @if($errors->any())
          <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
              </ul>
          </div>
        </div>

        @endif
        <form action="/role" method="POST">
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name...">
          </div> 
        
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      
@endsection