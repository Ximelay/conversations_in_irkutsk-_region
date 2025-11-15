<script></script>

<template>
  <div class="w-full h-screen relative">
    <!-- Фоновое изображение Иркутской области -->
    <img
      src="D:\VUE_PROJECT\conversations_in_irkutsk-_region\frontend\site\src\image\Alexandr III.jpg"
      alt="Иркутск и Иркутская область"
      class="w-full h-full object-cover"
    />

    <!-- Затемнение и текст -->
    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
      <div class="text-center text-white px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto">
        <!-- Заголовок -->
        <h1
          class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold mb-6 sm:mb-8 leading-tight"
        >
          Иркутская область
        </h1>

        <!-- Описание -->
        <p class="text-lg sm:text-xl lg:text-2xl xl:text-3xl font-light leading-relaxed">
          Врата к Байкалу, где сибирская душа встречается с величественной природой
        </p>

        <!-- Дополнительная короткая строка (опционально) -->
        <p class="mt-6 text-base sm:text-lg lg:text-xl text-blue-200 font-medium">
          Сердце Восточной Сибири
        </p>
      </div>
    </div>
  </div>
</template>

<script setup>
// Логика компонента если понадобится
</script>
