<script setup>

import {onMounted, onUnmounted, ref} from "vue";

let openDark = ref(false);
let isDark = ref(false);

if (typeof window !== 'undefined' && typeof document !== 'undefined') {
    onMounted(() => {
        const darkModeStorage = localStorage.getItem("darkMode");
        if (darkModeStorage !== null) {
            isDark.value = JSON.parse(darkModeStorage);
            document.documentElement.classList.toggle('dark', isDark.value);
        }

        const darkContainer = document.getElementById('dark-container');

        const handleClick = (event) => {
            if (openDark.value && !darkContainer.contains(event.target)) {
                openDark.value = false;
            }
        };

        window.addEventListener('click', handleClick);

        // Ne felejtsd el eltávolítani az eseménykezelőt a komponens lebontásakor
        onUnmounted(() => {
            window.removeEventListener('click', handleClick);
        });
    });


}
const toggleDarkMode = () => {
    isDark.value = !isDark.value;
    document.documentElement.classList.toggle('dark', isDark.value);
    localStorage.setItem("darkMode", JSON.stringify(isDark.value));
};


</script>

<template>

    <button @click.stop="toggleDarkMode">
        <span class="material-symbols-outlined text-black dark:text-white">
      contrast
      </span>

    </button>


</template>

<style scoped>
.fade-enter-active, .fade-leave-active {
    transition: opacity .2s;
}
.fade-enter, .fade-leave-to {
    opacity: 0;
}
</style>
