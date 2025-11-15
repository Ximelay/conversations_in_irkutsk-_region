<script setup>
import HeaderComponent from '../header-component.vue'
import footerComponent from '../footer-component.vue';
</script>

<template>
  <div class="min-h-screen bg-linear-to-br from-red-50 to-orange-50">
    <HeaderComponent />

    <main
      class="container mx-auto px-4 sm:px-6 lg:px-8 pt-24 sm:pt-28 lg:pt-32 pb-8 sm:pb-12 lg:pb-16"
    >
      <!-- Заголовок раздела -->
      <section class="text-center mb-12 sm:mb-16 lg:mb-20">
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
          Актуальное: Разговоры о важном
        </h1>
        <div class="max-w-4xl mx-auto">
          <p class="text-lg sm:text-xl lg:text-2xl text-gray-600 leading-relaxed mb-8">
            Важные даты, события и памятные дни Иркутской области, которые объединяют нас и
            напоминают о богатой истории родного края
          </p>

          <!-- Центральная дата -->
          <div
            class="bg-red-100 text-red-800 px-8 py-4 rounded-full font-bold text-2xl sm:text-3xl lg:text-4xl inline-block"
          >
            27 сентября - День Иркутской области
          </div>
        </div>
      </section>

      <div class="space-y-12">
        <!-- Основной контент события -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
          <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 p-8">
            <!-- Текстовый контент -->
            <div class="lg:col-span-2">
              <h3 class="text-2xl sm:text-3xl font-bold text-red-800 mb-6">Историческая справка</h3>

              <div class="space-y-4 text-gray-700 leading-relaxed text-lg">
                <p>
                  В этот день в 1937 году была образована Иркутская область в современных границах.
                  Регион был выделен из состава Восточно-Сибирского края и стал самостоятельным
                  субъектом Российской Федерации.
                </p>
                <p>
                  Иркутская область — один из крупнейших регионов России, занимающий территорию в
                  774 тысячи квадратных километров. Здесь сосредоточены уникальные природные
                  богатства: озеро Байкал, крупнейшие реки Сибири, бескрайняя тайга. Область
                  является важным промышленным и научным центром Восточной Сибири.
                </p>
                <p>
                  В День Иркутской области традиционно проводятся праздничные мероприятия, концерты,
                  выставки, встречи с ветеранами и молодежью. Это день, когда мы особенно остро
                  чувствуем свою связь с малой родиной и гордимся ее достижениями.
                </p>

                <div class="mt-8 p-6 bg-red-50 rounded-xl">
                  <h4 class="text-xl font-bold text-red-800 mb-4">Интересные факты:</h4>
                  <ul class="space-y-2 text-gray-700">
                    <li>
                      • Иркутская область занимает 5-е место по площади среди всех субъектов РФ
                    </li>
                    <li>
                      • На территории области расположено более 3000 озер, включая озеро Байкал
                    </li>
                    <li>
                      • Область граничит с Республикой Саха, Красноярским краем и Республикой
                      Бурятия
                    </li>
                    <li>• Здесь добывают золото, уголь, нефть и производят алюминий</li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- Иллюстрация -->
            <div class="flex flex-col items-center lg:items-end space-y-6">
              <div
                class="w-full h-80 bg-linear-to-br from-red-100 to-orange-100 rounded-2xl overflow-hidden flex items-center justify-center"
              >
                <div class="text-center p-6">
                  <div class="text-6xl mb-4"><img src="D:\VUE_PROJECT\conversations_in_irkutsk-_region\frontend\site\src\image\g_irkutsk_obl.png" alt=""></div>
                  <p class="text-gray-600 font-semibold">Герб Иркутской области</p>
                </div>
              </div>
              <div
                class="w-full h-80 bg-linear-to-br from-blue-50 to-cyan-50 rounded-2xl overflow-hidden flex items-center justify-center"
              >
                <div class="text-center p-6 ">
                  <div class="text-5xl mb-4"><img class="rounded-3xl" src="D:\VUE_PROJECT\conversations_in_irkutsk-_region\frontend\site\src\image\baikal2.jpg" alt=""></div>
                  <p class="text-gray-600 font-semibold">Озеро Байкал</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Интерактивный материал -->
          <div class="border-t border-gray-200 p-8">
            <h3 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-6 text-center">
              Интерактивный материал
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
              <!-- Видео материалы -->
              <div
                class="bg-blue-50 rounded-xl p-6 text-center hover:shadow-lg transition-shadow duration-300"
              >
                <div class="text-4xl mb-4">🎬</div>
                <h4 class="text-lg font-bold text-blue-800 mb-2">Видео материалы</h4>
                <p class="text-gray-600 text-sm mb-4">Документальные фильмы и репортажи</p>
                <div class="space-y-2">
                  <div class="bg-white rounded-lg p-3 text-sm text-gray-500">
                    Видео загружается...
                  </div>
                  <div class="bg-white rounded-lg p-3 text-sm text-gray-500">
                    Видео загружается...
                  </div>
                </div>
              </div>

              <!-- Презентации -->
              <div
                class="bg-green-50 rounded-xl p-6 text-center hover:shadow-lg transition-shadow duration-300"
              >
                <div class="text-4xl mb-4">📊</div>
                <h4 class="text-lg font-bold text-green-800 mb-2">Презентации</h4>
                <p class="text-gray-600 text-sm mb-4">Образовательные материалы</p>
                <div class="space-y-2">
                  <div class="bg-white rounded-lg p-3 text-sm text-gray-500">
                    Презентация готовится...
                  </div>
                  <div class="bg-white rounded-lg p-3 text-sm text-gray-500">
                    Презентация готовится...
                  </div>
                </div>
              </div>

              <!-- Документы -->
              <div
                class="bg-orange-50 rounded-xl p-6 text-center hover:shadow-lg transition-shadow duration-300"
              >
                <div class="text-4xl mb-4">📄</div>
                <h4 class="text-lg font-bold text-orange-800 mb-2">Документы</h4>
                <p class="text-gray-600 text-sm mb-4">Официальные материалы</p>
                <div class="space-y-2">
                  <div class="bg-white rounded-lg p-3 text-sm text-gray-500">
                    Документ загружается...
                  </div>
                  <div class="bg-white rounded-lg p-3 text-sm text-gray-500">
                    Документ загружается...
                  </div>
                </div>
              </div>

              <!-- Дополнительные ресурсы -->
              <div
                class="bg-purple-50 rounded-xl p-6 text-center hover:shadow-lg transition-shadow duration-300"
              >
                <div class="text-4xl mb-4">🔗</div>
                <h4 class="text-lg font-bold text-purple-800 mb-2">Ресурсы</h4>
                <p class="text-gray-600 text-sm mb-4">Полезные ссылки</p>
                <div class="space-y-2">
                  <div class="bg-white rounded-lg p-3 text-sm text-gray-500">
                    Ссылка добавляется...
                  </div>
                  <div class="bg-white rounded-lg p-3 text-sm text-gray-500">
                    Ссылка добавляется...
                  </div>
                </div>
              </div>
            </div>

            <!-- Пустое состояние -->
            <div class="text-center mt-8 p-8 bg-gray-50 rounded-2xl">
              <div class="text-6xl mb-4">📚</div>
              <h4 class="text-xl font-bold text-gray-700 mb-2">Материалы готовятся</h4>
              <p class="text-gray-500">Скдесь скоро появятся интерактивные материалы по теме</p>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer-component/>
  </div>



</template>
