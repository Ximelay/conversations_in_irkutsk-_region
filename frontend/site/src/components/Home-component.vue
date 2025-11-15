<script setup>
import HeaderComponent from './header-component.vue'
import CenterTextComponent from './center-text-component.vue'
import VoprosObBaikalAndIrkObl from './vopros-ob-Baikal-and-Irk-obl.vue'
import footerComponent from './footer-component.vue';
import opisSiteComponent from './opis-site-component.vue';
import { ref, onMounted, onUnmounted } from 'vue';

const currentSection = ref(0);
const sections = ref([]);
const isScrolling = ref(false);

const scrollToSection = (index) => {
  if (isScrolling.value) return;

  isScrolling.value = true;
  currentSection.value = index;

  sections.value[index]?.scrollIntoView({
    behavior: 'smooth',
    block: 'start'
  });

  setTimeout(() => {
    isScrolling.value = false;
  }, 800);
};

const handleWheel = (event) => {
  if (isScrolling.value) {
    event.preventDefault();
    return;
  }

  const delta = Math.sign(event.deltaY);

  if (delta > 0 && currentSection.value < sections.value.length - 1) {
    scrollToSection(currentSection.value + 1);
  } else if (delta < 0 && currentSection.value > 0) {
    scrollToSection(currentSection.value - 1);
  }
};

// Функция для определения текущей секции при прокрутке
const updateCurrentSection = () => {
  if (isScrolling.value) return;

  const scrollPosition = window.scrollY + window.innerHeight / 2;

  for (let i = 0; i < sections.value.length; i++) {
    const section = sections.value[i];
    if (section) {
      const rect = section.getBoundingClientRect();
      const sectionTop = rect.top + window.scrollY;
      const sectionBottom = sectionTop + rect.height;

      if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
        currentSection.value = i;
        break;
      }
    }
  }
};

// Функция для обработки ручной прокрутки
const handleScroll = () => {
  if (!isScrolling.value) {
    updateCurrentSection();
  }
};

onMounted(() => {
  window.addEventListener('wheel', handleWheel, { passive: false });
  window.addEventListener('scroll', handleScroll, { passive: true });

  // Инициализируем текущую секцию при загрузке
  setTimeout(updateCurrentSection, 100);
});

onUnmounted(() => {
  window.removeEventListener('wheel', handleWheel);
  window.removeEventListener('scroll', handleScroll);
});
</script>

<template>
  <div class="min-h-screen">
    <HeaderComponent />

    
    <!-- Секции -->
    <div class="h-screen snap-start" ref="el => sections[0] = el">
      <opis-site-component/>
    </div>

    <div class="h-screen snap-start relative" ref="el => sections[1] = el">
      <img
        src="D:\TEST_CODE_VUE_TAILWIND_FOR_OUR_PROJECT\test_frontend_code_for_our_project\src\image\Байкал.png"
        alt="Байкал - Жемчужина Сибири"
        class="w-full h-full object-cover"
      />
      <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
        <div class="text-center text-white px-4">
          <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold mb-4 sm:mb-6 leading-tight">
            Байкал - Жемчужина Сибири
          </h1>
          <p class="text-xl sm:text-2xl lg:text-3xl xl:text-4xl font-light max-w-3xl mx-auto leading-relaxed">
            Огромный, глубокий, прекрасный
          </p>
        </div>
      </div>
    </div>

    <div class="h-screen snap-start" ref="el => sections[2] = el">
      <CenterTextComponent />
    </div>

    <!-- Вопросы и футер - без h-screen, но с snap-start -->
    <div class="snap-start min-h-screen" ref="el => sections[3] = el">
      <VoprosObBaikalAndIrkObl />
      <footer-component />
    </div>
  </div>
</template>

<style scoped>
.min-h-screen {
  scroll-snap-type: y mandatory;
  height: 100vh;
  overflow-y: scroll;
}

@media (max-width: 768px) {
  .min-h-screen {
    scroll-snap-type: none;
  }
}

.snap-start {
  scroll-snap-align: start;
}
</style>

<script>
// Дополнительный script для вычисления заголовков секций
export default {
  methods: {
    getSectionTitle(index) {
      const titles = [
        'О проекте',
        'Байкал',
        'Информация',
        'Вопросы и ответы'
      ];
      return titles[index] || `Секция ${index + 1}`;
    }
  }
}
</script>
