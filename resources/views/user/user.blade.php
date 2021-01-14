@extends('layouts.app')

@section('content')
        
           
          <div class="table-responsive ">
          <h1>Users Dashboard</h1>
          <a href="/user/create" class="btn btn-success btn-sm float-right"><i class="fas fa-plus"></i> Create new user</a>
        <!-- start content  //(count(Auth::user()->isAdmin)>0 )   -->
        @if(Session()->has('status'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">X</button>
            {{Session()->get('status')}}
          </div>
        @endif

        <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Role</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                
                @foreach ($users as $user)
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->phone }}</td>
                  <td>{{ $user->address }}</td>
                  <td>@foreach ($user->roles as $role) 
                        {{ $role->name }}
                        @endforeach 
                        {{ $user->findRoleByUserId }}
                 </td>
                  <td><a href="/user/{{$user->id}}/edit" title="Edit user"><i class="fas fa-edit"></i></a>&nbsp;
                  <form action="/user/{{$user->id}}" method="post">
                    @csrf 
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger">
                  </form>
                    </td>
                </tr>
                @endforeach
                
                </tbody>
        </table>
        </div>
        <!-- end content -->

          
@endsection
