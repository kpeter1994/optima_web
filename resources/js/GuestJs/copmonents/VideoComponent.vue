<script setup>
import { ref, watch, nextTick  } from 'vue';
import {onClickOutside} from '@vueuse/core'


const open = ref(false);
const target = ref(null);

const close = () => open.value = false;



const vimeoVideo = ref(null);
const videoID = '885849364'; // Csere ezt a Vimeo videó azonosítójával

watch(open, (newVal) => {
    if (newVal) {
        nextTick(() => {
            if (!vimeoVideo.value.firstChild) {
                loadVideo();
            }
        });
    }
});

const loadVideo = () => {
    const url = `https://player.vimeo.com/video/${videoID}?autoplay=1`;
    const iframe = document.createElement('iframe');
    iframe.setAttribute('src', url);
    iframe.setAttribute('frameborder', '0');
    iframe.setAttribute('allow', 'autoplay; fullscreen');
    iframe.setAttribute('allowfullscreen', '');

    iframe.classList.add('w-full');
    iframe.classList.add('aspect-video');

    vimeoVideo.value.appendChild(iframe);
};

onClickOutside(target, close);
</script>

<template>
    <div>
        <button
            @click="open = !open"
            class="
                px-5
                py-2.5
                inline-flex
                text-sm
                lg:text-base
                flex
                justify-center
                items-center
                bg-blue-600
                dark:bg-green-500
                rounded-lg
                text-white
                dark:text-gray-900
                font-bold
                hover:bg-blue-500
                dark:hover:bg-gray-800
                transition-all
                mt-6
                dark:bg-transparent
                dark:text-white
                dark:hover:bg-gray-600
                border
                dark:border-gray-200">
            <span class="material-symbols-outlined">play_arrow</span>
            Megnézem
        </button>

        <div v-if="open" class="fixed inset-0 bg-black bg-opacity-30 backdrop-blur-sm w-full min-h-screen z-40 flex justify-center items-center">
            <span class="material-symbols-outlined absolute top-3 right-3 cursor-pointer" @click="open = false">close</span>

            <div class="w-full">
                <div ref="target" class="mx-auto max-w-7xl aspect-video">
                    <div ref="vimeoVideo"></div>
                </div>
            </div>
        </div>
    </div>

</template>

<style scoped>

</style>
