@extends('_layouts.public')

@section('content')
    <h1>This is a test</h1>
    <div x-data="{ open: false }">
        <button @click="open = true">Open Dropdown</button>

        <ul x-show="open" @click.away="open = false">
            Dropdown Body
        </ul>
    </div>
@endsection
