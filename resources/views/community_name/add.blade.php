@extends('layouts.master')

@section('content')
    <div class="container-fluid">
                {{-- Page Heading --}}
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">เพิ่มผู้ใช้งาน</h1>
                    <a href="{{ route('users.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-arrow-circle-left fa-sm text-white-50"></i> Back</a>
                </div>
    </div>

@endsection

