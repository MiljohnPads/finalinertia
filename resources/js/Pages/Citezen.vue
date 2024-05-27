<template>
    <main class="container">
        <div class="container mx-auto py-8 px-4 flex flex-col items-center">
            <head>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
            </head>

            <div class="flex justify-between w-full">
                <h1 class="text-4xl my-6 text-white font-bold">The President of the Philippines</h1>
            </div>
            <p class="text-white mb-8">
                Below is a default list of the Presidents of the Philippines. It is hardcoded; you can edit or delete it and also you can add your aspiring citizens to be our prospect for candidacy.
            </p>
            <div class="flex flex-wrap md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-8 justify-items-center">
                <div v-for="citezen in props.citezens" :key="citezen.id" class="card-container">
                    <div class="card bg-white shadow-2xl rounded-2xl overflow-hidden transform transition-transform hover:scale-105 hover:shadow-2xl" style="width: 220px; height: 300px;">
                        <div class="p-6 relative h-full flex flex-col justify-center items-center">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-500 via-violet-600 to-white-700 opacity-10 rounded-2xl"></div>
                            <div class="relative z-10 flex flex-col justify-center items-center">
                                <h2 class="text-2xl font-semibold text-black mt-4">{{ citezen.name }}</h2>
                                <p class="text-gray-700">Age: {{ citezen.age }}</p>
                                <p class="text-gray-700">Sex: {{ citezen.sex }}</p>
                                <p class="text-gray-700">{{ citezen.description }}</p>
                                <Link :href="'/citezens/' + citezen.id" class="view-citezen-btn mt-2">
                                    <i class="bi bi-person-badge">Edit</i>
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { Link } from '@inertiajs/vue3';
import { defineProps } from 'vue';
import Yourlayout from '@/Layouts/Yourlayout.vue';

const props = defineProps({
  citezens: Array,
});

defineOptions({
  layout: Yourlayout
});
</script>

<style scoped>
html, body {
    height: 100%;
    margin: 0;
}

.container {
    padding: 20px;
    max-width: 100%;
    min-height: 100vh; /* Ensure it covers the full viewport height */
    perspective: 1000px;
    background: linear-gradient(135deg, #2c3e50, #3498db); /* Dark blue to light blue gradient */
}

.card {
  background: linear-gradient(45deg, #8ad3e8, #48718c);
}

.btn {
  padding: 20px 12px;
  border-radius: 4px;
  color: white;
  text-decoration: none;
  transition: background-color 0.3s ease, transform 0.3s ease;
}

.btn-red {
  background-color: #4daccf;
}

.btn-red:hover {
  background-color: #7457ad;
}

.card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  border-radius: 20px;
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
}

.shadow-2xl {
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1), 0 3px 6px rgba(0, 0, 0, 0.05);
}

.rounded-2xl {
  border-radius: 1.5rem;
}

.overflow-hidden {
  overflow: hidden;
}

.text-gray-700 {
  color: #4a4a4a;
}

.view-citezen-btn {
  padding: 8px 12px;
  border-radius: 4px;
  background-color: #314fa1;
  color: white;
  border: none;
  cursor: pointer;
  transition: background-color 0.3s ease;
  text-decoration: none;
  display: inline-block;
}

.view-citezen-btn:hover {
  background-color: #4f99df;
}

.card-container {
  display: flex;
  flex-direction: column;
  align-items: center;
}
</style>
