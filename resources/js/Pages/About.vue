<template>
    <main class="container">
      <div class="about-page">
        <h1>About the Presidents of the Philippines</h1>
        <section class="intro">
          <p>Welcome to the inspiring journey of the Presidents of the Philippines, leaders who have shaped the nation with their vision, courage, and dedication. From humble beginnings to the highest office in the land, each president has left an indelible mark on Philippine history.</p>
        </section>

        <section class="categories">
          <h2>Leadership Qualities</h2>
          <ul>
            <li>Integrity</li>
            <li>Vision</li>
            <li>Empathy</li>
            <li>Determination</li>
          </ul>
        </section>

        <section class="mission">
          <h2>Inspiring Journey</h2>
          <p>Each president embarked on a remarkable journey, overcoming challenges and adversities to serve the Filipino people. Their commitment to nation-building, social justice, and economic progress continues to inspire generations.</p>
        </section>

        <section class="commitment">
          <h2>Legacy of Leadership</h2>
          <p>The legacy of the Presidents of the Philippines is one of service, sacrifice, and dedication to the common good. Their enduring impact on Philippine society serves as a beacon of hope and inspiration for future leaders.</p>
        </section>

        <section class="customer-service">
          <h2>Nation-Building</h2>
          <p>With a steadfast commitment to nation-building, each president has contributed to the advancement of the Philippines, leaving behind a legacy of progress, prosperity, and unity.</p>
        </section>
      </div>
    </main>
  </template>

  <script setup>
  import Yourlayout from '@/Layouts/Yourlayout.vue';

  defineOptions({
    layout: Yourlayout
  });
  </script>


  <style scoped>
  .container {
    padding: 20px;
    max-width: 100%;
    height: 100%; /* Adjust height to 100% */
    min-height: 100vh; /* Ensure full viewport height */
    perspective: 1000px;
    background: linear-gradient(135deg, #2c3e50, #3498db); /* Dark blue to light blue gradient */
  }

  .about-page {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    font-family: Arial, sans-serif;
    color: white;
  }

  h1 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 2.5em;
    border-bottom: 2px solid white; /* Add border to h1 */
  }

  section {
    margin-bottom: 30px;
    border: 1px solid white; /* Add border to sections */
    padding: 20px;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.1); /* Adjust background color with transparency */
  }

  h2 {
    font-size: 1.8em;
    margin-bottom: 10px;
  }

  p {
    font-size: 1.1em;
    line-height: 1.6;
  }

  ul {
    list-style-type: none;
    padding: 0;
  }

  ul li {
    background: #ebbebe;
    margin: 5px 0;
    padding: 10px;
    border-radius: 5px;
    color: black;
  }
  </style>
