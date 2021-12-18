@extends('layouts.master')

@section('content')
    <div class="container-fluid">

        {{-- Page Heading --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">เพิ่มผู้ใช้งาน</h1>
            <a href="{{ route('users.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-arrow-circle-left fa-sm text-white-50"></i> Back</a>
        </div>

        {{-- DataTables Example --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">กรอกข้อมูลผู้ใช้งาน</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">ชื่อผู้ใช้งาน</label>
                        <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror"
                            id="name" placeholder="กรอกชื่อ" name="name" value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                            id="email" name="email" placeholder="กรอก Email" value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                            name="password" placeholder="กรอก Password อย่างน้อย 6 ตัวอักษร">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label for="role">สถานะ</label>
                        <select class="form-control form-control-user @error('role') is-invalid @enderror" id="role"
                            name="role">
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                            <option value="">เลือกสถานะ</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div> --}}
                    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                </form>
            </div>
        </div>

    @endsection
