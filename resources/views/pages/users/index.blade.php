@extends('layouts.app')

@section('content')

<div class="shadow">
  <div class="text-center p-3">
    <h3 class="text-center"><u>Users Lists</u></h3>
  </div>

  <div class="p-3">
    <a href="{{ route('users.create') }}" class="btn btn-success">New User</a>
    <table class="table table-bordered">
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
      @isset($users)
        @foreach($users as $key => $user)
          <tr>
            <td>{{$key+1}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-secondary">Edit</a>
                <a href="{{ route('users.delete', $user->id) }}"  class="btn bg-danger text-white delete-user">Delete</a>
              </td>
          </tr>
        @endforeach
      @endisset
    </table>
  </div>
  
</div>


@endsection

