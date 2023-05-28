<style>
    .breadcrumb a .text:hover {
        color: var(--color-primary5) !important;
    }

    .order {
        font-size: 17px;
    }

    .radio {
        margin: 0 10px 0 0 !important;

    }

    #PhoneNumber {
        height: 50px;
    }

    .btncheck {
        border-radius: 10px;
        background-color: var(--color-primary5);
        color: var(--color-white);
        border: none;
        margin: 10px;
        float: right;
        padding: 14px 20px;
    }

    .frmod {
        padding: 10px;
        height: 100%;
    }

    .from__order {
        padding: 20px 20px 150px;
        margin-bottom: 50px;
    }

    .frmod {
        padding: 20px;
    }

    @media (max-width: 767px) {
        .input-check {
            flex-direction: column;
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
                <span class="cblack">Kiểm tra đơn hàng</sapn>
            </li>

        </ul>
    </div>
</div>
<div class="row">
    <div class="p6">
        <h3 style="margin: 40px 0;">Kiểm tra đơn hàng</h3>
        <div class="from__order" style="background-color: var(--color-border);">
            <div class="d-flex frmod" style="background-color: var(--color-white);">
                <div class="order col-lg-5 col-sm-12 col-12"
                    style="background-color: var(--color-border); border-radius: 10px; padding: 30px; ">
                    <h3 class="text-center"
                        style="font-weight: 700; margin-bottom: 20px; padding: 10px; bottom: 1px solid var(--color-white);">
                        <i class="bi bi-search"></i> Kiểm tra đơn hàng
                        của bạn
                    </h3>
                    <p>Kiểm tra bằng</p>
                    <div class="input-check d-flex">
                        <label for="radio1" class="d-flex align-items-center" style="padding: 10px;"><input type="radio"
                                class="radio" id="radio1" style="margin-right: 10px;"> Số điện
                            thoại</label>
                        <label for="radio2" class="d-flex align-items-center" style="padding: 10px;"><input type="radio"
                                class="radio" id="radio2" style="margin-right: 10px;">Email</label>
                        <label for="radio3" class="d-flex align-items-center" style="padding: 10px;"><input type="radio"
                                class="radio" id="radio3" style="margin-right: 10px;"> Số điện thoại và
                            Email</label>
                    </div>
                    <p>Số điện thoại</p>
                    <input type="text" value="" name="PhoneNumber" id="PhoneNumber" class="form-control"
                        placeholder="0909 xxx xxx">
                    <button class="btncheck">Kiểm tra</button>
                </div>
                </a>
            </div>
        </div>
    </div>
    <script src="public/js/script.js"></script>