<script setup>
import { onMounted, ref } from 'vue';

const model = defineModel({
    type: String,
    required: true,
});

const props = defineProps({
    classes: String,
});

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input
        class="
        py-3
        border-gray-300
        dark:border-gray-500
        dark:border-opacity-60
        dark:bg-gray-800
        dark:text-gray-300
        focus:border-indigo-500
        dark:focus:border-gray-500
        focus:ring-indigo-500
        dark:focus:ring-gray-500
        rounded-lg
        shadow-sm"
        :class="props.classes"
        v-model="model"
        ref="input"
    />
</template>
