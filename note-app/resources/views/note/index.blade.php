<x-app-layout>
     <div class="container">
        <a href="{{ route('note.create') }}" class="new-note-btn">
            New Note
        </a>
                <a href="{{ route('todo.create') }}" class="new-note-btn">
            New Todo
        </a>
        <div class="notes-grid">
            @foreach ($notes as $note)
                <div class="note-card">
                    <div class="note-content">
                        {{ Str::words($note->note, 30) }}
                    </div>
                    <div class="note-actions">
                        <a href="{{ route('note.show', $note) }}" class="action-link">View</a>
                        <a href="{{ route('note.edit', $note) }}" class="action-link">Edit</a>
                        <form action="{{ route('note.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination">
            {{ $notes->links() }}
        </div>
    </div>
</x-app-layout>