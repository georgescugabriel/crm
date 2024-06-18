<script>
import {Head, Link} from '@inertiajs/inertia-vue3';
import GuestLayout from "@/Layouts/GuestLayout.vue";
import CallToAction from "@/Components/CallToAction.vue";
import Facebook from "@/Components/Facebook.vue";
import {defineComponent, reactive} from "vue";
import {Inertia} from "@inertiajs/inertia";

export default defineComponent({
    components: {
        GuestLayout,
        Head,
        Link,
        CallToAction,
        Facebook
    },
    data(){
        return {
            success_form: false,
            error_form: false,
        }
    },
    setup(props) {

        const form = reactive({
            first_name  : null,
            last_name   : null,
            phone       : null,
            city        : null,
            email       : null,
        })

        return {
            form
        }
    },
    methods: {},
});
</script>

<template>
    <Head title="Rezerva o sedinta de evaluare gratuita"/>
    <GuestLayout>
        <h1 class="mb-4 mt-10 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl text-center">Rezerva o sedinta de evaluare gratuita</h1>
        <div class="w-6/12 m-auto p-6 bg-sky-800 border border-gray-200 rounded-lg shadow-md mb-20">
            <div class="w-full bg-green-400 p-3 rounded-xl shadow-md" v-if="$page.props.flash.status">{{ $page.props.flash.message }}</div>
            <div class="w-full bg-red-500 p-3 rounded-xl shadow-md text-white" v-if="$page.props.flash.status === 0">{{ $page.props.flash.message }}</div>
            <form class="w-full" :action="route('send_evaluation')" method="post">
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-white">Nume</label>
                        <input v-model="form.first_name" name="first_name" type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-white">Prenume</label>
                        <input v-model="form.last_name" name="last_name" type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-white">Telefon</label>
                        <input v-model="form.phone" name="phone" type="text" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="city" class="block mb-2 text-sm font-medium text-white">Localitate</label>
                        <input v-model="form.city" name="city" type="text" id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                        <input v-model="form.email" name="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Trimite</button>
            </form>

        </div>
        <CallToAction />
    </GuestLayout>
</template>
