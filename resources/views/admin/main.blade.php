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
  <aside class="flex flex-col" >
    <a href="{{route('admin.home.index')}}" class="inline-flex items-center justify-center h-20 w-full bg-gray-600 hover:bg-gray-500 focus:bg-gray-500">
      <span class="text-white text-4xl ml-2">MP</span>
    </a>
    <div class="flex-grow flex flex-col justify-between text-gray-500 bg-gray-800">
      <nav class="flex flex-col mx-4 my-6 space-y-4">
        <a href="{{route('admin.project.index')}}" class="inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg px-2">
          <span class="ml-2" >Projects</span>
        </a>
        <a href="{{route('admin.stack.index')}}" class="inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg px-2">
          <span class="ml-2" >Stack</span>
        </a>
      </nav>
    </div>
  </aside>
  <div class="flex-grow text-gray-800">
    <header class="flex items-center h-20 px-6 sm:px-10 bg-white">
      <div class="mr-8">
        <h1 class="text-4xl ml-2">Dashboard</h1>
      </div>
      
    </header>
    
    <main class="p-6 sm:p-10 space-y-6">
      
      @yield('title')
      <div class="flex flex-col space-y-1 mt-4">
        @if (session('message'))
          <p class="text-xl text-blue-700 ">{{ session('message') }}</p>
        @endif
      </div>
      @yield('content')

      
    </main>
  </div>
</body>
</html>