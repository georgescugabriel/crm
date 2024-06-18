<script>
import {Head, Link} from "@inertiajs/inertia-vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import CallToAction from "@/Components/CallToAction.vue"
import {defineComponent} from 'vue'
import Testimonials from "@/Components/Testimonials.vue";
import Services from "@/Components/Services.vue";
import Slider from "@/Components/Slider.vue";

export default defineComponent({
    components: {Slider, Services, Testimonials, GuestLayout, CallToAction, Head},
})
</script>

<template>
    <Head title="Homepage"/>
    <GuestLayout>
        <Slider />
        <Services/>
        <Testimonials/>
    </GuestLayout>
</template>
