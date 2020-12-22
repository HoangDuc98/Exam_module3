@extends('layouts.master')
@section('content')
    <div class="cod-12 col-md-12">

        <h3>Edit new user</h3>
        <form action="{{ route('agency.edit', $agency->id) }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Tên đại lý</label>
                <input type="text" value="{{ $agency->name }}" name="name" class="form-control " >
                @error('name')
                <p class="text-danger">{{ $messages }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Điện thoại</label>
                <input type="text" value="{{ $agency->phone}}"  class="form-control " >
                                @error('phone')
                                <p class="text-danger">{{ $messages }}</p>
                                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" value="{{ $agency->email }}" name="email" class="form-control " >
                @error('email')
                <p class="text-danger">{{ $messages }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Địa Chỉ</label>
                <input type="text" value="{{ $agency->address}}"  class="form-control @error('name') is-invalid @enderror" >
                                @error('address')
                                <p class="text-danger">{{ $messages }}</p>
                                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Tên người đại lý</label>
                <input type="text" value="{{ $agency->manager}}" name="name" class="form-control " >
                                @error('manager')
                                <p class="text-danger">{{ $messages }}</p>
                                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Trạng thái</label>
                <select name="" id="">
                    <option @if($agency->status == 'Hoạt động') selected @endif>Hoạt động</option>
                    <option @if($agency->status == 'Ngừng hoạt động') selected @endif>Ngừng hoạt động</option>
                </select>

            </div>
            <div class="mb-3 form-group">
                <button type="submit" class="btn btn-success">Submit</button>
                <a class="btn btn-info" href="{{ route('agency.index') }}">Cancel</a>
            </div>
        </form>
    </div>
@endsection
