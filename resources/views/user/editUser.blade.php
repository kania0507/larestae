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

        <form action="/user/{{$user->id}}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Name...">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{$user->email}}" class="form-control" placeholder="Email...">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password...">
          </div>
          <div class="form-group">
            <label for="Role">Role</label>
            <select name="role" class="form-control">
            @foreach ($roles as $role)
              <option value="{{ $role->id }}" {{$user->roles()->wherePivot( 'role_id', '=', $role->id)  ? 'selected':''}}>{{ $role->name}}</option>
              
              @endforeach

            </select>
          </div>
        
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
     
@endsection