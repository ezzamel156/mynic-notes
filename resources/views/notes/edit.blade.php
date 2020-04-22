@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/notes">Notes</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $note->name }}  </li>
    </ol>
</nav>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                @can('manage', $note)
                Edit a note
                <form onsubmit="return confirm('Are you sure you want to delete the note?');" method="POST" action="{{ $note->path() }}" >
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-link   text-danger">Delete</button>
                </form>
                @else
                Just a note
                @endcan
            </div>

            <div class="card-body">
                <form method="POST" action="{{ $note->path() }}">
                        @method('PATCH')  
                        @include('notes.form', $note)
                </form>
            </div>
            
        </div>
    </div>
</div>`
@endsection