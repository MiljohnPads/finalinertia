<template>
    <div>
        <Head title="Presidential Profile" />

        <Yourlayout>
            <main class="container">
                <div class="profile-details">
                    <div class="profile-picture">
                        <img src="https://angelicangeles.home.blog/wp-content/uploads/2018/10/philippines-flag-waving-animated-gif-6.gif" alt="" class="center-image circle-image fade-in delay-3">
                    </div>
                    <div class="user-info">
                        <h2>{{ $page.props.auth.user.name }}</h2>
                        <p>{{ $page.props.auth.user.email }}</p>
                    </div>
                </div>
            </main>
        </Yourlayout>
    </div>
</template>

<script setup>
import Yourlayout from '@/Layouts/Yourlayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<style scoped>
.container {
    padding: 20px;
    max-width: 100%;
    height: 900px;
    perspective: 1000px;
    background: linear-gradient(135deg, #2c3e50, #3498db); /* Dark blue to light blue gradient */
}

.profile-details {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
    perspective: 1000px;
    gap: 20px;
}

.profile-picture {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
}

.profile-picture img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.user-info {
    padding: 20px;
    transform-style: preserve-3d;
    transition: transform 0.5s;
    text-align: center;
}

.user-info h2 {
    margin-bottom: 10px;
    font-size: 24px;
    color: #ffffff; /* White color for better contrast */
    transition: color 0.3s;
}

.user-info p {
    margin: 0;
    font-size: 18px;
    color: #dcdcdc; /* Light grey color */
    transition: color 0.3s;
}

.user-info:hover h2 {
    color: #626262;
}

.user-info:hover p {
    color: #211f1e;
}
</style>
