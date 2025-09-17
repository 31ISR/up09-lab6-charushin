<!-- resources/views/note/create.blade.php -->
<x-layout>
    <div class="form-container">
        <h1>Create new note</h1>
        
        <form action="{{ route('note.store') }}" method="POST">
            @csrf
            <textarea name="note" rows="10" placeholder="Enter your note here"></textarea>
            
            <div class="form-actions">
                <a href="{{ route('note.index') }}" class="btn-cancel">Cancel</a>
                <button type="submit" class="btn-submit">Submit</button>
            </div>
        </form>
    </div>
</x-layout>