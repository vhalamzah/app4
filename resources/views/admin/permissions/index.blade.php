@extends('layouts.admininterface')

@section('content')
<main permission="main" class=" d-content col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
      
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">permissions</h1>
      </div>
      <a class="btn addBtn btn-sm btn-primary" href="{{route('permissions.create')}}">Add New permission</a>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>permission Display</th>
              <th>permission Description</th>
              <th>permission</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach($permissions as $permission)
              <tr>
                <td>{{ $permission->display_name }}</td>
                <td>{{ $permission->description }}</td>
                <td>{{ $permission->name }}</td>
                <td>
                  <div class="btn-group">
                    <a class="btn  btn-primary btn-sm" href="{{ route('permissions.show', ['id' => $permission->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i>Details </a>
                   
                  </div>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
          <div class="text-center">
            {{ $permissions->links() }}
          </div>
      </div>
    </main>
  </div>
</div>
@endsection