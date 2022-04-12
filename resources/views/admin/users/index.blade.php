@extends('admin.layouts.app')
@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Users</a></li>
                    </ol>
                </div>
            </div>

            <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Users</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $item)
                                        <tr>
                                            <td>
                                                {{$loop->iteration}}
                                            </td>
                                            <td>
                                                {{$item->name}}
                                            </td>
                                            <td>
                                                {{$item->email}}
                                            </td>
                                            <td>
                                                {{$item->role}}
                                            </td>
                                            <td>
                                                <form action="{{ route('users.update' , $item)}}" method="post">@csrf @method('patch')
                                                    <span>
                                                        <button @if ($item->id == Auth::user()->id || $item->id == 1)
                                                            disabled
                                                        @endif type="submit" class="btn btn-info info-btn btn-sm mx-2"><i class="fa fa-close color-danger"></i> 
                                                        @if ($item->role != 'admin')
                                                            Promote
                                                        @else
                                                            Demote
                                                        @endif
                                                        </button>
                                                    </span>
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
            </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection
@section('custom-script')
<script src="{{ $admin_source }}/plugins/validation/jquery.validate.min.js"></script>
    <script src="{{ $admin_source }}/plugins/validation/jquery.validate-init.js"></script>
    <script>
        $('.delete-btn').on('click',function(e){
            e.preventDefault();

            var form = $(this).parents('form:first');
            swal({
                    title:"Are you sure to delete ?",
                    text:"You will not be able to recover this data !!",
                    type:"warning",showCancelButton:!0,confirmButtonColor:"#DD6B55",
                    confirmButtonText:"Yes, delete it !!",closeOnConfirm:1},
                    function(e){
                        if(e)
                            $(form).submit();
                    }
                )
        })
    </script>
@endsection
