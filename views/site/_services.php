<?php
use yii\widgets\ActiveForm; ?>
<div id="site-services">
    <div class="service_main">
        <div class="services_list dark-wrap">
            <h2 class="yellow nomargin">Услуги и цены</h2>
            <h3>Мойка</h3>
            <ul class="clearfix">
                <?php foreach($services as $service) : ?>
                    <?php if ($service['type'] == 'CARWASH') : ?>
                        <li class=""><?= $service->service ?> <span class="service-cost  pull-right">- <?= $service->cost ?> руб.</span></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
            <h3>Кафе</h3>
            <ul class="clearfix">
                <?php foreach($services as $service) : ?>
                    <?php if ($service['type'] == 'CAFFE') : ?>
                        <li class=""><?= $service->service ?> <span class="service-cost pull-right">- <?= $service->cost ?> руб.</span></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
            <div class="weather">
                <a href="http://clck.yandex.ru/redir/dtype=stred/pid=7/cid=1228/*http://pogoda.yandex.ru/omsk"><img src="http://info.weather.yandex.net/omsk/2.ru.png" border="0" alt=""/><img width="1" height="1" src="http://clck.yandex.ru/click/dtype=stred/pid=7/cid=1227/*http://img.yandex.ru/i/pix.gif" alt="" border="0"/></a>
                <button value="/schedule/create" class="btn btn-lg btn-success book-car-wash">Записаться на мойку</button>
            </div>
    </div>
    <div class="">
        <div id="site-discount" class=" dark-wrap">
            <h2 class="yellow nomargin">Акции и скидки</h2>
            <ul class="clearfix">
                <?php foreach ($discounts as $discount) : ?>
                    <li>
                        <?= $discount->text ?>
                        <?php if ($discount->expire_date) : ?>
                            <span class="expire_date">Акция действительна до <?= $discount->expire_date ?></span>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
        </div>
    </div>
</div>