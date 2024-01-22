import './../bootstrap';
import {createApp} from "vue";
import '../../css/app.css'

import HeroSlider from "@/GuestJs/copmonents/HeroSlider.vue";
import InfiniteScrollCarousel from "@/GuestJs/copmonents/InfiniteScrollCarousel.vue";
import DarkMode from "@/GuestJs/copmonents/DarkMode.vue";
import OptimaLogo from "@/GuestJs/copmonents/OptimaLogo.vue";
import LandingButton from "@/GuestJs/copmonents/LandingButton.vue";
import FullNav from "@/GuestJs/copmonents/FullNav.vue";
import VideoComponent from "@/GuestJs/copmonents/VideoComponent.vue";

const app = createApp({});

app.component('hero-slider',HeroSlider)
app.component('infinite-scroll-carousel',InfiniteScrollCarousel)
app.component('dark-mode',DarkMode)
app.component('optima-logo',OptimaLogo)
app.component('landing-button',LandingButton)
app.component('full-nav',FullNav)
app.component('video-component',VideoComponent)


app.mount('#app-guest')
