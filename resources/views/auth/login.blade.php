<x-layout>
    <h1 class="mb-4 text-3xl font-bold text-center">Welcome Back</h1>
     <form action="{{ route('login') }}" method="POST">
        @csrf

        <h2>Log In to Your Account</h2>

        <label for="email">Email</label>
        <input
         type="email"
          name="email"
           required
           value="{{ old('email') }}"
           >


        <label for="password">Password</label>
        <input
        type="password"
         name="password"
          required
          >
        <label for="remember_me">
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember Me
        </label>

        <button type="submit" class="mt-4 btn">login</button>

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
