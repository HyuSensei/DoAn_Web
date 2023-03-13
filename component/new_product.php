<?php
require_once("./db/config.php");
$sql = "SELECT * FROM products WHERE category=N'Chăm sóc da' AND type=N'Sữa rửa mặt'";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
    <div class="product-default-single-item product-color--green swiper-slide">
        <div class="image-box">
            <a href="product-details-default.php?id=' . $row['id'] . '" class="image-link">
                <img  src="' . $row['img_main'] . '" alt="">
                <img  src=" ' . $row['img_extra'] . '" alt="">
            </a>
            <div class="action-link" style="background-color: #820813;">
                <div class="action-link-left">
                    <a href="./component/add_to_cart.php?id='.$row['id'].'" >THÊM VÀO GIỎ HÀNG</a>
                </div>
                <div style="width: 100px" class="action-link-right">
                    <a href="index.php?id="' . $row['id'] . '"  data-bs-toggle="modal" data-bs-target="#modalQuickview" class="product-link" data-product-id="' . $row['id'] . '"><i class="icon-magnifier"></i></a>
                    <a href="wishlist.php"><i class="icon-heart"></i></a>
                    <a href="compare.php"><i class="icon-shuffle"></i></a>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-left">
                <h6 class="title"><a style="display: -webkit-box;
            max-height: 3.2rem;
           -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
            -webkit-line-clamp: 2;
            line-height: 1.6rem;
            margin-top: 10px;" href="product-details-default.php?id=' . $row['id'] . '">' . $row['product_name'] . '</a></h6>
                <ul class="review-star">
                    <li class="fill"><i class="ion-android-star"></i></li>
                    <li class="fill"><i class="ion-android-star"></i></li>
                    <li class="fill"><i class="ion-android-star"></i></li>
                    <li class="fill"><i class="ion-android-star"></i></li>
                    <li class="empty"><i class="ion-android-star"></i></li>
                </ul>
            </div>
        </div>
        <div class="content-right">
            <span style="color: #883731;font-size: 18px;font-weight: bold;" class="price">' . $row['price'] . ' đ</span>
        </div>
</div>';
    }
} else {
    echo 'Không có dữ liệu';
}
