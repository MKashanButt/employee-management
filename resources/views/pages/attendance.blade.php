@php
    $count = 1;
@endphp

@push('css')
    <link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
@endpush

@extends('template')
@section('content')
    <x-breadcrumbs :page="'Attendance'" />
    <section class="attendance">
        <h1>Attendance</h1>
        <div class="stage">
            <div class="heading">
                <div class="sno">
                    <p>S.No</p>
                </div>
                <div class="user">
                    <p>User</p>
                </div>
                <div class="date">
                    <p>Date</p>
                </div>
                <div class="checkin">
                    <p>Check In</p>
                </div>
                <div class="checkout">
                    <p>Check Out</p>
                </div>
            </div>
            <div class="item">
                <div class="sno">
                    <p>{{ $count }}.</p>
                </div>
                <div class="user">
                    <p>Kashan</p>
                </div>
                <div class="date">
                    <p>24/12/2025</p>
                </div>
                <div class="checkin">
                    <p>14:40 PM</p>
                </div>
                <div class="checkout">
                    <p>14:40 PM</p>
                </div>
            </div>
        </div>
    </section>
@endsection
