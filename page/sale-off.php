<style>
    .breadcrumb a .text:hover {
        color: var(--color-primary5) !important;
    }

    .section-banner:hover img {
        scale: 0.9;
        transition: .3s ease;
    }

    .product__info-bottom {
        display: none;
    }

    .collection {
        display: flex;
        flex-wrap: wrap;
        margin: 50px 0;
    }

    .collection-top {
        display: flex;
        justify-content: space-between;
    }

    .coll-sortby {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .coll-sortby .sort-input,
    .filter-input {
        display: none;
    }

    .coll-sortby .sort {
        position: relative;
        cursor: pointer;
        margin: 10px;
    }

    .filter__label,
    .sort__label {
        cursor: pointer;
    }

    .overlayfilter,
    .overlaysort {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        margin: auto;
        z-index: 2;
        display: none;
    }

    .overlayfilter {
        background-color: var(--color-black);
        opacity: 0.4;
    }

    .sort ul {
        width: 150px;
        opacity: 0;
        visibility: hidden;
        transition: .3s ease;
        z-index: 2;
        position: absolute;
        background-color: var(--color-white);
        border: 1px solid var(--color-border);
    }

    .filter-input:checked~.filterTab {
        opacity: 1;
        visibility: visible;
        transition: .3s ease;
        transform: translateX(0);
    }

    .sort-input:checked~.sort__list {
        opacity: 1;
        visibility: visible;
        transition: .3s ease;
    }

    .filter-input:checked~.overlayfilter,
    .sort-input:checked~.overlaysort {
        display: block;
    }

    .sort li {
        margin: 0;
        padding: 10px;
    }

    .sort li:hover {
        background-color: var(--color-primary5);
        color: var(--color-white);
    }

    .filterTab {
        transform: translateX(100%);
        transition: .3s ease;
        opacity: 0;
        visibility: hidden;
        padding: 30px;
        position: fixed;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto;
        width: 400px;
        z-index: 9999;
        background-color: var(--color-white);
    }

    .back {
        display: flex;
        align-items: center;
        font-size: 20px;
    }

    .brand-list li input {
        margin: 0 !important;
        width: 20px;
        height: 20px;
        display: inline;
    }

    .brand-list li {
        display: flex;
        align-items: center;
    }

    .brand-list label {
        margin-left: 10px;
    }

    .colors {
        padding: 10px;
        border-radius: 50%;
        margin-right: 10px;
        border: 1px solid var(--color-border);
    }

    .color1 {
        background-color: red;
    }

    .color2 {
        background-color: yellow;
    }

    .color3 {
        background-color: purple;
    }

    .color4 {
        background-color: grey;
    }

    @media (max-width: 1024px) {
        .collection-sort {
            display: none;
        }

        .collection-top {
            display: inline;
        }
    }

    @media (min-width: 1024px) {
        .product__item {
            width: 25%;
            max-width: 25%;
            flex: 0 0 25%;
        }

        .filter {
            display: none;
        }

        .collection-mid {
            display: flex;
        }

        .collection-sort {
            width: 25%;
            padding: 10px;
        }

        .collection {
            width: 75%;
            padding: 10px;
            margin-top: 0;
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
                <span class="cblack">Tất cả sản phẩm</sapn>
            </li>

        </ul>
    </div>
</div>
<!-- section -->
<div class="row">
    <div class="p6" style="margin: 50px 0;">
        <div class="section-banner col-12 col-lg-12 col-sm-12">
            <img src="./img/banner/collection_main_banner.jpg" alt=""
                style=" width: 100%; cursor: pointer; transition: .3s ease; object-fit: cover;">
        </div>
    </div>
</div>
<!-- section -->
<!-- coupon -->
<div class="row">
    <div class="p6">
        <div class="coupon__list">
            <div class="col-lg-3 col-sm-6 col-10">
                <div class="coupon__item">
                    <div class="coupon__img">
                        <img src="./img/coupon/coupon_1_img.png" alt="">
                    </div>
                    <div class="coupon__info">
                        <div class="coupon__info-top">
                            <h3>Nhập mã: Ega10</h3>
                            <p>Mã giảm 10% cho đơn hàng tối thiểu 2tr</p>
                        </div>
                        <div class="coupon__info-bottom">
                            <button>Sao chép</button>
                            <a href="">Điều kiện</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-10">
                <div class="coupon__item">
                    <div class="coupon__img">
                        <img src="./img/coupon/coupon_1_img.png" alt="">
                    </div>
                    <div class="coupon__info">
                        <div class="coupon__info-top">
                            <h3>Nhập mã: Ega10</h3>
                            <p>Mã giảm 10% cho đơn hàng tối thiểu 2tr</p>
                        </div>
                        <div class="coupon__info-bottom">
                            <button>Sao chép</button>
                            <a href="">Điều kiện</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-10">
                <div class="coupon__item">
                    <div class="coupon__img">
                        <img src="./img/coupon/coupon_1_img.png" alt="">
                    </div>
                    <div class="coupon__info">
                        <div class="coupon__info-top">
                            <h3>Nhập mã: Ega10</h3>
                            <p>Mã giảm 10% cho đơn hàng tối thiểu 2tr</p>
                        </div>
                        <div class="coupon__info-bottom">
                            <button>Sao chép</button>
                            <a href="">Điều kiện</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-10">
                <div class="coupon__item">
                    <div class="coupon__img">
                        <img src="./img/coupon/coupon_1_img.png" alt="">
                    </div>
                    <div class="coupon__info">
                        <div class="coupon__info-top">
                            <h3>Nhập mã: Ega10</h3>
                            <p>Mã giảm 10% cho đơn hàng tối thiểu 2tr</p>
                        </div>
                        <div class="coupon__info-bottom">
                            <button>Sao chép</button>
                            <a href="">Điều kiện</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- coupon -->
<!-- product -->
<div class="row">
    <div class="p6">
        <div class="collection-top">
            <h1>Tất cả sản phẩm</h1>
            <div class="coll-sortby">
                <span>Sắp xếp:</span>
                <div class="sort">
                    <input type="checkbox" id="sort-input" class="sort-input">
                    <label for="sort-input" class="overlaysort"></label>
                    <label for="sort-input" class="sort__label">Tên A → Z<i class="bi bi-caret-down-fill"></i></label>
                    <ul class="sort__list">
                        <li>Tên A → Z</li>
                        <li>Tên Z → A</li>
                        <li>Giá tăng dần</li>
                        <li>Giá giảm dần</li>
                        <li>Hàng mới</li>
                    </ul>
                </div>
                <div class="filter">
                    <input type="checkbox" id="filter-input" class="filter-input">
                    <label for="filter-input" class="overlayfilter"></label>
                    <label for="filter-input" class="filter__label">
                        <i class="bi bi-funnel-fill"></i>
                        <span>Lọc</span>
                    </label>
                    <div class="filterTab">
                        <div class="back cursor">
                            <label for="filter-input" class="cursor"><i class="bi bi-arrow-left"></i> Tìm
                                theo</label>
                        </div>
                        <div class="brand">
                            <h3 style="text-transform: uppercase;">Thương Hiệu</h3>
                            <ul class="brand-list">
                                <li><input type="checkbox" id="inputlv1"><label for="inputlv1">CK</label></li>
                                <li><input type="checkbox" id="inputlv2"><label for="inputlv2">Cotton On
                                        Body</label></li>
                                <li><input type="checkbox" id="inputlv3"><label for="inputlv3">EGANY</label></li>
                                <li><input type="checkbox" id="inputlv4"><label for="inputlv4">Levi's</label></li>
                                <li><input type="checkbox" id="inputlv5"><label for="inputlv5">Mango</label></li>
                            </ul>
                        </div>
                        <div class="color">
                            <h3 style="text-transform: uppercase;">Màu Sắc</h3>
                            <ul class="brand-list">
                                <li><span class="colors color1"></span><span>Đỏ</span></li>
                                <li><span class="colors color2"></span><span>Vàng</span></li>
                                <li><span class="colors color3"></span><span>Tím</span></li>
                                <li><span class="colors color4"></span><span>Xám</span></li>
                                <li><span class="colors color5"></span><span>Trắng</span></li>
                            </ul>
                            <span>Xem thêm<i class="bi bi-chevron-down ms-3"></i></span>
                        </div>
                        <div class="brand">
                            <h3 style="text-transform: uppercase;">MỨC GIÁ</h3>
                            <ul class="brand-list">
                                <li><input type="checkbox" id="inputlv1"><label for="inputlv1">Giá dưới
                                        1.000.000₫</label></li>
                                <li><input type="checkbox" id="inputlv2"><label for="inputlv2">1.000.000₫ -
                                        2.000.000₫</label></li>
                                <li><input type="checkbox" id="inputlv3"><label for="inputlv3">2.000.000₫ -
                                        3.000.000₫</label></li>
                                <li><input type="checkbox" id="inputlv4"><label for="inputlv4">3.000.000₫ -
                                        5.000.000₫</label></li>
                                <li><input type="checkbox" id="inputlv5"><label for="inputlv5">5.000.000₫ -
                                        7.000.000₫</label></li>
                            </ul>
                        </div>
                        <div class="brand">
                            <h3 style="text-transform: uppercase;">LOẠI</h3>
                            <ul class="brand-list">
                                <li><input type="checkbox" id="inputlv1"><label for="inputlv1">Áo</label></li>
                                <li><input type="checkbox" id="inputlv2"><label for="inputlv2">Đồ bơi</label></li>
                                <li><input type="checkbox" id="inputlv3"><label for="inputlv3">Đồ lót</label></li>
                                <li><input type="checkbox" id="inputlv4"><label for="inputlv4">Đồ ngủ</label></li>
                                <li><input type="checkbox" id="inputlv5"><label for="inputlv5">Đồ thể thao</label>
                                </li>
                            </ul>
                            <span>Xem thêm<i class="bi bi-chevron-down ms-3"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="collection-mid">
            <div class="collection-sort">
                <div class="brand" style="margin-bottom: 40px;">
                    <h3 style="text-transform: uppercase;">Thương Hiệu</h3>
                    <ul class="brand-list">
                        <li><input type="checkbox" id="inputlv1"><label for="inputlv1">CK</label></li>
                        <li><input type="checkbox" id="inputlv2"><label for="inputlv2">Cotton On Body</label></li>
                        <li><input type="checkbox" id="inputlv3"><label for="inputlv3">EGANY</label></li>
                        <li><input type="checkbox" id="inputlv4"><label for="inputlv4">Levi's</label></li>
                        <li><input type="checkbox" id="inputlv5"><label for="inputlv5">Mango</label></li>
                    </ul>
                </div>
                <div class="color" style="margin-bottom: 40px;">
                    <h3 style="text-transform: uppercase;">Màu Sắc</h3>
                    <ul class="brand-list">
                        <li><span class="colors color1"></span><span>Đỏ</span></li>
                        <li><span class="colors color2"></span><span>Vàng</span></li>
                        <li><span class="colors color3"></span><span>Tím</span></li>
                        <li><span class="colors color4"></span><span>Xám</span></li>
                        <li><span class="colors color5"></span><span>Trắng</span></li>
                    </ul>
                    <span>Xem thêm<i class="bi bi-chevron-down ms-3"></i></span>
                </div>
                <div class="brand" style="margin-bottom: 40px;">
                    <h3 style="text-transform: uppercase;">MỨC GIÁ</h3>
                    <ul class="brand-list">
                        <li><input type="checkbox" id="inputlv1"><label for="inputlv1">Giá dưới 1.000.000₫</label>
                        </li>
                        <li><input type="checkbox" id="inputlv2"><label for="inputlv2">1.000.000₫ -
                                2.000.000₫</label></li>
                        <li><input type="checkbox" id="inputlv3"><label for="inputlv3">2.000.000₫ -
                                3.000.000₫</label></li>
                        <li><input type="checkbox" id="inputlv4"><label for="inputlv4">3.000.000₫ -
                                5.000.000₫</label></li>
                        <li><input type="checkbox" id="inputlv5"><label for="inputlv5">5.000.000₫ -
                                7.000.000₫</label></li>
                    </ul>
                </div>
                <div class="brand" style="margin-bottom: 40px;">
                    <h3 style="text-transform: uppercase;">LOẠI</h3>
                    <ul class="brand-list">
                        <li><input type="checkbox" id="inputlv1"><label for="inputlv1">Áo</label></li>
                        <li><input type="checkbox" id="inputlv2"><label for="inputlv2">Đồ bơi</label></li>
                        <li><input type="checkbox" id="inputlv3"><label for="inputlv3">Đồ lót</label></li>
                        <li><input type="checkbox" id="inputlv4"><label for="inputlv4">Đồ ngủ</label></li>
                        <li><input type="checkbox" id="inputlv5"><label for="inputlv5">Đồ thể thao</label></li>
                    </ul>
                    <span>Xem thêm<i class="bi bi-chevron-down ms-3"></i></span>
                </div>
            </div>
            <div class="collection col-sm-12 col-12">
                <div class="product__item col-6 col-lg-3 col-sm-6">
                    <div class="product__img pRl">
                        <a href="">
                            <img id="img1" src="./img/product/product1-1.jpg" alt="" class="img1">
                            <img src="./img/overlay/frame_3.png" alt="" class="pAs imgoverlay">
                            <img src="./img/product/product1.jpg" alt="" class="pAs imghover">
                            <div class="product__iconhover pAs">
                                <a href="" class="iconhover1 pRl">
                                    <img src="./img/icon/icon-options.png" alt="">
                                    <div class="iconhover-name pAs">Tùy chọn</div>
                                </a>
                                <a href="" class="iconhover2">
                                    <i class="bi bi-eye-fill"></i>
                                    <div class="iconhover-name pAs">Xem nhanh</div>
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="product__info">
                        <div class="product__info-top">
                            <span class="text">COTTON ON BODY</span>
                            <a href="" class="product-name">Set thể thao Shelby Ecomove</a>
                            <span class="prince" style="color: var(--color-primary3);">1.630.000₫</span><br>
                            <span class="prince-old">2.105.000₫ <label>-23%</label></span>
                            <div class="product__img-icon">
                                <div class="imgIcon"><img src="./img/product/icon1.jpg" alt=""></div>
                                <div class="imgIcon"><img src="./img/product/icon2.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="product__info-bottom">
                            <span><img src="./img/icon/fire-icon.svg" alt=""> Đang cháy hàng</span>
                            <div class="product__progress" aria-label="Basic example" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="product__progress-bar" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product__item col-6 col-lg-3 col-sm-6">
                    <div class="product__img pRl">
                        <a href="">
                            <img src="./img/product/product2.jpg" alt="" class="img1">
                            <img src="./img/overlay/frame_1.png" alt="" class="pAs imgoverlay">
                            <img src="./img/product/product2-1.jpg" alt="" class="pAs imghover">
                            <div class="product__iconhover pAs">
                                <a href="" class="iconhover1 pRl">
                                    <img src="./img/icon/icon-options.png" alt="">
                                    <div class="iconhover-name pAs">Tùy chọn</div>
                                </a>
                                <a href="" class="iconhover2">
                                    <i class="bi bi-eye-fill"></i>
                                    <div class="iconhover-name pAs">Xem nhanh</div>
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="product__info">
                        <div class="product__info-top">
                            <span class="text">COTTON ON BODY</span>
                            <a href="" class="product-name">Set thể thao Shelby Ecomove</a>
                            <span class="prince" style="color: var(--color-primary3);">1.630.000₫</span><br>
                            <span class="prince-old">2.105.000₫ <label>-23%</label></span>
                            <div class="product__img-icon">
                                <div class="imgIcon"><img src="./img/product/icon1.jpg" alt=""></div>
                                <div class="imgIcon"><img src="./img/product/icon2.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="product__info-bottom">
                            <span>Vừa mở bán</span>
                            <div class="product__progress" aria-label="Basic example" aria-valuenow="15"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="product__progress-bar" style="width: 15%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product__item col-6 col-lg-3 col-sm-6">
                    <div class="product__img pRl">
                        <a href="">
                            <img src="./img/product/product3.jpg" alt="" class="img1">
                            <img src="./img/overlay/frame_2.png" alt="" class="pAs imgoverlay">
                            <img src="./img/product/product3-1.jpg" alt="" class="pAs imghover">
                            <div class="product__iconhover pAs">
                                <a href="" class="iconhover1 pRl">
                                    <img src="./img/icon/icon-options.png" alt="">
                                    <div class="iconhover-name pAs">Tùy chọn</div>
                                </a>
                                <a href="" class="iconhover2">
                                    <i class="bi bi-eye-fill"></i>
                                    <div class="iconhover-name pAs">Xem nhanh</div>
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="product__info">
                        <div class="product__info-top">
                            <span class="text">COTTON ON BODY</span>
                            <a href="" class="product-name">Set thể thao Shelby Ecomove</a>
                            <span class="prince" style="color: var(--color-primary3);">1.630.000₫</span><br>
                            <span class="prince-old">2.105.000₫ <label>-23%</label></span>
                            <div class="product__img-icon">
                                <div class="imgIcon"><img src="./img/product/icon1.jpg" alt=""></div>
                                <div class="imgIcon"><img src="./img/product/icon2.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="product__info-bottom">
                            <span>Đã bán được <strong
                                    style="color: var(--color-primary5); font-weight: 800;">345</strong> sản
                                phẩm</span>
                            <div class="product__progress" aria-label="Basic example" aria-valuenow="15"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="product__progress-bar" style="width: 50%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product__item col-6 col-lg-3 col-sm-6">
                    <div class="product__img pRl">
                        <a href="">
                            <img src="./img/product/product4.jpg" alt="" class="img1">
                            <img src="./img/product/product4.jpg" alt="" class="pAs imghover">
                            <div class="product__iconhover pAs">
                                <a href="" class="iconhover1 pRl">
                                    <img src="./img/icon/icon-options.png" alt="">
                                    <div class="iconhover-name pAs">Tùy chọn</div>
                                </a>
                                <a href="" class="iconhover2">
                                    <i class="bi bi-eye-fill"></i>
                                    <div class="iconhover-name pAs">Xem nhanh</div>
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="product__info">
                        <div class="product__info-top">
                            <span class="text">COTTON ON BODY</span>
                            <a href="" class="product-name">Set thể thao Shelby Ecomove</a>
                            <span class="prince" style="color: var(--color-primary3);">1.630.000₫</span><br>
                            <span class="prince-old">2.105.000₫ <label>-23%</label></span>
                            <div class="product__img-icon">
                                <div class="imgIcon"><img src="./img/product/icon1.jpg" alt=""></div>
                                <div class="imgIcon"><img src="./img/product/icon2.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="product__info-bottom">
                            <span>Vừa mở bán</span>
                            <div class="product__progress" aria-label="Basic example" aria-valuenow="15"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="product__progress-bar" style="width: 15%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product__item col-6 col-lg-3 col-sm-6">
                    <div class="product__img pRl">
                        <a href="">
                            <img src="./img/product/product5.jpg" alt="" class="img1">
                            <img src="./img/product/product5-1.jpg" alt="" class="pAs imghover">
                            <div class="product__iconhover pAs">
                                <a href="" class="iconhover1 pRl">
                                    <img src="./img/icon/icon-options.png" alt="">
                                    <div class="iconhover-name pAs">Tùy chọn</div>
                                </a>
                                <a href="" class="iconhover2">
                                    <i class="bi bi-eye-fill"></i>
                                    <div class="iconhover-name pAs">Xem nhanh</div>
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="product__info">
                        <div class="product__info-top">
                            <span class="text">COTTON ON BODY</span>
                            <a href="" class="product-name">Set thể thao Shelby Ecomove</a>
                            <span class="prince" style="color: var(--color-primary3);">1.630.000₫</span><br>
                            <span class="prince-old">2.105.000₫ <label>-23%</label></span>
                            <div class="product__img-icon">
                                <div class="imgIcon"><img src="./img/product/icon1.jpg" alt=""></div>
                                <div class="imgIcon"><img src="./img/product/icon2.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="product__info-bottom">
                            <span>Hết hàng</span>
                            <div class="product__progress" aria-label="Basic example" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="product__progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product__item col-6 col-lg-3 col-sm-6">
                    <div class="product__img pRl">
                        <a href="">
                            <img src="./img/product/product3.jpg" alt="" class="img1">
                            <img src="./img/overlay/frame_2.png" alt="" class="pAs imgoverlay">
                            <img src="./img/product/product3-1.jpg" alt="" class="pAs imghover">
                            <div class="product__iconhover pAs">
                                <a href="" class="iconhover1 pRl">
                                    <img src="./img/icon/icon-options.png" alt="">
                                    <div class="iconhover-name pAs">Tùy chọn</div>
                                </a>
                                <a href="" class="iconhover2">
                                    <i class="bi bi-eye-fill"></i>
                                    <div class="iconhover-name pAs">Xem nhanh</div>
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="product__info">
                        <div class="product__info-top">
                            <span class="text">COTTON ON BODY</span>
                            <a href="" class="product-name">Set thể thao Shelby Ecomove</a>
                            <span class="prince" style="color: var(--color-primary3);">1.630.000₫</span><br>
                            <span class="prince-old">2.105.000₫ <label>-23%</label></span>
                            <div class="product__img-icon">
                                <div class="imgIcon"><img src="./img/product/icon1.jpg" alt=""></div>
                                <div class="imgIcon"><img src="./img/product/icon2.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="product__info-bottom">
                            <span>Đã bán được <strong
                                    style="color: var(--color-primary5); font-weight: 800;">345</strong> sản
                                phẩm</span>
                            <div class="product__progress" aria-label="Basic example" aria-valuenow="15"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="product__progress-bar" style="width: 50%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product__item col-6 col-lg-3 col-sm-6">
                    <div class="product__img pRl">
                        <a href="">
                            <img src="./img/product/product4.jpg" alt="" class="img1">
                            <img src="./img/product/product4.jpg" alt="" class="pAs imghover">
                            <div class="product__iconhover pAs">
                                <a href="" class="iconhover1 pRl">
                                    <img src="./img/icon/icon-options.png" alt="">
                                    <div class="iconhover-name pAs">Tùy chọn</div>
                                </a>
                                <a href="" class="iconhover2">
                                    <i class="bi bi-eye-fill"></i>
                                    <div class="iconhover-name pAs">Xem nhanh</div>
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="product__info">
                        <div class="product__info-top">
                            <span class="text">COTTON ON BODY</span>
                            <a href="" class="product-name">Set thể thao Shelby Ecomove</a>
                            <span class="prince" style="color: var(--color-primary3);">1.630.000₫</span><br>
                            <span class="prince-old">2.105.000₫ <label>-23%</label></span>
                            <div class="product__img-icon">
                                <div class="imgIcon"><img src="./img/product/icon1.jpg" alt=""></div>
                                <div class="imgIcon"><img src="./img/product/icon2.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="product__info-bottom">
                            <span>Vừa mở bán</span>
                            <div class="product__progress" aria-label="Basic example" aria-valuenow="15"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="product__progress-bar" style="width: 15%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product__item col-6 col-lg-3 col-sm-6">
                    <div class="product__img pRl">
                        <a href="">
                            <img src="./img/product/product5.jpg" alt="" class="img1">
                            <img src="./img/product/product5-1.jpg" alt="" class="pAs imghover">
                            <div class="product__iconhover pAs">
                                <a href="" class="iconhover1 pRl">
                                    <img src="./img/icon/icon-options.png" alt="">
                                    <div class="iconhover-name pAs">Tùy chọn</div>
                                </a>
                                <a href="" class="iconhover2">
                                    <i class="bi bi-eye-fill"></i>
                                    <div class="iconhover-name pAs">Xem nhanh</div>
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="product__info">
                        <div class="product__info-top">
                            <span class="text">COTTON ON BODY</span>
                            <a href="" class="product-name">Set thể thao Shelby Ecomove</a>
                            <span class="prince" style="color: var(--color-primary3);">1.630.000₫</span><br>
                            <span class="prince-old">2.105.000₫ <label>-23%</label></span>
                            <div class="product__img-icon">
                                <div class="imgIcon"><img src="./img/product/icon1.jpg" alt=""></div>
                                <div class="imgIcon"><img src="./img/product/icon2.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="product__info-bottom">
                            <span>Hết hàng</span>
                            <div class="product__progress" aria-label="Basic example" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="product__progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="width: 100%; text-align: center;">
            <button class="more">Xem tất cả<i class="bi bi-chevron-right"></i></button>
        </div>
    </div>
</div>
<!-- product -->

<script src="public/js/script.js"></script>