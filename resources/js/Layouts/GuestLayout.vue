<script>
import {defineComponent} from 'vue'
export default defineComponent({
    data() {
        return {
            mobile_menu : false
        };
    },
    setup(props) {
    },
    methods: {
        toggleMobileMenu() {
            this.mobile_menu = !this.mobile_menu;
        },
    }
})
</script>

<template>

    <nav class="sticky top-0 z-40 w-full backdrop-blur flex-none transition-colors duration-500 lg:z-50 lg:border-b lg:border-slate-900/10 border-sky-50/[0.06] bg-white supports-backdrop-blur:bg-white/95 bg-sky-200/75">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <inertia-link :href="route('homepage')" class="flex items-center">
                <img src="/images/logo.png" class="h-8 mr-3 sm:h-16" alt="ASCA Logo">
            </inertia-link>
            <div class="flex md:order-2">
                <inertia-link :href="route('call')" class="text-white bg-sky-900 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 font-bold">Rezerva o sedinta de evaluare gratuita</inertia-link>
                <button @click="toggleMobileMenu" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" v-if="!mobile_menu" id="navbar-sticky">
                <ul class="flex flex-col p-4 mt-4 border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0">
                    <li>
                        <inertia-link :href="route('homepage')" class="block py-2 pl-3 pr-4 font-bold" :class="{
                                'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0': $page.component === 'Frontend/Homepage',
                                'text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0': $page.component !== 'Frontend/Homepage'
                        }" :active="$page.component === 'Frontend/Homepage'">Home</inertia-link>
                    </li>
                    <li>
                        <inertia-link :href="route('services')" class="block py-2 pl-3 pr-4 font-bold" :class="{
                                'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0': $page.component === 'Frontend/Services',
                                'text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0': $page.component !== 'Frontend/Services'
                        }" :active="$page.component === 'Frontend/Services'">Servicii</inertia-link>
                    </li>
                    <li>
                        <inertia-link :href="route('team')" class="block py-2 pl-3 pr-4 font-bold" :class="{
                                'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0': $page.component === 'Frontend/Team',
                                'text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0': $page.component !== 'Frontend/Team'
                        }" :active="$page.component === 'Frontend/Team'">Echipa</inertia-link>
                    </li>
                    <li>
                        <inertia-link :href="route('gallery')" class="block py-2 pl-3 pr-4 font-bold" :class="{
                                'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0': $page.component === 'Frontend/Gallery',
                                'text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0': $page.component !== 'Frontend/Gallery'
                        }" :active="$page.component === 'Frontend/Gallery'">Foto-Video</inertia-link>
                    </li>
                    <li>
                        <inertia-link :href="route('contact')" class="block py-2 pl-3 pr-4 font-bold" :class="{
                                'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0': $page.component === 'Frontend/Contact',
                                'text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0': $page.component !== 'Frontend/Contact'
                        }" :active="$page.component === 'Frontend/Contact'">Contact</inertia-link>
                    </li>
                </ul>
            </div>
            <div class="items-center justify-between w-full md:w-auto md:order-1" v-if="mobile_menu">
                <ul class="flex flex-col p-4 mt-4 border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0">
                    <li>
                        <inertia-link :href="route('homepage')" class="block py-2 pl-3 pr-4 font-bold" :class="{
                                'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0': $page.component === 'Frontend/Homepage',
                                'text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0': $page.component !== 'Frontend/Homepage'
                        }" :active="$page.component === 'Frontend/Homepage'">Home</inertia-link>
                    </li>
                    <li>
                        <inertia-link :href="route('services')" class="block py-2 pl-3 pr-4 font-bold" :class="{
                                'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0': $page.component === 'Frontend/Services',
                                'text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0': $page.component !== 'Frontend/Services'
                        }" :active="$page.component === 'Frontend/Services'">Servicii</inertia-link>
                    </li>
                    <li>
                        <inertia-link :href="route('team')" class="block py-2 pl-3 pr-4 font-bold" :class="{
                                'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0': $page.component === 'Frontend/Team',
                                'text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0': $page.component !== 'Frontend/Team'
                        }" :active="$page.component === 'Frontend/Team'">Echipa</inertia-link>
                    </li>
                    <li>
                        <inertia-link :href="route('gallery')" class="block py-2 pl-3 pr-4 font-bold" :class="{
                                'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0': $page.component === 'Frontend/Gallery',
                                'text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0': $page.component !== 'Frontend/Gallery'
                        }" :active="$page.component === 'Frontend/Gallery'">Foto-Video</inertia-link>
                    </li>
                    <li>
                        <inertia-link :href="route('contact')" class="block py-2 pl-3 pr-4 font-bold" :class="{
                                'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0': $page.component === 'Frontend/Contact',
                                'text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0': $page.component !== 'Frontend/Contact'
                        }" :active="$page.component === 'Frontend/Contact'">Contact</inertia-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="flex flex-col pt-3 sm:pt-0 bg-sky-200">
        <div class="w-full m-auto">
            <slot/>
        </div>
    </div>

    <footer class="p-2 shadow md:px-6 md:py-8 bg-sky-200">
        <div class="sm:flex sm:items-center sm:justify-between">
            <inertia-link :href="route('homepage')" class="flex items-center mb-2 sm:mb-0">
                <img src="/images/logo.png" class="h-8 mr-3 sm:h-16" alt="ASCA Logo">
            </inertia-link>
            <ul class="flex flex-wrap items-center mb-6 text-sm text-natural-900 sm:mb-0">
                <li>
                    <inertia-link :href="route('cookie')" class="mr-4 hover:underline md:mr-6 ">Politica de utilizare cookie-uri</inertia-link>
                </li>
                <li v-if="false">
                    <inertia-link :href="route('terms')" class="mr-4 hover:underline md:mr-6">Termeni și condiții</inertia-link>
                </li>
            </ul>
        </div>
        <hr class="my-4 border-sky-800 sm:mx-auto lg:my-4" />
        <span class="block text-sm text-natural-900 sm:text-center">© 2023 <inertia-link :href="route('homepage')" class="hover:underline">ASCA™</inertia-link>. All Rights Reserved.
    </span>
    </footer>

</template>
