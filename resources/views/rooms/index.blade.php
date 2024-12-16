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
                            <label>Room Name<input type="text" class="form-control" name="name" required></label>
                        </div>

                        <div class="col-md-6">
                            <label>Description<input type="text" class="form-control" name="description"></label>
                        </div>

                        <div class="col-md-6">
                            <label>Image <input type="file" class="form-control" name="image"></label>
                        </div>

                        <div class="col-md-6">
                            <label>Qty<input type="number" class="form-control" name="qty" required></label>
                        </div>

                        <div class="col-md-6">
                            <label>Hotels
                                <select name="hotel_id" id="hotel_id" class="form-control" required>
                                    <option value="">Select a Hotel</option>
                                    @foreach ($hotels as $key => $name )
                                        <option value="{{ $key}}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label>Status</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="">Please Select</option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Register">
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
                        <th scope="col">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($rooms as $key => $room)
                    <tr>
                        <td scope="col">{{ ++$key }}</td>
                        <td scope="col">{{ $room->name }}</td>
                        <td scope="col">{{ $room->description }}</td>
                        <td scope="col">
                            @if ($room->image)
                                <img src="{{ asset('storage/' . $room->image) }}" width="50" height="50" class="img img-responsive" />
                            @else
                                No Image
                            @endif
                        </td>
                        <td scope="col">{{ $room->qty }}</td>
                        <td scope="col">{{ $room->hotel->name ?? 'N/A' }}</td>
                        <td scope="col">{{ $room->status == 1 ? 'Active' : 'Inactive' }}</td>

                        <td scope="col">
                            <a href="{{ route('rooms.edit', $room->id) }}">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </button>
                            </a>

                            <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
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
