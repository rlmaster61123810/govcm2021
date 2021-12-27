@extends('layouts.master')

@section('content')
    <div class="container-fluid">


        {{-- page Heading --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                <i class="fas fa-house-user"></i>
                ชุมชน
            </h1>
            <a href="{{ route('community_name.create') }}"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i>
                เพิ่มชุมชน

            </a>
        </div>
        {{-- DataTales Example --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fa fa-fw fa-users"></i>
                    Communitys
                </h6>
            </div>
            <div class="card-body">
                {{-- if has success --}}
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                {{-- if has error --}}
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ที่</th>
                                <th>ชื่อชุมชน</th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($community_names as $community_name)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $community_name->name }}</td>
                                    <td>
                                        <a href="{{ route('community_name.show', $community_name->id) }}"
                                            class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>
                                            ดูรายละเอียด
                                        </a>
                                        <a href="{{ route('community_name.edit', $community_name->id) }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                            แก้ไข
                                        </a>
                                        <form action="{{ route('community_name.destroy', $community_name->id) }}"
                                            method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
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
