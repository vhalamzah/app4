@extends('layouts.admininterface')

@section('content')

    <main role="main" class="col-md-9 d-content ml-sm-auto col-lg-10 pt-3 px-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
    </div>
    
    
    <div class="clearfix"></div>
    <p> <h4>Are you sure you want to delete <strong> {{$user->name}} ?</strong></h4></p>

                    <form method="POST" action="{{ route('users.destroy', ['id' => $user->id]) }}">
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                        <input name="_method" type="hidden" value="DELETE">
                        <a  href="{{route('users.show', $user->id)}}"  class="btn btn-primary">No do not Delete</a>
                        <button type="submit" class="btn btn-danger">Yes I'm sure. Delete</button>

                    </form>
                   
</main>
</div>
</div>
@endsection