@push('css')
    <link rel="stylesheet" href="{{ asset('css/policies.css') }}">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
@endpush

@extends('template')
@section('content')
    <x-breadcrumbs :page="'Policies'" />
    <section class="announcements" x-data="{ open: false }">
        <div class="header">
            <form action="">
                <input type="search" name="search" id="search" placeholder="Search Policy...">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                        <circle cx="11" cy="11" r="8" />
                        <path d="m21 21-4.3-4.3" />
                    </svg>
                </button>
            </form>
        </div>
        <h1>Policies</h1>
        <div class="stage">
            <div class="item" @click="open=true">
                <p class="profile">
                    HR
                </p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, libero!</p>
                @if (Auth::user()->role == 'admin')
                    <div class="btns">
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
                        <button class="primary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                                <path
                                    d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                <path d="m15 5 4 4" />
                            </svg>
                        </button>
                    </div>
                @endif
            </div>
            <div class="item">
                <p class="profile">
                    HR
                </p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, libero!</p>
                @if (Auth::user()->role == 'admin')
                    <div class="btns">
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
                        <button class="primary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                                <path
                                    d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                <path d="m15 5 4 4" />
                            </svg>
                        </button>
                    </div>
                @endif
            </div>
            <div class="item">
                <p class="profile">
                    HR
                </p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, libero!</p>
                @if (Auth::user()->role == 'admin')
                    <div class="btns">
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
                        <button class="primary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="icon">
                                <path
                                    d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                <path d="m15 5 4 4" />
                            </svg>
                        </button>
                    </div>
                @endif
            </div>
            <div class="item">
                <p class="profile">
                    HR
                </p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, libero!</p>
                @if (Auth::user()->role == 'admin')
                    <div class="btns">
                        <button class="danger">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="icon">
                                <path d="M3 6h18" />
                                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                <line x1="10" x2="10" y1="11" y2="17" />
                                <line x1="14" x2="14" y1="11" y2="17" />
                            </svg>
                        </button>
                        <button class="primary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="icon">
                                <path
                                    d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                <path d="m15 5 4 4" />
                            </svg>
                        </button>
                    </div>
                @endif
            </div>
            <div class="item">
                <p class="profile">
                    HR
                </p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, libero!</p>
                @if (Auth::user()->role == 'admin')
                    <div class="btns">
                        <button class="danger">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="icon">
                                <path d="M3 6h18" />
                                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                <line x1="10" x2="10" y1="11" y2="17" />
                                <line x1="14" x2="14" y1="11" y2="17" />
                            </svg>
                        </button>
                        <button class="primary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="icon">
                                <path
                                    d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                <path d="m15 5 4 4" />
                            </svg>
                        </button>
                    </div>
                @endif
            </div>
        </div>
        <div class="policy" x-show="open" x-cloak>
            <div class="bg"></div>
            <div class="content">
                <button @click="open=false" @click.outside="open=false">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
                <h2>Info</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem eveniet facere voluptatem, id
                    unde sequi impedit. Soluta, saepe atque. Ex, dolorem officiis. Necessitatibus suscipit accusantium ipsa,
                    earum voluptatibus repellendus itaque quo, dolorum et ratione unde sint recusandae! Quam, molestias
                    assumenda ipsam, similique quidem quas perspiciatis quisquam eligendi doloremque ipsum aliquid.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat consequuntur minima labore corrupti
                    voluptate, quod quidem minus inventore officia aliquam laborum rem, voluptatibus modi officiis excepturi
                    quasi illo nostrum laudantium fuga molestiae dolorum. Impedit nulla tempora ut. Molestiae delectus
                    expedita velit repellat tenetur dignissimos, deleniti magnam quasi praesentium, provident numquam?</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem eveniet facere voluptatem, id
                    unde sequi impedit. Soluta, saepe atque. Ex, dolorem officiis. Necessitatibus suscipit accusantium ipsa,
                    earum voluptatibus repellendus itaque quo, dolorum et ratione unde sint recusandae! Quam, molestias
                    assumenda ipsam, similique quidem quas perspiciatis quisquam eligendi doloremque ipsum aliquid.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat consequuntur minima labore corrupti
                    voluptate, quod quidem minus inventore officia aliquam laborum rem, voluptatibus modi officiis excepturi
                    quasi illo nostrum laudantium fuga molestiae dolorum. Impedit nulla tempora ut. Molestiae delectus
                    expedita velit repellat tenetur dignissimos, deleniti magnam quasi praesentium, provident numquam?</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem eveniet facere voluptatem, id
                    unde sequi impedit. Soluta, saepe atque. Ex, dolorem officiis. Necessitatibus suscipit accusantium ipsa,
                    earum voluptatibus repellendus itaque quo, dolorum et ratione unde sint recusandae! Quam, molestias
                    assumenda ipsam, similique quidem quas perspiciatis quisquam eligendi doloremque ipsum aliquid.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat consequuntur minima labore corrupti
                    voluptate, quod quidem minus inventore officia aliquam laborum rem, voluptatibus modi officiis excepturi
                    quasi illo nostrum laudantium fuga molestiae dolorum. Impedit nulla tempora ut. Molestiae delectus
                    expedita velit repellat tenetur dignissimos, deleniti magnam quasi praesentium, provident numquam?</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem eveniet facere voluptatem, id
                    unde sequi impedit. Soluta, saepe atque. Ex, dolorem officiis. Necessitatibus suscipit accusantium ipsa,
                    earum voluptatibus repellendus itaque quo, dolorum et ratione unde sint recusandae! Quam, molestias
                    assumenda ipsam, similique quidem quas perspiciatis quisquam eligendi doloremque ipsum aliquid.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat consequuntur minima labore corrupti
                    voluptate, quod quidem minus inventore officia aliquam laborum rem, voluptatibus modi officiis excepturi
                    quasi illo nostrum laudantium fuga molestiae dolorum. Impedit nulla tempora ut. Molestiae delectus
                    expedita velit repellat tenetur dignissimos, deleniti magnam quasi praesentium, provident numquam?</p>
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
                <div class="add-policy" x-show="add" x-cloak x-transition>
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
                        <form action="">
                            <h2>Add Policy</h2>
                            <div class="item">
                                <label for="name">Title</label>
                                <input type="text" name="title" id="title">
                            </div>
                            <div class="item">
                                <label for="email">Tag</label>
                                <input type="text" name="tag" id="tag">
                            </div>
                            <div class="item">
                                <label for="application">Policy</label>
                                <div class="trix-body">
                                    <trix-toolbar id="trix_toolbar"></trix-toolbar>
                                    <trix-editor toolbar="trix_toolbar" input="policy" class="trix-editor"></trix-editor>
                                    <input type="hidden" name="policy">
                                </div>
                            </div>
                            <button>Apply</button>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </section>
@endsection

@push('js')
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
@endpush
