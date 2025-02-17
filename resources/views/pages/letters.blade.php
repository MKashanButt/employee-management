@push('css')
    <link rel="stylesheet" href="{{ asset('css/letters.css') }}">
@endpush

@extends('template')
@section('content')
    <x-breadcrumbs :page="'Letters'" />
    <section class="letters">
        <h1>Letters</h1>
        <div class="content">
            <div class="warnings stage">
                <h2>Warnings</h2>
                @foreach ($data as $item)
                    @if ($item->category == 'warning')
                        @if (Auth::user()->role == 'admin')
                            <div class="employee">
                                <h3>{{ $item->user->name }}</h3>
                            </div>
                        @endif
                        <div class="item">
                            <h3>{{ $item->title }}</h3>
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon">
                                    <path
                                        d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>View
                            </button>
                            <span>Published on {{ $item->created_at }}</span>
                            @if (Auth::user()->role == 'admin')
                                <button class="delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="icon">
                                        <path d="M3 6h18" />
                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                        <line x1="10" x2="10" y1="11" y2="17" />
                                        <line x1="14" x2="14" y1="11" y2="17" />
                                    </svg>
                                </button>
                            @endif
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="increments stage">
                <h2>Increments</h2>
                @foreach ($data as $item)
                    @if ($item->category == 'increment')
                        @if (Auth::user()->role == 'admin')
                            <div class="employee">
                                <h3>{{ $item->user->name }}</h3>
                            </div>
                        @endif
                        <div class="item">
                            <h3>{{ $item->title }}</h3>
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon">
                                    <path
                                        d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>View
                            </button>
                            <span>Published on {{ $item->created_at }}</span>
                            @if (Auth::user()->role == 'admin')
                                <button class="delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="icon">
                                        <path d="M3 6h18" />
                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                        <line x1="10" x2="10" y1="11" y2="17" />
                                        <line x1="14" x2="14" y1="11" y2="17" />
                                    </svg>
                                </button>
                            @endif
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="employment stage">
                <h2>Employment</h2>
                @foreach ($data as $item)
                    @if ($item->category == 'employment')
                        @if (Auth::user()->role == 'admin')
                            <div class="employee">
                                <h3>{{ $item->user->name }}</h3>
                            </div>
                        @endif
                        <div class="item">
                            <h3>{{ $item->title }}</h3>
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon">
                                    <path
                                        d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>View
                            </button>
                            <span>Published on {{ $item->created_at }}</span>
                            @if (Auth::user()->role == 'admin')
                                <button class="delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="icon">
                                        <path d="M3 6h18" />
                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                        <line x1="10" x2="10" y1="11" y2="17" />
                                        <line x1="14" x2="14" y1="11" y2="17" />
                                    </svg>
                                </button>
                            @endif
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        @if (Auth::user()->role == 'admin')
            <div x-data="{ add: false }">
                <button class="add" @click="add=true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M8 12h8" />
                        <path d="M12 8v8" />
                    </svg>
                    Add</button>
                <div class="add-letter" x-show="add" x-cloak x-transition>
                    <div class="overlay"></div>
                    <div class="content" @click.outside="add=false">
                        <button @click="add=false" class="close">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="icon">
                                <path d="M18 6 6 18" />
                                <path d="m6 6 12 12" />
                            </svg>
                        </button>
                        <form action="{{ route('letters.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h2>Add Letter</h2>
                            <div class="item">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" required>
                            </div>
                            <div class="item">
                                <label for="category">Category</label>
                                <select name="category" id="category" required>
                                    <option value="" selected disabled>Select Category</option>
                                    <option value="warning">Warning</option>
                                    <option value="increment">Increment</option>
                                    <option value="employment">Employment</option>
                                </select>
                            </div>
                            <div class="item">
                                <label for="user">User</label>
                                <select name="user" id="user" required>
                                    <option value="" selected disabled>Select User</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="item">
                                <label for="policy">Policy</label>
                                <input type="file" name="policy" id="policy" required>
                            </div>
                            <button>Apply</button>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </section>
@endsection
