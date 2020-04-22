@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/notes">Notes</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add new note</li>
    </ol>
</nav>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header">
                Add new note
            </div>
            <div class="card-body">
                <form method="POST"action="/notes">
                        @include('notes.form', ['note' => new App\Note])
                </form>
            </div>
        </div>
    </div>
</div>
@endsection