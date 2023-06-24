
@extends('front.layout.master')
@section('title','Liên Hệ')
@section('body')
    <!-- body -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row ">
                <div class="rol-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./"><i  class="fa fa-home">Home</i></a>

                        <span>Liên Hệ</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="map spad">
        <div class="container">
            <div class="map-inner">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10562.223953847046!2d108.2492487633931!3d15.97910205977996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108fec4d61cb%3A0x488a4686a8e2c948!2zMjYgTmd1eeG7hW4gVOG6oW8sIEhvw6AgSOG6o2ksIE5nxakgSMOgbmggU8ahbiwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1667576392147!5m2!1sen!2s"
                        height="610" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <div class="icon">
                    <i class="fa fa-map-marker"></i>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-section spad">
        <section class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-title">
                        <h4>Liên Hệ Với Chúng Tôi</h4>
                        <p>Bạn có thể liên hệ qua các thông tin phía dưới của chúng tôi</p>
                    </div>
                    <div class="contact-widget">
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="ci-text">
                                <span>Địa Chỉ:</span>
                                <p>26 Nguyễn Tạo, Hòa Hải ,Ngũ Hành Sơn</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="ci-text">
                                <span>Điện Thoại:</span>
                                <p>0971213792</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="ci-text">
                                <span>Địa Chỉ:</span>
                                <p>quanghoangson2.3@gmail.com</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 offset-lg-1 ">
                    <div class="contact-form">
                        <div class="leave-comment">
                            <H4>Bình luận </H4>
                            <p>Hãy liên hệ với chung tôi qua số điện thoại hoặc Email hoặc để lại bình luận nhé</p>
                            <form action=""  class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Tên của bạn">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Mai của bạn">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="" placeholder="Nhập tin nhắn của bạn" id="" cols="30" rows="10"></textarea>
                                        <button type="submit" class="site-btn">Gửi Tin Nhắn</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- end body -->
@endsection
