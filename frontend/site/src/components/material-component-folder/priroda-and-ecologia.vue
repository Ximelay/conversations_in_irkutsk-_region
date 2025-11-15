<script setup>
import HeaderComponent from '@/components/header-component.vue'
import footerComponent from '../footer-component.vue'
</script>

<template>
  <div class="min-h-screen bg-linear-to-br from-green-50 to-blue-50">
    <HeaderComponent />

    <main
      class="container mx-auto px-4 sm:px-6 lg:px-8 pt-24 sm:pt-28 lg:pt-32 pb-8 sm:pb-12 lg:pb-16"
    >
      <!-- Заголовок раздела -->
      <section class="text-center mb-12 sm:mb-16 lg:mb-20">
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
          Природа и экология Иркутской области
        </h1>
        <div class="max-w-4xl mx-auto">
          <p class="text-lg sm:text-xl lg:text-2xl text-gray-600 leading-relaxed">
            Иркутская область — уникальный регион, где соседствуют величайшее озеро планеты,
            бескрайняя тайга, горные хребты и мощные реки.
          </p>
        </div>
      </section>

      <!-- Ключевое изображение -->
      <section class="mb-12 sm:mb-16 lg:mb-20">
        <div class="rounded-3xl shadow-2xl overflow-hidden">
          <img
            src="D:\VUE_PROJECT\conversations_in_irkutsk-_region\frontend\site\src\image\BAIKAL.jpg"
            alt="Озеро Байкал - жемчужина планеты"
            class="w-full h-64 sm:h-80 lg:h-96 object-cover"
          />
        </div>
      </section>

      <!-- Модуль 1.1: Озеро Байкал -->
      <section class="mb-16 sm:mb-20 lg:mb-24">
        <div class="text-center mb-10">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-800 mb-4">
            Озеро Байкал — Жемчужина Планеты
          </h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto">
            Уникальный природный объект мирового значения с удивительной историей и экосистемой
          </p>
        </div>

        <!-- Блок 1: Рождение Байкала -->
        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10 mb-10">
          <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-green-800 mb-6 text-center">
            Рождение Байкала
          </h3>
          <div class="prose prose-lg max-w-none text-gray-700">
            <p class="text-lg leading-relaxed mb-6">
              Байкал — не просто озеро, а древнейшая и глубочайшая тектоническая впадина на Земле.
              Его возраст оценивается в <strong>25-35 миллионов лет</strong>. Он лежит в Байкальской
              рифтовой зоне — месте, где Евразийская литосферная плита медленно расходится, и
              континент продолжает расти.
            </p>
            <p class="text-lg leading-relaxed">
              Именно поэтому в районе Байкала часты землетрясения, а его берега ежегодно расходятся
              на несколько миллиметров.
            </p>
          </div>

          <!-- Мысы Байкала -->
          <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-blue-50 rounded-xl p-6">
              <h4 class="text-lg font-bold text-blue-800 mb-3">Мыс Рытый (Хыр-Хушун)</h4>
              <p class="text-blue-700">
                Уникальное геологическое образование на западном побережье Байкала
              </p>
            </div>
            <div class="bg-blue-50 rounded-xl p-6">
              <h4 class="text-lg font-bold text-blue-800 mb-3">Мыс Хобой</h4>
              <p class="text-blue-700">
                Северная точка острова Ольхон с гротами длиной до 22 метров
              </p>
            </div>
          </div>
        </div>

        <!-- Блок 2: Цифры и факты -->
        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10 mb-10">
          <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-blue-800 mb-8 text-center">
            Цифры и факты: рекорды Байкала
          </h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
            <div class="bg-blue-100 rounded-xl p-4 sm:p-6 text-center">
              <div class="text-2xl sm:text-3xl font-bold text-blue-700 mb-2">1642 м</div>
              <div class="text-sm sm:text-base text-blue-600">Максимальная глубина</div>
            </div>
            <div class="bg-green-100 rounded-xl p-4 sm:p-6 text-center">
              <div class="text-2xl sm:text-3xl font-bold text-green-700 mb-2">23 615 км³</div>
              <div class="text-sm sm:text-base text-green-600">Объем пресной воды</div>
            </div>
            <div class="bg-purple-100 rounded-xl p-4 sm:p-6 text-center">
              <div class="text-2xl sm:text-3xl font-bold text-purple-700 mb-2">40 м</div>
              <div class="text-sm sm:text-base text-purple-600">Прозрачность воды</div>
            </div>
            <div class="bg-amber-100 rounded-xl p-4 sm:p-6 text-center">
              <div class="text-2xl sm:text-3xl font-bold text-amber-700 mb-2">25-35 млн лет</div>
              <div class="text-sm sm:text-base text-amber-600">Возраст озера</div>
            </div>
          </div>
        </div>

        <!-- Блок 3: Уникальная экосистема -->
        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10 mb-10">
          <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-purple-800 mb-8 text-center">
            Уникальная экосистема: эндемики Байкала
          </h3>
          <p class="text-lg text-gray-700 text-center mb-8 max-w-3xl mx-auto">
            Длительная изоляция и особые условия сделали Байкал «подводной Галапагосской».
            Большинство видов животных и растений не встречаются больше нигде в мире.
          </p>

          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-purple-50 rounded-xl p-6 text-center">
              <div
                class="w-16 h-16 bg-purple-200 rounded-full flex items-center justify-center mx-auto mb-4"
              >
                <span class="text-2xl">🔍</span>
              </div>
              <h4 class="text-lg font-bold text-purple-800 mb-2">Байкальская нерпа</h4>
              <p class="text-sm text-purple-700">Единственный в мире пресноводный тюлень</p>
            </div>
            <div class="bg-blue-50 rounded-xl p-6 text-center">
              <div
                class="w-16 h-16 bg-blue-200 rounded-full flex items-center justify-center mx-auto mb-4"
              >
                <span class="text-2xl">🐠</span>
              </div>
              <h4 class="text-lg font-bold text-blue-800 mb-2">Голомянка</h4>
              <p class="text-sm text-blue-700">Прозрачная живородящая рыбка с 35% жира</p>
            </div>
            <div class="bg-green-50 rounded-xl p-6 text-center">
              <div
                class="w-16 h-16 bg-green-200 rounded-full flex items-center justify-center mx-auto mb-4"
              >
                <span class="text-2xl">🌿</span>
              </div>
              <h4 class="text-lg font-bold text-green-800 mb-2">Байкальская губка</h4>
              <p class="text-sm text-green-700">Создает подводные "леса"-фильтры</p>
            </div>
            <div class="bg-amber-50 rounded-xl p-6 text-center">
              <div
                class="w-16 h-16 bg-amber-200 rounded-full flex items-center justify-center mx-auto mb-4"
              >
                <span class="text-2xl">🦐</span>
              </div>
              <h4 class="text-lg font-bold text-amber-800 mb-2">Эпишура</h4>
              <p class="text-sm text-amber-700">Микроскопический рачок-фильтратор</p>
            </div>
          </div>
        </div>

        <!-- Блок 4: Экологические проблемы -->
        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10">
          <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-red-800 mb-8 text-center">
            Экологические проблемы Байкала
          </h3>
          <p class="text-lg text-gray-700 text-center mb-8 max-w-3xl mx-auto">
            Уникальность Байкала делает его очень уязвимым. Основные угрозы требуют нашего внимания
            и действий.
          </p>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-red-50 rounded-xl p-6 border-l-4 border-red-500">
              <h4 class="text-lg font-bold text-red-800 mb-3">Загрязнение стоками</h4>
              <p class="text-red-700">
                Недостаточно очищенные сточные воды с населенных пунктов и турбаз
              </p>
            </div>
            <div class="bg-red-50 rounded-xl p-6 border-l-4 border-red-500">
              <h4 class="text-lg font-bold text-red-800 mb-3">Спирогира</h4>
              <p class="text-red-700">Чрезмерный рост водорослей из-за фосфатов и нитратов</p>
            </div>
            <div class="bg-red-50 rounded-xl p-6 border-l-4 border-red-500">
              <h4 class="text-lg font-bold text-red-800 mb-3">БЦБК</h4>
              <p class="text-red-700">Проблема отходов целлюлозно-бумажного комбината</p>
            </div>
            <div class="bg-red-50 rounded-xl p-6 border-l-4 border-red-500">
              <h4 class="text-lg font-bold text-red-800 mb-3">Неорганизованный туризм</h4>
              <p class="text-red-700">Замусоривание берегов и нарушение экосистем</p>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer-component />
  </div>
</template>
