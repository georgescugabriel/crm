<script xmlns="http://www.w3.org/1999/html">
import {Head, Link} from '@inertiajs/inertia-vue3';
import GuestLayout from "@/Layouts/GuestLayout.vue";
import CallToAction from "@/Components/CallToAction.vue";
import {defineComponent} from "vue";

export default defineComponent({
    components: {GuestLayout, CallToAction, Head},
    data() {
        return {
            big_image: false,
            max_sliders: 92,
            image_path: null,
            class_layout_modal: null
        };
    },
    methods: {
        show_image(image_number) {
            this.big_image = true;
            this.image_path = image_number;
            this.class_layout_modal = "overflow-hidden";
        },
        close_modal(){
            this.big_image = false;
            this.image_path = null;
            this.class_layout_modal = null;
        }
    }
});
</script>

<template>
    <Head title="Galerie"/>
    <GuestLayout :class="class_layout_modal">
        <h1 class="mb-4 mt-10 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl text-center">
            Galerie
        </h1>
        <div class="backdrop-blur-sm bg-black/30 fixed top-0 left-0 right-0 z-50 p-8 w-full p-4 overflow-x-hidden overflow-hidden md:inset-0 h-modal md:h-full" v-if="big_image" @click="close_modal">
            <img :src="'/images/gallery/' + this.image_path + '.jpg'" class="block h-auto rounded-xl shadow-md flex m-auto max-h-screen">
        </div>
        <div class="grid grid-cols-4 gap-2 container m-auto mb-10 justify-items-center cursor-pointer">
            <img  v-for="n in max_sliders" :src="'/images/gallery/' + n + '.jpg'"
                 class="block h-64 w-64 rounded-xl shadow-md flex object-cover"
                 alt="..." @click="show_image(n)">
        </div>
        <CallToAction/>
    </GuestLayout>
</template>
