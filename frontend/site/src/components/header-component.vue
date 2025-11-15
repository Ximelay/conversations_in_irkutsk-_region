<template>
  <header class="fixed top-4 left-1/2 transform -translate-x-1/2 z-50 w-full max-w-5xl px-4">
    <div class="bg-white/80 backdrop-blur-2xl rounded-3xl shadow-2xl border border-white/60 py-3">
      <div class="container mx-auto px-6">
        <div class="flex items-center justify-between">
          <!-- Левый блок -->
          <div class="flex items-center space-x-3">
            <div
              class="w-10 h-10 bg-linear-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center mr-3"
            >
              <span class="text-white font-bold text-lg">IZ</span>
            </div>
            <router-link
              to="/"
              class="text-lg font-bold text-gray-800 hover:text-blue-600 transition"
            >
              IRKZOOM
            </router-link>
          </div>

          <!-- Центральный блок -->
          <nav class="flex items-center space-x-6">
            <router-link
              to="/"
              class="text-gray-700 hover:text-blue-600 transition duration-200 font-medium"
            >
              Главная
            </router-link>

            <!-- Выпадающее меню -->
            <div class="relative group">
              <button
                class="text-gray-700 hover:text-blue-600 transition duration-200 flex items-center font-medium"
              >
                Материалы
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M19 9l-7 7-7-7"
                  ></path>
                </svg>
              </button>

              <div
                class="absolute top-full left-0 mt-3 w-80 bg-white/90 backdrop-blur-2xl rounded-2xl shadow-2xl border border-white/60 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50"
              >
                <div class="py-3">
                  <router-link
                    to="/priroda-i-ecologia"
                    class="block px-6 py-3 text-gray-800 hover:bg-blue-500/10 hover:text-blue-700 transition rounded-xl mx-2 font-medium text-left"
                    >Природа и экология</router-link
                  >
                  <router-link
                    to="/istoria-i-arheologia"
                    class="block px-6 py-3 text-gray-800 hover:bg-blue-500/10 hover:text-blue-700 transition rounded-xl mx-2 font-medium text-left"
                    >История и Археология</router-link
                  >
                  <router-link
                    to="/kultura-i-etnografia"
                    class="block px-6 py-3 text-gray-800 hover:bg-blue-500/10 hover:text-blue-700 transition rounded-xl mx-2 font-medium text-left"
                    >Культура и Этнография</router-link
                  >
                  <router-link
                    to="/nauka-i-promishlennost"
                    class="block px-6 py-3 text-gray-800 hover:bg-blue-500/10 hover:text-blue-700 transition rounded-xl mx-2 font-medium text-left"
                    >Наука и Промышленность</router-link
                  >
                  <router-link
                    to="/lyudi-i-sudbi"
                    class="block px-6 py-3 text-gray-800 hover:bg-blue-500/10 hover:text-blue-700 transition rounded-xl mx-2 font-medium text-left"
                    >Люди и Судьбы</router-link
                  >
                  <router-link
                    to="/aktualnoe"
                    class="block px-6 py-3 text-gray-800 hover:bg-blue-500/10 hover:text-blue-700 transition rounded-xl mx-2 font-medium text-left"
                    >Актуальное</router-link>
                </div>
              </div>
            </div>

            <router-link
              to="/o-nas"
              class="text-gray-700 hover:text-blue-600 transition duration-200 font-medium"
                >О нас
            </router-link>
          </nav>

        </div>
      </div>
    </div>
  </header>
</template>

<script setup></script>
