@extends('backend.layouts.apps')
<title>Edit Employee</title>

@section('title')
 Employee
@endsection

@push('style')
<style>

</style>
@endpush

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Emplyee Details</h3>
            </div>
            <div class="card-body">
                <form action="{{route('admin.employee.update',$employee->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6 mb-0">
                        <label class="form-label">First Name <span class="text-red">*</span></label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{$employee->first_name}}">
                            @if ($errors->has('first_name'))
                                <span class="text-danger text-left">{{ $errors->first('first_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-0">
                        <label class="form-label">Last Name<span class="text-red">*</span></label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{$employee->last_name}}">
                            @if ($errors->has('last_name'))
                                <span class="text-danger text-left">{{ $errors->first('last_name') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 mb-0">
                        <label class="form-label"> Email <span class="text-red">*</span></label>
                        <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email Address" value="{{$employee->email}}">
                        @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-0">
                        <label class="form-label">Phone <span class="text-red">*</span></label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="phone" value="{{$employee->phone}}">
                            @if ($errors->has('phone'))
                                <span class="text-danger text-left">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-row">

                    <div class="form-group col-md-6 mb-0">
                        <div class="form-group">
                            <label class="form-label">Company <span class="text-red">*</span></label>
                            <select class="form-control custom-select select2" name="company">
                                <option value="">--Select--</option>
                                @foreach ($companies as $company )
                                <option value="{{$company['id']}}" @if($employee->company == $company['id']) selected @endif>{{$company['name']}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('company'))
                                <span class="text-danger text-left">{{ $errors->first('company') }}</span>
                            @endif
                        </div>
                    </div>
                </div>


                <div class="form-footer mt-2">
                    <button type="submit"  class="btn btn-primary">Confirm  Details</button>
                </div>
            </form>
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
