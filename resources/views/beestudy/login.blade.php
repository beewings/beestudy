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
                                Đăng Nhập
                            </h1>
                            <form action="/dang-nhap" method="post">
                                <div class="form-group">
                                    <label>Email hoặc số điện thoai</label>
                                    <input type="text" class="form-control">
                                    <small class="form-text">
                                        <a href="" class="text-primary"> Quên mật khẩu</a>
                                    </small>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input type="text" class="form-control">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                            Ghi nhớ đăng nhập
                                        </label>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        Đăng nhập
                                    </button>
                                    <span class="btn btn-pure">
                                        <span class="text-muted">Bạn chưa có tài khoản?</span>
                                        <a href="" style="color: #6f7272;"> Đăng kí </a>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    @stop
    