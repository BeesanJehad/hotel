@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3 justify-content-between">
        <h6 class="mb-0 py-0 text-uppercase">All Team</h6>
        <div class="ps-3">
            {{-- <button type="button" class="btn btn-outline-primary px-5 radius-30">Add Team</button> --}}
            <a href="{{ route('add.team') }}" class="btn btn-outline-primary px-5 radius-30">Add Team</a>
        </div>
    </div>

    {{-- <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <button type="button" class="btn btn-outline-primary px-5 radius-30">Add Team</button>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">All Team</h6> --}}
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Facebook</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($team as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td><img src="{{ asset($item->image) }}" alt="" style="width:70px; height:40px;"></td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->postion }}</td>
                                <td>{{ $item->facebook }}</td>
                                <td>
                                    {{-- <i class="fas fa-edit"></i> --}}
                                    <a href="{{ route('edit.team',$item->id) }}" class="btn btn-warning px-3 radius-30">Edit</a>
                                    <a href="{{ route('delete.team',$item->id) }}" class="btn btn-danger px-3 radius-30" id="delete">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr/>
</div>
@endsection
