 @extends('layout.layout')
 @section('content')
<main>
                    <div class="container-fluid px-4 main">
                         @include('alart.message')
                        <h1 class="mt-4">List of man</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('main.page') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ol>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title </th>
                                <th scope="col">Sub Title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Hero Image</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if (count($man)>0)
                                @foreach ($man as $man)
                                     <tr>
                                    <th scope="row">{{ $man->id }}</th>
                                    <td>{{ $man->title }}</td>
                                    <td>{{ $man->sub_title }}</td>
                                    <td>${{ $man->price}}</td>
                                    <td>
                                        <img style="height: 10vh" src="{{ url($man->man_image) }}" alt="">
                                    </td>
                                    <td>
                                        <div class="row d-flex">
          <div class="col-sm-2">
            <a class="btn btn-primary" href="{{ route('edit.man',$man->id) }}">Edit</a>
          </div>
          <div class="col-sm-2">
            <form action="{{ route('delete.man',$man->id) }}" method="POST">
              @csrf
              @method('delete')
              <input type="submit" name="submit" value="Delete" class="btn btn-danger">
            </form>
          </div>
        </div>
                                    </td>
                                </tr>
                                @endforeach
                                    
                                @endif
                               
                            </tbody>
                        </table>
                </main>
 @endsection



