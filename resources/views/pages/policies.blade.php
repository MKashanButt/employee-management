@push('css')
    <link rel="stylesheet" href="{{ asset('css/policies.css') }}">
@endpush

@extends('template')
@section('content')
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
            </div>
            <div class="item">
                <p class="profile">
                    HR
                </p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, libero!</p>
            </div>
            <div class="item">
                <p class="profile">
                    HR
                </p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, libero!</p>
            </div>
            <div class="item">
                <p class="profile">
                    HR
                </p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, libero!</p>
            </div>
            <div class="item">
                <p class="profile">
                    HR
                </p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, libero!</p>
            </div>
        </div>
        <div class="policy" x-show="open" x-cloak>
            <div class="bg"></div>
            <div class="content">
                <button @click="open=false" @click.outside="open=false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon">
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
    </section>
@endsection
