@php
    $count = 1;
@endphp

@push('css')
    <link rel="stylesheet" href="{{ asset('css/users.css') }}">
@endpush

@extends('template')
@section('content')
    <x-breadcrumbs :page="'Users'" />
    <section class="users">
        <h1>Users</h1>
        <div class="stage">
            <div class="heading">
                <div class="sno">
                    <p>S.No</p>
                </div>
                <div class="user">
                    <p>User</p>
                </div>
                <div class="actions">
                    <p>Actions</p>
                </div>
            </div>
            <div class="item">
                <div class="sno">
                    <p>{{ $count }}.</p>
                </div>
                <div class="user">
                    <p>Kashan</p>
                </div>
                <div class="actions">
                    <button class="primary">Credentials</button>
                    <button class="success">Edit</button>
                    <button class="danger">Delete</button>
                </div>
            </div>
        </div>
    </section>
@endsection
