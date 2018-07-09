@extends ('layouts.master')
    
    @section ('head.title')

        Home

    @stop
    @include('partials.navbar')
    @section ('body.content')
        <body>
            <div class="container" style="background-image: url('/img/customer.jpg'); height: 400px; margin-top: 20px;">
                <h3 style="font-family: Varela Round; color: #e67700; padding-top: 20px; text-align: center;">  Hãy để Beestudy biết bạn giỏi như thế nào? </h3>
                <div class="button" style="border: 1px solid #ffffff; background-color: #e67700;  border-radius: 5px; display: block; margin-right: auto;margin-left: auto; width: 10%; text-align: center;">
                    <a href="" class="btn btn-one" style="color: #ffffff; font-size: 22px; "> Thi ngay</a>
                </div>
            </div>
            <div class="container" style="margin-top: 20px; height: 400px;">

                <div class="row">
                    <div class="col" style="background-color: #f1f3f5;">
                        <img src="/img/31.png" alt="" style="height: 360px; width: 100%;">
                    </div>
                    <div class="col-sm" style="background-color: #f1f3f5;">
                        <ul>
                            <li>Hãy nâng cao trình độ của bạn</li>
                            <li>Hãy học hỏi kinh nghiệm của những người đứng đầu</li>
                        </ul>
                    </div>

                    <div class="col-sm" style="border-left: 5px solid #ffffff; background-color: #f3f5f7;">
                        <div style="height: 50px; margin-top: 10px; margin-bottom: 10px; border-bottom: 1px solid #ffffff;">
                            <h4 style="font-family: Varela Round; color: #e67700; padding-top: 8px; text-align: center;"> Bảng Xếp Hạng</h4>
                        </div>
                        <div class="container">
                            <div class="row" style="padding-top: 10px;">
                                <div class="col-4">
                                    <img src="/img/nguyentien.jpg" alt="" style="width:80px; height: 80px; border-radius: 80px;">
                                </div>
                                <div class="col-8"> <a href=""> Nguyễn Văn Tiến </a> </div>
                            </div>
                            <div class="row" style="padding-top: 10px;">
                                <div class="col-4">
                                    <img src="/img/nguyentien.jpg" alt="" style="width:80px; height: 80px; border-radius: 80px;">
                                </div>
                                <div class="col-8"> <a href=""> Nguyễn Văn Tiến </a> </div>
                            </div>
                            <div class="row" style="padding-top: 10px;">
                                <div class="col-4">
                                    <img src="/img/nguyentien.jpg" alt="" style="width:80px; height: 80px; border-radius: 80px;">
                                </div>
                                <div class="col-8"> <a href=""> Nguyễn Văn Tiến </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="height: 450px;">
                <div class="row">
                    <div class="col-4">
                        <a href=""><img src="/img/maths2018.jpg" alt="" style="width: 100%; height: 200px;"></a>
                        <h4> Đề thi THPT 2018 Môn toán </h4>
                        <p> Các em cùng tham khảo đề thi môn toán thpt năm 2018  </p>
                    </div>
                    <div class="col-4">
                        <ul>
                            <li> Đề thi môn Văn 2018</li>
                            <li> Đề thi môn Anh 2018 </li>
                            <li> Đề thi tổ hợp khối tự nhiên 2018</li>
                            <li> Đề thi tổ hợp khối xã hội 2018</li>
                            <li> Đề thi thpt toán năm 2017</li>
                            <li> Đề thi thpt anh năm 2017 </li>
                            <li> Đề thi thpt văn năm 2017</li>

                        </ul>
                    </div>
                    <div class="col-4" style="border-left: 2px solid #dcdcdc;">
                        <div style="height: 50px; margin-top: 10px; margin-bottom: 10px; border-bottom: 1px solid #dcdcdc;">
                            <h4 style="font-family: Varela Round; color: #e67700; padding-top: 8px; text-align: center;"> Video chữa đề</h4>
                        </div>
                        <div>
                            <iframe width="349" height="250" src="https://www.youtube.com/embed/h_H2bBTyHgY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <div style="padding-top: 20px; padding-bottom: 10px;">
                            <a href="" style="color: #000000;"><span> Xem thêm video ....</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="height: 350px;  margin-bottom: 20px;">
                <div class="row">
                    <div class="col-4">
                        <a href=""><img src="/img/articles.jpg" alt="" style="width: 100%; height: 200px;"></a>
                        <h4> Danh sách các thí sinh không được thi quân đội </h4>
                        <p> Đây là danh sách các thi sinh không được thi vào quân đội....  </p>
                    </div>
                    <div class="col-4">
                        <ul>
                            <li> ....</li>
                            <li> ....</li>
                            <li> ....</li>
                            <li> ....</li>
                            <li> ....</li>
                        </ul>
                    </div>
                    <div class="col-4" style="border-left: 2px solid #dcdcdc;">
                        <div class="container" style="border-bottom: 1px solid #dcdcdc; height: 50px;">
                            <h5 style="font-family: Varela Round; color: #e67700; padding-top: 12px; text-align: center;"> Kinh nghiệm thi trắc nghiệm</h5>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </body>
    @include('partials.footer')
    @stop