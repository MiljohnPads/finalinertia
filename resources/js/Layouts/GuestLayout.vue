<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
  <div class="min-h-screen flex flex-col justify-center items-center pt-6 bg-custom">
    <div class="w-full max-w-md mt-6 px-6 py-4 bg-transparent shadow-lg rounded-lg mb-5 fade-in delay-1">
      <slot />
    </div>
    <Link href="/" class="custom-link mb-4">
        ← <span class="return-text">Return</span>
    </Link>
  </div>
</template>

<style scoped>
a.custom-link {
  color: white; /* Set default text color to white */
  border: 1px solid black;
  padding: 8px 16px;
  border-radius: 9999px; /* for rounded shape */
  transition: background-color 0.3s, color 0.3s; /* transition effect */
}

a.custom-link:hover {
  background-color: black;
  color: white; /* Change text color to white on hover */
}

.return-text {
  color: black; /* Set default text color of "Return" to black */
}

.return-text:hover {
  color: white; /* Change text color to white on hover */
}

.bg-custom {
  background-image: url('https://www.bing.com/th/id/OGC.91aa79c11f3381c3ecb2ae535b5fe958?pid=1.7&rurl=https%3a%2f%2fmedia.giphy.com%2fmedia%2fwOJ9V9qihDZ1S%2fgiphy.gif&ehk=W40HkZytJ8oGpEH%2bg0zhhl1syLSuUOKT0ozNIsUe6rY%3d');
  background-size: cover;
  background-position: center;
}

.bg-transparent {
  background-color: rgba(255, 255, 255, 0.7); /* White with 70% opacity */
}

.shadow-lg {
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1), 0 4px 6px rgba(0, 0, 0, 0.1); /* Example shadow */
}

/* Fade-in animation */
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

.fade-in {
  animation: fadeIn 1s ease forwards;
}

.fade-in.delay-1 {
  animation-delay: 1s;
}

.fade-in.delay-2 {
  animation-delay: 1.5s;
}
</style>
