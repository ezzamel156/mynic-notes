@csrf

<div class="form-group">
    <label for="name">Name</label>
    <input 
        type="text" 
        required
        class="form-control @error('name') is-invalid @enderror" 
        id="name" 
        name="name" 
        placeholder="Enter your title here" 
        value="{{ old('name') ?: $note->name }}"
    >
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea required placeholder="Enter your description here" class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') ?: $note->description }}</textarea>
    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
@if (Auth::user()->can('manage', $note) || !$note->exists)
<div class="d-flex flex-row-reverse">
    <button type="submit" class="btn btn-primary">{{$note->exists ? 'Update' : 'Save'}}</button>
</div>  
@endif

