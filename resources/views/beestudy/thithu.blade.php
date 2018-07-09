@extends ('layouts.master')
    
    @section ('head.title')

        Thi thử

    @stop
    @include('partials.navbar')
    @section ('body.content')
        <body>
            <div style="background-color: #dcdcdc; height: 650px;">
                <div class="container" style="padding-top: 40px; padding-bottom: 40px; ">
                    <div class="row">
                        <div class="col-8" style="background-color: #ffffff; height: 400px; border-right: 20px solid #dcdcdc;">
                            <div class="container" style="border-bottom: 1px solid #dcdcdc;">
                                <h4 style="color: #6f7272; font-family: Arial; text-align: center; padding-top: 20px;">Lựa chọn bài làm cụ thể với trình độ của bạn</h4>
                            </div>
                            <div class="container" style="padding-top: 20px;">
                                <form action="">
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Trình độ :</label>
                                        <div class="col-sm-10">
                                          <select id="inputState" class="form-control">
                                            <option selected>Trung bình</option>
                                            <option> Giỏi</option>
                                            <option value="">Yếu</option>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Môn thi :</label>
                                        <div class="col-sm-10">
                                          <select id="inputState" class="form-control">
                                            <option selected>Toán</option>
                                            <option> Lý</option>
                                            <option value="">Hoá</option>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Thời gian làm bài :</label>
                                        <div class="col-sm-10">
                                          <select id="inputState" class="form-control">
                                            <option selected>150 phút</option>
                                            <option> 120 phút</option>
                                            <option value="">90 phút</option>
                                            <option value="">45 phút</option>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="form-group" style="width: 100px; padding-left: 43%;">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style=" width:90px;">Vào thi</button>
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                          <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Thi thử toán 2018</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                <ul>
                                                    <li>
                                                        Đề thi gồm 40 câu hỏi. Thời gian làm bài chính thức là 50 phút.
                                                    </li>
                                                    <li>Sau khi nộp bài, bạn không thể làm lại kể cả chưa hết giờ, vì vậy hãy cân nhắc trước khi nộp.</li>
                                                    <li>
                                                        Bạn nên chuẩn bị sẵn giấy nháp, bút, máy tính và các dụng cụ học tập hỗ trợ việc làm bài.
                                                    </li>
                                                    <li>
                                                        Chúng tôi khuyến cáo bạn không sử dụng sách và tài liệu trong khi làm bài.
                                                    </li>
                                                </ul>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Quay lại</button>
                                                <button type="button" class="btn btn-primary">Sẵn Sàng !</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                        <div class="col-4" style="background-color: #ffffff; border-radius: 5px;">
                            
                        </div>
                    </div>
                </div>
                <div class="container" style="background-color: #ffffff; height: 150px; border-radius: 5px;">
                    <h3 style="padding-top: 60px; text-align: center;">Trên con đường thành công không có dấu chân của kẻ lười biếng</h3>
                </div>
            </div>
        </body>
    @stop
    