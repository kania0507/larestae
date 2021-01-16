@extends('layouts.app')

@section('content')
<div class="clearfix">
      <h1>Users Role</h1>
          <a href="/role/create" class="btn btn-success btn-sm float-right"><i class="fas fa-plus"></i> Create new role</a>
          
        <!-- start content  //(count(Auth::user()->isAdmin)>0 )   -->
        @if(Session()->has('status'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">X</button>
            {{Session()->get('status')}}
          </div>
        @endif

        <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                 
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                
                @foreach ($roles as $role)
                <tr>
                  <td>{{ $role->id }}</td>
                  <td>{{ $role->name }}</td>
                 
                  <td><a href="/role/{{$role->id}}/edit" title="Edit role"><i class="fas fa-edit"></i></a>&nbsp;
                  <form action="/role/{{$role->id}}" method="post" id="my_form" class="deleteForm" >
                    @csrf 
                    @method('DELETE')
                    
                    <button type="submit"  class="btn btn-link" title="Delete role"><i class='fas fa-minus'></i></button>
                  </form>
                    </td>
                </tr>
                @endforeach
                
                </tbody>
        </table>
        
        <!-- end content -->
        </div>
          
@endsection
