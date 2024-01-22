<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import PrimaryButton from "@/Components/PrimaryButton.vue";
import NavLink from "@/Components/NavLink.vue";
import VideoComponent from "@/GuestJs/copmonents/VideoComponent.vue";


const props = defineProps({
    courses: Object,
});

console.log(props.courses)

</script>

<template>
    <Head title="Dashboard"/>

    <AuthenticatedLayout>

        <section class="py-12 dark:text-gray-100">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <NavLink :href="route('courses.create')">
                    <PrimaryButton>Új kurzus</PrimaryButton>
                </NavLink>

                <div class="mt-6 flex flex-wrap">
                    <div v-for="course in props.courses"
                         class="w-full lg:w-1/3 p-4">
                        <div class="bg-slate-100 dark:bg-gray-900 w-full rounded-2xl">
                            <div class="w-full relative rounded-2xl aspect-video">
                                <img class="w-full h-full object-cover rounded-2xl" :src="course.image"
                                     alt="Dudits Dénes">
                                <img class="hidden dark:block w-full h-full object-cover absolute top-0 blur-xl -z-10" :src="course.image" alt="Dudits Dénes">
                            </div>
                            <div class="p-4 h-[200px] flex flex-col justify-between">
                                <div>
                                    <h2 class="font-semibold ">{{course.title}}</h2>
                                    <p class="mt-1.5 text-gray-600 dark:text-gray-400 text-sm lg:line-clamp-3">{{course.summary}}</p>
                                </div>

                                <div class="mt-1.5 text-end">
                                    <NavLink :href="route('courses.show', course.id)">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </NavLink>

                                    <NavLink :href="route('courses.edit', course.id)">
                                        <span class="material-symbols-outlined">edit</span>
                                    </NavLink>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </section>

    </AuthenticatedLayout>
</template>
