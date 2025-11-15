<script setup>
import HeaderComponent from '../header-component.vue'
import footerComponent from '../footer-component.vue';
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
          Люди и судьбы Иркутской области
        </h1>
        <div class="max-w-4xl mx-auto">
          <p class="text-lg sm:text-xl lg:text-2xl text-gray-600 leading-relaxed">
            Историю и славу Иркутской области творят ее люди — талантливые, сильные духом, преданные
            своему краю. Знакомьтесь с теми, чьи имена навсегда вписаны в летопись Прибайкалья.
          </p>
        </div>
      </section>

      <!-- Модуль 5.1: Великие земляки -->
      <section class="mb-16 sm:mb-20 lg:mb-24">
        <div class="text-center mb-10">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-purple-800 mb-4">
            Великие земляки: прошлое и настоящее
          </h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto">
            Выдающиеся личности, прославившие Иркутскую область в искусстве, науке и культуре
          </p>
        </div>

        <div class="space-y-12">
          <!-- Александр Вампилов -->
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 p-8">
              <div class="flex justify-center lg:justify-start">
                <div class="w-64 h-80 bg-gray-100 rounded-xl overflow-hidden">
                  <img
                    src="D:\TEST_CODE_VUE_TAILWIND_FOR_OUR_PROJECT\test_frontend_code_for_our_project\src\image\vampilov.jpg"
                    alt="Александр Вампилов"
                    class="w-full h-full object-cover"
                  />
                </div>
              </div>
              <div class="lg:col-span-2">
                <h3 class="text-2xl sm:text-3xl font-bold text-purple-800 mb-4">
                  Александр Вампилов
                </h3>
                <p class="text-gray-600 text-lg mb-6">1937-1972 • Драматург, писатель</p>

                <div class="space-y-4 text-gray-700 leading-relaxed">
                  <p>
                    Александр Валентинович Вампилов — выдающийся русский драматург, чье творчество
                    оказало огромное влияние на развитие отечественного театра. Родился в поселке
                    Кутулик Иркутской области в семье учителей. Окончил Иркутский университет,
                    работал в газете «Советская молодежь».
                  </p>
                  <p>
                    Его пьесы «Старший сын», «Утиная охота», «Прошлым летом в Чулимске» стали
                    классикой русской драматургии. Вампилов создал уникальный «театр
                    недосказанности», где важную роль играют паузы и подтекст. Его герои — обычные
                    люди с их сомнениями, поисками смысла жизни и нравственными выборами.
                  </p>
                  <p>
                    Трагически погиб 17 августа 1972 года на Байкале, утонув в волнах озера. Ему
                    было всего 34 года. Несмотря на короткую жизнь, Вампилов оставил богатое
                    литературное наследие, его пьесы до сих пор с успехом идут в театрах России и
                    зарубежья.
                  </p>
                </div>

                <div class="mt-6 p-4 bg-purple-50 rounded-lg">
                  <p class="font-semibold text-purple-800 mb-2">Основные произведения:</p>
                  <p class="text-purple-700">
                    «Утиная охота» (1967), «Старший сын» (1965), «Прошлым летом в Чулимске» (1972),
                    «Провинциальные анекдоты»
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Леонид Гайдай -->
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 p-8">
              <div class="flex justify-center lg:justify-start">
                <div class="w-64 h-80 bg-gray-100 rounded-xl overflow-hidden">
                  <img
                    src="D:\TEST_CODE_VUE_TAILWIND_FOR_OUR_PROJECT\test_frontend_code_for_our_project\src\image\gaidai.jpg"
                    alt="Леонид Гайдай"
                    class="w-full h-full object-cover"
                  />
                </div>
              </div>
              <div class="lg:col-span-2">
                <h3 class="text-2xl sm:text-3xl font-bold text-purple-800 mb-4">Леонид Гайдай</h3>
                <p class="text-gray-600 text-lg mb-6">1923-1993 • Кинорежиссер, сценарист</p>

                <div class="space-y-4 text-gray-700 leading-relaxed">
                  <p>
                    Леонид Иович Гайдай — легендарный советский кинорежиссер, признанный мастер
                    комедии. Родился в городе Свободный Амурской области, но детство и юность провел
                    в Иркутске, который считал своей настоящей родиной. Окончил Иркутскую
                    железнодорожную школу №42, работал осветителем в Иркутском драматическом театре.
                  </p>
                  <p>
                    Во время Великой Отечественной войны служил в разведке, был тяжело ранен. После
                    войны окончил режиссерский факультет ВГИКа. Его первые комедии «Пес Барбос и
                    необычный кросс» и «Самогонщики» принесли ему всесоюзную известность.
                  </p>
                  <p>
                    Фильмы Гайдая «Операция «Ы» и другие приключения Шурика», «Кавказская пленница»,
                    «Бриллиантовая рука», «Иван Васильевич меняет профессию» стали настоящим
                    народным достоянием. Фразы из его картин ушли в народ и стали крылатыми
                    выражениями. Гайдай создал уникальный стиль комедии, сочетающий яркую
                    эксцентрику с тонкой сатирой.
                  </p>
                </div>

                <div class="mt-6 p-4 bg-purple-50 rounded-lg">
                  <p class="font-semibold text-purple-800 mb-2">Знаменитые фильмы:</p>
                  <p class="text-purple-700">
                    «Бриллиантовая рука», «Кавказская пленница», «Иван Васильевич меняет профессию»,
                    «12 стульев», «Операция «Ы»
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Валентин Распутин -->
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 p-8">
              <div class="flex justify-center lg:justify-start">
                <div class="w-64 h-80 bg-gray-100 rounded-xl overflow-hidden">
                  <img
                    src="D:\TEST_CODE_VUE_TAILWIND_FOR_OUR_PROJECT\test_frontend_code_for_our_project\src\image\VALENTIN_RASPUTIN.jpg"
                    alt="Валентин Распутин"
                    class="w-full h-full object-cover"
                  />
                </div>
              </div>
              <div class="lg:col-span-2">
                <h3 class="text-2xl sm:text-3xl font-bold text-purple-800 mb-4">
                  Валентин Распутин
                </h3>
                <p class="text-gray-600 text-lg mb-6">
                  1937-2015 • Писатель, публицист, общественный деятель
                </p>

                <div class="space-y-4 text-gray-700 leading-relaxed">
                  <p>
                    Валентин Григорьевич Распутин — выдающийся русский писатель, классик
                    «деревенской прозы», Герой Социалистического Труда. Родился в селе Усть-Уда
                    Иркутской области, детство провел в деревне Аталанка. Окончил Иркутский
                    университет, работал журналистом в молодежных газетах.
                  </p>
                  <p>
                    Его повести «Деньги для Марии», «Последний срок», «Живи и помни», «Прощание с
                    Матерой» принесли ему всенародную известность. Распутин с пронзительной
                    правдивостью описывал жизнь сибирской деревни, нравственные проблемы
                    современности, трагедию уходящего традиционного уклада жизни.
                  </p>
                  <p>
                    Был активным общественным деятелем, борцом за сохранение Байкала. Выступал
                    против проекта переброски сибирских рек, против строительства промышленных
                    предприятий на берегу уникального озера. Его публицистические работы стали
                    важным вкладом в экологическое движение России.
                  </p>
                </div>

                <div class="mt-6 p-4 bg-purple-50 rounded-lg">
                  <p class="font-semibold text-purple-800 mb-2">Основные произведения:</p>
                  <p class="text-purple-700">
                    «Прощание с Матерой», «Уроки французского», «Живи и помни», «Пожар», «Деньги для
                    Марии»
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Михаил Герасимов -->
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 p-8">
              <div class="flex justify-center lg:justify-start">
                <div class="w-64 h-80 bg-gray-100 rounded-xl overflow-hidden">
                  <img
                    src="D:\TEST_CODE_VUE_TAILWIND_FOR_OUR_PROJECT\test_frontend_code_for_our_project\src\image\gerasimov.jpg"
                    alt="Михаил Герасимов"
                    class="w-full h-full object-cover"
                  />
                </div>
              </div>
              <div class="lg:col-span-2">
                <h3 class="text-2xl sm:text-3xl font-bold text-green-800 mb-4">Михаил Герасимов</h3>
                <p class="text-gray-600 text-lg mb-6">
                  1907-1970 • Антрополог, археолог, скульптор
                </p>

                <div class="space-y-4 text-gray-700 leading-relaxed">
                  <p>
                    Михаил Михайлович Герасимов — выдающийся советский антрополог, археолог и
                    скульптор, создатель метода восстановления внешнего облика человека по черепу.
                    Родился в Санкт-Петербурге, но значительную часть жизни和工作 связал с Иркутском
                    и Иркутской областью.
                  </p>
                  <p>
                    В 1928 году открыл и исследовал знаменитую палеолитическую стоянку Мальта в
                    Усольском районе Иркутской области. Находки, сделанные на этой стоянке, стали
                    сенсацией в научном мире. Герасимов разработал уникальную методику пластической
                    реконструкции, основанную на строгих анатомических закономерностях.
                  </p>
                  <p>
                    С помощью своего метода он восстановил облик многих исторических личностей:
                    Ивана Грозного, Тамерлана, Ярослава Мудрого, Андрея Боголюбского и других.
                    Создал галерею скульптурных портретов древних людей от палеолита до
                    средневековья. Работа Герасимова получила мировое признание и до сих пор
                    считается классикой антропологической реконструкции.
                  </p>
                </div>

                <div class="mt-6 p-4 bg-green-50 rounded-lg">
                  <p class="font-semibold text-green-800 mb-2">Основные достижения:</p>
                  <p class="text-green-700">
                    Метод антропологической реконструкции, исследования стоянки Мальта,
                    реконструкция облика исторических личностей
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Григорий Шелехов -->
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 p-8">
              <div class="flex justify-center lg:justify-start">
                <div class="w-64 h-80 bg-gray-100 rounded-xl overflow-hidden">
                  <img
                    src="D:\TEST_CODE_VUE_TAILWIND_FOR_OUR_PROJECT\test_frontend_code_for_our_project\src\image\shelekhov.jpg"
                    alt="Григорий Шелехов"
                    class="w-full h-full object-cover"
                  />
                </div>
              </div>
              <div class="lg:col-span-2">
                <h3 class="text-2xl sm:text-3xl font-bold text-green-800 mb-4">Григорий Шелехов</h3>
                <p class="text-gray-600 text-lg mb-6">
                  1747-1795 • Мореплаватель, исследователь, купец
                </p>

                <div class="space-y-4 text-gray-700 leading-relaxed">
                  <p>
                    Григорий Иванович Шелехов — выдающийся русский мореплаватель, исследователь
                    Аляски и основатель Русской Америки. Родился в Рыльске Курской губернии, но вся
                    его предпринимательская и исследовательская деятельность была тесно связана с
                    Иркутском.
                  </p>
                  <p>
                    В 1775 году переехал в Иркутск, где основал торговую компанию, занимавшуюся
                    пушным промыслом на Алеутских островах и Аляске. Организовал несколько
                    экспедиций в северную часть Тихого океана, в ходе которых были открыты новые
                    острова и проведены ценные географические исследования.
                  </p>
                  <p>
                    В 1784 году основал первое русское постоянное поселение на острове Кадьяк у
                    берегов Аляски. Шелехов активно способствовал развитию русских колоний в
                    Северной Америке, установил торговые связи с местным населением, организовал
                    школу для детей алеутов. Его деятельность заложила основы Русской Америки и
                    способствовала укреплению российского влияния в северной части Тихого океана.
                  </p>
                </div>

                <div class="mt-6 p-4 bg-green-50 rounded-lg">
                  <p class="font-semibold text-green-800 mb-2">Основные достижения:</p>
                  <p class="text-green-700">
                    Основание Русской Америки, исследование Аляски и Алеутских островов, развитие
                    торговли в Тихом океане
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

      <footer-component/>
  </div>



</template>
