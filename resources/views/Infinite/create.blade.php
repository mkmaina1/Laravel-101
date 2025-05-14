<x-layout>
    <form action="{{ route('Infinite.store') }}" method="POST">
  <h2>Create a New Infinite Network</h2>
    @csrf

  <!-- Infinite Name -->
  <label for="name">Infinite Network Name:</label>
  <input
    type="text"
    id="name"
    name="name"
    value="{{ old('name') }}"
    required
  >

  <!-- Infinite Strength -->
  <label for="location">Infinite Network location (city):</label>
  <input
    type="text"
    id="location"
    name="location"
    value="{{ old('location') }}"
    required
  >

  <!-- Infinite Bio -->
  <label for="bio">Biography:</label>
  <textarea
    rows="5"
    id="bio"
    name="bio"
    required
  >{{ old('bio') }}</textarea>

  <!-- select a dojo -->
  <label for="dojo_id">Dojo:</label>
  <select id="dojo_id" name="dojo_id" required>
    <option value="" disabled selected>Select a dojo</option>
    @foreach ($dojos as $dojo )
    <option value="{{ $dojo->id }}" {{ $dojo->id == old('dojo_id') ? 'selected' : '' }}>
        {{ $dojo->name }}
  </option>
    @endforeach

  </select>

  <button type="submit" class="mt-4 btn">Create Infinite Network</button>

  <!-- validation errors -->
  @if ($errors->any())
      <ul class="px-4 py-2 bg-red-100">
        @foreach ($errors->all() as $error)
          <li class="my-2 text-red-500">{{ $error }}</li>
        @endforeach
      </ul>
  @endif

</form>
</x-layout>
