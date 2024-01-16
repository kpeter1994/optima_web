import './../bootstrap';
import {createApp} from "vue";
import '../../css/app.css'

import HeroSlider from "@/GuestJs/copmonents/HeroSlider.vue";

const app = createApp({});

app.component('hero-slider',HeroSlider)

app.mount('#app-guest')
