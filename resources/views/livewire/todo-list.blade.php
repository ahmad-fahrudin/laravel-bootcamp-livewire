<div>
    <div class="max-w-2xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        <div class="mb-4">
            <input type="text" wire:model.blur="todo" placeholder="Todo..."
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            @error('todo')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <button wire:click="add"
                class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600">
                Add Todo
            </button>
        </div>

        <ul class="list-disc pl-5">
            @foreach ($todos as $todo)
                <li class="mb-2">{{ $todo }}</li>
            @endforeach
        </ul>
    </div>
</div>
