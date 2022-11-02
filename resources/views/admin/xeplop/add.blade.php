@extends('Admin.templates.layout')
@section('content')
    {{-- hiển thị massage đc gắn ở session::flash('error') --}}
    @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>{{ Session::get('error') }}</strong>
        </div>
    @endif


    {{-- hiển thị message đc gắn ở session::flash('success') --}}

    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>{{ Session::get('success') }}</strong>
        </div>
    @endif
    <form class="p-5" action=" {{ route('route_BE_Admin_Add_Xep_Lop') }}" method="post" enctype="multipart/form-data">
        <div class="row">
            @csrf
            <div class="col-6">

                

                <div class="mb-3">
                    <label for="chuyenBay" class="form-label">Ngày đăng ký</label>
                    <input value="{{ old('ngay_dang_ky') ?? request()->ngay_dang_ky }}" type="date" name="ngay_dang_ky"
                        class="form-control" id="" aria-describedby="emailHelp">
                    {{-- hiển thị lỗi validate -  funciton message trong file DanhMucRequest --}}
                    @error('ngay_dang_ky')
                        <span style="color: red"> {{ $message }} </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="chuyenBay" class="form-label">Lớp học</label>
                    <select class="form-control" name="id_lop" id="">
                        @foreach ($lophoc as $item)
                            <option value="{{$item->id}}">{{ $item->ten_lop }}</option>
                        @endforeach
                    </select>
                    @error('id_lopc')
                        <span style="color: red"> {{ $message }} </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="chuyenBay" class="form-label">Giảng Viên</label>
                    <select class="form-control" name="id_user" id="">
                        @foreach ($giangvien as $item)
                            <option value="{{ $item->id }}">{{ $item->ten_giang_vien }}</option>
                        @endforeach
                    </select>
                    @error('id_user')
                        <span style="color: red"> {{ $message }} </span>
                    @enderror
                </div>
            </div>

            <div class="col-6">
                <div class="mb-3">
                    <label for="" class="form-label">Phòng học</label>
                    <select class="form-control" name="id_phong_hoc" id="">
                        @foreach ($phonghoc as $item)
                            <option value="{{ $item->id }}">{{ $item->ten_phong }}</option>
                        @endforeach
                    </select>
                    @error('gia')
                        <span style="color: red"> {{ $message }} </span>
                    @enderror
                </div>


            </div>

        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>

    </form>
@endsection
