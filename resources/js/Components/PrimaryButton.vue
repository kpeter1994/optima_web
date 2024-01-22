<script setup>
    const props = defineProps({
        classes: String,
    });
</script>

<template>
    <button
        class="
        inline-flex
        items-center
        px-4
        py-3
        bg-gray-800
        dark:bg-green-600
        border
        border-transparent
        rounded-lg
        font-semibold
        text-white
        dark:text-black
        tracking-widest
        hover:bg-gray-700
        dark:hover:bg-green-500
        focus:bg-gray-700
        dark:focus:bg-white
        active:bg-gray-900
        dark:active:bg-gray-300
        focus:outline-none
        focus:ring-2
        focus:ring-indigo-500
        focus:ring-offset-2
        dark:focus:ring-offset-gray-800
        transition ease-in-out duration-150"
        :class="props.classes"
    >
        <slot />
    </button>
</template>
