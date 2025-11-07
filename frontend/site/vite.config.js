import { fileURLToPath, URL } from 'node:url'

import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import vueJsx from '@vitejs/plugin-vue-jsx'
import vueDevTools from 'vite-plugin-vue-devtools'
import tailwindcss from '@tailwindcss/vite'

// https://vite.dev/config/
export default defineConfig({
  plugins: [vue(), vueJsx(), vueDevTools(), tailwindcss()],
  server: {
    port: 8080,
    host: '0.0.0.0', // важно для Docker
    strictPort: true, // не менять порт если занят
    // Прокси для API запросов к бэкенду
    proxy: {
      '/api': {
        target: 'http://localhost:3000', // твой бэкенд URL
        changeOrigin: true,
        secure: false
      }
    }
  },
  preview: {
    port: 8080,
    host: '0.0.0.0'
  },
  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./src', import.meta.url)),
    },
  },
})
