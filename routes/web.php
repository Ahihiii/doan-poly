<?php

use App\Http\Controllers\Admin\CaHocController;
use App\Http\Controllers\Admin\DanhMucKhoaHoc;
use App\Http\Controllers\Admin\KhoahocController;
use App\Http\Controllers\Admin\KhuyenMaiController;
use App\Http\Controllers\Admin\LopController;
use App\Http\Controllers\Admin\XepLopController;
use App\Http\Controllers\Admin\PhongHocController;
use App\Http\Controllers\Admin\PhuongThucThanhToan;
use App\Http\Controllers\Admin\VaiTroController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Resources\LopCollection;
use App\Models\VaiTro;
use Illuminate\Support\Facades\Route;
use LDAP\ResultEntry;
use Symfony\Component\Routing\RouterInterface;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [\App\Http\Controllers\Client\HomeController::class, 'index'])->name('home');
Route::get('/coures', [\App\Http\Controllers\Client\KhoaHocController::class, 'index'])->name('client_khoa_hoc');
Route::get('/lien-he', [\App\Http\Controllers\Client\LienHeController::class, 'index'])->name('client_lien_he');
Route::get('/giang-vien', [\App\Http\Controllers\Client\GiangVienController::class, 'index'])->name('client_giang_vien');
Route::get('/gioi-thieu', [\App\Http\Controllers\Client\GioiThieuController::class, 'index'])->name('client_gioi_thieu');
Route::get('/chi-tiet-khoa-hoc/{id}', [\App\Http\Controllers\Client\KhoaHocController::class, 'chiTietKhoaHoc'])->name('client_chi_tiet_khoa_hoc');
Route::get('/chi-tiet-giang-vien',[\App\Http\Controllers\Client\GiangVienController::class,'chiTietGiangVien'])->name('client_chi_tiet_giang_vien');

<<<<<<< HEAD

// ================ code route phần admin
Route::prefix('/admin')->group(function () {

    // khóa học
    Route::get('/khoa-hoc', [KhoahocController::class, 'index'])->name('route_BE_Admin_Khoa_Hoc'); // hiển thị danh sách
    Route::match(['get', 'post'], '/add-khoa-hoc',   [KhoahocController::class, 'store'])->name('route_BE_Admin_Add_Khoa_Hoc'); // hiển thi form để thêm dữ liệu và insert dữ liệu vào data
    Route::get('/khoa-hoc-delete/{id}', [KhoahocController::class, 'destroy'])->name('route_BE_Admin_Xoa_Khoa_Hoc');
    Route::get('/khoa-hoc-chi-tiet/{id}', [KhoahocController::class, 'edit'])->name('route_BE_Admin_Chi_Tiet_Khoa_Hoc'); // hiển thị chi tiết bản ghi
    Route::post('/khoa-hoc-update', [KhoahocController::class, 'update'])->name('route_BE_Admin_Update_Khoa_Hoc');
    // khóa học


    // xếp lớp

    Route::prefix('/xep-lop')->name('route_BE_Admin_')->group(function () {

        Route::get('/', [XepLopController::class, 'index'])->name('Xep_Lop'); // hiển thị danh sách
        Route::get('/xoa/{id}', [XepLopController::class, 'destroy'])->name('Xoa_Xep_Lop');
        Route::get('/edit/{id}', [XepLopController::class, 'edit'])->name('Edit_Xep_Lop');
        Route::get('/detail-lop/{id_xep_lop}', [LopController::class, 'show'])->name('Detail_Xep_Lop');
        Route::post('/update', [XepLopController::class, 'update'])->name('Update_Xep_Lop');
        Route::match(['get', 'post'], '/add', [XepLopController::class, 'store'])->name('Add_Xep_Lop');
    });


    // danh muc khoa hoc
    Route::get('/danh-muc', [DanhMucKhoaHoc::class, 'index'])->name('route_BE_Admin_Danh_Muc_Khoa_Hoc'); // hiển thị danh sách
    Route::match(['get', 'post'], '/danh-muc-add', [DanhMucKhoaHoc::class, 'store'])->name('route_Admin_BE_Add_Danh_Muc'); // hiển thị danh sách
    Route::get('/danh-muc-edit/{id}', [DanhMucKhoaHoc::class, 'edit'])->name('route_Admin_BE_Edit_Danh_Muc'); // hiển thị danh sách
    Route::post('/danh-muc-update', [DanhMucKhoaHoc::class, 'update'])->name('route_Admin_BE_Update_Danh_Muc'); // hiển thị danh sách
    Route::get('/danh-muc-xoa/{id}', [DanhMucKhoaHoc::class, 'destroy'])->name('route_Admin_BE_Xoa_Danh_Muc'); // hiển thị danh sách


    // phòng học
    Route::get('/phong-hoc', [PhongHocController::class, 'index'])->name('route_BE_Admin_Phong_Hoc');
    Route::match(['get', 'post'], '/phong-hoc-add', [PhongHocController::class, 'store'])->name('route_BE_Admin_Add_Phong_Hoc');
    Route::get('/phong-hoc-edit/{id}', [PhongHocController::class, 'edit'])->name('route_BE_Admin_Edit_Phong_Hoc');
    Route::post('/phong-hoc-update', [PhongHocController::class, 'update'])->name('route_BE_Admin_Update_Phong_Hoc');
    Route::get('/phong-hoc-xoa/{id}', [PhongHocController::class, 'destroy'])->name('route_BE_Admin_Xoa_Phong_Hoc');


    // vai tro
    Route::get('vai-tro', [VaiTroController::class, 'index'])->name('route_BE_Admin_Vai_Tro');
    Route::get('vai-tro-edit/{id}', [VaiTroController::class, 'edit'])->name('route_BE_Admin_Edit_Vai_Tro');
    Route::post('vai-tro-update', [VaiTroController::class, 'update'])->name('route_BE_Admin_Update_Vai_Tro');
    Route::get('vai-tro-xoa/{id}', [VaiTroController::class, 'destroy'])->name('route_BE_Admin_Xoa_Vai_Tro');
    Route::match(['get', 'post'], 'vai-tro-add', [VaiTroController::class, 'store'])->name('route_BE_Admin_Add_Vai_Tro');


    // lớp học
    Route::prefix('lop-hop')->name('route_BE_Admin_')->group(function () {

        Route::get('/list', [LopController::class, 'index'])->name('List_Lop');
        Route::get('/xoa/{id}', [LopController::class, 'destroy'])->name('Xoa_Lop');
        Route::get('/edit/{id}', [LopController::class, 'edit'])->name('Edit_Lop');
        Route::post('/update', [LopController::class, 'update'])->name('Update_Lop');
        Route::match(['get', 'post'], '/add', [LopController::class, 'store'])->name('Add_Lop');
    });

    // ca học
    Route::prefix('/ca-hoc')->name('route_BE_Admin_')->group(function () {
        Route::get('/list', [CaHocController::class, 'index'])->name('Ca_Hoc');
        Route::get('/xoa/{id}', [CaHocController::class, 'destroy'])->name('Xoa_Ca_Hoc');
        Route::get('/edit/{id}', [CaHocController::class, 'edit'])->name('Edit_Ca_Hoc');
        Route::post('/update', [CaHocController::class, 'update'])->name('Update_Ca_Hoc');
        Route::match(['get', 'post'], '/add', [CaHocController::class, 'store'])->name('Add_Ca_Hoc');
    });

    //khuyến mại
    Route::prefix('/khuyen-mai')->name('route_BE_Admin_')->group(function () {
        Route::get('/list', [KhuyenMaiController::class, 'index'])->name('Khuyen_Mai');
        Route::get('/xoa/{id}', [KhuyenMaiController::class, 'destroy'])->name('Xoa_Khuyen_Mai');
        Route::get('/edit/{id}', [KhuyenMaiController::class, 'edit'])->name('Edit_Khuyen_Mai');
        Route::post('/update', [KhuyenMaiController::class, 'update'])->name('Update_Khuyen_Mai');
        Route::match(['get', 'post'], '/add', [KhuyenMaiController::class, 'store'])->name('Add_Khuyen_Mai');
    });


    //khuyến mại
    Route::prefix('/phuong-thuc-thanh-toan')->name('route_BE_Admin_')->group(function () {
        Route::get('/list', [PhuongThucThanhToan::class, 'index'])->name('Phuong_Thuc_Thanh_Toan');
        Route::get('/xoa/{id}', [PhuongThucThanhToan::class, 'destroy'])->name('Xoa_Phuong_Thuc_Thanh_Toan');
        Route::get('/edit/{id}', [PhuongThucThanhToan::class, 'edit'])->name('Edit_Phuong_Thuc_Thanh_Toan');
        Route::post('/update', [PhuongThucThanhToan::class, 'update'])->name('Update_Phuong_Thuc_Thanh_Toan');
        Route::match(['get', 'post'], '/add', [PhuongThucThanhToan::class, 'store'])->name('Add_Phuong_Thuc_Thanh_Toan');
    });


    // admin quản lý tài khoản

    Route::prefix('/tai-khoan')->name('route_BE_Admin_')->group(function () {
        Route::get('/list', [\App\Http\Controllers\Admin\TaiKhoanController::class, 'index'])->name('Tai_Khoan');
        Route::get('/xoa/{id}', [\App\Http\Controllers\Admin\TaiKhoanController::class, 'destroy'])->name('Xoa_Tai_Khoan');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\TaiKhoanController::class, 'edit'])->name('Edit_Tai_Khoan');
        Route::post('/update', [\App\Http\Controllers\Admin\TaiKhoanController::class, 'update'])->name('Update_Tai_Khoan');
        Route::match(['get', 'post'], '/add', [\App\Http\Controllers\Admin\TaiKhoanController::class, 'store'])->name('Add_Tai_Khoan');
    });
});





// ====================== code route phần client 

Route::prefix('/')->name('route_FE_Home')->group(function () {

    Route::get('/', [ClientController::class, 'index'])->name('route_FE_Home');
    Route::get('/khoa_hoc', [ClientController::class, 'khoa_hoc'])->name('route_FE_Khoa_Hoc');
    Route::get('/lien-he', [ClientController::class, 'lien_he'])->name('route_FE_Lien_He');
    Route::get('/giang-vien', [ClientController::class, 'giang_vien'])->name('route_FE_Giang_Vien');
    Route::get('/gioi-thieu', [ClientController::class, 'gioi_thieu'])->name('route_FE_Gioi_Thieu');
    Route::get('/khoa_hoc_chi_tiet/{id}', [ClientController::class, 'khoa_hoc_chi_tiet'])->name('route_FE_Khoa_Hoc_Chi_Tiet');
});
=======


Route::prefix('/khoa-hoc')->name('route_BE_Admin_')->group(function () {
// khóa học
Route::get('/', [KhoahocController::class, 'index'])->name('Khoa_Hoc'); // hiển thị danh sách
Route::match(['get', 'post'], '/add-khoa-hoc',   [KhoahocController::class, 'store'])->name('Add_Khoa_Hoc'); // hiển thi form để thêm dữ liệu và insert dữ liệu vào data
Route::get('/khoa-hoc-delete/{id}', [KhoahocController::class, 'destroy'])->name('Xoa_Khoa_Hoc');
Route::get('/khoa-hoc-chi-tiet/{id}', [KhoahocController::class, 'edit'])->name('Chi_Tiet_Khoa_Hoc'); // hiển thị chi tiết bản ghi
Route::post('/khoa-hoc-update', [KhoahocController::class, 'update'])->name('Update_Khoa_Hoc');
// khóa học
});

// xếp lớp

Route::prefix('/xep-lop')->name('route_BE_Admin_')->group(function () {

    Route::get('/', [XepLopController::class, 'index'])->name('Xep_Lop'); // hiển thị danh sách
    Route::get('/xoa/{id}', [XepLopController::class, 'destroy'])->name('Xoa_Xep_Lop');
    Route::get('/edit/{id}', [XepLopController::class, 'edit'])->name('Edit_Xep_Lop');
    Route::post('/update', [XepLopController::class, 'update'])->name('Update_Xep_Lop');
    Route::match(['get', 'post'], '/add', [XepLopController::class, 'store'])->name('Add_Xep_Lop');
});


// danh muc khoa hoc
Route::get('/danh-muc', [DanhMucKhoaHoc::class, 'index'])->name('route_BE_Admin_Danh_Muc_Khoa_Hoc'); // hiển thị danh sách
Route::match(['get', 'post'], '/danh-muc-add', [DanhMucKhoaHoc::class, 'store'])->name('route_Admin_BE_Add_Danh_Muc'); // hiển thị danh sách
Route::get('/danh-muc-edit/{id}', [DanhMucKhoaHoc::class, 'edit'])->name('route_Admin_BE_Edit_Danh_Muc'); // hiển thị danh sách
Route::post('/danh-muc-update', [DanhMucKhoaHoc::class, 'update'])->name('route_Admin_BE_Update_Danh_Muc'); // hiển thị danh sách
Route::get('/danh-muc-xoa/{id}', [DanhMucKhoaHoc::class, 'destroy'])->name('route_Admin_BE_Xoa_Danh_Muc'); // hiển thị danh sách


// phòng học
Route::get('/phong-hoc', [PhongHocController::class, 'index'])->name('route_BE_Admin_Phong_Hoc');
Route::match(['get', 'post'], '/phong-hoc-add', [PhongHocController::class, 'store'])->name('route_BE_Admin_Add_Phong_Hoc');
Route::get('/phong-hoc-edit/{id}', [PhongHocController::class, 'edit'])->name('route_BE_Admin_Edit_Phong_Hoc');
Route::post('/phong-hoc-update', [PhongHocController::class, 'update'])->name('route_BE_Admin_Update_Phong_Hoc');
Route::get('/phong-hoc-xoa/{id}', [PhongHocController::class, 'destroy'])->name('route_BE_Admin_Xoa_Phong_Hoc');


// vai tro
Route::get('vai-tro', [VaiTroController::class, 'index'])->name('route_BE_Admin_Vai_Tro');
Route::get('vai-tro-edit/{id}', [VaiTroController::class, 'edit'])->name('route_BE_Admin_Edit_Vai_Tro');
Route::post('vai-tro-update', [VaiTroController::class, 'update'])->name('route_BE_Admin_Update_Vai_Tro');
Route::get('vai-tro-xoa/{id}', [VaiTroController::class, 'destroy'])->name('route_BE_Admin_Xoa_Vai_Tro');
Route::match(['get', 'post'], 'vai-tro-add', [VaiTroController::class, 'store'])->name('route_BE_Admin_Add_Vai_Tro');


// lớp học
Route::prefix('lop-hop')->name('route_BE_Admin_')->group(function () {

    Route::get('/list', [LopController::class, 'index'])->name('List_Lop');
    Route::get('/xoa/{id}', [LopController::class, 'destroy'])->name('Xoa_Lop');
    Route::get('/edit/{id}', [LopController::class, 'edit'])->name('Edit_Lop');
    Route::post('/update', [LopController::class, 'update'])->name('Update_Lop');
    Route::match(['get', 'post'], '/add', [LopController::class, 'store'])->name('Add_Lop');
});

// ca học
Route::prefix('/ca-hoc')->name('route_BE_Admin_')->group(function () {
    Route::get('/list', [CaHocController::class, 'index'])->name('Ca_Hoc');
    Route::get('/xoa/{id}', [CaHocController::class, 'destroy'])->name('Xoa_Ca_Hoc');
    Route::get('/edit/{id}', [CaHocController::class, 'edit'])->name('Edit_Ca_Hoc');
    Route::post('/update', [CaHocController::class, 'update'])->name('Update_Ca_Hoc');
    Route::match(['get', 'post'], '/add', [CaHocController::class, 'store'])->name('Add_Ca_Hoc');
});

//khuyến mại
Route::prefix('/khuyen-mai')->name('route_BE_Admin_')->group(function () {
    Route::get('/list', [KhuyenMaiController::class, 'index'])->name('Khuyen_Mai');
    Route::get('/xoa/{id}', [KhuyenMaiController::class, 'destroy'])->name('Xoa_Khuyen_Mai');
    Route::get('/edit/{id}', [KhuyenMaiController::class, 'edit'])->name('Edit_Khuyen_Mai');
    Route::post('/update', [KhuyenMaiController::class, 'update'])->name('Update_Khuyen_Mai');
    Route::match(['get', 'post'], '/add', [KhuyenMaiController::class, 'store'])->name('Add_Khuyen_Mai');
});


//khuyến mại
Route::prefix('/phuong-thuc-thanh-toan')->name('route_BE_Admin_')->group(function () {
    Route::get('/list', [PhuongThucThanhToan::class, 'index'])->name('Phuong_Thuc_Thanh_Toan');
    Route::get('/xoa/{id}', [PhuongThucThanhToan::class, 'destroy'])->name('Xoa_Phuong_Thuc_Thanh_Toan');
    Route::get('/edit/{id}', [PhuongThucThanhToan::class, 'edit'])->name('Edit_Phuong_Thuc_Thanh_Toan');
    Route::post('/update', [PhuongThucThanhToan::class, 'update'])->name('Update_Phuong_Thuc_Thanh_Toan');
    Route::match(['get', 'post'], '/add', [PhuongThucThanhToan::class, 'store'])->name('Add_Phuong_Thuc_Thanh_Toan');
});


// admin quản lý tài khoản

Route::prefix('/tai-khoan')->name('route_BE_Admin_')->group(function () {
    Route::get('/list', [\App\Http\Controllers\Admin\TaiKhoanController::class, 'index'])->name('Tai_Khoan');
    Route::get('/xoa/{id}', [\App\Http\Controllers\Admin\TaiKhoanController::class, 'destroy'])->name('Xoa_Tai_Khoan');
    Route::get('/edit/{id}', [\App\Http\Controllers\Admin\TaiKhoanController::class, 'edit'])->name('Edit_Tai_Khoan');
    Route::post('/update', [\App\Http\Controllers\Admin\TaiKhoanController::class, 'update'])->name('Update_Tai_Khoan');
    Route::match(['get', 'post'], '/add', [\App\Http\Controllers\Admin\TaiKhoanController::class, 'store'])->name('Add_Tai_Khoan');
});

>>>>>>> fb3440ba493f84b4ecf05398afc6a327e7c07519
// client đăng ký hoặc đăng nhập tài khoản
Route::match(['post', 'get'], '/login', [\App\Http\Controllers\Auth\AuthController::class, 'store'])->name('route_FE_Client_Login');
