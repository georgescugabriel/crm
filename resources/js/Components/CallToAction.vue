<script setup>
import {Head, Link} from '@inertiajs/inertia-vue3';
import GuestLayout from "@/Layouts/GuestLayout.vue";

defineProps({});
</script>
<template>

    <div class="w-full p-20 text-center bg-cover bg-no-repeat shadow-md m-auto" style="background-image: url('/images/call_to_action_bg.jpg')">
        <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
            <inertia-link :href="route('call')" class="w-full sm:w-auto bg-sky-900 hover:bg-sky-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5">
                <div class="text-left">
                    <div class="-mt-1 font-sans text-lg font-semibold">Rezerva o sedinta de evaluare gratuita</div>
                </div>
            </inertia-link>
        </div>
    </div>

</template>
