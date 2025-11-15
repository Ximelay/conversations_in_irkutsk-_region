<script setup>
import HeaderComponent from './header-component.vue'
import footerComponent from './footer-component.vue'
</script>

<template>
  <div class="min-h-screen bg-linear-to-br from-blue-50 to-indigo-100">
    <HeaderComponent />
    <main class="pt-24">
      <!-- Добавлен отступ сверху -->
      <div class="container mx-auto px-4 max-w-4xl py-12">
        <!-- Заголовок -->
        <div class="text-center mb-16">
          <h1 class="text-4xl sm:text-5xl font-bold text-gray-800 mb-4">Наша команда</h1>
          <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            Талантливые специалисты, создающие образовательную платформу для Иркутской области
          </p>
        </div>

        <!-- Список команды -->
        <div class="space-y-8">
          <!-- Руководитель проекта -->
          <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
            <div
              class="w-20 h-20 bg-linear-to-r from-blue-500 to-purple-600 rounded-full mx-auto mb-4 flex items-center justify-center"
            >
              <span class="text-white text-2xl font-bold">ИЛ</span>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Лазуткин Илья Константинович</h3>
            <p class="text-lg text-blue-600 font-semibold mb-4">Руководитель проекта</p>
            <p class="text-gray-600">
              Координация команды, планирование спринтов, ведение документации
            </p>
          </div>

          <!-- Backend-разработчики -->
          <div class="bg-white rounded-2xl shadow-lg p-8">
            <h3 class="text-2xl font-bold text-gray-800 text-center mb-6">Backend-разработка</h3>
            <div class="grid md:grid-cols-2 gap-6">
              <div class="text-center">
                <div
                  class="w-16 h-16 bg-linear-to-r from-green-500 to-teal-600 rounded-full mx-auto mb-3 flex items-center justify-center"
                >
                  <span class="text-white font-bold">ИЛ</span>
                </div>
                <h4 class="text-lg font-semibold text-gray-800">Лазуткин Илья Константинович</h4>
                <p class="text-gray-600 text-sm">Архитектура БД, серверная часть</p>
              </div>
              <div class="text-center">
                <div
                  class="w-16 h-16 bg-linear-to-r from-green-500 to-teal-600 rounded-full mx-auto mb-3 flex items-center justify-center"
                >
                  <span class="text-white font-bold">ЯЮ</span>
                </div>
                <h4 class="text-lg font-semibold text-gray-800">Юрьева Яна Максимовна</h4>
                <p class="text-gray-600 text-sm">Разработка API, безопасность</p>
              </div>
            </div>
          </div>

          <!-- Frontend-разработчики -->
          <div class="bg-white rounded-2xl shadow-lg p-8">
            <h3 class="text-2xl font-bold text-gray-800 text-center mb-6">Frontend-разработка</h3>
            <div class="grid md:grid-cols-2 gap-6">
              <div class="text-center">
                <div
                  class="w-16 h-16 bg-linear-to-r from-purple-500 to-pink-600 rounded-full mx-auto mb-3 flex items-center justify-center"
                >
                  <span class="text-white font-bold">СК</span>
                </div>
                <h4 class="text-lg font-semibold text-gray-800">Калашников Сергей Евгеньевич</h4>
                <p class="text-gray-600 text-sm">Пользовательский интерфейс</p>
              </div>
              <div class="text-center">
                <div
                  class="w-16 h-16 bg-linear-to-r from-purple-500 to-pink-600 rounded-full mx-auto mb-3 flex items-center justify-center"
                >
                  <span class="text-white font-bold">ДЧ</span>
                </div>
                <h4 class="text-lg font-semibold text-gray-800">Чернышов Данил Александрович</h4>
                <p class="text-gray-600 text-sm">Интерактивные элементы, интеграция</p>
              </div>
            </div>
          </div>

          <!-- UI/UX Дизайнеры -->
          <div class="bg-white rounded-2xl shadow-lg p-8">
            <h3 class="text-2xl font-bold text-gray-800 text-center mb-6">UI/UX Дизайн</h3>
            <div class="grid md:grid-cols-2 gap-6">
              <div class="text-center">
                <div
                  class="w-16 h-16 bg-linear-to-r from-orange-500 to-red-600 rounded-full mx-auto mb-3 flex items-center justify-center"
                >
                  <span class="text-white font-bold">ИГ</span>
                </div>
                <h4 class="text-lg font-semibold text-gray-800">Горубнова Ирина Александровна</h4>
                <p class="text-gray-600 text-sm">Прототипы, пользовательский опыт</p>
              </div>
              <div class="text-center">
                <div
                  class="w-16 h-16 bg-linear-to-r from-orange-500 to-red-600 rounded-full mx-auto mb-3 flex items-center justify-center"
                >
                  <span class="text-white font-bold">ВБ</span>
                </div>
                <h4 class="text-lg font-semibold text-gray-800">Богидаева Виктория Олеговна</h4>
                <p class="text-gray-600 text-sm">Визуальный стиль, графика</p>
              </div>
            </div>
          </div>

          <!-- Контент-менеджеры -->
          <div class="bg-white rounded-2xl shadow-lg p-8">
            <h3 class="text-2xl font-bold text-gray-800 text-center mb-6">Контент и методика</h3>
            <div class="grid md:grid-cols-2 gap-6">
              <div class="text-center">
                <div
                  class="w-16 h-16 bg-linear-to-r from-teal-500 to-blue-600 rounded-full mx-auto mb-3 flex items-center justify-center"
                >
                  <span class="text-white font-bold">ЯЗ</span>
                </div>
                <h4 class="text-lg font-semibold text-gray-800">Закирова Яна Артёмовна</h4>
                <p class="text-gray-600 text-sm">Структура образовательных материалов</p>
              </div>
              <div class="text-center">
                <div
                  class="w-16 h-16 bg-linear-to-r from-teal-500 to-blue-600 rounded-full mx-auto mb-3 flex items-center justify-center"
                >
                  <span class="text-white font-bold">ЮБ</span>
                </div>
                <h4 class="text-lg font-semibold text-gray-800">Борголова Юлия Александровна</h4>
                <p class="text-gray-600 text-sm">Курирование контента, методики</p>
              </div>
            </div>
          </div>

          <!-- QA-тестировщик -->
          <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
            <div
              class="w-20 h-20 bg-linear-to-r from-yellow-500 to-amber-600 rounded-full mx-auto mb-4 flex items-center justify-center"
            >
              <span class="text-white text-2xl font-bold">АБ</span>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Бобрышева Арина Дмитриевна</h3>
            <p class="text-lg text-amber-600 font-semibold mb-4">QA-тестировщик</p>
            <p class="text-gray-600">Функциональное тестирование, контроль качества</p>
          </div>

          <!-- Технические писатели -->
          <div class="bg-white rounded-2xl shadow-lg p-8">
            <h3 class="text-2xl font-bold text-gray-800 text-center mb-6">Документация</h3>
            <div class="grid md:grid-cols-2 gap-6">
              <div class="text-center">
                <div
                  class="w-16 h-16 bg-linear-to-r from-indigo-500 to-purple-600 rounded-full mx-auto mb-3 flex items-center justify-center"
                >
                  <span class="text-white font-bold">ВД</span>
                </div>
                <h4 class="text-lg font-semibold text-gray-800">Дашинова Валерия Михайловна</h4>
                <p class="text-gray-600 text-sm">Пользовательская документация</p>
              </div>
              <div class="text-center">
                <div
                  class="w-16 h-16 bg-linear-to-r from-indigo-500 to-purple-600 rounded-full mx-auto mb-3 flex items-center justify-center"
                >
                  <span class="text-white font-bold">АД</span>
                </div>
                <h4 class="text-lg font-semibold text-gray-800">Дугарова Арина Эрдэмовна</h4>
                <p class="text-gray-600 text-sm">Инструкции, FAQ</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

      <footerComponent />
  </div>


</template>
