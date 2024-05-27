<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

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
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600 fade-in delay-0">
            {{ status }}
        </div>

        <form @submit.prevent="submit" class="fade-in delay-1">
            <div class="fade-in delay-2">
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4 fade-in delay-3">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4 fade-in delay-4">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ms-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4 fade-in delay-5">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Forgot your password?
                </Link>

                <PrimaryButton class="ms-4 primary-button" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>

<style>
/* Fade-in animation */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.fade-in {
    animation: fadeIn 1s ease forwards;
}

.fade-in.delay-0 {
    animation-delay: 0s;
}

.fade-in.delay-1 {
    animation-delay: 0.5s;
}

.fade-in.delay-2 {
    animation-delay: 1s;
}

.fade-in.delay-3 {
    animation-delay: 1.5s;
}

.fade-in.delay-4 {
    animation-delay: 2s;
}

.fade-in.delay-5 {
    animation-delay: 2.5s;
}

form {
    background-color: rgba(255, 255, 255, 0.5); /* Increased transparency */
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); /* Light shadow for depth */
    max-width: 500px;
    margin: 0 auto;
}

.input-label {
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
    color: #333; /* Darker text for better contrast */
}

.input-error {
    color: red;
    margin-top: 5px;
    font-size: 0.875rem;
}

.text-input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-top: 5px;
    transition: all 0.3s ease-in-out;
}

.text-input:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.checkbox-label {
    font-size: 0.875rem;
    color: #666;
}

.primary-button {
    background-color: black;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
}

.primary-button:hover {
    background-color: white;
    color: black;
    transform: translateY(-2px);
}

.primary-button:disabled {
    background-color: black;
    opacity: 0.5;
    cursor: not-allowed;
}

.link {
    color: #007bff;
    text-decoration: none;
    transition: color 0.3s ease-in-out;
}

.link:hover {
    color: #0056b3;
}
</style>
