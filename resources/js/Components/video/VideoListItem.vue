<script setup>
import {ref} from "vue";
import {onClickOutside} from "@vueuse/core";

const open = ref(false)
const target = ref(null)

const props = defineProps({
    title: String,
    description: String,
    videoId: String
})

const emit = defineEmits(['update:videoId'])

const sendVideoId = (videoId) => emit('update:videoId', videoId)

const close = () => {open.value = false}

onClickOutside(target, close)

</script>

<template>

    <div @click="open = true" ref="target" class="p-3 bg-slate-200 hover:bg-white dark:bg-gray-900 dark:hover:bg-gray-800 rounded-xl text-sm mb-1.5 hover:bg-gray-800 cursor-pointer transition-all">
      <div class="flex justify-between items-center">
          <button class="flex items-center gap-1.5">
              <span @click="sendVideoId(props.videoId)" class="material-symbols-outlined text-blue-600 dark:text-green-600 dark:hover:text-white dark:transition-all">play_circle</span>
              <span>{{props.title}}</span>
          </button>

        <span class="material-symbols-outlined" :class="open ? 'rotate-180' : '' ">expand_more</span>
      </div>


        <div v-if="open">
            <p class="mt-1.5">{{props.description}}</p>
            <button @click="sendVideoId(props.videoId)" class="text-blue-600 hover:text-blue-500 dark:text-green-600 dark:hover:text-white mt-1.5">Lejátszás</button>
        </div>



    </div>



</template>

<style scoped>

.material-symbols-outlined {
  transition: transform 0.3s ease-in-out;
}
</style>
