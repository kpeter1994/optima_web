<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, useForm} from '@inertiajs/vue3';
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import ImageUploadComponent from "@/Components/image/ImageUploadComponent.vue";
import Editor from '@tinymce/tinymce-vue'
import {formater} from "@/utils.js";
import {watch} from "vue";

const props = defineProps({
    errors: Object,
    course: Object,
    lastLesson: Number,
});


console.log(props.lastLesson)

const form = useForm({
    title: '',
    course_id: props.course.id,
    order:  props.lastLesson + 1,
    summary: '',
    body: '',
    slug: '',
});

const handleImageUpload = (imagePath) => {
    form.image = imagePath;
}

const submit = () => {
    form.post(route('kurzus.lecke.store', { kurzu: props.course.id }), form);
};

watch(() => form.title, (newTitle) => {
    form.slug = formater.formatURL(newTitle);
});

</script>

<template>
    <Head title="Új kurzus" />

    <AuthenticatedLayout>

        <section class="py-12 dark:text-gray-100">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <form class="p-4 lg:p-6 rounded-2xl  mt-6">
                    <h1 class="text-lg font-semibold mb-4">Új lecke létrehozása</h1>


                    <div class="flex flex-col lg:flex-row">

                        <div class="lg:w-8/12 order-2 lg:order-1 ">
                            <editor v-model="form.body"
                                    api-key="1f65y6tj0692ujc30p5h38d19v33ks7jiwax7w6cdx384yq1"
                                    :init="{
                        height: 700,

                        selector: 'editor',

                        plugins: [
                            'advlist autolink lists link image charmap print preview anchor',
                            'searchreplace visualblocks code fullscreen',
                            'insertdatetime media table paste code help wordcount'
                        ],
                        toolbar:
                            'undo redo | formatselect | bold italic backcolor | \
                            alignleft aligncenter alignright alignjustify | \
                            bullist numlist outdent indent | removeformat | help | image',
                        images_upload_url: '/api/upload',

                    }"
                            />
                        </div>

                        <div class="lg:w-4/12 ml-3 order-1 lg:order-2">
                            <div class="mb-4">
                                <InputLabel class="mb-1.5">Kurzus címe</InputLabel>
                                <p class="font-semibold">{{props.course.title}}</p>
                            </div>
                            <div class="mb-4">
                                <InputLabel class="mb-1.5">Lecke címe</InputLabel>
                                <TextInput class="w-full" v-model="form.title"></TextInput>
                            </div>
                            <div class="mb-4">
                                <InputLabel class="mb-1.5">Lecke rövid leírása</InputLabel>
                                <TextInput class="w-full" v-model="form.summary"></TextInput>
                            </div>
                            <div class="mb-4">
                                <InputLabel class="mb-1.5">Lecke sorszáma</InputLabel>
                                <TextInput type="number" class="w-full" v-model="form.order"></TextInput>
                            </div>
                            <div class="mb-4">
                                <InputLabel class="mb-1.5">URL</InputLabel>
                                <TextInput class="w-full" v-model="form.slug"></TextInput>
                            </div>


                            <div class="mb-4">
                                <PrimaryButton @click="submit()" class="mt-4">Lecke létrehozása</PrimaryButton>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </section>

    </AuthenticatedLayout>
</template>

<style scoped>

</style>
