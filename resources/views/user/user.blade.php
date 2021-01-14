@extends('layouts.app')

@section('content')

            <h1 class="h2">Users</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>

        <!-- start content -->
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
                 </td>
                  <td><a href="#" title="Add">+</a> <a href="#" title="Edit">*</a> <a href="#" title="Delete">-</a> </td>
                  </tr>
                @endforeach
                
                
                </tbody>
        </table>

      
        <!-- end content -->

          
@endsection