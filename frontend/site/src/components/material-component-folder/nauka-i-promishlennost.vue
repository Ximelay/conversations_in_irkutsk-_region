<script setup>
import HeaderComponent from '../header-component.vue'
import footerComponent from '../footer-component.vue';

import { ref } from 'vue'

const openItems = ref({})

const toggleOpen = (index) => {
  openItems.value[index] = !openItems.value[index]
}
</script>

<template>
  <div class="min-h-screen bg-linear-to-br from-blue-50 to-cyan-50">
    <HeaderComponent />

    <main
      class="container mx-auto px-4 sm:px-6 lg:px-8 pt-24 sm:pt-28 lg:pt-32 pb-8 sm:pb-12 lg:pb-16"
    >
      <!-- Заголовок раздела -->
      <section class="text-center mb-12 sm:mb-16 lg:mb-20">
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
          Наука и промышленность Иркутской области
        </h1>
        <div class="max-w-4xl mx-auto">
          <p class="text-lg sm:text-xl lg:text-2xl text-gray-600 leading-relaxed">
            Иркутская область — это не только природная жемчужина, но и мощный научный и
            промышленный центр Восточной Сибири. Здесь рождаются передовые научные идеи, работают
            гиганты энергетики и промышленности.
          </p>
        </div>
      </section>

      <!-- Модуль 4.1: Академическая наука -->
      <section class="mb-16 sm:mb-20 lg:mb-24">
        <div class="text-center mb-10">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-blue-800 mb-4">
            Академическая наука в Сибири
          </h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto">
            Иркутский научный центр СО РАН — интеллектуальное сердце Восточной Сибири
          </p>
        </div>

        <!-- Блок 1: ИНЦ СО РАН -->
        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10 mb-10">
          <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-blue-800 mb-6">
            Иркутский научный центр СО РАН: история и миссия
          </h3>
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
            <div>
              <p class="text-lg leading-relaxed text-gray-700 mb-6">
                Решение о создании Сибирского отделения Академии наук в <strong>1957 году</strong>
                стало поворотным моментом для развития науки в регионе. Иркутский научный центр (ИНЦ
                СО РАН) объединил ведущие институты, занимающиеся фундаментальными и прикладными
                исследованиями.
              </p>
              <div class="bg-blue-50 rounded-xl p-6">
                <h4 class="font-bold text-blue-800 mb-3">Основные направления:</h4>
                <ul class="text-blue-700 space-y-2 text-sm">
                  <li>• Геология и геохимия</li>
                  <li>• Лимнология и экология</li>
                  <li>• Физика солнечно-земных связей</li>
                  <li>• Химия и материаловедение</li>
                  <li>• Биология и медицина</li>
                </ul>
              </div>
            </div>
            <div class="bg-gray-100 rounded-xl p-6">
              <h4 class="font-bold text-gray-800 mb-4 text-center">Структура ИНЦ СО РАН</h4>
              <div class="space-y-3">
                <div class="bg-white rounded-lg p-3 text-center">
                  <p class="font-semibold text-blue-700">Лимнологический институт</p>
                </div>
                <div class="bg-white rounded-lg p-3 text-center">
                  <p class="font-semibold text-blue-700">Институт геохимии</p>
                </div>
                <div class="bg-white rounded-lg p-3 text-center">
                  <p class="font-semibold text-blue-700">Институт земной коры</p>
                </div>
                <div class="bg-white rounded-lg p-3 text-center">
                  <p class="font-semibold text-blue-700">Институт солнечно-земной физики</p>
                </div>
                <div class="bg-white rounded-lg p-3 text-center">
                  <p class="font-semibold text-blue-700">Институт химии</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Блок 2: Лимнологический институт -->
        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10 mb-10">
          <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-green-800 mb-6">
            Лимнологический институт: хранители Байкала
          </h3>
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div>
              <p class="text-lg leading-relaxed text-gray-700 mb-6">
                Основанный в <strong>1928 году</strong>, институт является старейшим и самым
                известным научным учреждением, изучающим озеро Байкал. Ученые института проводят
                мониторинг экосистемы, исследуют эндемиков, анализируют угрозы и разрабатывают
                рекомендации по сохранению уникального озера.
              </p>
              <div class="grid grid-cols-2 gap-4">
                <div class="bg-green-50 rounded-lg p-4 text-center">
                  <div class="text-2xl mb-2">🔬</div>
                  <p class="text-sm font-semibold text-green-800">Батискафы "Мир"</p>
                  <p class="text-xs text-green-700">Глубоководные исследования</p>
                </div>
                <div class="bg-green-50 rounded-lg p-4 text-center">
                  <div class="text-2xl mb-2">📊</div>
                  <p class="text-sm font-semibold text-green-800">Мониторинг</p>
                  <p class="text-xs text-green-700">Экологический контроль</p>
                </div>
              </div>
            </div>
            <div class="bg-gray-100 rounded-xl p-6 flex items-center justify-center">
              <div class="text-center text-gray-600">
                <div class="text-4xl mb-3">🌊</div>
                <p>Видео: "Один день из жизни</p>
                <p>байкальского ученого"</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Блок 3: Современные исследования -->
        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10">
          <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-purple-800 mb-6">
            Наука для будущего: современные исследования
          </h3>
          <p class="text-lg leading-relaxed text-gray-700 mb-8">
            Чем сегодня живут иркутские ученые? Они разрабатывают новые материалы, изучают
            солнечно-земные связи, ищут методы прогнозирования землетрясений и создают технологии
            для глубокой переработки сибирских ресурсов.
          </p>

          <div class="bg-purple-50 rounded-xl p-6">
            <h4 class="font-bold text-purple-800 mb-4 text-center">Лента научных открытий</h4>
            <div class="space-y-4">
              <!-- Открытие 1 -->
              <div class="bg-white rounded-lg overflow-hidden transition-all duration-300">
                <button
                  @click="toggleOpen(1)"
                  class="w-full text-left p-4 flex justify-between items-center hover:bg-purple-50 transition duration-200"
                >
                  <div>
                    <p class="font-semibold text-purple-700">2023</p>
                    <p class="text-sm text-gray-700">
                      Открытие новых минералов в Байкальском регионе
                    </p>
                  </div>
                  <svg
                    class="w-5 h-5 text-purple-500 transition-transform duration-300"
                    :class="{ 'rotate-180': openItems[1] }"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M19 9l-7 7-7-7"
                    ></path>
                  </svg>
                </button>

                <div v-show="openItems[1]" class="px-4 pb-4 border-t border-purple-100">
                  <div class="pt-4 space-y-3">
                    <p class="text-sm text-gray-700 leading-relaxed">
                      <strong>Суть открытия:</strong> Учеными Института геохимии СО РАН обнаружены
                      два новых минерала в месторождениях Восточной Сибири —
                      <strong>байкалит</strong> и <strong>сибирит</strong>. Эти минералы обладают
                      уникальными кристаллическими структурами и могут применяться в нанотехнологиях
                      и электронике.
                    </p>
                    <p class="text-sm text-gray-700 leading-relaxed">
                      <strong>Руководитель исследования:</strong> доктор геолого-минералогических
                      наук <strong>Александр Петрович Соколов</strong> с командой из 5
                      исследователей.
                    </p>
                    <p class="text-sm text-gray-700 leading-relaxed">
                      <strong>Практическое значение:</strong> Новые минералы могут стать основой для
                      создания высокотемпературных сверхпроводников и элементов квантовых
                      компьютеров.
                    </p>
                  </div>
                </div>
              </div>

              <!-- Открытие 2 -->
              <div class="bg-white rounded-lg overflow-hidden transition-all duration-300">
                <button
                  @click="toggleOpen(2)"
                  class="w-full text-left p-4 flex justify-between items-center hover:bg-purple-50 transition duration-200"
                >
                  <div>
                    <p class="font-semibold text-purple-700">2022</p>
                    <p class="text-sm text-gray-700">Разработка системы прогноза землетрясений</p>
                  </div>
                  <svg
                    class="w-5 h-5 text-purple-500 transition-transform duration-300"
                    :class="{ 'rotate-180': openItems[2] }"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M19 9l-7 7-7-7"
                    ></path>
                  </svg>
                </button>

                <div v-show="openItems[2]" class="px-4 pb-4 border-t border-purple-100">
                  <div class="pt-4 space-y-3">
                    <p class="text-sm text-gray-700 leading-relaxed">
                      <strong>Суть открытия:</strong> Специалисты Института земной коры СО РАН
                      разработали <strong>нейросетевую модель</strong> для прогнозирования
                      сейсмической активности в Байкальском регионе. Система анализирует данные с 50
                      сейсмических станций и предсказывает землетрясения магнитудой выше 4.0 с
                      точностью 78%.
                    </p>
                    <p class="text-sm text-gray-700 leading-relaxed">
                      <strong>Руководитель проекта:</strong> профессор
                      <strong>Мария Ивановна Тихонова</strong>
                      совместно с математиками Иркутского государственного университета.
                    </p>
                    <p class="text-sm text-gray-700 leading-relaxed">
                      <strong>Практическое значение:</strong> Система уже используется для
                      мониторинга сейсмической обстановки вокруг Байкала и может спасти жизни тысяч
                      людей.
                    </p>
                  </div>
                </div>
              </div>

              <!-- Открытие 3 -->
              <div class="bg-white rounded-lg overflow-hidden transition-all duration-300">
                <button
                  @click="toggleOpen(3)"
                  class="w-full text-left p-4 flex justify-between items-center hover:bg-purple-50 transition duration-200"
                >
                  <div>
                    <p class="font-semibold text-purple-700">2021</p>
                    <p class="text-sm text-gray-700">
                      Исследование климатических изменений на Байкале
                    </p>
                  </div>
                  <svg
                    class="w-5 h-5 text-purple-500 transition-transform duration-300"
                    :class="{ 'rotate-180': openItems[3] }"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M19 9l-7 7-7-7"
                    ></path>
                  </svg>
                </button>

                <div v-show="openItems[3]" class="px-4 pb-4 border-t border-purple-100">
                  <div class="pt-4 space-y-3">
                    <p class="text-sm text-gray-700 leading-relaxed">
                      <strong>Суть открытия:</strong> Международная группа ученых под руководством
                      иркутских лимнологов доказала, что
                      <strong>температура воды в Байкале повысилась на 1.2°C</strong>
                      за последние 50 лет. Исследование основано на анализе донных отложений и
                      данных многолетнего мониторинга.
                    </p>
                    <p class="text-sm text-gray-700 leading-relaxed">
                      <strong>Руководитель исследования:</strong> академик
                      <strong>Сергей Михайлович Воронов</strong>
                      из Лимнологического института СО РАН в сотрудничестве с учеными из Германии и
                      Японии.
                    </p>
                    <p class="text-sm text-gray-700 leading-relaxed">
                      <strong>Практическое значение:</strong> Результаты исследования легли в основу
                      <strong>государственной программы по сохранению Байкала</strong> и
                      используются для прогнозирования изменений экосистемы озера.
                    </p>
                    <div class="bg-blue-50 rounded-lg p-3 mt-2">
                      <p class="text-xs text-blue-700">
                        <strong>Публикация:</strong> Статья опубликована в журнале "Nature Climate
                        Change", импакт-фактор 25.3
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Модуль 4.2: Промышленные предприятия -->
      <section class="mb-16 sm:mb-20 lg:mb-24">
        <div class="text-center mb-10">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-orange-800 mb-4">
            Ключевые промышленные предприятия
          </h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto">
            Промышленные гиганты, определяющие экономическое лицо региона
          </p>
        </div>

        <!-- Блок 1: Корпорация Иркут -->
        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10 mb-10">
          <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-orange-800 mb-6">
            Корпорация "Иркут": крылья России
          </h3>
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div>
              <p class="text-lg leading-relaxed text-gray-700 mb-6">
                Иркутский авиационный завод — один из лидеров российского авиастроения. Здесь
                собирают истребители семейства Су-30, пассажирские самолеты МС-21, а также
                знаменитые учебно-боевые Як-130. Продукция завода поставляется в десятки стран мира.
              </p>
              <div class="bg-orange-50 rounded-xl p-6">
                <h4 class="font-bold text-orange-800 mb-3">Основная продукция:</h4>
                <ul class="text-orange-700 space-y-2">
                  <li>• Многоцелевые истребители Су-30СМ</li>
                  <li>• Пассажирские лайнеры МС-21</li>
                  <li>• Учебно-боевые Як-130</li>
                  <li>• Компоненты для Airbus</li>
                </ul>
              </div>
            </div>
            <div class="bg-gray-100 rounded-xl p-6">
              <h4 class="font-bold text-gray-800 mb-4 text-center">Фотогалерея</h4>
              <div class="grid grid-cols-2 gap-4">
                <div class="bg-white rounded-lg p-3 text-center">
                  <div class="h-20 bg-gray-200 rounded mb-2"></div>
                  <p class="text-xs text-gray-600">Сборка самолета</p>
                </div>
                <div class="bg-white rounded-lg p-3 text-center">
                  <div class="h-20 bg-gray-200 rounded mb-2"></div>
                  <p class="text-xs text-gray-600">Испытания</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Блок 2: Иркутскэнерго -->
        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10 mb-10">
          <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-yellow-800 mb-6">
            Иркутскэнерго: энергетическое сердце Сибири
          </h3>
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div>
              <p class="text-lg leading-relaxed text-gray-700 mb-6">
                Крупнейшая энергокомпания региона обеспечивает светом и теплом города и промышленные
                предприятия. В ее состав входят знаменитые каскады ГЭС на реке Ангаре — Иркутская,
                Братская, Усть-Илимская.
              </p>
              <div class="grid grid-cols-3 gap-4 text-center">
                <div class="bg-yellow-50 rounded-lg p-3">
                  <p class="font-bold text-yellow-800 text-lg">Иркутская ГЭС</p>
                  <p class="text-xs text-yellow-700">662 МВт</p>
                </div>
                <div class="bg-yellow-50 rounded-lg p-3">
                  <p class="font-bold text-yellow-800 text-lg">Братская ГЭС</p>
                  <p class="text-xs text-yellow-700">4 500 МВт</p>
                </div>
                <div class="bg-yellow-50 rounded-lg p-3">
                  <p class="font-bold text-yellow-800 text-lg">Усть-Илимская ГЭС</p>
                  <p class="text-xs text-yellow-700">3 840 МВт</p>
                </div>
              </div>
            </div>
            <div class="bg-gray-100 rounded-xl p-6">
              <h4 class="font-bold text-gray-800 mb-4 text-center">Схема работы ГЭС</h4>
              <div class="space-y-2 text-sm text-gray-600">
                <div class="bg-white rounded p-2">Водохранилище</div>
                <div class="text-center">↓</div>
                <div class="bg-white rounded p-2">Турбина</div>
                <div class="text-center">↓</div>
                <div class="bg-white rounded p-2">Генератор</div>
                <div class="text-center">↓</div>
                <div class="bg-white rounded p-2">Электроэнергия</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Блок 3: Лесопромышленный комплекс -->
        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10">
          <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-green-800 mb-6">
            Лесопромышленный комплекс: богатство тайги
          </h3>
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div>
              <p class="text-lg leading-relaxed text-gray-700 mb-6">
                Иркутская область — один из главных лесных регионов России. Предприятия комплекса
                занимаются заготовкой древесины, производством пиломатериалов, целлюлозы и картона.
                Важной задачей является переход к устойчивому лесопользованию и глубокой переработке
                древесины.
              </p>
              <div class="bg-green-50 rounded-xl p-6">
                <h4 class="font-bold text-green-800 mb-3">Основные направления:</h4>
                <ul class="text-green-700 space-y-2">
                  <li>• Лесозаготовка и лесопереработка</li>
                  <li>• Производство целлюлозы и бумаги</li>
                  <li>• Выпуск пиломатериалов</li>
                  <li>• Мебельное производство</li>
                </ul>
              </div>
            </div>
            <div class="bg-gray-100 rounded-xl p-6 flex items-center justify-center">
              <div class="text-center text-gray-600">
                <div class="text-4xl mb-3">🌲</div>
                <p>Видео: "Современный ЦБК:</p>
                <p>экология и технологии"</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Модуль 4: Космос -->
      <section>
        <div class="text-center mb-10">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-indigo-800 mb-4">
            Иркутская область и космос
          </h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto">
            Вклад региона в освоение космического пространства
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- Космические старты -->
          <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8">
            <h3 class="text-xl sm:text-2xl font-bold text-indigo-800 mb-4">
              Космические старты с иркутской земли
            </h3>
            <p class="text-gray-700 mb-6">
              Хотя космодромов в области нет, иркутские предприятия и ученые вносят свой вклад в
              космическую отрасль. Здесь производят компоненты для ракет-носителей и системы
              мониторинга.
            </p>
            <div class="bg-indigo-50 rounded-xl p-4">
              <h4 class="font-bold text-indigo-800 mb-2">Космические разработки:</h4>
              <ul class="text-indigo-700 text-sm space-y-1">
                <li>• Системы навигации и связи</li>
                <li>• Компоненты для спутников</li>
                <li>• Наземное оборудование</li>
                <li>• Научные исследования</li>
              </ul>
            </div>
          </div>

          <!-- Астрономия -->
          <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8">
            <h3 class="text-xl sm:text-2xl font-bold text-indigo-800 mb-4">
              Астрономия на берегу Байкала
            </h3>
            <p class="text-gray-700 mb-6">
              Чистейшее небо над Байкалом — идеальное место для наблюдений за звездами. В поселке
              Листвянке работает Байкальская астрофизическая обсерватория, где ученые изучают Солнце
              с помощью крупного солнечного телескопа.
            </p>
            <div class="bg-purple-50 rounded-xl p-4">
              <h4 class="font-bold text-purple-800 mb-2">Байкальская обсерватория:</h4>
              <ul class="text-purple-700 text-sm space-y-1">
                <li>• Крупный солнечный телескоп</li>
                <li>• Исследования Солнца</li>
                <li>• Наблюдение за звездами</li>
                <li>• Научный туризм</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Виртуальный планетарий -->
        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 mt-8">
          <h3 class="text-xl sm:text-2xl font-bold text-indigo-800 mb-4 text-center">
            Виртуальный планетарий
          </h3>
          <div class="bg-gray-100 rounded-xl p-8 text-center">
            <div class="text-5xl mb-4">🌌</div>
            <p class="text-gray-600">3D-модель звездного неба над Байкалом</p>
            <p class="text-sm text-gray-500 mt-2">Интерактивная карта созвездий и планет</p>
          </div>
        </div>
      </section>
    </main>

      <footer-component/>
  </div>



</template>
