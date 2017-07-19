<?php

use yii\db\Migration;

class m170623_104137_yandex_geo_messages extends Migration
{
    public function up() {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%yandex_geo_messages}}', [
            'id' => $this->primaryKey(),
            'code' => 'varchar(255) NOT NULL',
            'text' => $this->text()->notNull()
        ], $tableOptions);

        \Yii::$app->db->createCommand('INSERT INTO `yandex_geo_messages` (`id`, `code`, `text`) VALUES
            (1, \'message_0\', \'Яндекс.Гео дает возможность пользоваться тремя сервисами Яндекс.Карты, Яндекс.Навигатор, Яндекс.Транспорт без расхода мобильного интернета из вашего тарифа или пакета.\'),
            (2, \'message_1\', \'Если в течение 30 дней вы не пополните счет для продления Яндекс.Гео на сутки или 30 дней, то сервис просто отключится\'),
            (3, \'message_2\', \'Стоимость 0,9 руб/30 дней. Сервис Яндекс.Гео продлевается автоматически на следующие 30 дней, если на \r\n                            счете достаточно денег. Если суммы недостаточно, то сервис будет продлеваться каждые сутки, стоимость составит 0,04 руб/сутки.\'),
            (4, \'message_3\', \'Ответственность за содержание ресурсов несет Yandex LLC. Приложения Яндекс.Карты, Яндекс.Навигатор, Яндекс.\r\n                    Транспорт принадлежат Yandex LLC\'),
            (5, \'message_4\', \'<p>Подключайте Яндекс.Гео и получайте безлимит на три приложения:</p>\r\n\'),
            (6, \'message_5\', \'<p>Связаться с нами: 909 или 920<br> круглосуточно и бесплатно в сети life:)</p>\r\n\'),
            (7, \'message_6\', \'Первые 3 дня бесплатно! Далее 0,9 руб/30 дней. Для сервисов &quot;Яндекс.Гео интернет безлимитный&quot;.\'),
            (8, \'message_7\', \'<p>Cервис Яндекс.Гео уже подключен</p>\r\n\r\n<p>Заходите в приложение и иользуйте все</p>\r\n\r\n<p>возможности сервисов Яндекс!</p>\r\n\'),
            (9, \'message_8\', \'Вы ввели неправильный номер телефона или пароль. Проверьте привильность написания или подключитесь к сети life:) и попробуйте снова.\'),
            (10, \'message_9\', \'<p>Сервис Яндекс.Гео подключен!</p>\r\n\'),
            (11, \'message_10\', \'<p>Неудача!</p>\r\n\r\n<p>Увы, не удалось подключить &quot;Яндекс.Гео&quot; - на вашем счете недостаточно средств. Пополтине счет и попробуйте снова.</p>\r\n\r\n<p><a href=\"https://payment.webpay.by/epay/life\">Пополнить счет</a></p>\r\n\'),
            (12, \'message_11\', \'пароль должен быть не меньше 4 символов\r\n\'),
            (13, \'message_12\', \'<a href="#">Я еще не абонент life:)</a>\r\n\'),
            (14, \'message_13\', \'<a href="#" class="lic">Порядок оказания услуги</a>\r\n\');
       ')->execute();
    }

    public function down() {
        $this->dropTable('yandex_geo_messages');
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
