<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import OptimaLogo from "@/GuestJs/copmonents/OptimaLogo.vue";
import DarkMode from "@/GuestJs/copmonents/DarkMode.vue";
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-white dark:bg-black">
      <DarkMode />
      <div>
        <Link href="/">
          <OptimaLogo class="block h-12 w-auto fill-current text-gray-600 dark:text-gray-400" />
        </Link>
      </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-slate-100 dark:bg-gray-900 shadow-md overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>
