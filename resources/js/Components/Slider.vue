<template>
    <div id="controls-carousel" class="relative container m-auto rounded-lg" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-auto overflow-hidden">
            <!-- Item 1 -->
            <div class="duration-700 ease-in-out">
                <img :src="'/images/slider/slider_' + this.slider_number + '.jpg'"
                     class="block w-full rounded-lg" alt="...">
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" @click="preview_slider">
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round"
                                                                                  stroke-linejoin="round" stroke-width="2"
                                                                                  d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" @click="next_slider">
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round"
                                                                                  stroke-linejoin="round" stroke-width="2"
                                                                                  d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</template>

<script>
import {Head, Link} from '@inertiajs/inertia-vue3';
import GuestLayout from "@/Layouts/GuestLayout.vue";
import CallToAction from "@/Components/CallToAction.vue";
import {defineComponent} from "vue";

export default defineComponent({
    components: {},
    data() {
        return {
            slider_number: 1,
            max_sliders: 4
        };
    },
    methods: {
        next_slider() {
            if (this.slider_number < this.max_sliders) {
                this.slider_number++;
            } else if (this.slider_number === this.max_sliders) {
                this.slider_number = 1;
            }
        },
        preview_slider() {
            if (this.slider_number > 1) {
                this.slider_number--;
            } else if (this.slider_number === 1) {
                this.slider_number = this.max_sliders;
            }
        }
    }
});
</script>

<style scoped>

</style>
