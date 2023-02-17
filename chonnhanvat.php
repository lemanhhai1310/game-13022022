<?php $data["title"] = "Chọn nhân vật"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-flex uk-flex-column uk-text-center" uk-height-viewport="">
    <div class="uk-flex-auto uk-flex-middle uk-flex chonnhanvat__top">
        <div class="uk-section-small uk-width">
            <div class="uk-container">
                <div class="uk-grid uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-6@l uk-grid-match" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'images/chonnhanvat/img1.png',
                            'txt' => 'images/chonnhanvat/txt1.png',
                        ),
                        array(
                            'src' => 'images/chonnhanvat/img2.png',
                            'txt' => 'images/chonnhanvat/txt2.png',
                        ),
                        array(
                            'src' => 'images/chonnhanvat/img3.png',
                            'txt' => 'images/chonnhanvat/txt3.png',
                        ),
                        array(
                            'src' => 'images/chonnhanvat/img4.png',
                            'txt' => 'images/chonnhanvat/txt4.png',
                        ),
                        array(
                            'src' => 'images/chonnhanvat/img5.png',
                            'txt' => 'images/chonnhanvat/txt5.png',
                        ),
                        array(
                            'src' => 'images/chonnhanvat/img6.png',
                            'txt' => 'images/chonnhanvat/txt6.png',
                        ),
                        array(
                            'src' => 'images/chonnhanvat/img7.png',
                            'txt' => 'images/chonnhanvat/txt7.png',
                        ),
                        array(
                            'src' => 'images/chonnhanvat/img8.png',
                            'txt' => 'images/chonnhanvat/txt8.png',
                        ),
                        array(
                            'src' => 'images/chonnhanvat/img9.png',
                            'txt' => 'images/chonnhanvat/txt9.png',
                        ),
                        array(
                            'src' => 'images/chonnhanvat/img10.png',
                            'txt' => 'images/chonnhanvat/txt10.png',
                        ),
                        array(
                            'src' => 'images/chonnhanvat/img11.png',
                            'txt' => 'images/chonnhanvat/txt11.png',
                        ),
                        array(
                            'src' => 'images/chonnhanvat/img12.png',
                            'txt' => 'images/chonnhanvat/txt12.png',
                        ),
                    );
                    foreach ($data as $k=>$v): ?>
                    <div>
                        <div class="uk-text-center uk-flex uk-flex-column">
                            <div class="chonnhanvat__top__boxImg uk-flex-auto uk-flex uk-flex-middle uk-flex-center">
                                <img class="chonnhanvat__top__img" c src="<?= $v['src'] ?>" alt="">
                            </div>
                            <div>
                                <img class="chonnhanvat__top__txt" src="<?= $v['txt'] ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section-small uk-width chonnhanvat__bottom uk-text-center">
        <div class="uk-container">
            <a href=""><img class="chonnhanvat__bottom__btn" src="images/chonnhanvat/btn-chonnhanvat.png" alt=""></a>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>