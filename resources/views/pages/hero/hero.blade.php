 @extends('layout.layout')
 @section('content')
<main>
                    <div class="container-fluid px-4 main">
                        @include('alart.message')
                        <h1 class="mt-4">Create main page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('main.page') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>

                        <form action="{{ route('store.hero') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                <div>
                                    <h3>Hero Image</h3>
                                   <img style="height: 30vh" src="{{ asset('images/model.png') }}" class="img-thumbnail" id="prevImage" >
                        <input  class="mt-3" type="file" name="hero_image" oninput="prevImage.src=window.URL.createObjectURL(this.files[0])">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control">
                                </div>
                                <div>
                                    <label for="title2">Title Two</label>
                                    <input type="text" name="title2" id="title2" class="form-control">
                                </div>
                                <div>
                                    <label for="sub_title">Sub Title</label>
                                    <input type="text" name="sub_title" id="sub_title" class="form-control">
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary m-5">
                        </form>
                       
                </main>
 @endsection



