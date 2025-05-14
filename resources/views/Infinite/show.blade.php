<x-layout>
    <h2>{{ $Infinite->name }}</h2>

    <div class="p-4 bg-gray-200 rounded">
        <p><strong>Location:</strong> {{ $Infinite->location ?? 'N/A' }}</p>
        <p><strong>Bio:</strong> {{ $Infinite->bio ?? 'N/A' }}</p>
     </div>


    <div class="px-4 pb-4 my-4 bg-white border-2 border-dashed rounded">
        <h3 class="text-lg font-semibold">Dojo Information</h3>
        <p><strong>Dojo Name:</strong>{{ $Infinite->dojo->name ?? 'N/A' }}</p>
        <p><strong>Location:</strong>{{ $Infinite->dojo->location ?? 'N/A' }}</p>
        <p><strong>Description:</strong> {{ $Infinite->dojo->description ?? 'N/A' }}</p>
    </div>

    <form action="{{  route('Infinite.destroy', $Infinite->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="my-4 btn">Delete Infinite</button>
    </form>

</x-layout>
