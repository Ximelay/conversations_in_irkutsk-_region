<script setup></script>

<template>

  <div class="bg-white rounded-lg shadow-md p-6 max-w-md mx-auto">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">{{ product.name }}</h2>
    <p class="text-gray-600 mb-4">{{ product.description }}</p>
    <div class="flex justify-between items-center">
      <span class="text-xl font-semibold">${{ product.price }}</span>
      <button
        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded transition"
        @click="addToCart"
      >
        Купить
      </button>
    </div>
  </div>

</template>

<style></style>
