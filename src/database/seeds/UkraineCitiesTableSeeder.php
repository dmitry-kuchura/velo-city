<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UkraineCitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as $value) {
            DB::table('ukraine_cities')->insert($value);
        }
    }

    protected function data(): array
    {
        $data = [];

        foreach ($this->cities() as $city) {
            $data[] = [
                'region_id' => key($city),
                'name_ru' => current($city),
                'name_ua' => '',
                'status' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ];
        }

        return $data;
    }

    protected function cities(): array
    {
        return [
            [279 => 'Бар'],
            [279 => 'Бершадь'],
            [279 => 'Браилов'],
            [279 => 'Брацлав'],
            [279 => 'Вапнярка'],
            [279 => 'Вендичаны'],
            [279 => 'Винница'],
            [279 => 'Вороновица'],
            [279 => 'Гайсин'],
            [279 => 'Гнивань'],
            [279 => 'Дашев'],
            [279 => 'Жмеринка'],
            [279 => 'Ильинцы'],
            [279 => 'Казатин'],
            [279 => 'Калиновка'],
            [279 => 'Крыжополь'],
            [279 => 'Липовец'],
            [279 => 'Литин'],
            [279 => 'Могилев-Подольский'],
            [279 => 'Мурованные Куриловцы'],
            [279 => 'Немиров'],
            [279 => 'Оратов'],
            [279 => 'Песчанка'],
            [279 => 'Погребище'],
            [279 => 'Теплик'],
            [279 => 'Томашполь'],
            [279 => 'Тростянец'],
            [279 => 'Тульчин'],
            [279 => 'Тывров'],
            [279 => 'Хмельник'],
            [279 => 'Чечельник'],
            [279 => 'Шаргород'],
            [279 => 'Ямполь'],
            [280 => 'Берестечко'],
            [280 => 'Владимир-Волынский'],
            [280 => 'Голобы'],
            [280 => 'Головно'],
            [280 => 'Горохов'],
            [280 => 'Иваничи'],
            [280 => 'Камень-Каширский'],
            [280 => 'Киверцы'],
            [280 => 'Ковель'],
            [280 => 'Локачи'],
            [280 => 'Луцк'],
            [280 => 'Любешов'],
            [280 => 'Любомль'],
            [280 => 'Маневичи'],
            [280 => 'Нововолынск'],
            [280 => 'Ратно'],
            [280 => 'Рожище'],
            [280 => 'Старая Выжевка'],
            [280 => 'Турийск'],
            [281 => 'Апостолово'],
            [281 => 'Аулы'],
            [281 => 'Брагиновка'],
            [281 => 'Васильковка'],
            [281 => 'Верхнеднепровск'],
            [281 => 'Верховцево'],
            [281 => 'Вольногорск'],
            [281 => 'Гвардейское'],
            [281 => 'Губиниха'],
            [281 => 'Демурино'],
            [281 => 'Днепродзержинск'],
            [281 => 'Днепропетровск'],
            [281 => 'Желтые Воды'],
            [281 => 'Зеленодольск'],
            [281 => 'Зеленое'],
            [281 => 'Илларионово'],
            [281 => 'Ингулец'],
            [281 => 'Калинино'],
            [281 => 'Карнауховка'],
            [281 => 'Кривой Рог'],
            [281 => 'Кринички'],
            [281 => 'Магдалиновка'],
            [281 => 'Марганец'],
            [281 => 'Межевая'],
            [281 => 'Никополь'],
            [281 => 'Новомосковск'],
            [281 => 'Орджоникидзе'],
            [281 => 'Павлоград'],
            [281 => 'Першотравенск'],
            [281 => 'Петропавловка'],
            [281 => 'Покровское'],
            [281 => 'Пятихатки'],
            [281 => 'Синельниково'],
            [281 => 'Софиевка'],
            [281 => 'Томаковка'],
            [281 => 'Царичанка'],
            [281 => 'Широкое'],
            [282 => 'Авдеевка'],
            [282 => 'Александровка'],
            [282 => 'Алексеево-Дружковка'],
            [282 => 'Амвросиевка'],
            [282 => 'Андреевка'],
            [282 => 'Артемовск'],
            [282 => 'Артемовск'],
            [282 => 'Безыменное'],
            [282 => 'Беленькое'],
            [282 => 'Благодатное'],
            [282 => 'Былбасовка'],
            [282 => 'Великая Новоселка'],
            [282 => 'Войковский'],
            [282 => 'Волноваха'],
            [282 => 'Володарское'],
            [282 => 'Горбачево-Михайловка'],
            [282 => 'Горловка'],
            [282 => 'Гродовка'],
            [282 => 'Грузско-Зорянское'],
            [282 => 'Дебальцево'],
            [282 => 'Дзержинск'],
            [282 => 'Димитров'],
            [282 => 'Доброполье'],
            [282 => 'Докучаевск'],
            [282 => 'Донецк'],
            [282 => 'Донецкая'],
            [282 => 'Донское'],
            [282 => 'Дробышево'],
            [282 => 'Дружковка'],
            [282 => 'Енакиево'],
            [282 => 'Желанное'],
            [282 => 'Зугрэс'],
            [282 => 'Зуевка'],
            [282 => 'Иловайск'],
            [282 => 'Карло-Марксово'],
            [282 => 'Кировск'],
            [282 => 'Константиновка'],
            [282 => 'Краматорск'],
            [282 => 'Красноармейск'],
            [282 => 'Красный Лиман'],
            [282 => 'Макеевка'],
            [282 => 'Макеевка'],
            [282 => 'Мариуполь'],
            [282 => 'Марьинка'],
            [282 => 'Новоазовск'],
            [282 => 'Новоэкономическое'],
            [282 => 'Селидово'],
            [282 => 'Славянск'],
            [282 => 'Снежное'],
            [282 => 'Соледар'],
            [282 => 'Старобешево'],
            [282 => 'Тельманово'],
            [282 => 'Торез'],
            [282 => 'Угледар'],
            [282 => 'Харцызск'],
            [282 => 'Шахтерск'],
            [282 => 'Ясиноватая'],
            [283 => 'Андрушевка'],
            [283 => 'Барановка'],
            [283 => 'Белая Криница'],
            [283 => 'Бердичев'],
            [283 => 'Броницкая Гута'],
            [283 => 'Брусилов'],
            [283 => 'Быковка'],
            [283 => 'Великие Коровинцы'],
            [283 => 'Володарск-Волынский'],
            [283 => 'Городница'],
            [283 => 'Гришковцы'],
            [283 => 'Дзержинск'],
            [283 => 'Довбыш'],
            [283 => 'Емильчино'],
            [283 => 'Житомир'],
            [283 => 'Иванополь'],
            [283 => 'Каменный Брод'],
            [283 => 'Коростень'],
            [283 => 'Коростышев'],
            [283 => 'Лугины'],
            [283 => 'Любар'],
            [283 => 'Малин'],
            [283 => 'Народичи'],
            [283 => 'Новоград-Волынский'],
            [283 => 'Овруч'],
            [283 => 'Олевск'],
            [283 => 'Попельня'],
            [283 => 'Радомышль'],
            [283 => 'Ружин'],
            [283 => 'Червоноармейск'],
            [283 => 'Червоноармейск'],
            [283 => 'Черняхов'],
            [283 => 'Чуднов'],
            [284 => 'Берегово'],
            [284 => 'Буштына'],
            [284 => 'Великий Березный'],
            [284 => 'Великий Бычков'],
            [284 => 'Виноградов'],
            [284 => 'Воловец'],
            [284 => 'Иршава'],
            [284 => 'Межгорье'],
            [284 => 'Мукачево'],
            [284 => 'Перечин'],
            [284 => 'Рахов'],
            [284 => 'Свалява'],
            [284 => 'Тячев'],
            [284 => 'Ужгород'],
            [284 => 'Хуст'],
            [284 => 'Чоп'],
            [285 => 'Акимовка'],
            [285 => 'Андреевка'],
            [285 => 'Балабино'],
            [285 => 'Бердянск'],
            [285 => 'Васильевка'],
            [285 => 'Веселое'],
            [285 => 'Гуляйполе'],
            [285 => 'Запорожье'],
            [285 => 'Каменка-Днепровская'],
            [285 => 'Каменное'],
            [285 => 'Камыш-Заря'],
            [285 => 'Куйбышево'],
            [285 => 'Мелитополь'],
            [285 => 'Михайловка'],
            [285 => 'Новониколаевка'],
            [285 => 'Орехов'],
            [285 => 'Пологи'],
            [285 => 'Приазовское'],
            [285 => 'Приморск'],
            [285 => 'Токмак'],
            [285 => 'Черниговка'],
            [285 => 'Энергодар'],
            [286 => 'Богородчаны'],
            [286 => 'Болехов'],
            [286 => 'Болшовцы'],
            [286 => 'Брошнев-Осада'],
            [286 => 'Букачевцы'],
            [286 => 'Бурштын'],
            [286 => 'Бытков'],
            [286 => 'Верховина'],
            [286 => 'Войнилов'],
            [286 => 'Ворохта'],
            [286 => 'Выгода'],
            [286 => 'Галич'],
            [286 => 'Городенка'],
            [286 => 'Делятин'],
            [286 => 'Долина'],
            [286 => 'Езуполь'],
            [286 => 'Заболотов'],
            [286 => 'Ивано-Франковск'],
            [286 => 'Калуш'],
            [286 => 'Коломыя'],
            [286 => 'Косов'],
            [286 => 'Надворна'],
            [286 => 'Надворная'],
            [286 => 'Рогатин'],
            [286 => 'Рожнятов'],
            [286 => 'Снятын'],
            [286 => 'Станиславов'],
            [286 => 'Тлумач'],
            [286 => 'Тысменица'],
            [286 => 'Яремча'],
            [287 => 'Барышевка'],
            [287 => 'Белая Церковь'],
            [287 => 'Березань'],
            [287 => 'Богуслав'],
            [287 => 'Борисполь'],
            [287 => 'Боровая'],
            [287 => 'Бородянка'],
            [287 => 'Боярка'],
            [287 => 'Бровары'],
            [287 => 'Васильков'],
            [287 => 'Вишневое'],
            [287 => 'Вишневое'],
            [287 => 'Вишневое'],
            [287 => 'Володарка'],
            [287 => 'Ворзель'],
            [287 => 'Вышгород'],
            [287 => 'Гребенки'],
            [287 => 'Дымер'],
            [287 => 'Згуровка'],
            [287 => 'Иванков'],
            [287 => 'Ирпень'],
            [287 => 'Кагарлык'],
            [287 => 'Калиновка'],
            [287 => 'Киев'],
            [287 => 'Кодра'],
            [287 => 'Кожанка'],
            [287 => 'Козин'],
            [287 => 'Макаров'],
            [287 => 'Обухов'],
            [287 => 'Переяслав-Хмельницкий'],
            [287 => 'Полесское'],
            [287 => 'Ракитное'],
            [287 => 'Сквира'],
            [287 => 'Славутич'],
            [287 => 'Ставище'],
            [287 => 'Тараща'],
            [287 => 'Тетиев'],
            [287 => 'Фастов'],
            [287 => 'Чернобыль'],
            [287 => 'Яготин'],
            [288 => 'Александрия'],
            [288 => 'Александровка'],
            [288 => 'Бобринец'],
            [288 => 'Гайворон'],
            [288 => 'Голованевск'],
            [288 => 'Добровеличковка'],
            [288 => 'Долинская'],
            [288 => 'Елизаветградка'],
            [288 => 'Завалье'],
            [288 => 'Знаменка'],
            [288 => 'Знаменка-Вторая'],
            [288 => 'Капитановка'],
            [288 => 'Кировоград'],
            [288 => 'Компанеевка'],
            [288 => 'Малая Виска'],
            [288 => 'Новгородка'],
            [288 => 'Новоархангельск'],
            [288 => 'Новомиргород'],
            [288 => 'Новоукраинка'],
            [288 => 'Ольшанка'],
            [288 => 'Онуфриевка'],
            [288 => 'Петрово'],
            [288 => 'Светловодск'],
            [288 => 'Ульяновка'],
            [288 => 'Устиновка'],
            [289 => 'Алупка'],
            [289 => 'Алушта'],
            [289 => 'Армянск'],
            [289 => 'Армянск'],
            [289 => 'Багерово'],
            [289 => 'Бахчисарай'],
            [289 => 'Белогорск'],
            [289 => 'Береговое'],
            [289 => 'Ботаническое'],
            [289 => 'Гаспра'],
            [289 => 'Гвардейское'],
            [289 => 'Гурзуф'],
            [289 => 'Джанкой'],
            [289 => 'Евпатория'],
            [289 => 'Зуя'],
            [289 => 'Кацивели'],
            [289 => 'Керчь'],
            [289 => 'Кореиз'],
            [289 => 'Красногвардейск'],
            [289 => 'Красногвардейское'],
            [289 => 'Краснокаменка'],
            [289 => 'Красноперекопск'],
            [289 => 'Курпаты'],
            [289 => 'Ленино'],
            [289 => 'Ливадия'],
            [289 => 'Массандра'],
            [289 => 'Мисхор'],
            [289 => 'Нижнегорский'],
            [289 => 'Олива'],
            [289 => 'Оползневое'],
            [289 => 'Парковое'],
            [289 => 'Первомайское'],
            [289 => 'Понизовка'],
            [289 => 'Саки'],
            [289 => 'Санаторное'],
            [289 => 'Севастополь'],
            [289 => 'Симеиз'],
            [289 => 'Симферополь'],
            [289 => 'Советский'],
            [289 => 'Судак'],
            [289 => 'Феодосия'],
            [289 => 'Форос'],
            [289 => 'Черноморское'],
            [289 => 'Щёлкино'],
            [289 => 'Ялта'],
            [290 => 'Алексадровск'],
            [290 => 'Алчевск'],
            [290 => 'Антрацит'],
            [290 => 'Артемово'],
            [290 => 'Байрачки'],
            [290 => 'Беловодск'],
            [290 => 'Белогоровка'],
            [290 => 'Белое'],
            [290 => 'Белокуракино'],
            [290 => 'Белолуцк'],
            [290 => 'Бирюково'],
            [290 => 'Боково-Платово'],
            [290 => 'Боровское'],
            [290 => 'Брянка'],
            [290 => 'Бугаевка'],
            [290 => 'Вахрушево'],
            [290 => 'Великий Лог'],
            [290 => 'Вергулевка'],
            [290 => 'Володарск'],
            [290 => 'Волчеяровка'],
            [290 => 'Врубовка'],
            [290 => 'Врубовский'],
            [290 => 'Георгиевка'],
            [290 => 'Горское'],
            [290 => 'Есауловка'],
            [290 => 'Зимогорье'],
            [290 => 'Золотое'],
            [290 => 'Зоринск'],
            [290 => 'Изварино'],
            [290 => 'Калининский'],
            [290 => 'Калиново'],
            [290 => 'Кировск'],
            [290 => 'Краснодарський'],
            [290 => 'Краснодон'],
            [290 => 'Красный Луч'],
            [290 => 'Кременная'],
            [290 => 'Лисичанск'],
            [290 => 'Луганск'],
            [290 => 'Лутугино'],
            [290 => 'Марковка'],
            [290 => 'Меловое'],
            [290 => 'Новоайдар'],
            [290 => 'Новопсков'],
            [290 => 'Первомайск'],
            [290 => 'Перевальск'],
            [290 => 'Попасная'],
            [290 => 'Ровеньки'],
            [290 => 'Рубежное'],
            [290 => 'Сватово'],
            [290 => 'Свердловск'],
            [290 => 'Северодонецк'],
            [290 => 'Славяносербск'],
            [290 => 'Станично-Луганское'],
            [290 => 'Старобельск'],
            [290 => 'Стаханов'],
            [290 => 'Троицкое'],
            [291 => 'Белз'],
            [291 => 'Бобрка'],
            [291 => 'Борислав'],
            [291 => 'Броды'],
            [291 => 'Буск'],
            [291 => 'Великие Мосты'],
            [291 => 'Верхнее Синевидное'],
            [291 => 'Винники'],
            [291 => 'Гвоздец'],
            [291 => 'Глиняны'],
            [291 => 'Дашава'],
            [291 => 'Добротвор'],
            [291 => 'Дрогобыч'],
            [291 => 'Жидачов'],
            [291 => 'Золочев'],
            [291 => 'Ивано-Франково'],
            [291 => 'Каменка-Бугская'],
            [291 => 'Лопушанка'],
            [291 => 'Львов'],
            [291 => 'Мостиска'],
            [291 => 'Нестеров'],
            [291 => 'Николаев'],
            [291 => 'Новояворовск'],
            [291 => 'Перемышляны'],
            [291 => 'Пустомыты'],
            [291 => 'Рава Русская'],
            [291 => 'Радехов'],
            [291 => 'Самбор'],
            [291 => 'Сколе'],
            [291 => 'Сокаль'],
            [291 => 'Старый Самбор'],
            [291 => 'Стрый'],
            [291 => 'Трускавец'],
            [291 => 'Турка'],
            [291 => 'Червоноград'],
            [291 => 'Яворов'],
            [292 => 'Александровка'],
            [292 => 'Арбузинка'],
            [292 => 'Баштанка'],
            [292 => 'Березнеговатое'],
            [292 => 'Братское'],
            [292 => 'Веселиново'],
            [292 => 'Вознесенск'],
            [292 => 'Доманевка'],
            [292 => 'Еланец'],
            [292 => 'Казанка'],
            [292 => 'Кривое Озеро'],
            [292 => 'Николаев'],
            [292 => 'Новая Одесса'],
            [292 => 'Новый Буг'],
            [292 => 'Очаков'],
            [292 => 'Первомайск'],
            [292 => 'Снигиревка'],
            [292 => 'Южноукраинск'],
            [293 => 'Аккерман'],
            [293 => 'Ананьев'],
            [293 => 'Арциз'],
            [293 => 'Балта'],
            [293 => 'Белгород-Днестровский'],
            [293 => 'Беляевка'],
            [293 => 'Березино'],
            [293 => 'Березовка'],
            [293 => 'Болград'],
            [293 => 'Бородино'],
            [293 => 'Великая Михайловка'],
            [293 => 'Великодолининское'],
            [293 => 'Вилково'],
            [293 => 'Затишье'],
            [293 => 'Измаил'],
            [293 => 'Ильичевск'],
            [293 => 'Килия'],
            [293 => 'Кодыма'],
            [293 => 'Коминтерновское'],
            [293 => 'Котовск'],
            [293 => 'Красные Окны'],
            [293 => 'Любашевка'],
            [293 => 'Николаевка'],
            [293 => 'Овидиополь'],
            [293 => 'Одесса'],
            [293 => 'Раздельная'],
            [293 => 'Рени'],
            [293 => 'Саврань'],
            [293 => 'Сарата'],
            [293 => 'Тарутино'],
            [293 => 'Татарбунары'],
            [293 => 'Фрунзовка'],
            [293 => 'Ширяево'],
            [293 => 'Южный'],
            [294 => 'Белики'],
            [294 => 'Великая Багачка'],
            [294 => 'Гадяч'],
            [294 => 'Глобино'],
            [294 => 'Гоголево'],
            [294 => 'Градижск'],
            [294 => 'Гребенка'],
            [294 => 'Диканька'],
            [294 => 'Карловка'],
            [294 => 'Кобеляки'],
            [294 => 'Козельщина'],
            [294 => 'Комсомольск'],
            [294 => 'Котельва'],
            [294 => 'Кременчуг'],
            [294 => 'Лохвица'],
            [294 => 'Лубны'],
            [294 => 'Машевка'],
            [294 => 'Миргород'],
            [294 => 'Новые Санжары'],
            [294 => 'Оржица'],
            [294 => 'Пирянтин'],
            [294 => 'Пирятин'],
            [294 => 'Полтава'],
            [294 => 'Решетиловка'],
            [294 => 'Семеновка'],
            [294 => 'Хорол'],
            [294 => 'Чернухи'],
            [294 => 'Чутово'],
            [294 => 'Шишаки'],
            [295 => 'Владимирец'],
            [295 => 'Гоща'],
            [295 => 'Демидовка'],
            [295 => 'Дубно'],
            [295 => 'Дубровица'],
            [295 => 'Заречное'],
            [295 => 'Здолбунов'],
            [295 => 'Клевань'],
            [295 => 'Клесов'],
            [295 => 'Корец'],
            [295 => 'Костополь'],
            [295 => 'Кузнецовск'],
            [295 => 'Млинов'],
            [295 => 'Острог'],
            [295 => 'Ровно'],
            [295 => 'Сарны'],
            [296 => 'Ахтырка'],
            [296 => 'Белополье'],
            [296 => 'Бурынь'],
            [296 => 'Великая Писаревка'],
            [296 => 'Ворожба'],
            [296 => 'Воронеж'],
            [296 => 'Глухов'],
            [296 => 'Дружба'],
            [296 => 'Знобь-Новгородское'],
            [296 => 'Кириковка'],
            [296 => 'Конотоп'],
            [296 => 'Краснополье'],
            [296 => 'Кровелец'],
            [296 => 'Лебедин'],
            [296 => 'Липовая Долина'],
            [296 => 'Недригайлов'],
            [296 => 'Путивль'],
            [296 => 'Ромны'],
            [296 => 'Середина-Буда'],
            [296 => 'Сумы'],
            [296 => 'Тростянец'],
            [296 => 'Шостка'],
            [296 => 'Ямполь'],
            [297 => 'Бережаны'],
            [297 => 'Борщев'],
            [297 => 'Бучач'],
            [297 => 'Великие Борки'],
            [297 => 'Вишневец'],
            [297 => 'Гримайлов'],
            [297 => 'Гусятин'],
            [297 => 'Залещики'],
            [297 => 'Заложцы'],
            [297 => 'Збараж'],
            [297 => 'Зборов'],
            [297 => 'Золотники'],
            [297 => 'Золотой поток'],
            [297 => 'Козлов'],
            [297 => 'Козова'],
            [297 => 'Кременец'],
            [297 => 'Лановцы'],
            [297 => 'Монастыриска'],
            [297 => 'Подволочиск'],
            [297 => 'Теребовля'],
            [297 => 'Тернополь'],
            [297 => 'Чортков'],
            [297 => 'Шумск'],
            [298 => 'Балаклея'],
            [298 => 'Барвенково'],
            [298 => 'Близнюки'],
            [298 => 'Богодухов'],
            [298 => 'Борки'],
            [298 => 'Боровая'],
            [298 => 'Буды'],
            [298 => 'Валки'],
            [298 => 'Великий Бурлук'],
            [298 => 'Волчанск'],
            [298 => 'Гуты'],
            [298 => 'Дергачи'],
            [298 => 'Зачепиловка'],
            [298 => 'Зидьки'],
            [298 => 'Змиев'],
            [298 => 'Золочев'],
            [298 => 'Изюм'],
            [298 => 'Казачья Лопань'],
            [298 => 'Кегичевка'],
            [298 => 'Красноград'],
            [298 => 'Краснокутск'],
            [298 => 'Купянск'],
            [298 => 'Лозовая'],
            [298 => 'Люботин'],
            [298 => 'Мерефа'],
            [298 => 'Новая Водолага'],
            [298 => 'Первомайский'],
            [298 => 'Песочин'],
            [298 => 'Сахновщина'],
            [298 => 'Харьков'],
            [298 => 'Чугуев'],
            [298 => 'Шевченково'],
            [299 => 'Аскания-Нова'],
            [299 => 'Белая Криница'],
            [299 => 'Белозерка'],
            [299 => 'Берислав'],
            [299 => 'Великая Александровка'],
            [299 => 'Великая Лепетиха'],
            [299 => 'Верхний Рогачик'],
            [299 => 'Высокополье'],
            [299 => 'Геническ'],
            [299 => 'Голая Пристань'],
            [299 => 'Горностаевка'],
            [299 => 'Днепряны'],
            [299 => 'Каланчак'],
            [299 => 'Калининское'],
            [299 => 'Каховка'],
            [299 => 'Нижние Серогозы'],
            [299 => 'Новая Каховка'],
            [299 => 'Нововоронцовка'],
            [299 => 'Новотроицкое'],
            [299 => 'Скадовск'],
            [299 => 'Херсон'],
            [299 => 'Цюрупинск'],
            [299 => 'Чаплинка'],
            [300 => 'Антонины'],
            [300 => 'Базалия'],
            [300 => 'Белогорье'],
            [300 => 'Виньковцы'],
            [300 => 'Волочиск'],
            [300 => 'Городок'],
            [300 => 'Грицев'],
            [300 => 'Деражня'],
            [300 => 'Дунаевцы'],
            [300 => 'Изяслав'],
            [300 => 'Каменец-Подольский'],
            [300 => 'Красилов'],
            [300 => 'Летичев'],
            [300 => 'Нетешин'],
            [300 => 'Новая Ушица'],
            [300 => 'Полонное'],
            [300 => 'Славута'],
            [300 => 'Старая Синявка'],
            [300 => 'Староконстантинов'],
            [300 => 'Теофиполь'],
            [300 => 'Хмельницкий'],
            [300 => 'Чемеровцы'],
            [300 => 'Шепетовка'],
            [300 => 'Ярмолинцы'],
            [301 => 'Ватутино'],
            [301 => 'Городище'],
            [301 => 'Драбов'],
            [301 => 'Ерки'],
            [301 => 'Жашков'],
            [301 => 'Звенигородка'],
            [301 => 'Золотоноша'],
            [301 => 'Ирдынь'],
            [301 => 'Каменка'],
            [301 => 'Катеринополь'],
            [301 => 'Корсунь-Шевченковский'],
            [301 => 'Лысянка'],
            [301 => 'Монастырище'],
            [301 => 'Смела'],
            [301 => 'Тальное'],
            [301 => 'Умань'],
            [301 => 'Христиновка'],
            [301 => 'Черкассы'],
            [301 => 'Чернобай'],
            [301 => 'Чигирин'],
            [301 => 'Шпола'],
            [302 => 'Батурин'],
            [302 => 'Бахмач'],
            [302 => 'Березна'],
            [302 => 'Бобровица'],
            [302 => 'Борзна'],
            [302 => 'Варва'],
            [302 => 'Вертиевка'],
            [302 => 'Городня'],
            [302 => 'Замглай'],
            [302 => 'Ичня'],
            [302 => 'Козелец'],
            [302 => 'Короп'],
            [302 => 'Корюковка'],
            [302 => 'Куликовка'],
            [302 => 'Мена'],
            [302 => 'Нежин'],
            [302 => 'Новгород-Северский'],
            [302 => 'Носовка'],
            [302 => 'Прилуки'],
            [302 => 'Репки'],
            [302 => 'Семеновка'],
            [302 => 'Сосница'],
            [302 => 'Талалаевка'],
            [302 => 'Чернигов'],
            [302 => 'Щорс'],
            [303 => 'Берегомет'],
            [303 => 'Вашковцы'],
            [303 => 'Вижница'],
            [303 => 'Герца'],
            [303 => 'Глыбокая'],
            [303 => 'Заставна'],
            [303 => 'Кельменцы'],
            [303 => 'Кицмань'],
            [303 => 'Новоселица'],
            [303 => 'Путила'],
            [303 => 'Сокиряны'],
            [303 => 'Сторожинец'],
            [303 => 'Хотин'],
            [303 => 'Черновцы'],
        ];
    }
}
