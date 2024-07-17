@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <!-- Users/Members -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Members
                </div>
                <div class="panel-body">
                    <div>
                        <a href="{{ url('admin/members/create') }}" class="btn btn-primary">
                            <i class="fa fa-btn fa-plus"></i>Add New Member
                        </a>
                    </div>

                    <table class="table table-striped user-table">
                        <thead>
                            <th>Name</th>
                            <th>Email</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="table-text"><div>{{ $user->name }}</div></td>
                                    <td class="table-text"><div>{{ $user->email }}</div></td>
                                    <!-- User Edit Button -->
                                    <td>
                                        <form action="{{url('admin/members/' . $user->id . '/edit')}}" method="GET">
                                            <button type="submit" id="edit-user-{{ $user->id }}" class="btn btn-primary">
                                                <i class="fa fa-btn fa-pencil"></i>Edit
                                            </button>
                                        </form>
                                    </td>

                                    <!-- User Delete Button -->
                                    <td>
                                        <form action="{{url('admin/members/' . $user->id)}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" id="delete-user-{{ $user->id }}" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
