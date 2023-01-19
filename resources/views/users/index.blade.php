@extends('layouts.app')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users Management</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users List</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              <div class="pull-right">
                @can('user-create')
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
                @endcan
              </div>
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Roles</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($data)
                    @php
                    $id =1;
                    @endphp
                    @foreach($data as $key => $user)
                    <tr>
                      <td>{{$id++}}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>
                        @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                        <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                        @endif
                      </td>
                      <td>
                      <div class="btn-group">
                        @can('user-edit')
                        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>    
                        @endcan
                        @can('user-delete')
                        <form method="post" action="{{route('users.destroy',$user->id)}}">
                          @csrf
                          @method('delete')
                          <button type="submit" onclick="return confirm('Are You Sure Want To Delete This.??')" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                        @endcan
                      </div>
                    </td>
                    </td>
                  </tr>
                  @endforeach
                  @endif
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>S.No</th>
                    <th>Property Name</th>
                    <th>Address</th>
                    <th>Square</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
</div>
@endsection