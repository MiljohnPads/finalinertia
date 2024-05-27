<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Register" />

        <form @submit.prevent="submit" class="fade-in delay-1">
            <div class="fade-in delay-2">
                <InputLabel for="name" value="Name" />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-4 fade-in delay-3">
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4 fade-in delay-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4 fade-in delay-5">
                <InputLabel for="password_confirmation" value="Confirm Password" />

                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <div class="flex items-center justify-end mt-4 fade-in delay-6">
                <Link
                    :href="route('login')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Already registered?
                </Link>

                <PrimaryButton class="ms-4 register-button" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
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

.fade-in.delay-6 {
    animation-delay: 3s;
}

form {
    background-color: rgba(255, 255, 255, 0.8); /* Light background with some transparency */
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
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out, transform 0.3s ease-in-out;
}

.primary-button:hover {
    transform: translateY(-2px);
}

.primary-button:disabled {
    opacity: 0.5;
    cursor: not-allowed;
}

.register-button {
    background-color: #000000;
    color: #ffffff;
}

.register-button:hover {
    background-color: #ffffff;
    color: #000000;
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
