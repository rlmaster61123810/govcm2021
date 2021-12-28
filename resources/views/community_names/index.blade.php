@extends('layouts.master')

@section('content')
    <div class="container-fluid">


        {{-- page Heading --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                <i class="fa fa-fw fa-home"></i>
                ชุมชน
            </h1>
            <a href="{{ route('community_names.create') }}"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i>
                เพิ่มชุมชน
            </a>
        </div>
        {{-- DataTales Example --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">รายชื่อชุมชน</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ชื่อชุมชน</th>
                                <th>จังหวัด</th>
                                <th>อำเภอ</th>
                                <th>ตำบล</th>
                                <th>จำนวนสมาชิก</th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($community_names as $community_name)
                                <tr>
                                    <td>{{ $community_name->name }}</td>
                                    <td>{{ $community_name->province }}</td>
                                    <td>{{ $community_name->amphur }}</td>
                                    <td>{{ $community_name->district }}</td>
                                    <td>{{ $community_name->members->count() }}</td>
                                    <td>
                                        <a href="{{ route('community_names.edit', $community_name->id) }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                            แก้ไข
                                        </a>
                                        <form action="{{ route('community_names.destroy', $community_name->id) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                                ลบ
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
