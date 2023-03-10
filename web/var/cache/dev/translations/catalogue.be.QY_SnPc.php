<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('be', array (
  'validators' => 
  array (
    'This value should be false.' => 'Значэнне павінна быць Не.',
    'This value should be true.' => 'Значэнне павінна быць Так.',
    'This value should be of type {{ type }}.' => 'Тып значэння павінен быць {{ type }}.',
    'This value should be blank.' => 'Значэнне павінна быць пустым.',
    'The value you selected is not a valid choice.' => 'Абранае вамі значэнне не сапраўднае.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Вы павінны выбраць хаця б {{ limit }} варыянт.|Вы павінны выбраць хаця б {{ limit }} варыянтаў.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Вы павінны выбраць не больш за {{ limit }} варыянт.|Вы павінны выбраць не больш за {{ limit }} варыянтаў.',
    'One or more of the given values is invalid.' => 'Адзін або некалькі пазначаных значэнняў з\'яўляецца несапраўдным.',
    'This field was not expected.' => 'Гэта поле не чакаецца.',
    'This field is missing.' => 'Гэта поле адсутнічае.',
    'This value is not a valid date.' => 'Гэта значэнне не з\'яўляецца карэктнай датай.',
    'This value is not a valid datetime.' => 'Гэта значэнне не з\'яўляецца карэктнай датай i часом.',
    'This value is not a valid email address.' => 'Гэта значэнне не з\'яўляецца карэктным адрасам электроннай пошты.',
    'The file could not be found.' => 'Файл не знойдзен.',
    'The file is not readable.' => 'Файл не чытаецца.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл занадта вялікі ({{ size }} {{ suffix }}). Максімальна дазволены памер {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'MIME-тып файлу некарэкты ({{ type }}). Дазволеныя MIME-тыпы файлу {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Значэнне павінна быць {{ limit }} або менш.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Значэнне занадта доўгае. Яно павінна мець {{ limit }} сімвал або менш.|Значэнне занадта доўгае. Яно павінна мець {{ limit }} сімвалаў або менш.',
    'This value should be {{ limit }} or more.' => 'Значэнне павінна быць {{ limit }} або больш.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Значэнне занадта кароткае. Яно павінна мець прынамсі {{ limit }} сімвал.|Значэнне занадта кароткае. Яно павінна мець прынамсі {{ limit }} сімвалаў.',
    'This value should not be blank.' => 'Значэнне не павінна быць пустым.',
    'This value should not be null.' => 'Значэнне не павінна быць null.',
    'This value should be null.' => 'Значэнне павінна быць null.',
    'This value is not valid.' => 'Значэнне з\'яўляецца не сапраўдным.',
    'This value is not a valid time.' => 'Значэнне не з\'яўляецца сапраўдным часам.',
    'This value is not a valid URL.' => 'Значэнне не з\'яўляецца сапраўдным URL-адрасам.',
    'The two values should be equal.' => 'Абодва значэнні павінны быць аднолькавымі.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл занадта вялікі. Максімальна дазволены памер {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Файл занадта вялікі.',
    'The file could not be uploaded.' => 'Немагчыма запампаваць файл.',
    'This value should be a valid number.' => 'Значэнне павінна быць лікам.',
    'This file is not a valid image.' => 'Гэты файл не з\'яўляецца сапраўднай выявай.',
    'This is not a valid IP address.' => 'Значэнне не з\'яўляецца сапраўдным IP-адрасам.',
    'This value is not a valid language.' => 'Значэнне не з\'яўляецца сапраўдным мовай.',
    'This value is not a valid locale.' => 'Значэнне не з\'яўляецца сапраўднай лакаллю.',
    'This value is not a valid country.' => 'Значэнне не з\'яўляецца сапраўднай краінай.',
    'This value is already used.' => 'Гэта значэнне ўжо выкарыстоўваецца.',
    'The size of the image could not be detected.' => 'Немагчыма вызначыць памер выявы.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Гэта выява занадта вялікая ({{ width }}px). Дазваляецца максімальная шырыня {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Гэта выява занадта маленькая ({{ width }}px). Дазваляецца мінімальная шырыня {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Гэты выява занадта вялікая ({{ width }}px). Дазваляецца максімальная вышыня {{ max_width }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Гэта выява занадта маленькая ({{ width }}px). Дазваляецца мінімальная вышыня {{ min_width }}px.',
    'This value should be the user\'s current password.' => 'Значэнне павінна быць цяперашнім паролем карыстальніка.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Значэнне павінна мець {{ limit }} сімвал.|Значэнне павінна мець {{ limit }} сімвалаў.',
    'The file was only partially uploaded.' => 'Файл быў запампаваны толькі часткова.',
    'No file was uploaded.' => 'Файл не быў запампаваны.',
    'No temporary folder was configured in php.ini.' => 'У php.ini не была налажана часовая папка, або часовая папка не існуе.',
    'Cannot write temporary file to disk.' => 'Немагчыма запісаць часовы файл на дыск.',
    'A PHP extension caused the upload to fail.' => 'Пашырэнне PHP выклікала памылку загрузкі.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Калекцыя павінна змяшчаць прынамсі {{ limit }} элемент.|Калекцыя павінна змяшчаць прынамсі {{ limit }} элементаў.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Калекцыя павінна змяшчаць {{ limit }} або менш элемент.|Калекцыя павінна змяшчаць {{ limit }} або менш элементаў.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Калекцыя павінна змяшчаць роўна {{ limit }} элемент.|Калекцыя павінна змяшчаць роўна {{ limit }} элементаў.',
    'Invalid card number.' => 'Несапраўдны нумар карты.',
    'Unsupported card type or invalid card number.' => 'Тып карты не падтрымліваецца або несапраўдны нумар карты.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Несапраўдны міжнародны нумар банкаўскага рахунку (IBAN).',
    'This value is not a valid ISBN-10.' => 'Гэта значэнне не з\'яўляецца сапраўдным ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Гэта значэнне не з\'яўляецца сапраўдным ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Гэта значэнне не з\'яўляецца сапраўдным ISBN-10 або ISBN-13.',
    'This value is not a valid ISSN.' => 'Гэта значэнне не з\'яўляецца сапраўдным ISSN.',
    'This value is not a valid currency.' => 'Гэта значэнне не з\'яўляецца сапраўднай валютай.',
    'This value should be equal to {{ compared_value }}.' => 'Значэнне павінна раўняцца {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Значэнне павінна быць больш чым {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Значэнне павінна быць больш чым або раўняцца {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значэнне павінна быць ідэнтычным {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Значэнне павінна быць менш чым {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Значэнне павінна быць менш чым або раўняцца {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Значэнне не павінна раўняцца {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значэнне не павінна быць ідэнтычным {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Суадносіны бакоў выявы з\'яўляецца занадта вялікім ({{ ratio }}). Дазваляецца максімальныя суадносіны {{max_ratio}} .',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Суадносіны бакоў выявы з\'яўляецца занадта маленькімі ({{ ratio }}). Дазваляецца мінімальныя суадносіны {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Выява квадратная ({{width}}x{{height}}px). Квадратныя выявы не дазволены.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Выява ў альбомнай арыентацыі ({{ width }}x{{ height }}px). Выявы ў альбомнай арыентацыі не дазволены.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Выява ў партрэтнай арыентацыі ({{ width }}x{{ height }}px). Выявы ў партрэтнай арыентацыі не дазволены.',
    'An empty file is not allowed.' => 'Пусты файл не дазволены.',
    'The host could not be resolved.' => 'Не магчыма знайсці імя хоста.',
    'This value does not match the expected {{ charset }} charset.' => 'Гэта значэнне не супадае з чаканай {{ charset }} кадыроўкай.',
    'This is not a valid Business Identifier Code (BIC).' => 'Несапраўдны банкаўскі ідэнтыфікацыйны код (BIC).',
    'Error' => 'Памылка',
    'This is not a valid UUID.' => 'Гэта несапраўдны UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Значэнне павінна быць кратным {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Банкаўскі ідэнтыфікацыйны код (BIC) не звязан з IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Гэта значэнне павінна быць у фармаце JSON.',
    'This collection should contain only unique elements.' => 'Калекцыя павінна змяшчаць толькі ўнікальныя элементы.',
    'This value should be positive.' => 'Значэнне павінна быць дадатным.',
    'This value should be either positive or zero.' => 'Значэнне павінна быць дадатным ці нуль.',
    'This value should be negative.' => 'Значэнне павінна быць адмоўным.',
    'This value should be either negative or zero.' => 'Значэнне павінна быць адмоўным ці нуль.',
    'This value is not a valid timezone.' => 'Значэнне не з\'яўляецца сапраўдным гадзінным поясам.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Гэты пароль быў выкрадзены ў выніку ўзлому дадзеных, таму яго нельга выкарыстоўваць. Калі ласка, выкарыстоўвайце іншы пароль.',
    'This value should be between {{ min }} and {{ max }}.' => 'Значэнне павінна быць паміж {{min}} і {{max}}.',
    'This value is not a valid hostname.' => 'Значэнне не з\'яўляецца карэктным імем хаста.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Колькасць элементаў у гэтай калекцыі павінна быць кратным {{compared_value}}.',
    'This value should satisfy at least one of the following constraints:' => 'Значэнне павінна задавальняць як мінімум аднаму з наступных абмежаванняў:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Кожны элемент гэтай калекцыі павінен задавальняць свайму ўласнаму набору абмежаванняў.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Значэнне не з\'яўляецца карэктным міжнародным ідэнтыфікацыйным нумарам каштоўных папер (ISIN).',
    'This value should be a valid expression.' => 'Значэнне не з\'яўляецца сапраўдным выразам.',
    'This value is not a valid CSS color.' => 'Значэнне не з\'яўляецца дапушчальным колерам CSS.',
    'This value is not a valid CIDR notation.' => 'Значэнне не з\'яўляецца сапраўднай натацыяй CIDR.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Значэнне сеткавай маскі павінна быць ад {{min}} да {{max}}.',
    'This form should not contain extra fields.' => 'Гэта форма не павінна мець дадатковых палей.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Запампаваны файл быў занадта вялікім. Калі ласка, паспрабуйце запампаваць файл меншага памеру.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-токен не сапраўдны. Калі ласка, паспрабуйце яшчэ раз адправіць форму.',
    'This value is not a valid HTML5 color.' => 'Значэнне не з\'яўляецца карэктным HTML5 колерам.',
    'Please enter a valid birthdate.' => 'Калі ласка, увядзіце карэктную дату нараджэння.',
    'The selected choice is invalid.' => 'Выбраны варыянт некарэктны.',
    'The collection is invalid.' => 'Калекцыя некарэктна.',
    'Please select a valid color.' => 'Калі ласка, выберыце карэктны колер.',
    'Please select a valid country.' => 'Калі ласка, выберыце карэктную краіну.',
    'Please select a valid currency.' => 'Калі ласка, выберыце карэктную валюту.',
    'Please choose a valid date interval.' => 'Калі ласка, выберыце карэктны інтэрвал дат.',
    'Please enter a valid date and time.' => 'Калі ласка, увядзіце карэктныя дату і час.',
    'Please enter a valid date.' => 'Калі ласка, увядзіце карэктную дату.',
    'Please select a valid file.' => 'Калі ласка, выберыце карэктны файл.',
    'The hidden field is invalid.' => 'Значэнне схаванага поля некарэктна.',
    'Please enter an integer.' => 'Калі ласка, увядзіце цэлы лік.',
    'Please select a valid language.' => 'Калі ласка, выберыце карэктную мову.',
    'Please select a valid locale.' => 'Калі ласка, выберыце карэктную лакаль.',
    'Please enter a valid money amount.' => 'Калі ласка, увядзіце карэктную колькасць грошай.',
    'Please enter a number.' => 'Калі ласка, увядзіце нумар.',
    'The password is invalid.' => 'Няправільны пароль.',
    'Please enter a percentage value.' => 'Калі ласка, увядзіце працэнтнае значэнне.',
    'The values do not match.' => 'Значэнні не супадаюць.',
    'Please enter a valid time.' => 'Калі ласка, увядзіце карэктны час.',
    'Please select a valid timezone.' => 'Калі ласка, выберыце карэктны гадзінны пояс.',
    'Please enter a valid URL.' => 'Калі ласка, увядзіце карэктны URL.',
    'Please enter a valid search term.' => 'Калі ласка, увядзіце карэктны пошукавы запыт.',
    'Please provide a valid phone number.' => 'Калі ласка, увядзіце карэктны нумар тэлефона.',
    'The checkbox has an invalid value.' => 'Флажок мае некарэктнае значэнне.',
    'Please enter a valid email address.' => 'Калі ласка, увядзіце карэктны адрас электроннай пошты.',
    'Please select a valid option.' => 'Калі ласка, выберыце карэктны варыянт.',
    'Please select a valid range.' => 'Калі ласка, выберыце карэктны дыяпазон.',
    'Please enter a valid week.' => 'Калі ласка, увядзіце карэктны тыдзень.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Памылка аўтэнтыфікацыі.',
    'Authentication credentials could not be found.' => 'Дадзеныя аўтэнтыфікацыі не знойдзены.',
    'Authentication request could not be processed due to a system problem.' => 'Запыт аўтэнтыфікацыі не можа быць апрацаваны ў сувязі з праблемай у сістэме.',
    'Invalid credentials.' => 'Несапраўдныя дадзеныя аўтэнтыфікацыі.',
    'Cookie has already been used by someone else.' => 'Нехта іншы ўжо выкарыстаў гэтыя кукі (cookie).',
    'Not privileged to request the resource.' => 'Адсутнічаюць правы на запыт гэтага рэсурсу.',
    'Invalid CSRF token.' => 'Несапраўдны CSRF-токен.',
    'No authentication provider found to support the authentication token.' => 'Не знойдзен правайдар аўтэнтыфікацыі, які можа падтрымліваць гэты токен аўтэнтыфікацыі.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сесія не даступна, яе час скончыўся, або кукі (cookies) выключаны.',
    'No token could be found.' => 'Токен не знойдзен.',
    'Username could not be found.' => 'Імя карыстальніка не знойдзена.',
    'Account has expired.' => 'Скончыўся тэрмін дзеяння акаўнта.',
    'Credentials have expired.' => 'Скончыўся тэрмін дзеяння дадзеных аўтэнтыфікацыі.',
    'Account is disabled.' => 'Акаўнт адключан.',
    'Account is locked.' => 'Акаўнт заблакіраван.',
    'Too many failed login attempts, please try again later.' => 'Зашмат няўдалых спроб уваходу, калі ласка, паспрабуйце пазней.',
    'Invalid or expired login link.' => 'Спасылка для ўваходу несапраўдная або пратэрмінаваная.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Занадта шмат няўдалых спроб уваходу ў сістэму, паспрабуйце спробу праз %minutes% хвіліну.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Занадта шмат няўдалых спроб уваходу ў сістэму, паспрабуйце спробу праз %minutes% хвілін.',
  ),
));

$catalogueCs = new MessageCatalogue('cs', array (
  'validators' => 
  array (
    'This value should be false.' => 'Tato hodnota musí být nepravdivá (false).',
    'This value should be true.' => 'Tato hodnota musí být pravdivá (true).',
    'This value should be of type {{ type }}.' => 'Tato hodnota musí být typu {{ type }}.',
    'This value should be blank.' => 'Tato hodnota musí být prázdná.',
    'The value you selected is not a valid choice.' => 'Vybraná hodnota není platnou možností.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Musí být vybrána nejméně {{ limit }} možnost.|Musí být vybrány nejméně {{ limit }} možnosti.|Musí být vybráno nejméně {{ limit }} možností.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Musí být vybrána maximálně {{ limit }} možnost.|Musí být vybrány maximálně {{ limit }} možnosti.|Musí být vybráno maximálně {{ limit }} možností.',
    'One or more of the given values is invalid.' => 'Některé z uvedených hodnot jsou neplatné.',
    'This field was not expected.' => 'Toto pole nebylo očekáváno.',
    'This field is missing.' => 'Toto pole chybí.',
    'This value is not a valid date.' => 'Tato hodnota není platné datum.',
    'This value is not a valid datetime.' => 'Tato hodnota není platné datum s časovým údajem.',
    'This value is not a valid email address.' => 'Tato hodnota není platná e-mailová adresa.',
    'The file could not be found.' => 'Soubor nebyl nalezen.',
    'The file is not readable.' => 'Soubor je nečitelný.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Soubor je příliš velký ({{ size }} {{ suffix }}). Maximální povolená velikost souboru je {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Neplatný mime typ souboru ({{ type }}). Povolené mime typy souborů jsou {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Tato hodnota musí být {{ limit }} nebo méně.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Tato hodnota je příliš dlouhá. Musí obsahovat maximálně {{ limit }} znak.|Tato hodnota je příliš dlouhá. Musí obsahovat maximálně {{ limit }} znaky.|Tato hodnota je příliš dlouhá. Musí obsahovat maximálně {{ limit }} znaků.',
    'This value should be {{ limit }} or more.' => 'Tato hodnota musí být {{ limit }} nebo více.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Tato hodnota je příliš krátká. Musí obsahovat minimálně {{ limit }} znak.|Tato hodnota je příliš krátká. Musí obsahovat minimálně {{ limit }} znaky.|Tato hodnota je příliš krátká. Musí obsahovat minimálně {{ limit }} znaků.',
    'This value should not be blank.' => 'Tato hodnota nesmí být prázdná.',
    'This value should not be null.' => 'Tato hodnota nesmí být null.',
    'This value should be null.' => 'Tato hodnota musí být null.',
    'This value is not valid.' => 'Tato hodnota není platná.',
    'This value is not a valid time.' => 'Tato hodnota není platný časový údaj.',
    'This value is not a valid URL.' => 'Tato hodnota není platná URL adresa.',
    'The two values should be equal.' => 'Tyto dvě hodnoty musí být stejné.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Soubor je příliš velký. Maximální povolená velikost souboru je {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Soubor je příliš velký.',
    'The file could not be uploaded.' => 'Soubor se nepodařilo nahrát.',
    'This value should be a valid number.' => 'Tato hodnota musí být číslo.',
    'This file is not a valid image.' => 'Tento soubor není obrázek.',
    'This is not a valid IP address.' => 'Toto není platná IP adresa.',
    'This value is not a valid language.' => 'Tento jazyk neexistuje.',
    'This value is not a valid locale.' => 'Tato lokalizace neexistuje.',
    'This value is not a valid country.' => 'Tato země neexistuje.',
    'This value is already used.' => 'Tato hodnota je již používána.',
    'The size of the image could not be detected.' => 'Nepodařily se zjistit rozměry obrázku.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Obrázek je příliš široký ({{ width }}px). Maximální povolená šířka obrázku je {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Obrázek je příliš úzký ({{ width }}px). Minimální šířka musí být {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Obrázek je příliš vysoký ({{ height }}px). Maximální povolená výška obrázku je {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Obrázek je příliš nízký ({{ height }}px). Minimální výška obrázku musí být {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Tato hodnota musí být aktuální heslo uživatele.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Tato hodnota musí mít přesně {{ limit }} znak.|Tato hodnota musí mít přesně {{ limit }} znaky.|Tato hodnota musí mít přesně {{ limit }} znaků.',
    'The file was only partially uploaded.' => 'Byla nahrána jen část souboru.',
    'No file was uploaded.' => 'Žádný soubor nebyl nahrán.',
    'No temporary folder was configured in php.ini.' => 'V php.ini není nastavena cesta k adresáři pro dočasné soubory.',
    'Cannot write temporary file to disk.' => 'Dočasný soubor se nepodařilo zapsat na disk.',
    'A PHP extension caused the upload to fail.' => 'Rozšíření PHP zabránilo nahrání souboru.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Tato kolekce musí obsahovat minimálně {{ limit }} prvek.|Tato kolekce musí obsahovat minimálně {{ limit }} prvky.|Tato kolekce musí obsahovat minimálně {{ limit }} prvků.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Tato kolekce musí obsahovat maximálně {{ limit }} prvek.|Tato kolekce musí obsahovat maximálně {{ limit }} prvky.|Tato kolekce musí obsahovat maximálně {{ limit }} prvků.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Tato kolekce musí obsahovat přesně {{ limit }} prvek.|Tato kolekce musí obsahovat přesně {{ limit }} prvky.|Tato kolekce musí obsahovat přesně {{ limit }} prvků.',
    'Invalid card number.' => 'Neplatné číslo karty.',
    'Unsupported card type or invalid card number.' => 'Nepodporovaný typ karty nebo neplatné číslo karty.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Toto je neplatný IBAN.',
    'This value is not a valid ISBN-10.' => 'Tato hodnota není platné ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Tato hodnota není platné ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Tato hodnota není platné ISBN-10 ani ISBN-13.',
    'This value is not a valid ISSN.' => 'Tato hodnota není platné ISSN.',
    'This value is not a valid currency.' => 'Tato měna neexistuje.',
    'This value should be equal to {{ compared_value }}.' => 'Tato hodnota musí být rovna {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Tato hodnota musí být větší než {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Tato hodnota musí být větší nebo rovna {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Tato hodnota musí být typu {{ compared_value_type }} a zároveň musí být rovna {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Tato hodnota musí být menší než {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Tato hodnota musí být menší nebo rovna {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Tato hodnota nesmí být rovna {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Tato hodnota nesmí být typu {{ compared_value_type }} a zároveň nesmí být rovna {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Poměr stran obrázku je příliš velký ({{ ratio }}). Maximální povolený poměr stran obrázku je {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Poměr stran obrázku je příliš malý ({{ ratio }}). Minimální povolený poměr stran obrázku je {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Strany obrázku jsou čtvercové ({{ width }}x{{ height }}px). Čtvercové obrázky nejsou povolené.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Obrázek je orientovaný na šířku ({{ width }}x{{ height }}px). Obrázky orientované na šířku nejsou povolené.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Obrázek je orientovaný na výšku ({{ width }}x{{ height }}px). Obrázky orientované na výšku nejsou povolené.',
    'An empty file is not allowed.' => 'Soubor nesmí být prázdný.',
    'The host could not be resolved.' => 'Hostitele nebylo možné rozpoznat.',
    'This value does not match the expected {{ charset }} charset.' => 'Tato hodnota neodpovídá očekávané znakové sadě {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Tato hodnota není platný identifikační kód podniku (BIC).',
    'Error' => 'Chyba',
    'This is not a valid UUID.' => 'Tato hodnota není platné UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Tato hodnota musí být násobek hodnoty {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Bankovní identifikační kód (BIC) neodpovídá mezinárodnímu číslu účtu (IBAN) {{ iban }}.',
    'This value should be valid JSON.' => 'Tato hodnota musí být validní JSON.',
    'This collection should contain only unique elements.' => 'Tato kolekce musí obsahovat pouze unikátní prvky.',
    'This value should be positive.' => 'Tato hodnota musí být kladná.',
    'This value should be either positive or zero.' => 'Tato hodnota musí být buď kladná nebo nula.',
    'This value should be negative.' => 'Tato hodnota musí být záporná.',
    'This value should be either negative or zero.' => 'Tato hodnota musí být buď záporná nebo nula.',
    'This value is not a valid timezone.' => 'Tato časová zóna neexistuje.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Zadané heslo bylo součástí úniku dat, takže ho není možné použít. Použijte prosím jiné heslo.',
    'This value should be between {{ min }} and {{ max }}.' => 'Hodnota musí být mezi {{ min }} a {{ max }}.',
    'This value is not a valid hostname.' => 'Tato hodnota není platný hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Počet prvků v této kolekci musí být násobek {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Tato hodnota musí splňovat alespoň jedno z následujících omezení:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Každý prvek v této kolekci musí splňovat svá vlastní omezení.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Tato hodnota není platné mezinárodní identifikační číslo cenného papíru (ISIN).',
    'This value should be a valid expression.' => 'Tato hodnota musí být platný výraz.',
    'This value is not a valid CSS color.' => 'Tato hodnota není platná barva CSS.',
    'This value is not a valid CIDR notation.' => 'Tato hodnota není platná notace CIDR.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Hodnota masky sítě musí být mezi {{ min }} a {{ max }}.',
    'This form should not contain extra fields.' => 'Tato skupina polí nesmí obsahovat další pole.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Nahraný soubor je příliš velký. Nahrajte prosím menší soubor.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF token je neplatný. Zkuste prosím znovu odeslat formulář.',
    'This value is not a valid HTML5 color.' => 'Tato hodnota není platná HTML5 barva.',
    'Please enter a valid birthdate.' => 'Prosím zadejte platný datum narození.',
    'The selected choice is invalid.' => 'Vybraná možnost není platná.',
    'The collection is invalid.' => 'Kolekce není platná.',
    'Please select a valid color.' => 'Prosím vyberte platnou barvu.',
    'Please select a valid country.' => 'Prosím vyberte platnou zemi.',
    'Please select a valid currency.' => 'Prosím vyberte platnou měnu.',
    'Please choose a valid date interval.' => 'Prosím vyberte platné rozpětí dat.',
    'Please enter a valid date and time.' => 'Prosím zadejte platný datum a čas.',
    'Please enter a valid date.' => 'Prosím zadejte platný datum.',
    'Please select a valid file.' => 'Prosím vyberte platný soubor.',
    'The hidden field is invalid.' => 'Skryté pole není platné.',
    'Please enter an integer.' => 'Prosím zadejte číslo.',
    'Please select a valid language.' => 'Prosím zadejte platný jazyk.',
    'Please select a valid locale.' => 'Prosím zadejte platný jazyk.',
    'Please enter a valid money amount.' => 'Prosím zadejte platnou částku.',
    'Please enter a number.' => 'Prosím zadejte číslo.',
    'The password is invalid.' => 'Heslo není platné.',
    'Please enter a percentage value.' => 'Prosím zadejte procentuální hodnotu.',
    'The values do not match.' => 'Hodnoty se neshodují.',
    'Please enter a valid time.' => 'Prosím zadejte platný čas.',
    'Please select a valid timezone.' => 'Prosím vyberte platné časové pásmo.',
    'Please enter a valid URL.' => 'Prosím zadejte platnou URL.',
    'Please enter a valid search term.' => 'Prosím zadejte platný výraz k vyhledání.',
    'Please provide a valid phone number.' => 'Prosím zadejte platné telefonní číslo.',
    'The checkbox has an invalid value.' => 'Zaškrtávací políčko má neplatnou hodnotu.',
    'Please enter a valid email address.' => 'Prosím zadejte platnou emailovou adresu.',
    'Please select a valid option.' => 'Prosím vyberte platnou možnost.',
    'Please select a valid range.' => 'Prosím vyberte platný rozsah.',
    'Please enter a valid week.' => 'Prosím zadejte platný týden.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Při ověřování došlo k chybě.',
    'Authentication credentials could not be found.' => 'Ověřovací údaje nebyly nalezeny.',
    'Authentication request could not be processed due to a system problem.' => 'Požadavek na ověření nemohl být zpracován kvůli systémové chybě.',
    'Invalid credentials.' => 'Neplatné přihlašovací údaje.',
    'Cookie has already been used by someone else.' => 'Cookie již bylo použité někým jiným.',
    'Not privileged to request the resource.' => 'Nemáte oprávnění přistupovat k prostředku.',
    'Invalid CSRF token.' => 'Neplatný CSRF token.',
    'No authentication provider found to support the authentication token.' => 'Poskytovatel pro ověřovací token nebyl nalezen.',
    'No session available, it either timed out or cookies are not enabled.' => 'Session není k dispozici, vypršela její platnost, nebo jsou zakázané cookies.',
    'No token could be found.' => 'Token nebyl nalezen.',
    'Username could not be found.' => 'Přihlašovací jméno nebylo nalezeno.',
    'Account has expired.' => 'Platnost účtu vypršela.',
    'Credentials have expired.' => 'Platnost přihlašovacích údajů vypršela.',
    'Account is disabled.' => 'Účet je zakázaný.',
    'Account is locked.' => 'Účet je zablokovaný.',
    'Too many failed login attempts, please try again later.' => 'Příliš mnoho nepovedených pokusů přihlášení. Zkuste to prosím později.',
    'Invalid or expired login link.' => 'Neplatný nebo expirovaný odkaz na přihlášení.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Příliš mnoho neúspěšných pokusů o přihlášení, zkuste to prosím znovu za %minutes% minutu.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Příliš mnoho neúspěšných pokusů o přihlášení, zkuste to prosím znovu za %minutes% minut.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueCs);

return $catalogue;
