<x-app-layout>
    <div class="show-container">
        <div class="show-header">
            <h1 class="show-title">Note: {{ $note->created_at->format('M d, Y H:i') }}</h1>
            <div class="show-actions">
                <a href="{{ route('note.edit', $note) }}" class="edit-btn">Edit</a>
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn-show">Delete</button>
                </form>
            </div>
        </div>
        <div class="note-content-container">
            <div class="note-text">
                {{ $note->note }}
            </div>
        </div>
    </div>
</x-app-layout>