@extends ('layouts.master')
    
    @section ('head.title')

        Đăng kí

    @stop
    @include('partials.navbar')
    @section ('body.content')
        <body>
            <div style="padding: 20px 20px;">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-6">
                            <h1>
                                Đăng Kí Tài Khoản Mới
                            </h1>
                            <div>
                                <p style="font-size: 18px; color: #6f7272;"> Hãy tạo tài khoản để thi thử và nhận tài liệu học tập từ Beestudy bạn nhé ! </p>
                            </div>
                            <form action="/dang-ki" method="post">
                                <div class="form-group">
                                    <label>Họ tên</label>
                                    <input type="text" class="form-control">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" class="form-control">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input type="text" class="form-control">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu (xác nhận)</label>
                                    <input type="text" class="form-control">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                            Tôi đồng ý với <a href="" style="color: #6f7272;"> điều khoản sử dụng </a>
                                        </label>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        Đăng kí
                                    </button>
                                    <span class="btn btn-pure">
                                        <span class="text-muted">Bạn đã có tài khoản?</span>
                                        <a href="" style="color: #6f7272;"> Đăng nhập </a>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    @stop