@extends('layouts.app')

@section('content')

<header>
    <div class="d-flex justify-content-between">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link {{ Request::path() == 'notes' ? 'active' : ''}}" href="{{ route('notes.index') }}">All Notes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::path() == 'notes/my' ? 'active' : ''}}" href="{{ route('notes.myNotes') }}">My Notes</a>
            </li>
        </ul>
        <a href="/notes/create">Add new note</a>
    </div>
</header>
<main class="mt-3">
    <div class="row row-cols-1 row-cols-md-4">
        @forelse ($notes as $note)
            <div class="col mb-4">
                @include('notes.card', $note)
            </div>
        @empty
            <div class="col">
                No notes found
            </div>
        @endforelse
    </div>
</main>

@endsection