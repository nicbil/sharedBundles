<?php

use yii\db\Migration;

class m170623_104126_yandex_geo_tabs extends Migration
{
    public function up() {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%yandex_geo_tabs}}', [
            'id' => $this->primaryKey(),
            'name' => $this->text()->notNull(),
            'text' => $this->text()->notNull(),
            'active' => 'tinyint(1) NOT NULL DEFAULT 1'
        ], $tableOptions);

        \Yii::$app->db->createCommand('INSERT INTO `yandex_geo_tabs` (`id`, `name`, `text`, `active`) VALUES
            (1, \'Как подключить\', \'<p><a class="name-slide" href="">Как подключить</a></p>\r\n\r\n<ol>\r\n	<li><span class="num">1</span>\r\n\r\n	<p>Скачайте любое из приложений Яндекс.Карты, Яндекс.Навигатор<br />\r\n	или Яндекс.Транспорт на свой смартфон или планшет.</p>\r\n	</li>\r\n	<li><span class="num">2</span>\r\n	<p><b>Подключите Яндекс.Гео на сайте или используйте:</b></p>\r\n	</li>\r\n</ol>\r\n\r\n<ul class="nostyle-ul">\r\n	<li>- Мобильное приложение Smart life:)</li>\r\n	<li>- <b>USSD *200#</b><img alt="" src="../../../assets/img/phone.png" />- Навигация и транспорт</li>\r\n	<li>- Короткий <b>USSD-код *8303#</b><img alt="" src="../../../assets/img/phone.png" /></li>\r\n	<li>- Бесплатный номер 920</li>\r\n	<li>- Отравьте SMS c 1 на номер 8303</li>\r\n</ul>\r\n\', 1),
            (2, \'Как отключить\', \'<a class="name-slide" href="">Как отключить</a>\r\n\r\n<ol>\r\n	<li><span class="num">1</span>\r\n\r\n	<p>Для отключения Яндекс.Гео используйте:</p>\r\n	</li>\r\n</ol>\r\n\r\n<ul class="nostyle-ul">\r\n	<li>- Мобильное приложение Smart life:)</li>\r\n	<li>- <b>USSD *200#</b><img alt="" src="../../../assets/img/phone.png" /> - Навигация и транспорт</li>\r\n	<li>- Короткий <b>USSD-код *8303#</b><img alt="" src="../../../assets/img/phone.png" /></li>\r\n	<li>- Бесплатный номер 920</li>\r\n</ul>\r\n\', 1);
        ')->execute();
    }

    public function down() {
        $this->dropTable('yandex_geo_tabs');
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
