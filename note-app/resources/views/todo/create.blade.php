<x-app-layout>
    <div class="form-container">
        <h1 class="form-title">Create new todo</h1>
        <form action="{{ route('todo.store') }}" method="POST" class="form">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Todo Name</label>
                <input type="text" name="name" id="name" placeholder="Enter todo name" class="form-input" required>
            </div>
            <div class="form-group">
                <label class="form-checkbox">
                    <input type="checkbox" name="urgent" value="1">
                    Urgent
                </label>
            </div>
            <div class="form-group">
                <label class="form-checkbox">
                    <input type="checkbox" name="done" value="1">
                    Done
                </label>
            </div>
            <div class="form-actions">
                <a href="{{ route('todo.index') }}" class="cancel-btn">Cancel</a>
                <button type="submit" class="submit-btn">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>