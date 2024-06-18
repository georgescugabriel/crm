<script>
import {Head, Link} from '@inertiajs/inertia-vue3';
import GuestLayout from "@/Layouts/GuestLayout.vue";
import CallToAction from "@/Components/CallToAction.vue";
import Facebook from "@/Components/Facebook.vue";
import {defineComponent, reactive} from "vue";

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
            subject     : null,
            email       : null,
            phone       : null,
            message     : null,
        })

        return {
            form
        }
    },
});
</script>

<template>
    <Head title="Contact"/>
    <GuestLayout>

        <h1 class="mb-4 mt-10 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl text-center">Contact</h1>

        <div class="flex flex-col items-center bg-sky-800 rounded-2xl shadow-md md:flex-row w-10/12 m-auto mb-10">
            <div class="flex flex-col justify-between p-4 leading-normal w-full">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">ASCA Barcuta Fermecata</h5>
                <p class="mb-3 font-normal text-white">Presedinte Ioana Lipan Tel  071 735 381</p>
                <p class="mb-3 font-normal text-white">Email asca.bf@yahoo.com</p>
                <p class="mb-3 font-normal text-white">Adresa:  Str  Ion Ursu nr 68A, bl I5, sc B, ap 21, interfon 21, Constanta</p> <br />
                <div class="w-full bg-green-400 p-3 rounded-xl shadow-md" v-if="$page.props.flash.status">{{ $page.props.flash.message }}</div>
                <div class="w-full bg-red-500 p-3 rounded-xl shadow-md text-white" v-if="$page.props.flash.status === 0">{{ $page.props.flash.message }}</div>
                <form class="w-full" :action="route('send_contact')" method="post">
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <input v-model="form.first_name" type="text" name="first_name" id="first_name" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="first_name" class="peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nume</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input v-model="form.last_name" type="text" name="last_name" id="last_name" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="last_name" class="peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Prenume</label>
                        </div>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input v-model="form.subject" type="text" name="subject" id="subject" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="subject" class="peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Subiect</label>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <input v-model="form.email" type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="email" class="peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input v-model="form.phone" type="text" name="phone" id="phone" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="phone" class="peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Telefon</label>
                        </div>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <textarea v-model="form.message" name="message" id="message" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="message" class="peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Mesaj</label>
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Trimite</button>
                </form>
                <br />
                <Facebook />
            </div>
            <iframe class="object-cover w-full rounded-2xl md:h-200 md:w-100 p-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d715.6054412341427!2d28.612176642867023!3d44.157165836369536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40bae5b69a741f41%3A0x4f67f34252e873fa!2sASCA%20Barcuta%20Fermecata!5e0!3m2!1sen!2sro!4v1673306960673!5m2!1sen!2sro" width="600" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <CallToAction />
    </GuestLayout>
</template>
