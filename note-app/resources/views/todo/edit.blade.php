<x-app-layout>
    <div class="edit-container">
        <h1 class="edit-title">Edit your todo</h1>
        <form action="{{ route('todo.update', $todo) }}" method="POST" class="edit-form">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="form-label">Todo Name</label>
                <input type="text" name="name" id="name" value="{{ $todo->name }}" class="form-input" required>
            </div>
            <div class="form-group">
                <label class="form-checkbox">
                    <input type="checkbox" name="urgent" value="1" {{ $todo->urgent ? 'checked' : '' }}>
                    Urgent
                </label>
            </div>
            <div class="form-group">
                <label class="form-checkbox">
                    <input type="checkbox" name="done" value="1" {{ $todo->done ? 'checked' : '' }}>
                    Done
                </label>
            </div>
            <div class="form-group">
                <label for="date_completed" class="form-label">Date Completed</label>
                <input type="datetime-local" name="date_completed" id="date_completed" 
                       value="{{ $todo->date_completed ? $todo->date_completed->format('Y-m-d\TH:i') : '' }}" 
                       class="form-input">
            </div>
            <div class="edit-actions">
                <a href="{{ route('todo.index') }}" class="cancel-btn">Cancel</a>
                <button type="submit" class="submit-btn">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>