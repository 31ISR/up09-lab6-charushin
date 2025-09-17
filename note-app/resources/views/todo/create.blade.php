<x-layout>
    <link rel="stylesheet" href="style.css">
    <div>
        <h1>Create new todo</h1>
        <form action="{{ route('todo.store') }}" method="POST">
            @csrf
            <textarea name="todo" rows="10" placeholder="Enter your note here"></textarea>
            <div>
                <a href="{{ route('todo.index') }}">Cancel</a>
                <button>Submit</button>
            </div>
        </form>
    </div>
</x-layout>