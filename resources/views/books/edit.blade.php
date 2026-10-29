@extends('books.layout')

@section('content')

    <h1>Edit Book</h1>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Book Title:</label>
        <input
    type="text"
    name="title"
    value="{{ old('title', $book->title) }}"
    placeholder="e.g. The Great Gatsby"
>

<input
    type="text"
    name="author"
    value="{{ old('author', $book->author) }}"
    placeholder="e.g. F. Scott Fitzgerald"
>

<input
    type="text"
    name="genre"
    value="{{ old('genre', $book->genre) }}"
    placeholder="e.g. Fiction, Mystery, Romance"
>
        <label>Reading Status:</label>
        <select name="status">
    <option value="to-read" {{ old('status', $book->status) == 'to-read' ? 'selected' : '' }}>To Read</option>
    <option value="reading" {{ old('status', $book->status) == 'reading' ? 'selected' : '' }}>Reading</option>
    <option value="finished" {{ old('status', $book->status) == 'finished' ? 'selected' : '' }}>Finished</option>
</select>

        <button type="submit">Update Book</button>

        <a href="{{ route('books.index') }}" class="btn">
            Cancel
        </a>
    </form>

@endsection