<style>
    .breadcrumb a .text:hover {
        color: var(--color-primary5) !important;
    }

    .store {
        display: flex;
        flex-wrap: wrap;
        margin-top: 20px;
        margin-bottom: 50px;
    }

    .store__location iframe,
    .store__location {
        border-radius: 20px;
    }

    .store__list {
        border-radius: 20px;
        padding: 40px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    }

    .store__list h1 {
        color: var(--color-primary);
        margin-bottom: 20px;
    }

    .store__list p {
        font-size: 17px;
        margin-bottom: 20px;
    }

    .checklocation,
    .store__list .checkstore {
        cursor: pointer;
        position: relative;
        margin-bottom: 30px;
        padding: 10px 20px;
        font-size: 20px;
        border-radius: 20px;
        border: 1px solid var(--color-border);
    }

    .inputlocation,
    .inputcity {
        display: none;
    }

    .stores {

        position: absolute;
        left: 0;
        right: 0;
        top: 100%;
        opacity: 0;
        visibility: hidden;
        transform: translateY(30px);
        transition: .3s ease;
        font-size: 20px;
        border-radius: 20px;
        z-index: 502;
        background-color: var(--color-white);
        border: 1px solid var(--color-border);
    }

    .stores li {
        padding: 10px 20px;
    }

    .stores li:hover {
        background-color: var(--color-primary5);
        color: var(--color-white);
    }

    .inputlocation:checked~.stores,
    .inputcity:checked~.stores {
        opacity: 1;
        visibility: visible;
        transform: translateY(0px);
        transition: .3s ease;
    }

    .inputlocation:checked~.overlaylocation,
    .inputcity:checked~.overlaycity {
        display: block;
    }

    .overlaylocation,
    .overlaycity {
        display: none;
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        z-index: 501;
    }

    .namelocation {
        color: var(--color-primary);
        margin-bottom: 20px;
    }

    .lc {
        font-size: 20px;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    @media (max-width: 767px) {
        .store__list {
            margin-bottom: 30px;
        }

        .store__list h1 {
            font-size: 30px;
            text-align: center;
        }

        .checklocation,
        .store__list .checkstore {
            font-size: 16px;
        }

        .namelocation {
            text-align: left !important;
        }

        .lc {
            font-size: 16px;
        }

        iframe {
            height: 500px;
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
                <span class="cblack">Hệ thống cửa hàng</sapn>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="p6">
        <h1 class="titles text-center" style="margin: 30px 0;">Hệ thống cửa hàng</h1>
        <div class="store">
            <div class="store__list col-lg-3 col-sm-6 col-12">
                <h1>Tìm cửa hàng</h1>
                <p>Chọn tỉnh thành</p>
                <div class="checkstore">
                    <input type="checkbox" id="inputcity" class="inputcity">
                    <label for="inputcity" class="overlaycity"></label>
                    <label for="inputcity" style="width: 100%; cursor: pointer;">Hồ Chí Minh <i
                            class="bi bi-chevron-down"></i></label>
                    <ul class="stores">
                        <li>Hồ Chí Minh</li>
                        <li>Hà Nội</li>
                    </ul>
                </div>
                <p>Chọn tỉnh thành</p>
                <div class="checklocation">
                    <input type="checkbox" id="inputlocation" class="inputlocation">
                    <label for="inputlocation" class="overlaylocation"></label>
                    <label for="inputlocation" style="width: 100%; cursor: pointer;">Chi nhánh Gò vấp, HCM <i
                            class="bi bi-chevron-down"></i></label>
                    <ul class="stores">
                        <li>Chi nhánh Gò vấp, HCM</li>
                        <li>Chi nhánh Phú Nhuận, HCM</li>
                        <li>Chi nhánh Quận 1, HCM</li>
                        <li>Chi nhánh Quận 10, HCM</li>
                    </ul>
                </div>
                <h1 class="namelocation"><i class="bi bi-geo-alt-fill"></i> Địa chỉ</h1>
                <h3 class="lc">150 Nguyễn Duy Cung, phường 15, quận Gò Vấp, HCM</h3>
            </div>
            <div class="store__location col-lg-9 col-sm-6 col-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.6316760680697!2d106.63978371104558!3d10.839473289268538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175299ce9d05939%3A0x621f40ffba434e8!2zMTUwIE5ndXnhu4VuIER1eSBDdW5nLCBQaMaw4budbmcgMTIsIEfDsiBW4bqlcCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1683807110987!5m2!1svi!2s"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

<script src="public/js/script.js"></script>