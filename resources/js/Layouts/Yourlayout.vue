<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

// Reactive property to track the active link
const activeLink = ref('');

function setActiveLink(link) {
    activeLink.value = link;
}
</script>

<template>
    <div class="content flex-grow">
        <div class="min-h-screen" style="background: linear-gradient(45deg, #3c35a0, #f3f4f6);">
            <nav class="custom-bg-blue border-b border-gray-100">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <h1 class="text-center text-2xl flex items-center">
                            <img src="https://angelicangeles.home.blog/wp-content/uploads/2018/10/philippines-flag-waving-animated-gif-6.gif" alt="Piso Logo" class="logo circle-image rotate-image mr-2">
                        </h1>
                        <div class="flex items-center">
                            <NavLink :href="route('dashboard')" :active="route().current('dashboard')" class="mr-6">
                                Dashboard
                            </NavLink>
                            <Link href="/about" class="custom-link mr-8" :class="{ active: activeLink === 'about' }" @click="setActiveLink('about')">About</Link>

                            <Link href="/citezens" class="custom-link mr-4" :class="{ active: activeLink === 'citezens' }" @click="setActiveLink('citezens')">Citizens</Link>
                            <Link href="/citezens/create" class="custom-link" :class="{ active: activeLink === 'create' }" @click="setActiveLink('create')">Add Aspiring Citizen</Link>

                        </div>
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <div class="ms-3 relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="dropdown-button">
                                                {{ $page.props.auth.user.name }}
                                                <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>
                                    <template #content>
                                        <DropdownLink :href="route('logout')" method="post" as="button">
                                            Log Out
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>
                        <div class="-me-2 flex items-center sm:hidden">
                            <button @click="showingNavigationDropdown = !showingNavigationDropdown" class="menu-button">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{ hidden: showingNavigationDropdown, 'inline-flex': !showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{ hidden: !showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }" class="sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            Dashboard
                        </ResponsiveNavLink>
                    </div>
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="px-4">
                            <div class="font-medium text-base text-gray-800">
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="font-medium text-sm text-gray-500">{{ $page.props.auth.user.email }}</div>
                        </div>
                        <div class="mt-3 space-y-1">
                            <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                                Log Out
                            </ResponsiveNavLink>
                        </div>
                    </div>
                </div>
            </nav>
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>
            <main>
                <Transition name="page-trans" mode="out-in">
                    <slot />
                </Transition>
            </main>
        </div>
    </div>
</template>

<style scoped>
.custom-bg-blue {
    background: linear-gradient(to bottom, #3c35a0, white);
}

.logo {
    height: 75px;
    width: 75px;
    margin-top: 15px;
    margin-left: 10px;
    border-radius: 50%; /* Make image circular */
}

.rotate-image {
    animation: rotate 5s linear infinite; /* Add rotation animation */
}

@keyframes rotate {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

.custom-link {
    color: black;
    text-decoration: none;
    font-weight: 500;
    padding: 8px 12px;
    border: 2px solid transparent;
    transition: background-color 0.3s, color 0.3s, border-color 0.3s;
    border-radius: 50%;
}

.custom-link:hover {
    color: white;
    background-color: black;
    border-color: black;
    border-radius: 50%;
}

.custom-link.active {
    color: white;
    background-color: black;
    border-color: black;
}

.dropdown-button {
    display: inline-flex;
    align-items: center;
    padding: 8px 12px;
    border: 1px solid transparent;
    font-size: 14px;
    font-weight: 500;
    color: gray;
    background-color: white;
    transition: color 0.3s, background-color 0.3s;
    border-radius: 5px;
}

.dropdown-button:hover {
    color: black;
    background-color: #f3f4f6;
    border-radius: 50%;
}

.menu-button {
    display: inline-flex;
    align-items: center;
    padding: 8px;
    border: 2px solid transparent;
    border-radius: 5px;
    color: gray;
    background-color: white;
    transition: color 0.3s, background-color 0.3s;
    border-radius: 50%;
}

.menu-button:hover {
    color: black;
    background-color: #f3f4f6;
    border-radius: 50%;
}

.bg-custom {
    background-image: url('https://th.bing.com/th?id=OIP.W083TfhchFIPqrJx9jhplgHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2');
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
