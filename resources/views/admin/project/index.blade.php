@extends('admin.main')

@section('title')
<div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
  <div class="mr-6">
    <h1 class="text-4xl font-semibold mb-2">Projects</h1>
  </div>
  <div class="flex flex-wrap items-start justify-end -mb-3">
    <a href="{{route('admin.project.create')}}" class="inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-purple-700 focus:bg-blue-700 rounded-md ml-6 mb-3">
      <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
      </svg>
      Create project
    </a>
  </div>
</div>    
@endsection

@section('content')
<section class="w-full">
  <table class="table-fixed w-full">
    <thead>
      <tr class="text-left">
        <th >Title</th>
        <th>Description</th>
        <th>Link</th>
        <th>Edit/Delete</th>
      </tr>
    </thead>
    <tbody >
      @foreach ($projects as $project)
        <tr class="text-left border border-t-2 border-r-0 border-l-0 border-b-0 border-gray border-solid">
          <td>{{$project->title}}</td>
          <td>{{$project->description}}</td>
          <td>{{$project->link}}</td>
          <td class="flex-initial justify-start items-start">
            <a href="{{route('admin.project.edit', $project->id)}}" class="inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-purple-700 focus:bg-blue-700 rounded-md ">Edit</a>
            <form style="display:inline" action="{{route('admin.project.destroy', $project->id)}}" method="post">
            @method('DELETE')
            @csrf
            <button class="inline-flex px-5 py-3 text-white bg-red-600 hover:bg-purple-700 focus:bg-red-700 rounded-md " type="submit">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
      

    </tbody>
  </table>
</section>
@endsection