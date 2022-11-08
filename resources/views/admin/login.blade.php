<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
</head>

@vite(['resources/scss/admin.css'])
<body class="flex bg-gray-100 min-h-screen">
  <div class="flex-grow text-gray-800">
    <main class="">

      <section class="grid place-items-center h-screen">
        <form action="{{route('login.post')}}" method="POST" class="xl:w-1/5 lg:w-2/5 sm:w-3/5">
          @csrf

          <h3 class="my-4 text-2xl font-semibold text-gray-700">Account Login</h3>

          <div class="flex flex-col space-y-1 mt-4">
            @if (session('message'))
              <p class="text-red-700">{{ session('message') }}</p>
            @endif
          </div>
          <div class="flex flex-col space-y-1 mt-4">
            <div class="flex items-center justify-between">
              <label for="email" class="text-sm font-semibold text-gray-500">Email</label>
            </div>
            <input
              type="email"
              id="email"
              name="email"
              class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200"
              value="{{old('email')}}"
            />
          </div>


          <div class="flex flex-col space-y-1 mt-4">
            <div class="flex items-center justify-between">
              <label for="password" class="text-sm font-semibold text-gray-500">Password</label>
            </div>
            <input
            value="{{old('password')}}"
            name="password"
              type="password"
              id="password"
              class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200"
            />
          </div>

          <button type="submit"
                class="w-full mt-4 px-4 py-2 text-lg font-semibold text-white transition-colors duration-300 bg-blue-500 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-blue-200 focus:ring-4"
              >
                Log in
              </button>

        </form>
      </section>
      
    </main>
  </div>
</body>
</html>