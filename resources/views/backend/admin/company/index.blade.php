@extends('backend.layouts.apps')
<title>Admin Dashboard</title>

@section('title')
 Companies
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
        <div class="card-title">Companies Detail</div>
    </div>
    <div class="row">
        <div class="col-md-2 offset-md-10 pt-2">
                <a href="{{route('admin.company.create')}}" class="btn btn-info">Add New Company</a>
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
                            <th class="border-bottom-0">Name</th>
                            <th class="border-bottom-0">Email</th>
                            <th class="border-bottom-0">Logo</th>
                            <th class="border-bottom-0">Website</th>
                            <th class="border-bottom-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companies as $key=> $company)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$company->name}} </td>
                            <td>{{$company->email}}</td>
                            <td><img src="{{ asset('companies_logos/'.$company->logo) }}" style="width:100px; height:100px"></td>
                            <td>{{$company->website}}</td>
                            <td>
                                <div class="dd flex">
                                    <a href="{{route('admin.company.edit',$company->id)}}"><i
                                        class="mdi mdi-tooltip-edit"
                                        style="font-size:24px;color:blue"></i></a>
                                        <form action="{{route('admin.company.destroy',$company->id)}}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                onclick="return confirm('Are you sure you want to delete this company Record ?')"
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







