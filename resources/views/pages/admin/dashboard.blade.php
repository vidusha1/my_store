@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        @if (session('message'))
        <h2 class="alert alert-success">{{ session('message') }}</h2>
        @endif
        <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex align-items-end flex-wrap">
                <div class="me-md-3 me-xl-5">
                    <h2>Welcome back,</h2>
                    <p class="mb-md-0">Your analytics dashboard template.</p>
                </div>
                <div class="d-flex">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                    <p class="text-primary mb-0 hover-cursor">Analytics</p>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-end flex-wrap">
                <a href="{{ route('category.index') }}" class="btn btn-primary mt-2 mt-xl-0">Categories</a>
            </div>
        </div>
    </div>
</div>
@endsection