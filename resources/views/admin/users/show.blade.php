@extends('layouts.admininterface')
@section('content')
<div role="main" class="col-md-9 d-content ml-sm-auto col-lg-10 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">View user  Details</h1>
      </div>
      <div class="row">
      <div class=" addBtn col-lg-12">
        <div class="form-group">
          Name:
          <pre>{{$user->name}}</pre>
        </div>

        
          <div class="field">
           Email:
            <pre>{{$user->email}}</pre>
          </div>
    

        <div class="field">
          <div class="field">
            Roles:
              <ol> {{$user->roles->count() == 0 ? 'This user has not been assigned any roles yet' : ''}}
              @foreach ($user->roles as $role)

                <li>{{$role->display_name}} ({{$role->description}})</li>
              @endforeach
              </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    	<div class="addBtn col-lg-12">
    		<a class="btn   btn-primary" href=" {{route('users.edit', $user->id )}} "> Edit User</a>
            <a class="btn btn-danger" href="{{route('users.delete', $user->id)}}" > Delete User</a>
                      
    	</div>
    	  
              
    </div>
   

</div>

@endsection