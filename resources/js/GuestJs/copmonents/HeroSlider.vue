<script setup>
import {ref} from "vue";

const animationRunning = ref(true)

const pauseAnimation = () => {
    const slider = document.querySelector('.slider-track')
    slider.style.animationPlayState = 'paused'
    animationRunning.value = false
}

const playAnimation = () => {
    const slider = document.querySelector('.slider-track')
    slider.style.animationPlayState = 'running'
    animationRunning.value = true
}

</script>

<template>
    <div class="relative lg:absolute w-full top-0">
        <div class="after:content-[''] after:w-full after:absolute after:top-0 after:bottom-0 after:right-0 lg:after:bg-gradient-to-r after:from-white dark:after:from-black after:from-40% after:to-transparent after:to-70%">
            <div class="flex overflow-hidden h-[320px] lg:h-[460px]">
                <img class="h-full max-200 object-contain slider-track" src="../../../img/hero-2.png" alt="Tartós viselkedésváltozás elindítása">
                <img class="h-full max-200 object-contain slider-track" src="../../../img/hero-2.png" alt="Tartós viselkedésváltozás elindítása">
            </div>
        </div>
        <button v-if="animationRunning" @click="pauseAnimation" class="absolute bottom-2 right-2 w-8 h-8 text-lg lg:bottom-4 lg:right-4 lg:w-12 lg:h-12 flex justify-center items-center rounded-full bg-white  bg-opacity-30 backdrop-blur-sm dark:bg-black dark:bg-opacity-30 dark:backdrop-blur-sm">
            <span class="material-symbols-outlined text-black dark:text-white text-4xl">pause</span>
        </button>
        <button v-if="!animationRunning" @click="playAnimation" class="absolute bottom-2 right-2 w-8 h-8 text-lg lg:bottom-4 lg:right-4 lg:w-12 lg:h-12 flex justify-center items-center rounded-full bg-white  bg-opacity-30 backdrop-blur-sm dark:bg-black dark:bg-opacity-30 dark:backdrop-blur-sm">
            <span  class="material-symbols-outlined text-black dark:text-white text-4xl">play_arrow</span>
        </button>
    </div>
</template>

<style scoped>
.slider-track{
    display: flex;
    animation: scroll 40s linear infinite;
}

.slider-track img{
    height: 100%;
    object-fit: contain;
}

.max-200{
    max-width: 900%!important;
}

@keyframes scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); } /* Mozgassa csak a sorozat egyharmadát */
}
</style>
