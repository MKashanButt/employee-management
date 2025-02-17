@php
    $letters = str_split($page);
@endphp

<div class="breadcrumbs">
    @foreach ($letters as $letter)
        <p>{{ $letter }}</p>
    @endforeach
</div>
