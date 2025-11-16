<template>
  <div class="h-full bg-linear-to-br from-blue-50 to-cyan-100 flex items-center justify-center">
    <div class="container mx-auto px-4 max-w-6xl pt-16">
      <!-- Увеличил max-w для горизонтальности -->
      <div class="bg-white rounded-3xl shadow-2xl p-8 lg:p-12">
        <!-- Горизонтальный layout -->
        <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12">
          <!-- Левая часть - лого и заголовок -->
          <div class="lg:w-2/5 text-center lg:text-left">
            <div class="flex justify-center lg:justify-start mb-6">
              <div
                class="w-24 h-24 bg-linear-to-r from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center"
              >
                <span class="text-white text-5xl font-bold">IZ</span>
              </div>
            </div>

            <h1 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-4">
              IRK<span class="text-black">ZOOM</span>
            </h1>

            <p class="text-2xl text-purple-600 font-semibold">Образовательная платформа</p>
          </div>

          <!-- Правая часть - описание и фичи -->
          <div class="lg:w-3/5">
            <!-- Основное описание -->
            <p
              class="text-lg lg:text-xl text-gray-700 leading-relaxed mb-8 text-center lg:text-left"
            >
              Уникальная образовательная платформа для изучения богатого наследия Иркутской области.
              История, культура и природа нашего края в цифровом формате.
            </p>

            <!-- Горизонтальные фичи -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
              <div class="text-center p-4 bg-blue-50 rounded-xl">
                <div class="text-2xl mb-2">🎓</div>
                <h3 class="font-semibold text-gray-800 text-sm">Для образования</h3>
              </div>
              <div class="text-center p-4 bg-green-50 rounded-xl">
                <div class="text-2xl mb-2">🌏</div>
                <h3 class="font-semibold text-gray-800 text-sm">Исследования</h3>
              </div>
              <div class="text-center p-4 bg-purple-50 rounded-xl">
                <div class="text-2xl mb-2">💡</div>
                <h3 class="font-semibold text-gray-800 text-sm">Знания</h3>
              </div>
            </div>

            <!-- Призыв к действию -->
            <div class="bg-linear-to-r bg-red-50 rounded-xl p-6 text-black text-center">
              <p class="text-lg font-semibold">
                Исследуйте Байкал, историю Иркутска и культуру региона!
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
// Логика компонента описания
</script>
