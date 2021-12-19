@extends('layouts.master')

@section('content')
    <div class="container-fluid">


        {{-- page Heading --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                <i class="fa fa-fw fa-users"></i>
                ผู้ใช้งาน
            </h1>
            <a href="{{ route('users.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i>
                เพิ่มผู้ใช้งาน
            </a>
        </div>
        {{-- DataTales Example --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fa fa-fw fa-users"></i>
                    Users
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>ประเภทผู้ใช้งาน</th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    {{-- 1, 2, ..., n --}}
                                    <td>{{ $loop->iteration }}</td>
                                    {{-- Name --}}
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>

                                    <td>
                                        @if ($user->status == 'ADMIN')
                                            <span class="badge badge-danger">แอดมิน</span>
                                        @else
                                            <span class="badge badge-success">ผู้ใช้งานทั่วไป</span>
                                        @endif
                                    <td>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                            แก้ไข
                                        </a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            {{-- alert confirm logout --}}
                                            <a onclick="return confirm('คุณต้องการลบผู้ใช้งานนี้ใช่หรือไม่?')" href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash">ลบ</i>

                                        </form>
                                    </td>
                                </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
