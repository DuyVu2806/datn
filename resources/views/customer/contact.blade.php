@extends('layouts.customer')

@section('title', 'Phản Hồi')

@push('style')
    <style>
        .form-control {
            border-radius: 3px;
        }
    </style>
@endpush

@section('content')
    <section style="padding-top: 7rem;">
        <div class="bg-holder" style="background-image:url({{ asset('customer/images/hero-bg.svg') }});">
        </div>
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <h3>Phản hồi</h3>
                        <h4>Để biết thêm chi tiết xin vui lòng liên hệ với chúng tôi</h4>
                        <hr>
                        <form action="">
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="">Họ và tên</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="col-6">
                                    <label for="">Số điện thoại</label>
                                    <input class="form-control" type="number">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="">Địa chỉ Email</label>
                                <input type="email" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="">Nội dung</label>
                                <textarea name="" id="" cols="30" rows="8" class="form-control"></textarea>
                            </div>

                            <div>
                                <button class="btn btn-primary" type="submit">Gửi</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15715.73357121595!2d105.77034015000001!3d10.0223554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1666801400891!5m2!1svi!2s"
                                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div>
                            <div class="mb-5">
                                <h3>Địa chỉ</h3>
                                <p>Đại học cần thơ Khu 2 quận Ninh Kiều Thành Phố Cần Thơ</p>
                                <p>Email:Nguyenhuyduyvu@gmail.com</p>
                                <p>Website:www.</p>
                            </div>

                            <div>
                                <h6><strong>Mở cửa</strong></h6>
                                <p>Thứ 2 đến thứ 7: 9:30am - 20:30pm</p>
                                <p>Chủ nhật: 9:30am - 17:30pm</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
