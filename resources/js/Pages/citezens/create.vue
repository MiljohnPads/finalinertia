<template>
    <main class="container">
      <div class="flex justify-center items-center h-screen bg-gradient">
        <div class="flex max-w-2xl mx-auto p-8 bg-gradient-to-br from-green-400 to-blue-500 rounded-lg shadow-3d transform hover:scale-105 transition duration-300 relative">
          <div class="w-full">
            <h1 class="text-3xl text-white font-bold mb-6 text-shadow">Create Citizen</h1>
            <form @submit.prevent="submit">
              <div class="grid grid-cols-2 gap-4">
                <div class="mb-4">
                  <label for="name" class="block text-white font-bold mb-2 label-shadow">Name</label>
                  <input type="text" id="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-green-500 input-shadow" v-model="form.name">
                </div>
                <div class="mb-4">
                  <label for="age" class="block text-white font-bold mb-2 label-shadow">Age</label>
                  <input type="number" id="age" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-green-500 input-shadow" v-model="form.age">
                </div>
                <div class="mb-4 col-span-2">
                  <label for="sex" class="block text-white font-bold mb-2 label-shadow">Sex</label>
                  <select id="sex" v-model="form.sex" class="w-full rounded-lg">
                    <option value="" disabled>Select Sex</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                  </select>
                </div>
                <div class="mb-4 col-span-2">
                  <label for="description" class="block text-white font-bold mb-2 label-shadow">Description</label>
                  <textarea id="description" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-green-500 input-shadow" v-model="form.description"></textarea>
                </div>
              </div>
              <div class="flex justify-between">
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:bg-green-700 button-shadow">Save Citizen</button>
                <button type="reset" @click="resetForm" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 focus:outline-none focus:bg-red-700 button-shadow">Reset</button>
              </div>
            </form>
            <button onclick="window.history.back()" class="btn-back">Back</button>
          </div>
        </div>
      </div>
    </main>
  </template>

  <script setup>
  import { useForm } from '@inertiajs/vue3';
  import Yourlayout from '@/Layouts/Yourlayout.vue';

  defineOptions({
    layout: Yourlayout
  });

  const form = useForm({
    name: '',
    age: '',
    sex: '',
    description: '',
  });

  const submit = async () => {
    form.post('/citezens', {
      onSuccess: () => {
        alert('Citizen saved successfully!');
      },
      onError: (errors) => {
        console.log(errors);
        alert('There was an error saving the citizen.');
      }
    });
  };

  const resetForm = () => {
    form.reset();
  };
  </script>

  <style scoped>
  .container {
    padding: 20px;
    max-width: 100%;
    height: 900px;
    perspective: 1000px;
    background: linear-gradient(135deg, #16a085, #2980b9); /* Green to blue gradient */
  }

  .flex {
    display: flex;
  }

  .justify-center {
    justify-content: center;
  }

  .items-center {
    align-items: center;
  }

  .h-screen {
    height: 100vh;
  }

  .bg-gradient {
    background: linear-gradient(135deg, #16a085, #2980b9);
  }

  .max-w-2xl {
    max-width: 42rem;
  }

  .p-8 {
    padding: 2rem;
  }

  .bg-gradient-to-br {
    background-image: linear-gradient(to bottom right, #16a085, #2980b9);
  }

  .border {
    border: 1px solid transparent;
  }

  .rounded-lg {
    border-radius: 0.75rem;
  }

  .shadow-3d {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), inset 0 1px 3px rgba(255, 255, 255, 0.2);
  }

  .text-shadow {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
  }

  .label-shadow {
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
  }

  .input-shadow {
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.2), 0 1px 2px rgba(0, 0, 0, 0.1);
  }

  .button-shadow {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 2px 4px rgba(0, 0, 0, 0.06);
  }

  .hover\:scale-105:hover {
    transform: scale(1.05);
  }

  .transition {
    transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform;
    transition-duration: 300ms;
  }

  .text-white {
    color: white;
  }

  .font-bold {
    font-weight: bold;
  }

  .mb-6 {
    margin-bottom: 1.5rem;
  }

  .mb-4 {
    margin-bottom: 1rem;
  }

  .grid {
    display: grid;
  }

  .grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .gap-4 {
    gap: 1rem;
  }

  .w-full {
    width: 100%;
  }

  .px-3 {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }

  .py-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }

  .focus\:outline-none:focus {
    outline: none;
  }

  .focus\:border-green-500:focus {
    border-color: #16a085;
  }

  .bg-green-600 {
    background-color: #16a085;
  }

  .hover\:bg-green-700:hover {
    background-color: #138d75;
  }

  .bg-red-600 {
    background-color: #e74c3c;
  }

  .hover\:bg-red-700:hover {
    background-color: #c0392b;
  }

  .rounded-md {
    border-radius: 0.375rem;
  }

  /* Custom Button Style */
  .btn-back {
    position: absolute;
    bottom: -2rem;
    left: 50%;
    transform: translateX(-50%);
    background-color: #8e44ad;
    color: white;
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 0.375rem;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
  }

  .btn-back:hover {
    background-color: #71368a;
    transform: translateX(-50%) scale(1.05);
  }
  </style>
