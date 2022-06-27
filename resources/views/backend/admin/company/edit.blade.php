@extends('backend.layouts.apps')
<title>Edit Company</title>

@section('title')
 Company
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
                <h3 class="card-title">Company Details</h3>
            </div>
            <div class="card-body">
                <form action="{{route('admin.company.update',$company->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6 mb-0">
                        <label class="form-label">Company Name<span class="text-red">*</span></label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="company_name"value="{{$company->name}}">
                            @if ($errors->has('first_name'))
                                <span class="text-danger text-left">{{ $errors->first('first_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-0">
                        <label class="form-label"> Email <span class="text-red">*</span></label>
                        <div class="form-group">
                        <input type="email" class="form-control" name="email"  value="{{$company->email}}">
                        @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 mb-0">
                        <label class="form-label">Company Website <span class="text-red">*</span></label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="website" value="{{$company->website}}">
                            @if ($errors->has('website'))
                                <span class="text-danger text-left">{{ $errors->first('website') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-0">
                        <label class="form-label">Company Logo <span class="text-red">*</span></label>
                        <div class="form-group">
                            <input type="file" name="image" class="form-control">
                            @if ($errors->has('image'))
                                <span class="text-danger text-left">{{ $errors->first('image') }}</span>
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
