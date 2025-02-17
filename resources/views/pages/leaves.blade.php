@php
    $count = 1;
@endphp

@push('css')
    <link rel="stylesheet" href="{{ asset('css/leaves.css') }}">
@endpush

@extends('template')
@section('content')
    {{-- @dd($data) --}}
    <x-breadcrumbs :page="'Leaves'" />
    <section class="leaves" x-data="{ reason: false, add: false, reason: null, days: null }">
        <h1>Leaves</h1>
        <div class="stage">
            <div class="heading">
                <div class="sno">
                    <p>S.No</p>
                </div>
                <div class="user">
                    <p>User</p>
                </div>
                <div class="date">
                    <p>Starting Date</p>
                </div>
                <div class="days">
                    <p>Days</p>
                </div>
                <div class="reason">
                    <p>Reason</p>
                </div>
                <div class="actions">
                    <p>Actions</p>
                </div>
            </div>
            @foreach ($data as $item)
                {{-- @dd($item) --}}
                <div class="item">
                    <div class="sno">
                        <p>{{ $loop->iteration }}.</p>
                    </div>
                    <div class="user">
                        <button class="user-account">{{ $item->user->name }}</button>
                    </div>
                    <div class="date">
                        <p>{{ $item->starting_date }}</p>
                    </div>
                    <div class="days">
                        <p>{{ $item->days }}</p>
                    </div>
                    <div class="reason">
                        <button class="reason-btn" @click="reason=true;reason={{ json_encode($item) }}">View Reason</button>
                    </div>
                    <div class="actions">
                        <a href="/leaves/proceed/{{ $item }}">
                            <button class="primary">Proceed</button>
                        </a>
                        <button class="success" @click="add=true;days={{ $item }}"">Custom</button>
                        <a href="/leaves/destroy/{{ $item->id }}">
                            <button class="danger">Delete</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="add-modal" x-show="add" x-transition x-cloak>
            <div class="overlay"></div>
            <div class="content" @click.outside="add=false">
                <button @click="add=false">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
                <h2>Add Leaves</h2>
                <form action="/leaves/custom" method="POST">
                    @csrf
                    <select name="leaves" id="leaves">
                        <option value="">Select Leaves</option>
                        <template x-for="i in days.days">
                            <option :value="i" x-text="i"></option>
                        </template>
                        <input type="hidden" name="id" :value="days.id">
                        <input type="hidden" name="user_id" :value="days.user_id">
                    </select>
                    <button class="primary">Proceed</button>
                </form>
            </div>
        </div>
        <div class="reason-modal" x-show="reason" x-transition x-cloak>
            <div class="overlay"></div>
            <div class="content" @click.outside="reason=false">
                <button @click="reason=false">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
                <h2>Reason</h2>
                <p x-text="reason.reason"></p>
            </div>
        </div>
    </section>
@endsection
