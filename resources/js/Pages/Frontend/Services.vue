<script>
import {Head, Link} from "@inertiajs/inertia-vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import CallToAction from "@/Components/CallToAction.vue"
import {defineComponent} from 'vue'
import Testimonials from "@/Components/Testimonials.vue";
import Facebook from "@/Components/Facebook.vue";
import Services from "@/Components/Services.vue";

export default defineComponent({
    components: {Head, Services, Facebook, Testimonials, GuestLayout, CallToAction}
})
// carousel.next();
</script>

<template>
    <Head title="Servicii"></Head>
    <GuestLayout>
        <Services />
        <Testimonials/>
        <CallToAction/><br />
        <Facebook class="container m-auto" />
    </GuestLayout>
</template>
