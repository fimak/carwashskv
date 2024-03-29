<?php

use yii\db\Schema;
use yii\db\Migration;

class m141029_095013_addFixtures extends Migration
{
    public function up()
    {
        $this->insert('page', [
            'name' => 'about',
            'title' => 'Об автомойке на средней',
            'text' => '<p>
                Мойка автомобиля - дело весьма хлопотное и длительное , поэтому для придания своему
                авто респектабельного вида лучше обратиться к специалистам.
            </p>
            <p>
                Автомойка "На Средней" предлагает полный спектр услуг для Вас и вашего авто!
                Услугами нашей мойки на Средней 163 пользуются не только автовладельцы из близлежащих
                домов и работники находящихся вблизи предприятий, но и просто проезжающие мимо автолюбители.
                Наша цель - высокое качество исполнения работ, именно поэтому совсем недавно открытая нами
                мойка уже пользуется популярностью среди автолюбителей. Автомойка поможет Вам справиться с
                загрязнениями автомобиля любого рода максимально быстро и качественно, без вреда для
                лакокрасочного покрытия, так как мы применяем бесконтактную технологию мойки
            </p>
            <p>
                Технологический процесс нашей мойки, осуществляется в несколько обязательных этапов,
                пройдя которые Ваш автомобиль приобретет замечательный вид. Наши специалисты позаботятся
                о Вашем любимце наилучшим образом .За процессом мойки Вашего автомобиля Вы можете
                наблюдать через окно в комнате ожидания ,не рискуя быть облитыми водой и при этом
                выпить чашку кофе (для постоянных клиентов бесплатно) и посмотреть телевизор.
            </p>
            <p>
                На автомойке "На Средней 163" существует ряд комплексных предложений, сочетающих в
                себе различные виды услуг. Есть система скидок, сезонные пакеты услуг по мойке машин.
                При этом - цена на комплексные услуги будет меньше, чем суммарная стоимость отдельных
                видов услуг. Выбирая комплексность -Вы экономите.
            </p>
            <p>
                Администратор нашей автомойки поможет выбрать оптимальный набор услуг, который
                необходим именно для вашего автомобиля.
            </p>
            <p>
                Мы ждем Вас!
            </p>',
            'image' => '/images/carwash.jpg',
            'image_description' => 'Автомойка на средней, вид спереди.',
        ]);

        $this->batchInsert(
            'service',
            ['type', 'service', 'cost'], [
            ['CARWASH', 'мойка кузова профессиональными хим. средствами', '0'],
            ['CARWASH', 'мойка двигателя', '0'],
            ['CARWASH', 'САМООБСЛУЖИВАНИЕ 1 час', '200р'],
            ['CARWASH', 'качественная уборка салона', '0'],
            ['CARWASH', 'профессиональная химчистка салона от', '1500'],
            ['CARWASH', 'химчистка ковров 1м2', '90'],
            ['CARWASH', 'еще одна услуга', '700'],
            ['CAFFE', 'Кофе', '20'],
            ['CAFFE', 'Чай', '15'],
            ['CAFFE', 'Горячий шоколад', '30'],
            ['CAFFE', 'Борщ', '60'],
            ['CAFFE', 'Шоколад', '30'],
            ['CAFFE', 'Беляш', '20'],
            ['CAFFE', 'Чебурек', '20'],
            ['CAFFE', 'Нарды 1 час', '50'],
        ]);

        $this->batchInsert('discount', ['text', 'expire_date'], [
            ['А теперь приятный сюрприз!!! При заказе комплексной мойки верх/салон за 290 руб., покрытие полироль салона+ароматизатор воздуха+уборка багажника в подарок!!!', ''],
            ['УВАЖАЕМЫЕ ДРУЗЬЯ!!!ЗАВТРА У НАС НА АВТОМОЙКЕ АКЦИЯ ВЕРХ САЛОН 250 рублей! ПРИ ОДНОМ УСЛОВИИ СДЕЛАТЬ РЕПОСТ <a href="https://vk.com/club77955846?w=wall-77955846_37" target="_blank">ЭТОГО СООБЩЕНИЯ ВКОНТАКТЕ!</a>', ''],
            ['АКЦИЯ с 21-00 до 7-00 верх+салон 290 рублей!', ''],
        ]);

        $this->batchInsert('feedback', ['rating', 'author', 'text', 'status'], [
            ['5', 'Василий Петрович', 'Заебись мойка отвечаю', 'ACTIVE'],
            ['3', 'Генадий Васильевич', 'Ну такая блдь на троечку... Я бы ту, сю хуйню бы поменял. Так и так мол не понравилось. Но еще приеду потому что дешево. Короче с мойкой справились да и ладно.', 'ACTIVE'],
            ['4', 'Алексей Иванович', 'Вот читаю и диву даюсь некоторым комментариям. Вполне нормальная мойка. Я так же как и большинство тут людей брал купон на три мойки и приезжал. Моют вполне сносно. Машина чистая и сухая. А что вы хотели за 100 рублей? Кому не нравиться идите мойте за 500р, могу адрес подсказать. И на счет поломок после химчистки. Ребята, а вы на СТО тоже машину со всем имуществом и без описи оставляете??? А так... после драки кулаками не машут', 'ACTIVE'],
        ]);
    }

    public function down()
    {
        $this->truncateTable('page');
        $this->truncateTable('service');
        $this->truncateTable('discount');
        $this->truncateTable('feedback');
    }
}
