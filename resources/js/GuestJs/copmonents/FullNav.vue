<script setup>

import {ref} from "vue";
import {onClickOutside} from '@vueuse/core'

let open = ref(false)

const target = ref(null)

const close = () => open.value = false


onClickOutside(target, close)

</script>

<template>
    <div>
        <button class="text-gray-800 dark:text-gray-200 text-lg hover:text-blue-600 transition-all w-10 h-10 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 border border-white border-opacity-0 active:border-opacity-100"
                @click="open = !open">
            <i class="fa-solid fa-bars text-lg"></i>
        </button>


        <!--    todo elem animálása-->

                <transition name="fade">
                    <div v-show="open" class="backdrop-blur-sm bg-black/10 fixed w-full h-full top-0 left-0 z-40">
                        <transition name="slide">
                            <div v-if="open"  ref="target" class="text-white bg-gray-100 dark:bg-gray-800 w-80 h-full p-3 lg:p-6">
                                <div class="flex justify-end">
                                    <button @click="close">
                                        <i class="fa-solid fa-xmark text-white text-2xl"></i>
                                    </button>
                                </div>

                                <ul>
                                    <li>hírek</li>
                                    <li>hírek</li>
                                    <li>hírek</li>
                                    <li>hírek</li>
                                    <li>hírek</li>
                                    <li>hírek</li>
                                    <li>hírek</li>
                                    <li>hírek</li>
                                </ul>
                            </div>
                        </transition>
                    </div>
                </transition>

    </div>

</template>

<style scoped>
.slide-enter-active, .slide-leave-active {
    transition: transform 0.2s;
}

.slide-enter-from {
    transform: translateX(-100%);
}

.slide-leave-to {
    transform: translateX(-100%);
}

.fade-enter-active, .fade-leave-active {
    transition: opacity 0.2s;
}
.fade-enter-from, .fade-leave-to {
    opacity: 0;
}
</style>
