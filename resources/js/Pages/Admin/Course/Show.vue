<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, useForm} from '@inertiajs/vue3';
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import axios from "axios";


const form = useForm({});

const props = defineProps({
    course: Object,
});

const createLesson = () => {
   form.get(route('kurzus.lecke.create', {kurzu: props.course.id}))
}

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>

        <section class="py-12 dark:text-gray-100">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="lg:flex">
                  <div class="lg:w-1/2 p-4">
                    <h1 class="text-5xl text-blue-600 font-serif text-black dark:text-white mb-1.5">{{props.course.title}}</h1>
                    <p class="leading-relaxed">{{props.course.summary}}</p>
<!--                    <PrimaryButton class="mt-4">Tovább</PrimaryButton>-->
                  </div>
                  <div class="lg:w-1/2 p-4">
                   <img class="w-full rounded-xl" :src="props.course.image" :alt="props.course.title">
                  </div>
                </div>
            </div>
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="p-2">
                    <div class="bg-white dark:bg-gray-900 p-6 rounded-2xl flex items-center gap-6">
                        <div class="w-full relative">
                            <TextInput @click="createLesson" model-value="Új lecke hozzáadása"  class="w-full pl-12" />
                            <span class="material-symbols-outlined absolute top-3 left-3">add</span>
                        </div>

                    </div>
                </div>
                <div class="p-2">
                    <div class="bg-white dark:bg-gray-900 p-6 rounded-2xl flex items-center gap-6">
                        <div class="text-4xl font-serif">01</div>
                        <div>
                            <p class="text-2xl font-serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid cupiditate delectus error expedita molestiae. Ab asperiores assumenda corporis eum ex explicabo illo laboriosam, necessitatibus, nulla omnis suscipit voluptatibus! Error.</p>
                        </div>
                    </div>
                </div>
                <div class="p-2">
                    <div class="bg-white dark:bg-gray-900 p-6 rounded-2xl flex items-center gap-6">
                        <div class="text-4xl font-serif">01</div>
                        <div>
                            <p class="text-2xl font-serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid cupiditate delectus error expedita molestiae. Ab asperiores assumenda corporis eum ex explicabo illo laboriosam, necessitatibus, nulla omnis suscipit voluptatibus! Error.</p>
                        </div>
                    </div>
                </div>
                <div class="p-2">
                    <div class="bg-white dark:bg-gray-900 p-6 rounded-2xl flex items-center gap-6">
                        <div class="text-4xl font-serif">01</div>
                        <div>
                            <p class="text-2xl font-serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid cupiditate delectus error expedita molestiae. Ab asperiores assumenda corporis eum ex explicabo illo laboriosam, necessitatibus, nulla omnis suscipit voluptatibus! Error.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </AuthenticatedLayout>
</template>
