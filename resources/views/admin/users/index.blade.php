@extends('layouts.admininterface')

@section('content')
   
    <main role="main" class="col-md-9 d-content ml-sm-auto col-lg-10 pt-3 px-4">
      
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
      </div>
      <a class="btn addBtn btn-sm btn-primary" href="{{route('users.create')}}">Add New User</a>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Username</th>
              <th>Email</th>
              <th>Role</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
             @foreach($users as $user)
                  <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}} </td>
                    <td>
                  @foreach($user->roles as $r)
                        {{$r->display_name}}
                    @endforeach
                    </td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="{{route('users.show', $user->id)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Role"></i> Details</a>
                       
                      </div>
                    </td>
                  </tr>
                  @endforeach
                  
          </tbody>
        </table>
                       <div class="text-center">
                                  {{$users->links()}}
                       </div> 
      </div>
    </main>
  </div>
</div>
@endsection