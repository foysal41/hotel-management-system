@extends('layouts.app')

@section('content')

<div class="container">
    <h3 align="center" class="mt-5">Hotel Management</h3>
    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-8">
            <div class="form-area">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Hotel Name<input type="text" class="form-control" name="name"></label>
                        </div>
                        <div class="col-md-6">
                            <label>Image <input type="file" class="form-control" name="image"></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>description<input type="text" class="form-control" name="description"></label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label>Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">Please Select</option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="register">
                        </div>
                    </div>
                </form>
            </div>


            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Hotel Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($hotels as $key => $hotel)


                    <tr>
                        <td scope="col">{{ ++$key }}</td>
                        <td scope="col">{{ $hotel->name }}</td>
                        <td scope="col">
                            <img src="{{ asset('storage/' . $hotel->image) }}" width="250" height="250" class="img img-responsive"/>
                        </td>
                        <td scope="col">{{ $hotel->description }}</td>
                        <td scope="col">
                            <a href="">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil-square-0" aria-hidden="true"></i> Edit
                                </button>
                            </a>

                            <form action="" method="POST" style="display: inline">
                                @csrf
                                <button class="btn btn-danger bnt-sm" type="submit">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
