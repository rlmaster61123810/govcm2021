@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        {{-- Page Heading --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">เพิ่มชุมชน</h1>
            <a href="{{ route('community_name.create') }}"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-arrow-circle-left fa-sm text-white-50"></i> Back</a>
        </div>
        {{-- DataTables Example --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">เพิ่มชุมชน</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('community_name.store') }}" method="POST">
                    @csrf
                    {{-- select subdistrict_name from database  --}}
                    <div class="form-group">
                        <label for="subdistrict_name">แขวง</label>
                        <select class="form-control" name="subdistrict_name" id="subdistrict_name">
                            <option value="">เลือกแขวง</option>
                            @foreach ($subdistricts as $subdistrict)
                                <option value="{{ $subdistrict->subdistrict_name }}">{{ $subdistrict->subdistrict_name }}</option>
                            @endforeach
                        </select>

                    <div class="form-group">
                        <label for="name">ชื่อชุมชน</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="ชื่อชุมชน">
                    </div>
                    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                </form>
            </div>
        </div>
    </div>

@endsection
