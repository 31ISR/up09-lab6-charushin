<x-app-layout>
       <div class="container">
        <a href="{{ route('todo.create') }}" class="new-todo-btn">
            New Todo
        </a>
                <a href="{{ route('note.create') }}" class="new-todo-btn">
            New Note
        </a>
        <div class="todos-grid">
            @foreach ($todos as $todo)
                <div class="todo-card {{ $todo->urgent ? 'urgent' : '' }} {{ $todo->done ? 'done' : '' }}">
                    <div class="todo-content">
                        <h3 class="todo-name">{{ $todo->name }}</h3>
                        <div class="todo-status">
                            @if($todo->urgent)
                                <span class="status-badge urgent-badge">URGENT</span>
                            @endif
                            @if($todo->done)
                                <span class="status-badge done-badge">DONE</span>
                                @if($todo->date_completed)
                                    <span class="completed-date">Completed: {{ $todo->date_completed->format('M d, Y H:i') }}</span>
                                @endif
                            @endif
                        </div>
                    </div>
                    <div class="todo-actions">
                        <a href="{{ route('todo.show', $todo) }}" class="action-link">View</a>
                        <a href="{{ route('todo.edit', $todo) }}" class="action-link">Edit</a>
                        <form action="{{ route('todo.destroy', $todo) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination">
            {{ $todos->links() }}
        </div>
    </div>
</x-app-layout>