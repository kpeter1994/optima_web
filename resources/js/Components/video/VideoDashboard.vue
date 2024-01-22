<script setup>
import VideoListItem from "@/Components/video/VideoListItem.vue";
import VideoViewComponent from "@/Components/video/VideoViewComponent.vue";
import TrailerComponent from "@/Components/video/TrailerComponent.vue";

import {ref} from "vue";

const actualVideo = ref({
    videoId: '891226137',
    autoPlay: false,
})

const handleVideoId = (videoId) => {
    actualVideo.value.videoId = videoId
    actualVideo.value.autoPlay = true
}


</script>

<template>
  <div class="lg:flex flex-col lg:flex-row flex-wrap">
    <div class="lg:w-8/12 overflow-hidden rounded-2xl aspect-video">
      <VideoViewComponent :auto-play="actualVideo.autoPlay" :video-id="actualVideo.videoId"></VideoViewComponent>
    </div>
    <div class="lg:w-4/12 mt-4 lg:mt-0 lg:pl-3 ">
      <div class="flex flex-col grow h-fit lg:h-full">
        <div class="mb-1.5">
          <TrailerComponent></TrailerComponent>
            <span class="font-semibold block text-gray-800 dark:text-gray-200">Taralom:</span>
        </div>
        <div class="grow relative">
            <div class="lg:absolute top-0 left-0 w-full h-full overflow-auto">

                <div>
                    <VideoListItem @update:videoId="handleVideoId"
                                   video-id="891226137"
                                   title="1. nap"
                                   description="Ez az első napi lecke">
                    </VideoListItem>
                    <VideoListItem @update:videoId="handleVideoId"
                                   video-id="889589424"
                                   title="2. nap"
                                   description="Ez az első napi lecke">
                    </VideoListItem>
                    <VideoListItem @update:videoId="handleVideoId"
                                   video-id="847497330"
                                   title="3. nap"
                                   description="Ez az első napi lecke">
                    </VideoListItem>
                    <VideoListItem @update:videoId="handleVideoId"
                                   video-id="801664692"
                                   title="4. nap"
                                   description="Ez az első napi lecke">
                    </VideoListItem>
                    <VideoListItem @update:videoId="handleVideoId"
                                   video-id="503673529"
                                   title="5. nap"
                                   description="Ez az első napi lecke">
                    </VideoListItem>

                </div>
            </div>

        </div>
      </div>
    </div>
    <div class="lg:w-8/12 mt-4">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam aut consectetur eligendi expedita
            fugit ipsa minima omnis quo totam.</p>
    </div>

  </div>
</template>

<style scoped>
/* A görgetősáv teljes részének stílusa */
::-webkit-scrollbar {
    width: 10px; /* a görgetősáv szélessége */
    background-color: #f1f1f1; /* a háttérszín */
}

.dark::-webkit-scrollbar {
    width: 10px; /* a görgetősáv szélessége */
    background-color: #000000; /* a háttérszín */
}

/* A görgetősáv "csúszka" részének stílusa */
::-webkit-scrollbar-thumb {
    background-color: #888; /* a csúszka színe */
    border-radius: 5px; /* a csúszka szegélygörbülete */
}

/* A görgetősáv "csúszka" részének stílusa, amikor az egér fölötte van */
::-webkit-scrollbar-thumb:hover {
    background-color: #555; /* a csúszka színe, amikor az egér fölötte van */
}

</style>
