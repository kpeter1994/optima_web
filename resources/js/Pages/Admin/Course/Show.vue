<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import PrimaryButton from "@/Components/PrimaryButton.vue";
import VideoDashboard from "@/Components/video/VideoDashboard.vue";
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>

        <section class="py-12 dark:text-gray-100">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="lg:flex">
                  <div class="lg:w-1/2 p-4">
                    <h1 class="text-5xl font-serif text-black dark:text-white mb-1.5">TATRÓS VISELKEDÉSVÁLTOZÁS ELNDÍTÁSA 10 NAP ALATT</h1>
                    <p class="leading-relaxed">As the first Black woman director with a film nominated for the Best Picture Academy Award, Ava DuVernay invites you behind the scenes of her new feature film, ORIGIN. She shares how to identify, develop and execute your vision to achieve successful outcomes—and direct the life you desire.</p>
                    <PrimaryButton class="mt-4">Tovább</PrimaryButton>
                  </div>
                  <div class="lg:w-1/2 p-4">
                    <img class="w-full rounded-xl" src="../../img/dashboard-kep.jpg" alt="TATRÓS VISELKEDÉSVÁLTOZÁS ELNDÍTÁSA">
                  </div>
                </div>
            </div>
        </section>

        <section class="py-12 dark:text-gray-100">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div class="p-4">
                  <h2 class="mb-4 text-4xl font-semibold text-gray-800 dark:text-white">A kurzusról</h2>
                  <VideoDashboard ></VideoDashboard>
              </div>
          </div>


        </section>

    </AuthenticatedLayout>
</template>
