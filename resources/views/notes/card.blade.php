<div class="card h-100 shadow">
    <div class="card-body">
        <h6 class="card-subtitle mb-2 text-muted">{{ $note->created_at->toFormattedDateString() }}</h6>
        <h5 class="d-flex align-items-center card-title"><a href=" {{ $note->path().'/edit' }} "> {{ $note->name }} </a></h5>
        <p class="card-text">{{ $note->description }}</p>
    </div>
</div>