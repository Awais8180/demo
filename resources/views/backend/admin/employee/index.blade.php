@extends('backend.layouts.apps')
<title>Admin Patient | Dashboard</title>

@section('title')
 Patient
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
        <div class="card-title">Emplyee Detail</div>
    </div>
    <div class="row">
        <div class="col-md-2 offset-md-10 pt-2">
                <a href="{{route('admin.employee.create')}}" class="btn btn-info">Add New Employee</a>
        </div>
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
                            <th class="border-bottom-0">First Name</th>
                            <th class="border-bottom-0">Last Name</th>
                            <th class="border-bottom-0">Email</th>
                            <th class="border-bottom-0">Phone</th>
                            <th class="border-bottom-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $key=> $employ)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$employ->first_name}} </td>
                            <td>{{$employ->last_name}}</td>
                            <td>{{$employ->email}}</td>
                            <td>{{$employ->phone}}</td>
                            <td>
                                <div class="dd flex">
                                    <a href="{{route('admin.employee.edit',$employ->id)}}"><i
                                        class="mdi mdi-tooltip-edit"
                                        style="font-size:24px;color:blue"></i></a>
                                        <form action="{{route('admin.employee.destroy',$employ->id)}}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                onclick="return confirm('Are you sure you want to delete this employee Record ?')"
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
<!--/div-->

@endsection
@push('scripts')
<script>

} );
</script>
@endpush







