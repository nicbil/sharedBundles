<?php

use yii\db\Migration;

class m170623_103921_yandex_geo_content extends Migration
{
    public function up() {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%yandex_geo_content}}', [
            'id' => $this->primaryKey(),
            'name_page' => $this->text()->notNull(),
            'text' => $this->text()->notNull(),
            'active' => 'tinyint(1) NOT NULL DEFAULT 1',
            'url' => 'varchar(255) NOT NULL'
        ], $tableOptions);

        \Yii::$app->db->createCommand('INSERT INTO `yandex_geo_content` (`id`, `name_page`, `text`, `active`, `url`) VALUES
          (3, \'Яндекс.Навигатор\', \'<div class=\"col span_1_of_2\"><img alt=\"\" src=\"../../../assets/img/navigator.png\" /></div>\r\n\r\n<div class=\"col span_1_of_2\">\r\n<h2>Яндекс.Навигатор</h2>\r\n<img alt=\"\" class=\"icon\" src=\"../../../assets/img/navigator-icon.png\" />\r\n<p>Поможет добраться до цели в объезд пробок, подскажет, где на дороге ремонт, аварии и предупредит об ограничении скорости.</p>\r\n\r\n<div class=\"link-promo\"><a href=\"http://play.google.com/store/apps/details?id=ru.yandex.yandexnavi\"><img alt=\"\" src=\"../../../assets/img/playmarket.png\" /></a> <a href=\"http://itunes.apple.com/ru/app/yandex.navigator/id474500851\"><img alt=\"\" src=\"../../../assets/img/appmarket.png\" /></a> <a href=\"http://www.windowsphone.com/en-us/store/app/yandex-navigator/f4fe0c9a-1fb0-458e-b6af-bb4909c126db\"><img alt=\"\" src=\"../../../assets/img/windows.png\" /></a></div>\r\n</div>\r\n\', 1, \'navigator\'),
          (4, \'Яндекс.Карты\', \'<div class=\"col span_1_of_2\">\r\n<h2>Яндекс.Карты</h2>\r\n<img alt=\"\" class=\"icon\" src=\"../../../assets/img/maps-icon.png\" />\r\n<p>Помогут построить оптимальный маршрут. Любую карту можно сохранить на смартфоне, планшете или компьютере и открыть без интернета.</p>\r\n\r\n<div class=\"link-promo\"><a href=\"http://play.google.com/store/apps/details?id=ru.yandex.yandexmaps\"><img alt=\"\" src=\"../../../assets/img/playmarket.png\" /></a> <a href=\"https://itunes.apple.com/ru/app/yandex-maps/id313877526?mt=8&amp;uo=4&amp;at=11l9Wx&amp;ct=mobile\"><img alt=\"\" src=\"../../../assets/img/appmarket.png\" /></a> <a href=\"https://www.microsoft.com/ru-ru/store/p/yandexmaps/9wzdncrfj433\"><img alt=\"\" src=\"../../../assets/img/windows.png\" /></a></div>\r\n</div>\r\n\r\n<div class=\"col span_1_of_2\"><img alt=\"\" src=\"../../../assets/img/maps.png\" /></div>\r\n\', 1, \'maps\'),
          (5, \'Яндекс.Транспорт\', \'<div class=\"col span_1_of_2\"><img alt=\"\" src=\"../../../assets/img/transport.png\" /></div>\r\n\r\n<div class=\"col span_1_of_2\">\r\n<h2>Яндекс.Транспорт</h2>\r\n<img alt=\"\" class=\"icon\" src=\"../../../assets/img/trans-icon.png\" />\r\n<p>Позволит следить за движением общественного транспорта онлайн. Не нужно больше гадать, сколько еще ждать на остановке &ndash; приложение покажет на карте, где едет ваш автобус, трамвай, троллейбус или маршрутка.</p>\r\n\r\n<div class=\"link-promo\"><a href=\"https://play.google.com/store/apps/details?id=ru.yandex.yandexbus&amp;hl=ru\"><img alt=\"\" src=\"../../../assets/img/playmarket.png\" /></a> <a href=\"https://itunes.apple.com/ru/app/andeks.transport/id826358136?l=ru&amp;ls=1&amp;mt=8&amp;uo=4&amp;at=11l9Wx&amp;ct=mobile\"><img alt=\"\" src=\"../../../assets/img/appmarket.png\" /></a></div>\r\n</div>\r\n\', 1, \'transport\');
        ')->execute();
    }

    public function down() {
        $this->dropTable('yandex_geo_content');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
