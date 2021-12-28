@extends('layouts.master')

@section('content')
    <div class="container-fluid">
       {{-- page Heading --}}
       <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <i class="fa fa-fw fa-home"></i>
            ชุมชน
        </h1>
        <a href="{{ route('community_name.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i>
            เพิ่มชุมชน
        </a>
    </div>
        </div>


    @endsection
