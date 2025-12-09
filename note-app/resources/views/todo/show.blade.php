<x-app-layout>
    <div class="show-container">
        <div class="show-header">
            <h1 class="show-title">Todo: {{ $todo->name }}</h1>
            <div class="show-actions">
                <a href="{{ route('todo.edit', $todo) }}" class="edit-btn">Edit</a>
                <form action="{{ route('todo.destroy', $todo) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn-show">Delete</button>
                </form>
            </div>
        </div>
        <div class="todo-details-container">
            <div class="todo-info">
                <p><strong>Status:</strong> 
                    @if($todo->done)
                        <span class="status-done">Done</span>
                    @else
                        <span class="status-pending">Pending</span>
                    @endif
                </p>
                <p><strong>Priority:</strong> 
                    @if($todo->urgent)
                        <span class="priority-urgent">Urgent</span>
                    @else
                        <span class="priority-normal">Normal</span>
                    @endif
                </p>
                @if($todo->date_completed)
                    <p><strong>Completed at:</strong> {{ $todo->date_completed->format('M d, Y H:i') }}</p>
                @endif
                <p><strong>Created at:</strong> {{ $todo->created_at->format('M d, Y H:i') }}</p>
                <p><strong>Updated at:</strong> {{ $todo->updated_at->format('M d, Y H:i') }}</p>
            </div>
        </div>
    </div>
</x-app-layout>