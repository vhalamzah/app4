@extends('layouts.admininterface')

@section('content')
<main role="main" class=" d-content col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
      
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Roles</h1>
      </div>
      <a class="btn addBtn btn-sm btn-primary" href="{{route('roles.create')}}">Add New Role</a>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Role Display</th>
              <th>Role Description</th>
              <th>Role</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach($roles as $role)
              <tr>
                <td>{{ $role->display_name }}</td>
                <td>{{ $role->description }}</td>
                <td>{{ $role->name }}</td>
                <td>
                  <div class="btn-group">
                    <a class="btn  btn-primary btn-sm" href="{{ route('roles.show', ['id' => $role->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i>Details </a>
                   
                  </div>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
        {{ $roles->links() }}
      </div>
    </main>
  </div>
</div>
@endsection