<style>
    .breadcrumb a .text:hover {
        color: var(--color-primary5) !important;
    }

    .contact-map iframe {
        border-radius: 20px;
    }

    .title_page {
        padding: 10px 0;
        margin-bottom: 50px;
    }

    li i {
        margin-right: 20px;
        color: var(--color-primary);
    }

    .contact-top {
        border-bottom: 1px solid var(--color-border);
    }

    .title-head {
        font-size: 2rem;
        margin-bottom: 14px;
        text-transform: uppercase;
    }

    .btn-contact {
        background-color: var(--color-primary4);
        color: var(--color-white);
    }

    @media (max-width: 767px) {
        .contact-map iframe {
            height: 500px;
        }

        .title_page {
            font-size: 2rem;
        }

        .contact-info {
            margin-bottom: 30px;
        }
    }
</style>

<div class="bread-crumb row">
    <div class="p6" style="background-color: #f5f5f5;">
        <ul class="breadcrumb" style="margin-bottom: 0 !important;">
            <li class="home">
                <a href="/" title="Trang chủ">
                    <span class="text" style="color: #999;">Trang chủ</span>
                </a>
            </li>

            <li>
                <span class="cblack">Liên hệ</sapn>
            </li>

        </ul>
    </div>
</div>
<div class="row">
    <div class="p6 d-flex flex-wrap" style="margin: 50px 0;">
        <div class="contact-info col-lg-6 col-12 col-sm-12">
            <div class="contact-top">
                <h1 class="title_page">Công ty TNHH EGANY</h1>
                <ul>
                    <li><i class="bi bi-geo-alt-fill"></i>Địa chỉ: 70 Lu Gia, District 11, Ho Chi Minh City.</li>
                    <li><i class="bi bi-phone-fill"></i>Số điện thoại: 19006750</li>
                    <li><i class="bi bi-envelope-fill"></i>Email: support@sapo.vn</li>
                </ul>
            </div>
            <div class="contact-bottom">
                <h3 class="title-head">LIÊN HỆ VỚI CHÚNG TÔI</h3>
                <div class="form-signup clearfix">
                    <div class="row group_contact">
                        <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <input placeholder="Họ tên*" type="text" class="form-control  form-control-lg" required=""
                                value="" name="contact[Name]">
                        </fieldset>
                        <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <input placeholder="Email*" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                required="" id="email1" class="form-control form-control-lg" value=""
                                name="contact[email]">
                        </fieldset>
                        <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <input placeholder="Số điện thoại*" type="text" class="form-control  form-control-lg"
                                required="" pattern="\d+" name="contact[Phone]" value="">
                        </fieldset>
                        <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <textarea placeholder="Nhập nội dung*" name="contact[body]" id="comment"
                                class="form-control content-area form-control-lg" rows="5" required=""></textarea>
                        </fieldset>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="btn btn-main--primary btn-block btn-contact">Gửi liên hệ của
                                bạn</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-map col-lg-6 col-12 col-sm-12">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3723.9042716018666!2d105.815878!3d21.036516!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab1946cc7e23%3A0x87ab3917166a0cd5!2zUGjhuqduIG3hu4FtIHF14bqjbiBsw70gYsOhbiBow6BuZyAtIFNhcG8gUE9T!5e0!3m2!1svi!2s!4v1683812004140!5m2!1svi!2s"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<script src="public/js/script.js"></script>