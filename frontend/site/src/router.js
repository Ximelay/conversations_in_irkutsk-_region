import { createRouter, createWebHistory } from 'vue-router'

import HomeComponent from './components/Home-component.vue'

import PrirodaAndEcologia from './components/material-component-folder/priroda-and-ecologia.vue'
import IstoriaIArheologia from './components/material-component-folder/istoria-i-arheologia.vue'
import KulturaIEtnografia from './components/material-component-folder/kultura-i-etnografia.vue'
import NaukaIPromishlennost from './components/material-component-folder/nauka-i-promishlennost.vue'
import LyudiISudbi from './components/material-component-folder/lyudi-i-sudbi.vue'
import Aktualnoe from './components/material-component-folder/aktualnoe-component.vue'
import Onas from './components/O-NAS.vue'

export default createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeComponent,
    },
    {
      path: '/priroda-i-ecologia',
      name: 'priroda-ecologia',
      component: PrirodaAndEcologia,
    },
    {
      path: '/istoria-i-arheologia',
      name: 'istoria-arheologia',
      component: IstoriaIArheologia,
    },
    {
      path: '/kultura-i-etnografia',
      name: 'kultura-etnografia',
      component: KulturaIEtnografia,
    },
    {
      path: '/nauka-i-promishlennost',
      name: 'nauka-promishlennost',
      component: NaukaIPromishlennost,
    },
    {
      path: '/lyudi-i-sudbi',
      name: 'lyudi-sudbi',
      component: LyudiISudbi,
    },
    {
      path: '/aktualnoe',
      name: 'aktualnoe',
      component: Aktualnoe,
    },
    {
      path: '/o-nas',
      name: 'o-nas',
      component: Onas,
    },
  ],
  scrollBehavior(to, from, savedPosition) {
    // Всегда прокручиваем к верху при переходе
    return { top: 0 }
  },
})
