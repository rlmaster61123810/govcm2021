@extends('layouts.master')

@section('content')
    <div class="container-fluid">

        {{-- Page Heading --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">แก้ไขผู้ใช้งาน</h1>
            <a href="{{ route('users.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-arrow-circle-left fa-sm text-white-50"></i> Back</a>
        </div>

        {{-- DataTables Example --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">กรอกข้อมูลผู้ใช้งาน</h6>
            </div>
            <div class="card-body">
                {{-- action to route users.update --}}
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">ชื่อผู้ใช้งาน</label>
                        <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror"
                            id="name" placeholder="กรอกชื่อ" name="name" value="{{$user->name}}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                            id="email" name="email" placeholder="กรอก Email" value="{{$user->email}}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-12 p-2 border">
                            {{-- alert info --}}
                            <div class="alert alert-info" role="alert">
                                <h4 class="alert-heading">คำแนะนำ</h4>
                                <p>หากไม่ต้องการเปลี่ยนรหัสผ่านให้เว้นว่างไว้</p>
                            </div>
                            <div class="form-group">
                                <label for="password">รหัสผ่าน</label>
                                <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                    id="password" name="password" placeholder="กรอกรหัสผ่าน">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">ยืนยันรหัสผ่าน</label>
                                <input type="password" class="form-control form-control-user" id="password_confirmation"
                                    name="password_confirmation" placeholder="ยืนยันรหัสผ่าน">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="role">สถานะ</label>@error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <select name="status" class="form-control form-control-user @error('role') is-invalid @enderror">
                            <option value="ADMIN">Admin</option>
                            <option value="USER">User</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                </form>
            </div>
        </div>

    @endsection
