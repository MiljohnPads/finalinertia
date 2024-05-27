<script setup>
import { onMounted, ref } from 'vue';

const model = defineModel({
    type: String,
    required: true,
});

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input
        class="border-gray-300 focus:border-black focus:ring-gray-500 rounded-md shadow-sm"
        v-model="model"
        ref="input"
    />
</template>

<style>
/* Optional: If you want to customize the input field further */
input:focus {
    outline: none; /* Remove default outline */
    border-color: black; /* Black border when focused */
    box-shadow: 0 0 0 3px rgba(128, 128, 128, 0.5); /* Gray ring shadow */
}
</style>

