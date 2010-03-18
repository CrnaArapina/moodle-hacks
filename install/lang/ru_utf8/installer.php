<?php
/// Please, do not edit this file manually! It's auto generated from
/// contents stored in your standard lang pack files:
/// (langconfig.php, install.php, moodle.php, admin.php and error.php)
///
/// If you find some missing string in Moodle installation, please,
/// keep us informed using http://moodle.org/bugs Thanks!
///
/// File generated by cvs://contrib/lang2installer/installer_builder
/// using strings defined in stringnames.txt (same dir)

$string['admindirerror'] = 'Указан неверный каталог администратора';
$string['admindirname'] = 'Каталог администратора';
$string['admindirsettinghead'] = 'Установка каталога администратора';
$string['admindirsettingsub'] = 'На небольшом числе веб-хостингов путь \"/admin\" используется для доступа к панели управления или чему-то ещё. К несчастью это противоречит стандартному расположению страниц управления Moodle. Это можно исправить путём переименования папки \"admin\" в каталоге Moodle и указания нового имени здесь. Например: <br /> <br /><b>moodleadmin</b><br /> <br />
При этом все ссылки на управление Moodle исправятся автоматически.';
$string['bypassed'] = 'Пропущено';
$string['cannotcreatelangdir'] = 'Невозможно создать языковую папку';
$string['cannotcreatetempdir'] = 'Невозможно создать временную папку';
$string['cannotdownloadcomponents'] = 'Невозможно загрузить компоненты.';
$string['cannotdownloadzipfile'] = 'Не могу загрузить ZIP файл';
$string['cannotfindcomponent'] = 'Не могу найти компонент';
$string['cannotsavemd5file'] = 'Не могу сохранить MD5 файл';
$string['cannotsavezipfile'] = 'Не могу сохранить ZIP файл';
$string['cannotunzipfile'] = 'Не могу распаковать файл';
$string['caution'] = 'Предупреждение';
$string['check'] = 'Отметить';
$string['chooselanguagehead'] = 'Выберите язык';
$string['chooselanguagesub'] = 'Сейчас необходимо выбрать язык ТОЛЬКО для сообщений во время установки. Язык сайта и пользовательских интерфейсов можно будет указать далее в процессе установки.';
$string['closewindow'] = 'Закрыть окно';
$string['compatibilitysettingshead'] = 'Проверка настроек PHP...';
$string['compatibilitysettingssub'] = 'Ваш сервер должен пройти все перечисленные тесты, чтобы Moodle работал на нём корректно';
$string['componentisuptodate'] = 'Компонент не нуждается в обновлении';
$string['configfilenotwritten'] = 'Программе установки не удалось создать файл настроек config.php с выбранными настройками, скорее всего из-за того, что в каталоге Moodle запрещена запись. Вы можете вручную создать в корневом каталоге Moodle файл config.php следующего содержания.';
$string['configfilewritten'] = 'Файл config.php успешно создан';
$string['configurationcompletehead'] = 'Настройка завершена';
$string['configurationcompletesub'] = 'Предпринята попытка сохранить файл настроек в корневом каталоге Moodle.';
$string['continue'] = 'Продолжить';
$string['database'] = 'Название базы данных';
$string['databasecreationsettingshead'] = 'Теперь Вам необходимо указать настройки базы данных, в которой будет храниться большая часть данных Moodle. База данных с указанными параметрами будет автоматически создана в процессе установки.';
$string['databasecreationsettingssub'] = '<b>Тип:</b> установлен в \"mysql\" программой установки<br />
<b>Сервер баз данных:</b> установлен в \"localhost\" программой установки<br />
<b>Название базы данных:</b> например, moodle<br />
<b>Пользователь:</b> установлен в \"root\" программой установки<br />
<b>Пароль:</b> Ваш пароль от базы данных<br />
<b>Префикс имён таблиц:</b> необязательный префикс для использования в именах всех таблиц.';
$string['databasesettingshead'] = 'Теперь Вам необходимо указать настройки базы данных, в которой будет храниться большая часть данных Moodle. База данных должна быть уже создана. Потребуется логин и пароль для доступа к ней.';
$string['databasesettingssub'] = '<b>Тип:</b> mysql или postgres7<br />
<b>Сервер баз данных:</b> например, localhost или db.isp.com<br />
<b>Название базы данных:</b> например, moodle<br />
<b>Пользователь:</b> имя пользователя для доступа к базе данных<br />
<b>Пароль:</b> Ваш пароль от базы данных<br />
<b>Префикс имён таблиц:</b> необязательный префикс для использования в именах всех таблиц.';
$string['databasesettingssub_mssql'] = '<b>Тип:</b> SQL*Server (без UTF-8)<b><strong class=\"errormsg\">Экспериментальная возможность! (Не для рабочих серверов)</strong></b><br />
<b>Сервер баз данных:</b> например, localhost или db.isp.com<br />
<b>Название базы данных:</b> например,  moodle<br />
<b>Пользователь:</b> имя пользователя для доступа к базе данных<br />
<b>Пароль:</b> Ваш пароль от базы данных<br />
<b>Префикс имён таблиц:</b> обязательный префикс для использования в именах всех таблиц.';
$string['databasesettingssub_mssql_n'] = '<b>Тип:</b> SQL*Server (UTF-8 включен)<br />
<b>Сервер баз данных:</b> например, localhost или db.isp.com<br />
<b>Название базы данных:</b> например,  moodle<br />
<b>Пользователь:</b> имя пользователя для доступа к базе данных<br />
<b>Пароль:</b> Ваш пароль от базы данных<br />
<b>Префикс имён таблиц:</b> обязательный префикс для использования в именах всех таблиц.';
$string['databasesettingssub_mysql'] = '<b>Тип:</b> MуSQL<br />
<b>Сервер баз данных:</b> например, localhost или db.isp.com<br />
<b>Название базы данных:</b> например,  moodle<br />
<b>Пользователь:</b> имя пользователя для доступа к базе данных<br />
<b>Пароль:</b> Ваш пароль от базы данных<br />
<b>Префикс имён таблиц:</b> необязательный префикс для использования в именах всех таблиц.';
$string['databasesettingssub_mysqli'] = '<b>Тип:</b> Усовершенствованный MуSQL<br />
<b>Сервер баз данных:</b> например, localhost или db.isp.com<br />
<b>Название базы данных:</b> например,  moodle<br />
<b>Пользователь:</b> имя пользователя для доступа к базе данных<br />
<b>Пароль:</b> Ваш пароль от базы данных<br />
<b>Префикс имён таблиц:</b> необязательный префикс для использования в именах всех таблиц.';
$string['databasesettingssub_oci8po'] = '<b>Тип:</b> Oracle <br />
<b>Сервер баз данных:</b> не используется, оставьте пустым<br />
<b>Название базы данных:</b> имя соединения из tnsnames.ora<br />
<b>Пользователь:</b> имя пользователя для доступа к базе данных<br />
<b>Пароль:</b> Ваш пароль от базы данных<br />
<b>Префикс имён таблиц:</b> обязательный префикс для использования в именах всех таблиц, не более 2-х символов.';
$string['databasesettingssub_odbc_mssql'] = '<b>Тип:</b> SQL*Server (через ODBC)<b><strong class=\"errormsg\">Экспериментальная возможность! (Не для рабочих серверов)</strong></b><br />
<b>Сервер баз данных:</b> имя источника данных (DSN) из панели управления ODBC<br />
<b>Название базы данных:</b> например,  moodle<br />
<b>Пользователь:</b> имя пользователя для доступа к базе данных<br />
<b>Пароль:</b> Ваш пароль от базы данных<br />
<b>Префикс имён таблиц:</b> обязательный префикс для использования в именах всех таблиц.';
$string['databasesettingssub_postgres7'] = '<b>Тип:</b> PostgreSQL<br />
<b>Сервер баз данных:</b> например, localhost или db.isp.com<br />
<b>Название базы данных:</b> например,  moodle<br />
<b>Пользователь:</b> имя пользователя для доступа к базе данных<br />
<b>Пароль:</b> Ваш пароль от базы данных<br />
<b>Префикс имён таблиц:</b> обязательный префикс для использования в именах всех таблиц.';
$string['databasesettingswillbecreated'] = '<b>Замечание:</b> Программа установки попробует автоматически создать базу данных, если она не существует.';
$string['dataroot'] = 'Каталог данных';
$string['datarooterror'] = 'Не удаётся найти или создать указанный Вами \'Каталог данных\'. Введите корректный путь или создайте этот каталог вручную.';
$string['datarootpublicerror'] = 'Указанный вами \'Каталог данных\' доступен непосредственно через веб. Вам необходимо указать другой каталог.';
$string['dbconnectionerror'] = 'Не удаётся подключиться к базе данных с указанными параметрами. Проверьте установки.';
$string['dbcreationerror'] = 'Обшибка создания базы данных. Не удаётся создать базу данных с указанными параметрами.';
$string['dbhost'] = 'Сервер баз данных';
$string['dbprefix'] = 'Префикс имён таблиц';
$string['dbtype'] = 'Тип';
$string['dbwrongencoding'] = 'Выбранный сервер баз данных работает с не рекомендованной кодировкой ($a). Гораздо лучше использовать базу данных с кодировкой Unicode (UTF-8). Конечно, Вы можете пропустить эту проверку указав параметр \"Пропустить тест кодировки \", но в будущем у Вас могут возникнуть проблемы.';
$string['dbwronghostserver'] = 'Необходимо соблюдать указанные выше требования к полю \"Сервер баз данных\".';
$string['dbwrongnlslang'] = 'Переменная NLS_LANG Вашего веб-сервера должна использовать кодировку AL32UTF8. Смотрите документацию по PHP о том, как правильно настроить OCI8.';
$string['dbwrongprefix'] = 'Необходимо соблюдать указанные выше требования к полю \"Префикс имён таблиц\".';
$string['directorysettingshead'] = 'Пожалуйста, уточните путь, куда  устанавливается Moodle.';
$string['directorysettingssub'] = '<p><b>Веб-адрес:</b>
Укажите полный веб-адрес по которому будет осуществляться доступ к Moodle. 
Если Ваш сайт доступен по нескольким адресам, выберите наиболее простой и понятный учащимся. Не нужно завершать адрес косой чертой (/)</p>

<p><b>Каталог Moodle:</b>
Укажите полный путь к каталогу с этой установкой. Проверьте, чтобы верхний/нижний регистр был соблюдён.</p>

<p><b>Каталог данных:</b>
Вам необходимо указать место, в котором Moodle сможет хранить загружаемые файлы. Этот каталог должен быть доступен на чтение и НА ЗАПИСЬ пользователю, от чьего имени запущен веб-сервер (обычно \'nobody\' или \'apache\'), но при этом он не должен быть доступен непосредственно через веб.</p>';
$string['dirroot'] = 'Каталог Moodle';
$string['dirrooterror'] = 'Похоже, что \'Каталог Moodle\' указан неверно - там не удалось найти установку Moodle. Значение параметра  было сброшено.';
$string['download'] = 'Загрузить';
$string['downloadedfilecheckfailed'] = 'Ошибка проверки загруженного файла';
$string['downloadlanguagebutton'] = 'Загрузить языковой пакет для языка \"$a\"';
$string['downloadlanguagehead'] = 'Загрузка языкового пакета';
$string['downloadlanguagenotneeded'] = 'Вы можете продолжить установку используя стандартный языковой пакет \"$a\".';
$string['downloadlanguagesub'] = 'Теперь у Вас есть возможность загрузить языковой пакет и продолжить процесс установки на этом языке. <br /><br />Если загрузить языковой пакет не удастся, процесс установки продолжится на английском языке. (После окончания установки у Вас появится возможность загрузить и установить дополнительные языковые пакеты.)';
$string['environmenthead'] = 'Проверка окружения...';
$string['environmentsub'] = 'Производится проверка того, все ли компоненты системы отвечают требованиям';
$string['error'] = 'Ошибка';
$string['fail'] = 'Тест не пройден';
$string['fileuploads'] = 'Параметр \"file_uploads\"';
$string['fileuploadserror'] = 'Должен быть \"1\"';
$string['fileuploadshelp'] = '<p>Похоже, что на Вашем сервере отключена загрузка файлов.</p>

<p>Moodle может быть установлен, но без этой возможности, то есть вы не сможете загружать учебные файлы и фотографии пользователей.</p>

<p>Чтобы включить загрузку файлов Вам (или вашему системному администратору) нужно отредактировать главный файл php.ini сервера и установить параметр 
<b>file_uploads = 1</b>.</p>';
$string['gdversion'] = 'Версия библиотеки GD';
$string['gdversionerror'] = 'Библиотека GD необходима для создания и обработки изображений';
$string['gdversionhelp'] = '<p>Похоже, что на Вашем сервере не установлена библиотека GD.</p>

<p>Библиотека GD в PHP необходима Moodle, чтобы обрабатывать изображения (например, фотографии пользователей) и создавать новые (например, создавать графики в отчётах). Moodle сможет работать и без GD, но тогда эти возможности останутся недоступны.</p>

<p>Чтобы включить библиотеку GD в PHP под Unix, перекомпилируйте PHP с ключом --with-gd.</p>

<p>Под Windows обычно достаточно отредактировать файл php.ini и раскомментировать строку содержащую ссылку на php_gd2.dll.</p>';
$string['globalsquotes'] = 'Небезопасная обработка глобальных переменных';
$string['globalsquoteserror'] = 'Исправьте параметры PHP: отключите \"register_globals\" и включите \"magic_quotes_gpc\"';
$string['globalsquoteshelp'] = '<p>Комбинация отключенного параметра \"Magic Quotes GPC\" и включенного параметра \"Register Globals\" не рекомендуется.</p>

<p>Рекомендуемые настройки в файле php.ini <b>magic_quotes_gpc = On</b> и <b>register_globals = Off</b></p>

<p>Если у Вас нет доступа к файлу php.ini, Вы можете попробовать поместить следующие строки в файле .htaccess в каталоге Moodle:</p>
<blockquote><div>php_value magic_quotes_gpc On</div></blockquote>
<blockquote><div>php_value register_globals Off</div></blockquote>';
$string['help'] = 'Помощь';
$string['info'] = 'Информация';
$string['installation'] = 'Установка';
$string['invalidmd5'] = 'Некорректная md5';
$string['langdownloaderror'] = 'К несчастью, не удалось установить язык \"$a\". Процесс установки продолжится на английском.';
$string['langdownloadok'] = 'Язык \"$a\" успешно установлен. Процесс установки продолжится на этом языке.';
$string['language'] = 'Перевод';
$string['magicquotesruntime'] = 'Параметр \"magic_quotes_runtime\"';
$string['magicquotesruntimeerror'] = 'Должен быть \"Off\"';
$string['magicquotesruntimehelp'] = '<p>Для правильной работы Moodle режим  \"Magic quotes runtime\" должен быть отключен.</p>

<p>Обычно по умолчанию он и так отключен.  Ищите параметр <b>magic_quotes_runtime</b> в файле php.ini.</p>

<p>Если у Вас нет доступа к файлу php.ini, Вы можете попробовать поместить следующую строку в файле .htaccess в каталоге Moodle:</p>
<blockquote><div>php_value magic_quotes_runtime Off</div></blockquote>';
$string['memorylimit'] = 'Ограничение памяти';
$string['memorylimiterror'] = 'Ограничение памяти в PHP установлено слишком маленьким. Впоследствии это может создать трудности.';
$string['memorylimithelp'] = '<p>Сейчас ограничение памяти в PHP на Вашем сервере установлено в $a.</p>

<p>Из-за этого у через какое-то время у Moodle могут возникнуть проблемы с памятью, особенно если у Вас будет много модулей и/или пользователей.</p>

<p>Мы рекомендуем, если возможно, установить в PHP более высокое ограничение памяти, например 40M. 
Это можно попробовать сделать следующими способами:</p>
<ol>
<li>Если есть возможность, перекомпилируёте PHP с ключом <i>--enable-memory-limit</i>. 
В этом случае Moodle сможет самостоятельна установить ограничение памяти.</li>
<li>Если у Вас есть доступ к файлу php.ini, Вы можете изменить параметр <b>memory_limit</b> 
на что-нибудь типа 40M. Если доступа у Вас нет, может быть у Вас есть возможность попросить администратора сделать это.</li>
<li>На некоторых серверах PHP можно создать в каталоге Moodle файл .htaccess содержащий следующую строку:
<blockquote><div>php_value memory_limit 40M</div></blockquote>
<p>Тем не менее, на некоторых серверах из-за этого могут перестать работать <b>все</b> страницы PHP (Вы увидите ошибки на страницах). В этом случае придётся удалить файл .htaccess.</p></li>
</ol>';
$string['missingrequiredfield'] = 'Необходимое поле отсутствует';
$string['moodledocslink'] = 'Документация Moodle для этой страницы';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssqlextensionisnotpresentinphp'] = 'Расширение MSSQL для PHP сконфигурировано неверно, в результате чего невозможно установить связь с SQL*Server. Проверьте настройки в файле php.ini или перекомпилируйте PHP.';
$string['mssql_n'] = 'SQL*Server с поддержкой UTF-8 (mssql_n)';
$string['mysql'] = 'MySQL (mysql)';
$string['mysqlextensionisnotpresentinphp'] = 'Расширение MySQL для PHP сконфигурировано неверно, в результате чего невозможно установить связь с сервером MySQL. Проверьте настройки в файле php.ini или перекомпилируйте PHP.';
$string['mysqli'] = 'Усовершенствованный MySQL (mysqli)';
$string['mysqliextensionisnotpresentinphp'] = 'Расширение MySQLi для PHP сконфигурировано неверно, в результате чего невозможно установить связь с сервером MySQL. Проверьте настройки в файле php.ini или перекомпилируйте PHP.
Расширение MySQLi недоступно в PHP4.';
$string['name'] = 'Название';
$string['next'] = 'Дальше';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'Расширение OCI8 для PHP сконфигурировано неверно, в результате чего невозможно установить связь с сервером Oracle. Проверьте настройки в файле php.ini или перекомпилируйте PHP.';
$string['odbcextensionisnotpresentinphp'] = 'Расширение ODBC для PHP сконфигурировано неверно, в результате чего невозможно установить связь с сервером MySQL. Проверьте настройки в файле php.ini или перекомпилируйте PHP.';
$string['odbc_mssql'] = 'SQL*Server через ODBC (odbc_mssql)';
$string['ok'] = 'OK';
$string['parentlanguage'] = 'ru';
$string['pass'] = 'Тест пройден';
$string['password'] = 'Пароль';
$string['pgsqlextensionisnotpresentinphp'] = 'Расширение PGSQL для PHP сконфигурировано неверно, в результате чего невозможно установить связь с сервером PostgreSQL. Проверьте настройки в файле php.ini или перекомпилируйте PHP.';
$string['phpversion'] = 'Версия PHP';
$string['phpversionerror'] = 'Необходим PHP версии 4.3.0 и выше или 5.1.0 и выше (известны некоторые проблемы с версией 5.0.x).';
$string['phpversionhelp'] = '<p>Для Moodle необходим PHP версии 4.3.0 и выше или 5.1.0 и выше (известны некоторые проблемы с версией 5.0.x).</p>
<p>Сейчас у Вас используется версия $a</p>
<p>Вам нужно обновить PHP или переместиться на хостинг с более новой версией PHP!<br />
(В случае с версией 5.0.x можно также откатиться к версии 4.4.x)</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['postgresqlwarning'] = '<strong>Замечание:</strong> Если у Вас возникют трудности с подключением, попробуйте установить в поле \"Сервер баз данных\" значение host=\'сервер_postgresql\' port=\'5432\' dbname=\'имя_базы_данных_postgresql\' user=\'пользователь_postgresql\' password=\'пароль_пользователя_postgresql\'
и оставить поля \"Название базы данных\", \"Пользователь\" и \"Пароль\". Подробнее в <a href=\"http://docs.moodle.org/en/Installing_Postgres_for_PHP\">Moodle Docs</a>.';
$string['previous'] = 'Предыдущий';
$string['remotedownloadnotallowed'] = 'Загрузка компонентов на Ваш сервер не разрешена (allow_url_fopen выключено) <br /><br />. Вы должны загрузить <a href=\"$a->url\">$a->url</a> файл вручную, скопировав его в \"$a->dest\" на сервер и там его распаковать.';
$string['report'] = 'Отчет';
$string['restricted'] = 'Ограниченный';
$string['safemode'] = 'Режим Safe Mode';
$string['safemodeerror'] = 'У Moodle могут возникнуть проблемы при включенном режиме \"Safe Mode\"';
$string['safemodehelp'] = '<p>В режиме \"safe mode\" у Moodle могут возникнуть разнообразные сложности, например, невозможность создавать новые файлы.</p>

<p>Режим \"Safe mode\" на публичных веб-хостингах обычно используется только параноиками, поэтому для сайта Moodle Вам может понадобится всего лишь сменить веб-хостинг.</p>

<p>Вы, конечно, можете попробовать продолжить установку, но тогда ждите ряда проблем в будущем.</p>';
$string['sessionautostart'] = 'Параметр \"session.autostart\"';
$string['sessionautostarterror'] = 'Должен быть \"0\"';
$string['sessionautostarthelp'] = '<p>Moodle требуется поддержка сессий и без неё он не будет работать.</p>

<p>Необходимый режим работы с сессиями может быть установлены в файле php.ini. Установите session.auto_start = 0.</p>';
$string['skipdbencodingtest'] = 'Пропустить тест кодировки базы данных';
$string['status'] = 'Статус';
$string['thischarset'] = 'UTF-8';
$string['thisdirection'] = 'ltr';
$string['thislanguage'] = 'Русский';
$string['user'] = 'Пользователь';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Вы видите эту страницу так как на вашем компьютере успешно установлен и запущен набор программ <strong>$a->packname $a->packversion</strong>. Поздравляем!';
$string['welcomep30'] = 'Эта версия набора программ <strong>$a->installername</strong> включает следующие программы, необходимые для создания среды в которой будет работать <strong>Moodle</strong>:';
$string['welcomep40'] = 'Также в этот набор входит <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'Порядок использования приложений, входящих в этот набор, регламентируется соответствующими лицензиями. Набор программ <strong>$a->installername</strong> является полностью <a href=\"http://ru.wikipedia.org/wiki/Открытое_программное_обеспечение\">открытым </a> и распространяется на условиях лицензии <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a>.';
$string['welcomep60'] = 'На следующих страницах Вы сможете за несколько простых шагов настроить и установить <strong>Moodle</strong> на Ваш компьютер. Вы сможете принять настройки по умолчанию или изменить их в зависимости от Ваших потребностей.';
$string['welcomep70'] = 'Нажмите кнопку \"Далее\" чтобы продолжить процесс установки <strong>Moodle</strong>.';
$string['wrongdestpath'] = 'Ошибочный путь назначения';
$string['wrongsourcebase'] = 'Ошибочный источник базового URL';
$string['wrongzipfilename'] = 'Ошибочное имя ZIP файла';
$string['wwwroot'] = 'Веб-адрес';
$string['wwwrooterror'] = 'Похоже, что указан неверный \'Веб-адрес\' - не удалось найти там эту установку Moodle. Значение параметра было сброшено.';
?>
