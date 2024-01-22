<script setup>
import {onMounted, ref, watch} from 'vue';

const props = defineProps({
    videoId: String,
    autoPlay: {
        type: Boolean,
        default: false
    }
})

const vimeoVideo = ref(null);

const loadVideo = (videoId) => {
    // Töröljük az előző iframe-t, ha van
    if (vimeoVideo.value.firstChild) {
        vimeoVideo.value.removeChild(vimeoVideo.value.firstChild);
    }

   if (props.autoPlay) {
       videoId += '?autoplay=1';
   }
    const url = `https://player.vimeo.com/video/${videoId}`;
    const iframe = document.createElement('iframe');
    iframe.setAttribute('src', url);
    iframe.setAttribute('frameborder', '0');
    iframe.setAttribute('allow', 'autoplay; fullscreen');
    iframe.setAttribute('allowfullscreen', '');
    iframe.classList.add('w-full');
    iframe.classList.add('aspect-video');

    vimeoVideo.value.appendChild(iframe);
};

onMounted(() => {
    loadVideo(props.videoId);
});

watch(() => props.videoId, (newVideoId) => {
    loadVideo(newVideoId);
});

</script>

<template>

        <div ref="vimeoVideo"></div>


</template>

<style scoped>

</style>
