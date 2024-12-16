@extends('layouts.app')

@section('content')

<div class="container">
    <h3 align="center" class="mt-5">Room Management</h3>
    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-8">
            <div class="form-area">
                <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Room Name<input type="text" class="form-control" name="name"></label>
                        </div>

                        <div class="col-md-6">
                            <label>Description<input type="text" class="form-control" name="description"></label>
                        </div>

                        <div class="col-md-6">
                            <label>Image <input type="file" class="form-control" name="image"></label>
                        </div>

                        <div class="col-md-6">
                            <label>Qty<input type="number" class="form-control" name="qty"></label>
                        </div>

                        <div class="col-md-6">
                            <label>Hotels
                                <select name="hotel_id" id="hotel_id" class="form-control">
                                    @foreach ($hotels as $id => $hotel)
                                        <option  value="{{ $id }}">{{ $name }}</option>
                                    @endforeach

                                </select>
                            </label>
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
                        <th scope="col">Room Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Hotels</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($rooms as $key => $room)


                    <tr>
                        <td scope="col">{{ ++$key }}</td>
                        <td scope="col">{{ $room->name }}</td>
                        <td scope="col">{{ $room->description }}</td>
                        <td scope="col">
                            <img src="{{ asset('storage/' . $room->image) }}" width="50" height="50" class="img img-responsive"/>
                        </td>
                        <td scope="col">{{ $room->qty }}</td>

                        <td scope="col">{{ $room->hotels->name }}</td>

                        <td scope="col">
                            <a href="">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil-square-0" aria-hidden="true"></i> Edit
                                </button>
                            </a>

                            <form action="" method="POST" style="display: inline">
                                @csrf
                                <button class="btn btn-danger btn-sm" type="submit">
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
