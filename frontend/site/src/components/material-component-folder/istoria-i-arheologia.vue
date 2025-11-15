<script setup>
import HeaderComponent from '../header-component.vue'
import footerComponent from '../footer-component.vue';
</script>

<template>
  <div class="min-h-screen bg-linear-to-br from-amber-50 to-orange-50">
    <HeaderComponent />

    <main
      class="container mx-auto px-4 sm:px-6 lg:px-8 pt-24 sm:pt-28 lg:pt-32 pb-8 sm:pb-12 lg:pb-16"
    >
      <!-- Заголовок раздела -->
      <section class="text-center mb-12 sm:mb-16 lg:mb-20">
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
          История и Археология Прибайкалья
        </h1>
        <div class="max-w-4xl mx-auto">
          <p class="text-lg sm:text-xl lg:text-2xl text-gray-600 leading-relaxed">
            От древних цивилизаций до современности — богатейшее историческое наследие Иркутской
            области
          </p>
        </div>
      </section>

      <!-- Модуль 2.1: Древние народы Прибайкалья -->
      <section class="mb-16 sm:mb-20 lg:mb-24">
        <div class="text-center mb-10">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-amber-800 mb-4">
            Древние народы Прибайкалья
          </h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto">
            Археологические свидетельства первых жителей региона возрастом более 50 000 лет
          </p>
        </div>

        <!-- Блок 1: Каменный век -->
        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10 mb-10">
          <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-amber-800 mb-6">
            Каменный век: первые следы человека
          </h3>
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
            <div>
              <p class="text-lg leading-relaxed text-gray-700 mb-6">
                Территория Иркутской области была заселена
                <strong>более 50 тысяч лет назад</strong>. Древние люди приходили сюда вслед за
                стадами животных, которых они добывали для пропитания.
              </p>
              <p class="text-lg leading-relaxed text-gray-700 mb-6">
                Одним из самых известных памятников этого периода является
                <strong>стоянка Мальта</strong> в Усольском районе, где были найдены остатки жилищ
                из костей мамонта и уникальные произведения искусства — статуэтки так называемых
                «палеолитических Венер».
              </p>
              <div class="bg-amber-50 rounded-xl p-6">
                <h4 class="text-lg font-bold text-amber-800 mb-3">Методика Герасимова</h4>
                <p class="text-amber-700 text-sm">
                  Михаил Герасимов разработал методику пластической реконструкции человеческого
                  облика по скелетным останкам, которая позволила воссоздать внешний вид древних
                  жителей Мальты.
                </p>
              </div>
            </div>
            <div class="bg-gray-100 rounded-xl p-6 text-center">
              <div
                class="w-32 h-32 bg-amber-200 rounded-full flex items-center justify-center mx-auto mb-4"
              >
                <span class="text-4xl">🦣</span>
              </div>
              <h4 class="text-lg font-bold text-gray-800 mb-2">Стоянка Мальта</h4>
              <p class="text-sm text-gray-600">Открыта в 1928 году</p>
              <p class="text-sm text-gray-600">Кости мамонта и северного оленя</p>
              <p class="text-sm text-gray-600">Художественные изделия из бивня</p>
            </div>
          </div>
        </div>

        <!-- Блок 2: Шишкинские писаницы -->
        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10">
          <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-amber-800 mb-6">
            Шишкинские писаницы — древняя каменная книга
          </h3>
          <p class="text-lg leading-relaxed text-gray-700 mb-6">
            На скалах вдоль реки Лены сохранились уникальные рисунки — петроглифы, созданные
            древними художниками. Шишкинские писаницы — это настоящая энциклопедия жизни древних
            народов: здесь изображены сцены охоты, ритуальные танцы, животные и загадочные символы.
          </p>
          <p class="text-lg font-semibold text-amber-700 mb-6">
            Некоторые рисунки были сделаны более 10-15 тысяч лет назад!
          </p>

          <!-- Карта археологических памятников -->
          <div class="bg-gray-50 rounded-xl p-6">
            <h4 class="text-lg font-bold text-gray-800 mb-4 text-center">
              Основные археологические памятники области
            </h4>
            <div
              class="aspect-w-16 aspect-h-9 bg-gray-200 rounded-lg flex items-center justify-center mb-6"
            >
              <p class="text-gray-600"></p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
              <div
                class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition duration-300 group"
              >
                <div class="h-40 bg-gray-100 overflow-hidden">
                  <img
                    src="D:\TEST_CODE_VUE_TAILWIND_FOR_OUR_PROJECT\test_frontend_code_for_our_project\src\image\SHISHKINSKIE.jpg"
                    alt="Шишкинские писаницы"
                    class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
                  />
                </div>
                <div class="p-3 text-center">
                  <p class="font-semibold text-amber-700">Шишкинские писаницы</p>
                  <p class="text-gray-500 text-xs mt-1">Наскальные рисунки</p>
                </div>
              </div>
              <div
                class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition duration-300 group"
              >
                <div class="h-40 bg-gray-100 overflow-hidden">
                  <img
                    src="D:\TEST_CODE_VUE_TAILWIND_FOR_OUR_PROJECT\test_frontend_code_for_our_project\src\image\NECROPOL.png"
                    alt="Глазковский некрополь"
                    class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
                  />
                </div>
                <div class="p-3 text-center">
                  <p class="font-semibold text-amber-700">Глазковский некрополь</p>
                  <p class="text-gray-500 text-xs mt-1">Древнее захоронение</p>
                </div>
              </div>
              <div
                class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition duration-300 group"
              >
                <div class="h-40 bg-gray-100 overflow-hidden">
                  <img
                    src="D:\TEST_CODE_VUE_TAILWIND_FOR_OUR_PROJECT\test_frontend_code_for_our_project\src\image\MALTA.jpg"
                    alt="Стоянка Мальта"
                    class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
                  />
                </div>
                <div class="p-3 text-center">
                  <p class="font-semibold text-amber-700">Стоянка Мальта</p>
                  <p class="text-gray-500 text-xs mt-1">Палеолитическая стоянка</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Модуль 2.2: Освоение Сибири -->
      <section class="mb-16 sm:mb-20 lg:mb-24">
        <div class="text-center mb-10">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-orange-800 mb-4">
            Освоение Сибири
          </h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto">
            Казаки-первопроходцы и основание первых острогов — эпоха великих географических открытий
            по-русски
          </p>
        </div>

        <!-- Блок 1: Ермак Тимофеевич -->
        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10 mb-10">
          <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-orange-800 mb-6">
            Ермак Тимофеевич: начало сибирской эпопеи
          </h3>
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div>
              <p class="text-lg leading-relaxed text-gray-700 mb-6">
                XVI-XVII века стали для России временем масштабного территориального расширения на
                восток. Этот процесс напоминал европейскую колонизацию Америки, но имел свои
                уникальные особенности.
              </p>

              <div class="bg-orange-50 rounded-xl p-6 mb-6">
                <h4 class="font-bold text-orange-800 mb-3">Легендарный поход 1581-1585 годов</h4>
                <ul class="space-y-2 text-orange-700 text-sm">
                  <li>• <strong>840 казаков</strong> при поддержке 300 стрельцов</li>
                  <li>• Маршрут: Чусовая → Тура → Тобол → Иртыш</li>
                  <li>• Ключевое сражение: Битва при Чувашском мысу (1582)</li>
                  <li>• Результат: Разгром Сибирского ханства</li>
                </ul>
              </div>

              <blockquote class="border-l-4 border-orange-500 pl-4 italic text-gray-600">
                "Ермак прорубил окно в Сибирь, как Петр I — в Европу" — так оценивали современники
                его подвиг.
              </blockquote>
            </div>

            <div class="space-y-6">
              <div class="bg-orange-100 rounded-xl p-6">
                <h4 class="font-bold text-orange-800 mb-3">Мотивация первопроходцев</h4>
                <div class="grid grid-cols-2 gap-3 text-xs">
                  <div class="bg-white rounded p-2 text-center">
                    <div class="text-orange-600 font-bold">Воля</div>
                    <div class="text-orange-500">Свобода от крепостной зависимости</div>
                  </div>
                  <div class="bg-white rounded p-2 text-center">
                    <div class="text-orange-600 font-bold">Землица</div>
                    <div class="text-orange-500">Новые плодородные земли</div>
                  </div>
                  <div class="bg-white rounded p-2 text-center">
                    <div class="text-orange-600 font-bold">Жалованье</div>
                    <div class="text-orange-500">Материальное вознаграждение</div>
                  </div>
                  <div class="bg-white rounded p-2 text-center">
                    <div class="text-orange-600 font-bold">Служба</div>
                    <div class="text-orange-500">Патриотические чувства</div>
                  </div>
                </div>
              </div>

              <div class="bg-amber-100 rounded-xl p-6">
                <h4 class="font-bold text-amber-800 mb-2">Речные магистрали</h4>
                <p class="text-amber-700 text-sm">
                  Казаки использовали реки как естественные пути: Обь → Енисей → Лена → Амур
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Блок 2: Остроги - опорные точки -->
        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10 mb-10">
          <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-orange-800 mb-6">
            Остроги — опорные точки колонизации
          </h3>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
              <h4 class="text-lg font-bold text-gray-800 mb-4">Функции острогов</h4>
              <div class="space-y-3">
                <div class="flex items-start">
                  <div
                    class="bg-orange-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 shrink-0"
                  >
                    1
                  </div>
                  <p class="text-gray-700">Военная — защита от нападений</p>
                </div>
                <div class="flex items-start">
                  <div
                    class="bg-orange-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 shrink-0"
                  >
                    2
                  </div>
                  <p class="text-gray-700">Административная — управление территорией</p>
                </div>
                <div class="flex items-start">
                  <div
                    class="bg-orange-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 shrink-0"
                  >
                    3
                  </div>
                  <p class="text-gray-700">Торговая — центры меновой торговли</p>
                </div>
                <div class="flex items-start">
                  <div
                    class="bg-orange-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 shrink-0"
                  >
                    4
                  </div>
                  <p class="text-gray-700">Налоговая — сбор ясака (пушного налога)</p>
                </div>
              </div>
            </div>

            <div>
              <h4 class="text-lg font-bold text-gray-800 mb-4">Эволюция острогов</h4>
              <div class="bg-orange-50 rounded-xl p-6">
                <div class="space-y-4">
                  <div class="flex justify-between items-center border-b border-orange-200 pb-2">
                    <span class="text-orange-700">Малый острог</span>
                    <span class="bg-orange-100 text-orange-800 px-2 py-1 rounded text-sm"
                      >зимовье</span
                    >
                  </div>
                  <div class="flex justify-between items-center border-b border-orange-200 pb-2">
                    <span class="text-orange-700">Средний острог</span>
                    <span class="bg-orange-200 text-orange-800 px-2 py-1 rounded text-sm"
                      >укрепление</span
                    >
                  </div>
                  <div class="flex justify-between items-center border-b border-orange-200 pb-2">
                    <span class="text-orange-700">Крупный острог</span>
                    <span class="bg-orange-300 text-orange-800 px-2 py-1 rounded text-sm"
                      >администрация</span
                    >
                  </div>
                  <div class="flex justify-between items-center">
                    <span class="text-orange-700">Город</span>
                    <span class="bg-orange-400 text-white px-2 py-1 rounded text-sm">центр</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Блок 3: Последователи Ермака -->
        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10 mb-10">
          <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-orange-800 mb-6">
            Последователи Ермака: герои сибирской эпопеи
          </h3>

          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-orange-50 rounded-xl p-6 text-center">
              <div
                class="w-16 h-16 bg-orange-200 rounded-full flex items-center justify-center mx-auto mb-4"
              >
                <span class="text-2xl">🧭</span>
              </div>
              <h4 class="font-bold text-orange-800 mb-2">Иван Москвитин</h4>
              <p class="text-sm text-orange-700">1639 год — первый выход к Охотскому морю</p>
            </div>
            <div class="bg-blue-50 rounded-xl p-6 text-center">
              <div
                class="w-16 h-16 bg-blue-200 rounded-full flex items-center justify-center mx-auto mb-4"
              >
                <span class="text-2xl">🌊</span>
              </div>
              <h4 class="font-bold text-blue-800 mb-2">Семен Дежнёв</h4>
              <p class="text-sm text-blue-700">
                1648 год — открытие пролива между Азией и Америкой
              </p>
            </div>
            <div class="bg-green-50 rounded-xl p-6 text-center">
              <div
                class="w-16 h-16 bg-green-200 rounded-full flex items-center justify-center mx-auto mb-4"
              >
                <span class="text-2xl">🗺️</span>
              </div>
              <h4 class="font-bold text-green-800 mb-2">Ерофей Хабаров</h4>
              <p class="text-sm text-green-700">1649-1653 — присоединение Приамурья</p>
            </div>
            <div class="bg-purple-50 rounded-xl p-6 text-center">
              <div
                class="w-16 h-16 bg-purple-200 rounded-full flex items-center justify-center mx-auto mb-4"
              >
                <span class="text-2xl">🏔️</span>
              </div>
              <h4 class="font-bold text-purple-800 mb-2">Владимир Атласов</h4>
              <p class="text-sm text-purple-700">1697-1699 — исследование Камчатки</p>
            </div>
          </div>
        </div>

        <!-- Блок 4: Основание Иркутского острога -->
        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10">
          <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-orange-800 mb-6">
            Основание Иркутского острога: стратегический замысел Якова Похабова
          </h3>

          <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div>
              <p class="text-lg leading-relaxed text-gray-700 mb-6">
                <strong>6 июля 1661 года</strong> — эта историческая дата стала точкой отсчета в
                истории Иркутска. Яков Похабов с отрядом казаков основал острог на высоком правом
                берегу Ангары.
              </p>

              <div class="bg-orange-50 rounded-xl p-6 mb-6">
                <h4 class="font-bold text-orange-800 mb-3">Стратегические преимущества места</h4>
                <ul class="space-y-2 text-orange-700 text-sm">
                  <li>• Высокий берег (15-20 метров) — естественная защита</li>
                  <li>• Слияние Ангары и Иркута — контроль над двумя реками</li>
                  <li>• Прекрасный обзор на 10-15 верст</li>
                  <li>• Защита от весенних паводков</li>
                </ul>
              </div>

              <div class="bg-amber-100 rounded-xl p-6">
                <h4 class="font-bold text-amber-800 mb-2">Первоначальные сооружения</h4>
                <p class="text-amber-700 text-sm">
                  Стены из вертикальных бревен высотой 4-5 метров, 4 угловые башни, гарнизон — 20
                  казаков под командованием Похабова
                </p>
              </div>
            </div>

            <div>
              <div class="bg-gray-50 rounded-xl p-6">
                <h4 class="font-bold text-gray-800 mb-4">Историческое значение</h4>
                <div class="space-y-4">
                  <div class="flex items-start">
                    <div
                      class="bg-orange-100 text-orange-800 rounded w-8 h-8 flex items-center justify-center text-sm mr-3 shrink-0"
                    >
                      ✓
                    </div>
                    <p class="text-gray-700 text-sm">
                      Завершил создание цепи русских укреплений по Ангаре
                    </p>
                  </div>
                  <div class="flex items-start">
                    <div
                      class="bg-orange-100 text-orange-800 rounded w-8 h-8 flex items-center justify-center text-sm mr-3 shrink-0"
                    >
                      ✓
                    </div>
                    <p class="text-gray-700 text-sm">
                      Обеспечил безопасность продвижения на восток
                    </p>
                  </div>
                  <div class="flex items-start">
                    <div
                      class="bg-orange-100 text-orange-800 rounded w-8 h-8 flex items-center justify-center text-sm mr-3 shrink-0"
                    >
                      ✓
                    </div>
                    <p class="text-gray-700 text-sm">Стал плацдармом для экспедиций в Забайкалье</p>
                  </div>
                  <div class="flex items-start">
                    <div
                      class="bg-orange-100 text-orange-800 rounded w-8 h-8 flex items-center justify-center text-sm mr-3 shrink-0"
                    >
                      ✓
                    </div>
                    <p class="text-gray-700 text-sm">Заложил основы будущего губернского центра</p>
                  </div>
                </div>
              </div>

              <div class="mt-6 bg-green-50 rounded-xl p-6">
                <h4 class="font-bold text-green-800 mb-2">Демографические итоги</h4>
                <p class="text-green-700 text-sm">
                  К концу XVII века в Сибири проживало <strong>200 000 русских</strong>, а пушнина
                  давала <strong>⅓ доходов российского бюджета</strong>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Модуль 2.3: Иркутск — купеческая столица -->
      <section class="mb-16 sm:mb-20 lg:mb-24">
        <div class="text-center mb-10">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-blue-800 mb-4">
            Иркутск — купеческая столица Сибири
          </h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto">
            "Петербург Восточной Сибири" — центр торговли, культуры и управления в XVIII-XIX веках
          </p>
        </div>

        <!-- Экономический расцвет -->
        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10 mb-10">
          <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-blue-800 mb-6">
            Экономический расцвет Иркутска
          </h3>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-blue-50 rounded-xl p-4 text-center">
              <div class="text-2xl mb-2">🌍</div>
              <p class="text-sm font-semibold text-blue-800">
                Ключевой узел российско-китайской торговли
              </p>
            </div>
            <div class="bg-blue-50 rounded-xl p-4 text-center">
              <div class="text-2xl mb-2">💰</div>
              <p class="text-sm font-semibold text-blue-800">Финансовый центр Восточной Сибири</p>
            </div>
            <div class="bg-blue-50 rounded-xl p-4 text-center">
              <div class="text-2xl mb-2">🚢</div>
              <p class="text-sm font-semibold text-blue-800">
                База для экспедиций в Северную Америку
              </p>
            </div>
            <div class="bg-blue-50 rounded-xl p-4 text-center">
              <div class="text-2xl mb-2">🎭</div>
              <p class="text-sm font-semibold text-blue-800">
                Культурная столица сибирского региона
              </p>
            </div>
          </div>

          <!-- Великие купеческие династии -->
          <h4 class="text-lg sm:text-xl font-bold text-gray-800 mb-6">
            Великие купеческие династии
          </h4>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-blue-100 rounded-xl p-6">
              <h5 class="font-bold text-blue-800 mb-3 text-lg">Трапезниковы</h5>
              <p class="text-blue-700 text-sm mb-2">"Чайные короли Сибири"</p>
              <p class="text-blue-600 text-xs">Контролировали 30% чайного импорта</p>
              <p class="text-blue-600 text-xs">Состояние: 10 млн рублей</p>
            </div>
            <div class="bg-green-100 rounded-xl p-6">
              <h5 class="font-bold text-green-800 mb-3 text-lg">Баснины</h5>
              <p class="text-green-700 text-sm mb-2">"Просветители Сибири"</p>
              <p class="text-green-600 text-xs">Библиотека: 10 000 томов</p>
              <p class="text-green-600 text-xs">Первый публичный музей</p>
            </div>
            <div class="bg-purple-100 rounded-xl p-6">
              <h5 class="font-bold text-purple-800 mb-3 text-lg">Сибиряковы</h5>
              <p class="text-purple-700 text-sm mb-2">"Промышленные магнаты"</p>
              <p class="text-purple-600 text-xs">Золотодобыча и судостроение</p>
              <p class="text-purple-600 text-xs">Финансирование арктических экспедиций</p>
            </div>
          </div>
        </div>

        <!-- Великий чайный путь -->
        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10">
          <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-green-800 mb-6">
            Великий чайный путь
          </h3>
          <p class="text-lg leading-relaxed text-gray-700 mb-6">
            Иркутск был ключевым пунктом на Великом чайном пути из Китая в Европу. Через город
            проходили караваны с чаем, шелком, фарфором и другими товарами. Это сделало Иркутск
            настоящим «чайным сердцем» России.
          </p>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-green-50 rounded-xl p-6">
              <h4 class="font-bold text-green-800 mb-3">Масштабы торговли</h4>
              <ul class="text-green-700 text-sm space-y-2">
                <li>• До 3 млн пудов чая ежегодно</li>
                <li>• Караваны из 200-300 верблюдов</li>
                <li>• Срок доставки: 16-18 месяцев</li>
                <li>• Прибыль: до 100-200%</li>
              </ul>
            </div>
            <div class="bg-amber-50 rounded-xl p-6">
              <h4 class="font-bold text-amber-800 mb-3">Товарооборот</h4>
              <div class="space-y-2 text-sm">
                <div class="flex justify-between">
                  <span class="text-amber-700">Чай</span>
                  <span class="font-semibold">60%</span>
                </div>
                <div class="flex justify-between">
                  <span class="text-amber-700">Пушнина</span>
                  <span class="font-semibold">20%</span>
                </div>
                <div class="flex justify-between">
                  <span class="text-amber-700">Шелк и фарфор</span>
                  <span class="font-semibold">15%</span>
                </div>
                <div class="flex justify-between">
                  <span class="text-amber-700">Прочее</span>
                  <span class="font-semibold">5%</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Модуль 2.4: Декабристы -->
      <section class="mb-16 sm:mb-20 lg:mb-24">
        <div class="text-center mb-10">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-purple-800 mb-4">
            Декабристы в Иркутской области
          </h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto">
            Трагедия и подвиг — вклад декабристов в развитие сибирского общества
          </p>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div>
              <h3 class="text-xl sm:text-2xl font-bold text-purple-800 mb-4">
                Исторический контекст
              </h3>
              <div class="space-y-4 text-gray-700">
                <p><strong>14 декабря 1825 года</strong> — восстание на Сенатской площади</p>
                <p><strong>121 человек</strong> осужден по "разрядам" вины</p>
                <p><strong>5 руководителей</strong> казнены</p>
                <p><strong>Более 100</strong> сосланы в Сибирь</p>
              </div>

              <h4 class="text-lg font-bold text-purple-800 mt-6 mb-4">Знаменитые декабристы</h4>
              <div class="space-y-3">
                <div class="bg-purple-50 rounded-lg p-4">
                  <p class="font-semibold text-purple-800">Сергей Волконский</p>
                  <p class="text-sm text-purple-700">Генерал-майор, герой 1812 года</p>
                </div>
                <div class="bg-purple-50 rounded-lg p-4">
                  <p class="font-semibold text-purple-800">Сергей Трубецкой</p>
                  <p class="text-sm text-purple-700">"Диктатор" восстания</p>
                </div>
                <div class="bg-purple-50 rounded-lg p-4">
                  <p class="font-semibold text-purple-800">Никита Муравьев</p>
                  <p class="text-sm text-purple-700">Автор конституции Северного общества</p>
                </div>
              </div>
            </div>

            <div>
              <h3 class="text-xl sm:text-2xl font-bold text-purple-800 mb-4">
                Просветительская деятельность
              </h3>
              <div class="grid grid-cols-1 gap-4">
                <div class="bg-green-50 rounded-lg p-4">
                  <h5 class="font-bold text-green-800 mb-2">Медицинская помощь</h5>
                  <p class="text-sm text-green-700">Первый профессиональный врач в Забайкалье</p>
                  <p class="text-sm text-green-700">Гербарий из 1200 видов растений</p>
                </div>
                <div class="bg-blue-50 rounded-lg p-4">
                  <h5 class="font-bold text-blue-800 mb-2">Образование</h5>
                  <p class="text-sm text-blue-700">Открытие школ для детей и взрослых</p>
                  <p class="text-sm text-blue-700">Создание первых публичных библиотек</p>
                </div>
                <div class="bg-amber-50 rounded-lg p-4">
                  <h5 class="font-bold text-amber-800 mb-2">Жены декабристов</h5>
                  <p class="text-sm text-amber-700">11 женщин последовали в ссылку</p>
                  <p class="text-sm text-amber-700">Подвиг любви и верности</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Модуль 2.5: Великая Отечественная война -->
      <section class="mb-16 sm:mb-20 lg:mb-24">
        <div class="text-center mb-10">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-red-800 mb-4">
            Область в годы Великой Отечественной войны
          </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8">
            <h3 class="text-xl sm:text-2xl font-bold text-red-800 mb-4">Сибиряки на фронте</h3>
            <div class="space-y-4 text-gray-700">
              <p><strong>200 000+</strong> жителей ушли на фронт</p>
              <p><strong>86</strong> Героев Советского Союза</p>
              <p>Участие в ключевых сражениях:</p>
              <ul class="list-disc list-inside space-y-1 text-sm">
                <li>Битва за Москву</li>
                <li>Сталинградская битва</li>
                <li>Курская дуга</li>
              </ul>
            </div>
          </div>

          <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8">
            <h3 class="text-xl sm:text-2xl font-bold text-red-800 mb-4">Иркутск — город-тыл</h3>
            <div class="space-y-4 text-gray-700">
              <p>Мощный промышленный и ресурсный центр</p>
              <p>Эвакуированные заводы с запада страны</p>
              <p>Производство для фронта:</p>
              <ul class="list-disc list-inside space-y-1 text-sm">
                <li>Самолеты</li>
                <li>Боеприпасы</li>
                <li>Обмундирование</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Модуль 2.6: Советский период -->
      <section>
        <div class="text-center mb-10">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-800 mb-4">
            Советский период: индустриализация и стройки века
          </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8">
            <h3 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4">
              Индустриализация 1930-х годов
            </h3>
            <p class="text-gray-700 mb-4">
              В годы советской власти Иркутская область превратилась в мощный промышленный регион.
            </p>
            <div class="bg-gray-50 rounded-xl p-4">
              <h4 class="font-semibold text-gray-800 mb-2">Крупные предприятия:</h4>
              <ul class="list-disc list-inside space-y-1 text-sm text-gray-700">
                <li>Иркутский авиазавод</li>
                <li>Завод тяжелого машиностроения</li>
                <li>Предприятия химической промышленности</li>
              </ul>
            </div>
          </div>

          <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8">
            <h3 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4">Великие стройки века</h3>
            <p class="text-gray-700 mb-4">
              1950-1970-е годы стали временем грандиозных строек, изменивших облик региона.
            </p>
            <div class="bg-blue-50 rounded-xl p-4">
              <h4 class="font-semibold text-blue-800 mb-2">Энергетические гиганты:</h4>
              <ul class="list-disc list-inside space-y-1 text-sm text-blue-700">
                <li>Иркутская ГЭС</li>
                <li>Братская ГЭС</li>
                <li>Усть-Илимская ГЭС</li>
                <li>БАМ — символ эпохи</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </main>

      <footer-component/>
  </div>



</template>
