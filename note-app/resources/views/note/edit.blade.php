<x-app-layout>
    <div class="edit-container">
        <h1 class="edit-title">Edit your note</h1>
        <form action="{{ route('note.update', $note) }}" method="POST" class="edit-form">
            @csrf
            @method('PUT')
            <textarea name="note" rows="10" placeholder="Enter your note here" class="edit-textarea">{{ $note->note }}</textarea>
            <div class="edit-actions">
                <a href="{{ route('note.index') }}" class="cancel-btn">Cancel</a>
                <button type="submit" class="submit-btn">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>