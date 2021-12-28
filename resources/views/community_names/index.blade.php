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
                                <th>ที่</th>
                                <th>ชื่อชุมชน</th>
                                <th>แขวง</th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($communities as $community)
                                <tr>
                                    {{-- 1, 2, ..., n --}}
                                    <td>{{ $loop->iteration }}</td>
                                    {{-- ชื่อชุมชน --}}
                                    <td>{{ $community->name }}</td>
                                    {{-- แขวง --}}
                                    <td>{{ $community->sub_district }}</td>
                                    {{-- จัดการ --}}
                                    <td>
                                        <a href="{{ route('community_names.show', $community->id) }}"
                                            class="btn btn-info btn-circle btn-sm">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                        <a href="{{ route('community_names.edit', $community->id) }}"
                                            class="btn btn-warning btn-circle btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('community_names.destroy', $community->id) }}"
                                            method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-circle btn-sm">
                                                <i class="fas fa-trash"></i>
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
