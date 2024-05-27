<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Welcome" />
    <div class="home">
        <div class="content">
            <div class="auth-links-container fade-in delay-0">
                <Link :href="route('login')" class="route-link fade-in delay-1">Log in</Link>
                <Link v-if="canRegister" :href="route('register')" class="route-link fade-in delay-2">Register</Link>
            </div>
            <img src="https://angelicangeles.home.blog/wp-content/uploads/2018/10/philippines-flag-waving-animated-gif-6.gif" alt="" class="center-image circle-image fade-in delay-3">
            <div class="text-container">
                <p class="text-center text-4xl font-bold text-with-border mt-20 fade-in delay-4">Welcome to this special information website</p>
                <p class="text-center text-xl font-bold text-with-border mt-2 fade-in delay-5">Embrace to notice the Late President of the Philippines</p>
                <p class="text-center text-xl font-bold text-orange-600 text-with-border mt-5 mb-5 fade-in delay-6">Take note for this Aspiring Journey</p>
            </div>
        </div>
    </div>
</template>

<style>
.home {
    background-image: url('https://bluprint-onemega.com/wp-content/uploads/2021/06/malacanang-1-FEAT-PHOTO.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.content {
    text-align: center;
    position: relative;
}

.center-image {
    display: block;
    margin: 0 auto;
}

.circle-image {
    width: 300px; /* Adjust the width to make the image larger */
    height: 300px; /* Adjust the height to make the image larger */
    border-radius: 50%;
    border: 5px solid white; /* Optional: add a white border around the circle */
}

.auth-links-container {
    display: flex;
    justify-content: center;
    margin-bottom: 20px; /* Adjust as needed to position above the image */
}

.route-link {
    font-weight: 600;
    margin: 10px;
    padding: 10px 20px; /* Adjusted padding for better appearance */
    border: 2px solid transparent;
    border-radius: 4px;
    transition: all 0.3s ease;
    background-color: #2c3e50; /* Changed to a darker color for a more formal look */
    color: #ecf0f1;
    text-decoration: none;
    box-shadow: 0 5px 6px rgba(0, 0, 0, 0.1);
}

.route-link:hover {
    background-color: #ecf0f1;
    border-color: #2c3e50;
    color: #2c3e50;
}

/* Added styles for text with border and transition */
.text-with-border {
    position: relative;
    display: inline-block;
    padding: 5px 10px;
    transition: all 0.3s ease-in-out;
    border: 2px solid #2c3e50; /* Dark border for visibility */
    background-color: rgba(236, 240, 241, 0.8); /* Light background for contrast */
}

.text-with-border:hover {
    background-color: rgba(44, 62, 80, 0.8); /* Darker background on hover */
    color: #ecf0f1; /* Light text on hover */
}

.text-container {
    margin-top: 20px; /* Add some margin to space out from the image */
    display: flex;
    flex-direction: column;
    align-items: center;
}

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
</style>
