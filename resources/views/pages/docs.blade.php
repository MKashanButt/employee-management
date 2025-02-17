@php
    $count = 1;
@endphp

@push('css')
    <link rel="stylesheet" href="{{ asset('css/docs.css') }}">
@endpush

@extends('template')
@section('content')
    <x-breadcrumbs :page="'Docs'" />
    <section class="docs" x-data="{ open: false }">
        <h1>Docs</h1>
        <div class="stage">
            <div class="heading">
                <div class="sno">
                    <p>S.No</p>
                </div>
                <div class="user">
                    <p>User</p>
                </div>
                <div class="documents">
                    <p>Docs</p>
                </div>
            </div>
            <div class="item">
                <div class="sno">
                    <p>{{ $count }}.</p>
                </div>
                <div class="user">
                    <button class="user-account">Kashan</button>
                </div>
                <div class="documents">
                    <div class="btn">
                        <p class="primary">CNIC</p>
                        <button class="danger">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                                <path d="M3 6h18" />
                                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                <line x1="10" x2="10" y1="11" y2="17" />
                                <line x1="14" x2="14" y1="11" y2="17" />
                            </svg>
                        </button>
                    </div>
                    <div class="btn">
                        <p class="primary">Experience Letter</p>
                        <button class="danger">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                                <path d="M3 6h18" />
                                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                <line x1="10" x2="10" y1="11" y2="17" />
                                <line x1="14" x2="14" y1="11" y2="17" />
                            </svg>
                        </button>
                    </div>
                    <div class="btn">
                        <p class="primary">Educational Documents</p>
                        <button class="danger">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                                <path d="M3 6h18" />
                                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                <line x1="10" x2="10" y1="11" y2="17" />
                                <line x1="14" x2="14" y1="11" y2="17" />
                            </svg>
                        </button>
                    </div>
                    <div class="btn">
                        <p class="primary">Previous Company Salary Slip</p>
                        <button class="danger">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                                <path d="M3 6h18" />
                                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                <line x1="10" x2="10" y1="11" y2="17" />
                                <line x1="14" x2="14" y1="11" y2="17" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
