@extends('admin.main')

@section('title')
<div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
  <div class="mr-6">
    <h1 class="text-4xl font-semibold mb-2">Create stack</h1>
  </div>
  
</div>    
@endsection

@section('content')
<section class="w-full">
  <form action="{{route('admin.stack.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-6">
      @if($errors->has('title'))
          <span class="text-red-700">{{$errors->first('title')}}</span>
      @endif
      <input type="text" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" value="{{old('title')}}" placeholder="Title" name="title">
    </div>
    <div class="form-group mb-6">
      @if($errors->has('image'))
          <span class="text-red-700">{{$errors->first('image')}}</span>
      @endif
      <input type="file" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" value="{{old('image')}}"  placeholder="Image" name="image">
    </div>

    
    <button type="submit" class="
      w-full
      px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out">Create</button>
  </form>
</section>
@endsection