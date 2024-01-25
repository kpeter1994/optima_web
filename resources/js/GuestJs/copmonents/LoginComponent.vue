<script setup>
import InputError from "@/Components/InputError.vue";
import Checkbox from "@/Components/Checkbox.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import {Link, useForm} from "@inertiajs/vue3";
import TextInput from "@/Components/TextInput.vue";
import {defineProps, ref} from "vue";
import {onClickOutside} from '@vueuse/core'

const open = ref(false);

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post('/login', {
        onFinish: () => form.reset('password'),
    });
};

const target = ref(null)

const openModal = () => {
    open.value = true;
}

const closeModal = () => {
    open.value = false;
}

onClickOutside(target, closeModal)

</script>

<template>

    <div>

        <landing-button class="cursor-pointer" @click="openModal">Bejelentkezés</landing-button>


        <div v-if="open" class="flex justify-center z-50 bg-black bg-opacity-50 backdrop-blur-sm items-center fixed top-0 left-0 w-full min-h-screen">
            <form ref="target" class="p-12  bg-white-100 dark:bg-white rounded-2xl" @submit.prevent="submit">
                <div class="my-4">
                    <p class="text-center text-2xl dark:text-gray-900 font-bold">Bejelentekzés</p>
                </div>
                <div>
                    <InputLabel for="email" value="Email" />

                    <TextInput
                        id="email"
                        type="email"
                        class="mt-1 block w-full"
                        classes="dark:bg-gray-100 dark:text-gray-900"
                        v-model="form.email"
                        required
                        autofocus
                        autocomplete="username"
                    />

                    <InputError class="mt-2" :message="form.errors.email" />
                </div>

                <div class="mt-4">
                    <InputLabel for="password" value="Jelszó" />

                    <TextInput
                        id="password"
                        type="password"
                        class="mt-1 block w-full"
                        classes="dark:bg-gray-100 dark:text-gray-900"
                        v-model="form.password"
                        required
                        autocomplete="current-password"
                    />

                    <InputError class="mt-2" :message="form.errors.password" />
                </div>

                <div class="block mt-4">
                    <label class="flex items-center">
                        <Checkbox class="dark:bg-gray-100 dark:bg-text-gray-900" name="remember" v-model:checked="form.remember" />
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">Emlékezz rám</span>
                    </label>
                </div>

                <div class="flex flex-col gap-1.5 mt-4">


                    <PrimaryButton class="w-full justify-center" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Belépek
                    </PrimaryButton>

                    <Link
                        v-if="canResetPassword"
                        :href="route('password.request')"
                        class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    >
                        Elfelejtetted a jelszavad?
                    </Link>
                </div>
            </form>
        </div>

    </div>

</template>

<style scoped>

</style>
