 @extends('layout.layout')
 @section('content')
<main>
                    <div class="container-fluid px-4 main">
                         @include('alart.message')
                        <h1 class="mt-4">List Of Woman jacket</h1>
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
                                @if (count($woman)>0)
                                @foreach ($woman as $woman)
                                     <tr>
                                    <th scope="row">{{ $woman->id }}</th>
                                    <td>{{ $woman->title }}</td>
                                    <td>{{ $woman->sub_title }}</td>
                                    <td>${{ $woman->price}}</td>
                                    <td>
                                        <img style="height: 10vh" src="{{ url($woman->woman_image) }}" alt="">
                                    </td>
                                    <td>
                                        <div class="row d-flex">
          <div class="col-sm-2">
            <a class="btn btn-primary" href="{{ route('edit.woman',$woman->id) }}">Edit</a>
          </div>
          <div class="col-sm-2">
            <form action="{{ route('woman.delete',$woman->id) }}" method="POST">
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



