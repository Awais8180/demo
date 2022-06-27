@extends('backend.layouts.apps')
<title>Admin User | Dashboard</title>

@section('title')
 Users
@endsection

@push('style')
<style>

    .dd{
        display: flex;
    }
</style>
@endpush

@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">Admin Users</div>
    </div>
    <div class="card-body">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        @if(session()->has('delete'))
            <div class="alert alert-danger">
                {{ session()->get('delete') }}
            </div>
        @endif
        <div class="">
            <div class="table-responsive">
                <table id="example" class="table table-bordered text-nowrap key-buttons">
                    <thead>
                        <tr>
                            <th class="border-bottom-0">#</th>
                            <th class="border-bottom-0">Name</th>
                            <th class="border-bottom-0">Email</th>
                            <th class="border-bottom-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key=> $user)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <div class="dd flex">

                                        <form action="{{route('admin.user_delete',$user->id)}}"
                                            method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit"
                                                onclick="return confirm('Are you sure you want to delete this user Record ?')"
                                                style="border:none !important"><i class="mdi mdi-delete-forever"
                                                    style="font-size:24px;color:red"></i></button>
                                        </form>
                                </div>
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
@push('scripts')
<script>

} );
</script>
@endpush







