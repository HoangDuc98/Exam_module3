@extends('layouts.master')
@section('content')
    <div class="container">
        @include('core.navbar')
        <div class="cod-12 col-md-12">
            <form action="{{route('agency.store')}}" method="post">
                <h2>Thêm mới đại lý phân phối</h2>

                @csrf
                <div class="mb-3">
                    <label>Mã đại lý</label>
                    <input name="code" class="form-control">
                    @error('code')
                    <p>{{ $messages }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Tên đại lý</label>
                    <input type="text" name="name" class="form-control">
                    @error('name')
                    <p>{{ $messages }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Điện thoại</label>
                    <input name="phone" class="form-control">
                    @error('phone')
                    <p>{{ $messages }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input name="email" class="form-control">
                    @error('email')
                    <p>{{ $messages }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Điạ chỉ</label>
                    <input name="address" class="form-control">
                    @error('address')
                    <p>{{ $messages }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Tên người dùng</label>
                    <input name="manager" class="form-control">
                    @error('manager')
                    <p>{{ $messages }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Trạng thái</label>
                    <select name="status" class="form-control">
                        <option>Hoạt động</option>
                        <option>Ngừng hoạt động</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-info" href="{{route('agency.index')}}">Cancel</a>
            </form>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>

    </body>
    </html>
@endsection
