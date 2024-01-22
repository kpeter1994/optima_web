<script setup>
const props = defineProps({
    classes: String,
    href: String,
})

</script>

<template>
    <a class=
           "
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
            dark:hover:bg-green-400
            transition-all"
       :class="props.classes"
       :href="props.href"
    >
        <slot></slot>
    </a>
</template>

<style scoped>

</style>
