@extends('layouts.admininterface')
@section('content')
<div role="main" class="col-md-9 d-content ml-sm-auto col-lg-10 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">View role  Details</h1>
      </div>
      <div class="row">
      <div class=" addBtn col-lg-6">
        <div class="form-group">
          Name:
          <pre>{{$role->name}}</pre>
        </div>

        
          <div class="field">
           display_name:
            <pre>{{$role->display_name}}</pre>
          </div>

          <div class="field">
           Role_description:
            <pre>{{$role->description}}</pre>
          </div>
  
      </div>
    </div>
    <div class="row">
    	<div class="addBtn col-lg-12">
    		<a class="btn   btn-primary" href=" {{route('roles.edit', $role->id )}} "> Edit role</a>
            <a class="btn btn-danger" href="{{route('roles.delete', $role->id)}}" > Delete role</a>
                      
    	</div>
    	  
              
    </div>
   

</div>

@endsection