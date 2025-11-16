<template>
  <footer class="bg-gray-800 text-white py-12">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Лого и описание -->
        <div class="md:col-span-2">
          <div class="flex items-center mb-4">
            <div
              class="w-10 h-10 bg-linear-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center mr-3"
            >
              <span class="text-white font-bold text-lg">IZ</span>
            </div>
            <h3 class="text-xl font-bold">IRKZOOM</h3>
          </div>
          <p class="text-gray-300 mb-4 max-w-md">
            Образовательная платформа для изучения истории, культуры и природы Иркутской области.
            Проект создан для студентов, преподавателей и всех, кто интересуется богатым наследием
            нашего региона.
          </p>
          <div class="flex space-x-4">
            <div
              class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center cursor-pointer hover:bg-gray-600 transition"
            >
              <span class="text-lg">📘</span>
            </div>
            <div
              class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center cursor-pointer hover:bg-gray-600 transition"
            >
              <span class="text-lg">📱</span>
            </div>
            <div
              class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center cursor-pointer hover:bg-gray-600 transition"
            >
              <span class="text-lg">💬</span>
            </div>
          </div>
        </div>

        <!-- Быстрые ссылки -->
        <div>
          <h4 class="text-lg font-semibold mb-4">Разделы</h4>
          <ul class="space-y-2">
            <li>
              <router-link
                to="/priroda-i-ecologia"
                class="text-gray-300 hover:text-white transition"
                active-class="text-white font-semibold"
              >
                Природа и экология
              </router-link>
            </li>
            <li>
              <router-link
                to="/istoria-i-arheologia"
                class="text-gray-300 hover:text-white transition"
                active-class="text-white font-semibold"
              >
                История и археология
              </router-link>
            </li>
            <li>
              <router-link
                to="/kultura-i-etnografia"
                class="text-gray-300 hover:text-white transition"
                active-class="text-white font-semibold"
              >
                Культура и этнография
              </router-link>
            </li>
            <li>
              <router-link
                to="/nauka-i-promishlennost"
                class="text-gray-300 hover:text-white transition"
                active-class="text-white font-semibold"
              >
                Наука и промышленность
              </router-link>
            </li>
            <li>
              <router-link
                to="/lyudi-i-sudbi"
                class="text-gray-300 hover:text-white transition"
                active-class="text-white font-semibold"
              >
                Люди и судьбы
              </router-link>
            </li>
            <li>
              <router-link
                to="/aktualnoe"
                class="text-gray-300 hover:text-white transition"
                active-class="text-white font-semibold"
              >
                Актуальное
              </router-link>
            </li>
          </ul>
        </div>

        <!-- Контакты -->
        <div>
          <h4 class="text-lg font-semibold mb-4">Контакты</h4>
          <div class="space-y-3">
            <div class="flex items-center">
              <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center mr-3">
                <span class="text-white text-sm">📧</span>
              </div>
              <div>
                <p class="text-sm text-gray-300">Email</p>
                <p class="text-white">contact@irkobl.ru</p>
              </div>
            </div>
            <div class="flex items-center">
              <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center mr-3">
                <span class="text-white text-sm">📞</span>
              </div>
              <div>
                <p class="text-sm text-gray-300">Телефон</p>
                <p class="text-white">+7 (3952) 00-00-00</p>
              </div>
            </div>
            <div class="flex items-center">
              <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center mr-3">
                <span class="text-white text-sm">📍</span>
              </div>
              <div>
                <p class="text-sm text-gray-300">Адрес</p>
                <p class="text-white">г. Иркутск</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Нижняя часть -->
      <div
        class="border-t border-gray-700 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center"
      >
        <div class="text-gray-400 text-sm mb-4 md:mb-0">
          © 2025 Образовательная платформа Иркутской области. Все права защищены.
        </div>
        <div class="flex space-x-6 text-sm">
          <router-link to="/O-NAS" class="text-gray-400 hover:text-white transition">
            О нас
          </router-link>
          <a href="#" class="text-gray-400 hover:text-white transition cursor-not-allowed"
            >Политика конфиденциальности</a
          >
          <a href="#" class="text-gray-400 hover:text-white transition cursor-not-allowed"
            >Условия использования</a
          >
        </div>
      </div>
    </div>
  </footer>
</template>

<script setup></script>
