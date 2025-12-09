<x-app-layout>
    <div class="form-container">
        <h1 class="form-title">Create new note</h1>
        <form action="{{ route('note.store') }}" method="POST" class="form">
            @csrf
            <textarea name="note" rows="10" placeholder="Enter your note here" class="form-textarea"></textarea>
            <div class="form-actions">
                <a href="{{ route('note.index') }}" class="cancel-btn">Cancel</a>
                <button type="submit" class="submit-btn">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>