<x-layout>
    <link rel="stylesheet" href="style.css">
    <div>
        <h1>Edit your todo</h1>
        <form action="{{ route('todo.update', $todo) }}" method="POST">
            @csrf
            @method('PUT')
            <textarea name="todo" rows="10" placeholder="Enter your todo here">{{ $todo->todo }}</textarea>
            <div>
                <a href="{{ route('todo.index') }}">Cancel</a>
                <button>Submit</button>
            </div>
        </form>
    </div>
</x-layout>