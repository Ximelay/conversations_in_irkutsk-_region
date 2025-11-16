<script setup>
import HeaderComponent from '../header-component.vue'
import footerComponent from '../footer-component.vue'
</script>

<template>
  <div class="min-h-screen bg-linear-to-br from-purple-50 to-pink-50">
    <HeaderComponent />

    <main
      class="container mx-auto px-4 sm:px-6 lg:px-8 pt-24 sm:pt-28 lg:pt-32 pb-8 sm:pb-12 lg:pb-16"
    >
      <!-- Заголовок раздела -->
      <section class="text-center mb-12 sm:mb-16 lg:mb-20">
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
          Культура и этнография Иркутской области
        </h1>
        <div class="max-w-4xl mx-auto">
          <p class="text-lg sm:text-xl lg:text-2xl text-gray-600 leading-relaxed">
            Иркутская область — уникальный перекресток культур, где веками переплетаются традиции
            коренных народов, православия и буддизма
          </p>
        </div>
      </section>

      <!-- Галерея культурных символов -->
      <section class="mb-16 sm:mb-20 lg:mb-24">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div
            class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300"
          >
            <div class="h-48 bg-gray-200 flex items-center justify-center">
              <img
                src="../../image/ZNAMENSKIY.png"
                alt=""
              />
            </div>
            <div class="p-4 text-center">
              <p class="font-semibold text-purple-700 mt-3">Знаменский монастырь</p>
              <p class="text-gray-600 text-sm mt-1">Православная святыня XVII века</p>
            </div>
          </div>
          <div
            class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300"
          >
            <div class="h-48 bg-gray-200 flex items-center justify-center">
              <img
                src="../../image/TEATR_OHLOPKOVA.jpg"
                alt=""
              />
            </div>
            <div class="p-4 text-center">
              <p class="font-semibold text-purple-700 mt-3">Театр Охлопкова</p>
              <p class="text-gray-600 text-sm mt-1">Академический драматический театр</p>
            </div>
          </div>
          <div
            class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300"
          >
            <div class="h-48 bg-gray-200 flex items-center justify-center">
              <img
                src="../../image/EVENSKIY_ORNAMENT.jpg"
                alt=""
              />
            </div>
            <div class="p-4 text-center">
              <p class="font-semibold text-purple-700 mt-3">Эвенкийский орнамент</p>
              <p class="text-gray-600 text-sm mt-1">Древнее искусство коренного народа</p>
            </div>
          </div>
          <div
            class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300"
          >
            <div class="h-48 bg-gray-200 flex items-center justify-center">
              <img
                src="../../image/BURYATSKIY_EHOR.png"
                alt=""
              />
            </div>
            <div class="p-4 text-center">
              <p class="font-semibold text-purple-700 mt-3">Бурятский ёхор</p>
              <p class="text-gray-600 text-sm mt-1">Круговой хоровод у костра</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Модуль 3.1: Коренные народы Прибайкалья -->
      <section class="mb-16 sm:mb-20 lg:mb-24">
        <div class="text-center mb-10">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-purple-800 mb-4">
            Коренные народы Прибайкалья
          </h2>
        </div>

        <!-- Буряты -->
        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10 mb-10">
          <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-purple-800 mb-6">
            Буряты: дети Великой Степи
          </h3>

          <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div>
              <div class="bg-purple-50 rounded-xl p-6 mb-6">
                <h4 class="font-bold text-purple-800 mb-3">Историческая справка</h4>
                <ul class="space-y-2 text-purple-700 text-sm">
                  <li>• Формирование этноса: XIII-XVII века</li>
                  <li>• Традиционные занятия: кочевое скотоводство</li>
                  <li>• Основные районы: Усть-Ордынский округ, Ольхон</li>
                </ul>
              </div>

              <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="bg-white border border-purple-200 rounded-lg p-4 text-center">
                  <div class="text-2xl mb-2">
                    <img
                      class="rounded-3xl"
                      src="../../image/YURTA.jpg"
                      alt=""
                    />
                  </div>
                  <p class="text-sm font-semibold text-purple-800">Юрта</p>
                  <p class="text-xs text-purple-600">Идеальное жилище кочевника</p>
                </div>
                <div class="bg-white border border-purple-200 rounded-lg p-4 text-center">
                  <div class="text-2xl mb-2">
                    <img
                      class="rounded-3xl h-50"
                      src="../../image/BUUSI.png"
                      alt=""
                    />
                  </div>
                  <p class="text-sm font-semibold text-purple-800">Буузы</p>
                  <p class="text-xs text-purple-600">Традиционные мясные блюда</p>
                </div>
              </div>
            </div>

            <div>
              <div class="h-100 bg-gray-200 rounded-xl flex items-center justify-center mb-4">
                <img
                  class="h-100 w-200 rounded-xl"
                  src="../../image/BURATSKAYA_KULTURA.png"
                  alt=""
                />
              </div>

              <div class="bg-pink-50 rounded-xl p-4">
                <h4 class="font-bold text-pink-800 mb-2">Национальная кухня</h4>
                <div class="grid grid-cols-2 gap-2 text-xs">
                  <div class="bg-white rounded p-2 text-center">
                    <p class="font-semibold text-pink-700">Буузы</p>
                    <p class="text-pink-600">Мясные блюда</p>
                  </div>
                  <div class="bg-white rounded p-2 text-center">
                    <p class="font-semibold text-pink-700">Саламат</p>
                    <p class="text-pink-600">Мучное блюдо</p>
                  </div>
                  <div class="bg-white rounded p-2 text-center">
                    <p class="font-semibold text-pink-700">Тарасун</p>
                    <p class="text-pink-600">Молочная водка</p>
                  </div>
                  <div class="bg-white rounded p-2 text-center">
                    <p class="font-semibold text-pink-700">Чай</p>
                    <p class="text-pink-600">С молоком и солью</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Эвенки -->
        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10">
          <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-blue-800 mb-6">
            Эвенки: лесные рыцари Сибири
          </h3>

          <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div>
              <div class="h-100 bg-gray-200 rounded-xl flex items-center justify-center mb-4">
                <img
                  class="h-100 w-200 rounded-xl"
                  src="../../image/EVENKI.jpg"
                  alt=""
                />
              </div>

              <div class="bg-blue-50 rounded-xl p-4">
                <h4 class="font-bold text-blue-800 mb-2">Традиционные промыслы</h4>
                <div class="space-y-2 text-blue-700 text-sm">
                  <p>• Оленеводство — основа хозяйства</p>
                  <p>• Охота с луком и огнестрельным оружием</p>
                  <p>• Сезонное рыболовство</p>
                </div>
              </div>
            </div>

            <div>
              <div class="bg-blue-100 rounded-xl p-6 mb-6">
                <h4 class="font-bold text-blue-800 mb-3">Антропологические особенности</h4>
                <ul class="space-y-2 text-blue-700 text-sm">
                  <li>• Тунгусская группа народов</li>
                  <li>• Приспособленность к суровому климату</li>
                  <li>• Кочевой образ жизни</li>
                </ul>
              </div>

              <div class="grid grid-cols-2 gap-4">
                <div class="bg-white border border-blue-200 rounded-lg p-4 text-center">
                  <div class="text-2xl mb-2">
                    <img
                      class="rounded-3xl"
                      src="../../image/CHYM.jpg"
                      alt=""
                    />
                  </div>
                  <p class="text-sm font-semibold text-blue-800">Чум</p>
                  <p class="text-xs text-blue-600">Переносное жилище</p>
                </div>
                <div class="bg-white border border-blue-200 rounded-lg p-4 text-center">
                  <div class="text-2xl mb-2">
                    <img
                      class="rounded-3xl"
                      src="../../image/EVENSKIY_OHOTNIK.jpg"
                      alt=""
                    />
                  </div>
                  <p class="text-sm font-semibold text-blue-800">Охота</p>
                  <p class="text-xs text-blue-600">Традиционный промысел</p>
                </div>
              </div>

              <div class="mt-6 bg-green-50 rounded-xl p-4">
                <h4 class="font-bold text-green-800 mb-2">Кочевая жизнь</h4>
                <p class="text-green-700 text-sm">
                  Сезонные кочевья и гармоничное взаимодействие с природой
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Модуль 3.2: Традиции, обряды и фольклор -->
      <section class="mb-16 sm:mb-20 lg:mb-24">
        <div class="text-center mb-10">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-green-800 mb-4">
            Традиции, обряды и фольклор
          </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
          <!-- Календарные обряды -->
          <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8">
            <h3 class="text-xl sm:text-2xl font-bold text-green-800 mb-6">
              Календарные обряды и праздники
            </h3>

            <div class="space-y-6">
              <div class="bg-green-50 rounded-xl p-5">
                <h4 class="font-bold text-green-800 mb-3">Бурятские праздники</h4>
                <div class="space-y-2 text-green-700 text-sm">
                  <div class="flex items-center">
                    <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                    <span>Сагаалган — Новый год по лунному календарю</span>
                  </div>
                  <div class="flex items-center">
                    <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                    <span>Сурхарбан — спортивный праздник</span>
                  </div>
                  <div class="flex items-center">
                    <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                    <span>Обряд почитания земли — весенний ритуал</span>
                  </div>
                </div>
              </div>

              <div class="bg-blue-50 rounded-xl p-5">
                <h4 class="font-bold text-blue-800 mb-3">Эвенкийские обряды</h4>
                <div class="space-y-2 text-blue-700 text-sm">
                  <div class="flex items-center">
                    <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                    <span>Медвежий праздник — анимистический ритуал</span>
                  </div>
                  <div class="flex items-center">
                    <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                    <span>Обряд задабривания духов перед охотой</span>
                  </div>
                  <div class="flex items-center">
                    <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                    <span>Свадебные обряды со сложной символикой</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Фольклорное наследие -->
          <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8">
            <h3 class="text-xl sm:text-2xl font-bold text-purple-800 mb-6">Фольклорное наследие</h3>

            <div class="space-y-6">
              <div class="bg-purple-50 rounded-xl p-5">
                <h4 class="font-bold text-purple-800 mb-3">Бурятский эпос</h4>
                <div class="space-y-3">
                  <div>
                    <p class="font-semibold text-purple-700">"Гэсэр"</p>
                    <p class="text-purple-600 text-sm">Великий героический эпос</p>
                  </div>
                  <p class="text-purple-700 text-sm">
                    Улигершины — сказители, хранители устной традиции
                  </p>
                </div>
              </div>

              <div class="bg-amber-50 rounded-xl p-5">
                <h4 class="font-bold text-amber-800 mb-3">Эвенкийские предания</h4>
                <div class="space-y-2 text-amber-700 text-sm">
                  <p>• Мифы о сотворении мира</p>
                  <p>• Сказки о животных</p>
                  <p>• Легенды о великих шаманах</p>
                </div>
              </div>

              <div class="bg-red-50 rounded-xl p-5">
                <h4 class="font-bold text-red-800 mb-3">Музыкальные традиции</h4>
                <div class="grid grid-cols-3 gap-3 text-center">
                  <div>
                    <div class="text-lg mb-1">🎤</div>
                    <p class="text-xs font-semibold text-red-700">Горловое пение</p>
                  </div>
                  <div>
                    <div class="text-lg mb-1">🎻</div>
                    <p class="text-xs font-semibold text-red-700">Морин-хур</p>
                  </div>
                  <div>
                    <div class="text-lg mb-1">💃</div>
                    <p class="text-xs font-semibold text-red-700">Ёхор</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Модуль 3.4: Литературное наследие -->
      <section>
        <div class="text-center mb-10">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-indigo-800 mb-4">
            Литературное наследие
          </h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto">
            Классики иркутской литературы, чьи произведения стали достоянием русской культуры
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Александр Вампилов -->
          <div
            class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group"
          >
            <div class="h-64 bg-gray-100 overflow-hidden">
              <img
                src="../../image/vampilov.jpg"
                alt="Александр Вампилов"
                class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-indigo-800 mb-3">Александр Вампилов</h3>
              <p class="text-gray-600 text-sm mb-4">1937-1972 • Драматург</p>

              <p class="text-gray-700 text-sm mb-4 leading-relaxed">
                Выдающийся русский драматург, чьи пьесы изменили отечественный театр. Мастер
                психологической драмы, создавший галерею незабываемых образов современников.
                Трагически погиб в возрасте 34 лет, успев написать произведения, ставшие классикой.
              </p>

              <div class="space-y-2 text-sm text-gray-700 border-t border-gray-200 pt-4">
                <p class="font-semibold text-indigo-700">Ключевые произведения:</p>
                <p>• "Старший сын" (1965)</p>
                <p>• "Утиная охота" (1967)</p>
                <p>• "Прошлым летом в Чулимске" (1972)</p>
              </div>
            </div>
          </div>

          <!-- Валентин Распутин -->
          <div
            class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group"
          >
            <div class="h-64 bg-gray-100 overflow-hidden">
              <img
                src="../../image/VALENTIN_RASPUTIN.jpg"
                alt="Валентин Распутин"
                class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-indigo-800 mb-3">Валентин Распутин</h3>
              <p class="text-gray-600 text-sm mb-4">1937-2015 • Писатель-деревенщик</p>

              <p class="text-gray-700 text-sm mb-4 leading-relaxed">
                Классик "деревенской прозы", певец сибирской природы и защитник нравственных
                ценностей. Его творчество пронизано любовью к малой родине и тревогой за судьбу
                русской деревни. Активный общественный деятель, борец за сохранение Байкала.
              </p>

              <div class="space-y-2 text-sm text-gray-700 border-t border-gray-200 pt-4">
                <p class="font-semibold text-indigo-700">Ключевые произведения:</p>
                <p>• "Прощание с Матерой" (1976)</p>
                <p>• "Уроки французского" (1973)</p>
                <p>• "Живи и помни" (1974)</p>
              </div>
            </div>
          </div>

          <!-- Марк Сергеев -->
          <div
            class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group"
          >
            <div class="h-64 bg-gray-100 overflow-hidden">
              <img
                src="../../image/MARK_SERGEEV.png"
                alt="Марк Сергеев"
                class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-indigo-800 mb-3">Марк Сергеев</h3>
              <p class="text-gray-600 text-sm mb-4">1926-1997 • Поэт, краевед, переводчик</p>

              <p class="text-gray-700 text-sm mb-4 leading-relaxed">
                Разносторонний литератор, посвятивший творчество Сибири. Поэт лирико-философского
                склада, автор исторических произведений о родном крае. Переводчик поэзии народов
                Сибири и Севера. Внес значительный вклад в изучение и популяризацию культурного
                наследия Прибайкалья.
              </p>

              <div class="space-y-2 text-sm text-gray-700 border-t border-gray-200 pt-4">
                <p class="font-semibold text-indigo-700">Ключевые произведения:</p>
                <p>• "Слово о Байкале" (поэма)</p>
                <p>• "Ангара-река" (стихи)</p>
                <p>• "Поэмы о Сибири" (сборник)</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Дополнительные писатели -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
          <!-- Евгений Евтушенко -->
          <div
            class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group"
          >
            <div class="h-64 bg-gray-100 overflow-hidden">
              <img
                src="../../image/evtushenko.jpg"
                alt="Евгений Евтушенко"
                class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-indigo-800 mb-3">Евгений Евтушенко</h3>
              <p class="text-gray-600 text-sm mb-4">1933-2017 • Поэт-шестидесятник</p>

              <p class="text-gray-700 text-sm mb-4 leading-relaxed">
                Знаменитый поэт, родившийся на станции Зима Иркутской области. Один из ярчайших
                представителей "шестидесятников", чьи стихи становились общественными событиями.
                Мастер публицистической поэзии, автор поэмы "Братская ГЭС", посвященной сибирской
                стройке.
              </p>

              <div class="space-y-2 text-sm text-gray-700 border-t border-gray-200 pt-4">
                <p class="font-semibold text-indigo-700">Ключевые произведения:</p>
                <p>• "Братская ГЭС" (1965)</p>
                <p>• "Бабий Яр" (1961)</p>
                <p>• "Идут белые снеги..." (1965)"</p>
              </div>
            </div>
          </div>

          <!-- Леонид Красовский -->
          <div
            class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group"
          >
            <div class="h-64 bg-gray-100 overflow-hidden">
              <img
                src="../../image/krasovsky.jpg"
                alt="Леонид Красовский"
                class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-indigo-800 mb-3">Леонид Красовский</h3>
              <p class="text-gray-600 text-sm mb-4">1924-2012 • Писатель, фронтовик</p>

              <p class="text-gray-700 text-sm mb-4 leading-relaxed">
                Писатель-фронтовик, участник Великой Отечественной войны. В творчестве обращался к
                военной теме и жизни современной Сибири. Автор психологических повестей и рассказов
                о нравственных исканиях человека. Долгие годы возглавлял Иркутскую писательскую
                организацию.
              </p>

              <div class="space-y-2 text-sm text-gray-700 border-t border-gray-200 pt-4">
                <p class="font-semibold text-indigo-700">Ключевые произведения:</p>
                <p>• "Родник у дороги"</p>
                <p>• "Белый омут"</p>
                <p>• "Земные заботы"</p>
              </div>
            </div>
          </div>

          <!-- Анатолий Кобенков -->
          <div
            class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group"
          >
            <div class="h-64 bg-gray-100 overflow-hidden">
              <img
                src="../../image/kobenkov.jpg"
                alt="Анатолий Кобенков"
                class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-indigo-800 mb-3">Анатолий Кобенков</h3>
              <p class="text-gray-600 text-sm mb-4">1947-2011 • Поэт, издатель</p>

              <p class="text-gray-700 text-sm mb-4 leading-relaxed">
                Поэт лирико-философского направления, тонкий лирик. Организатор литературной жизни
                Иркутска, основатель издательства "Сапронов". Его поэзия отличается глубиной мысли,
                музыкальностью и вниманием к вечным темам бытия. Внес вклад в сохранение
                литературного наследия Сибири.
              </p>

              <div class="space-y-2 text-sm text-gray-700 border-t border-gray-200 pt-4">
                <p class="font-semibold text-indigo-700">Ключевые произведения:</p>
                <p>• "Избранное" (стихи)</p>
                <p>• "Сибирский тракт"</p>
                <p>• "Стихи разных лет"</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer-component />
  </div>
</template>
