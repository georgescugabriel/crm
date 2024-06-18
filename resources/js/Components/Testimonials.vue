<script>
import {Head, Link} from "@inertiajs/inertia-vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import CallToAction from "@/Components/CallToAction.vue"
import {defineComponent} from 'vue'

export default defineComponent({
    components: {GuestLayout, CallToAction},
    data() {
        return {
            slider_number:2,
            slider1: true,
            slider2: false,
            slider3: false,
            slider4: false,
        };
    },
    setup(props) {
    },
    methods: {
        nextSlider() {
            if(this.slider_number < 4) {
                this.slider_number++;
            } else {
                this.slider_number = 1;
            }
            switch (this.slider_number){
                case 1:
                    this.slider1 = true;
                    this.slider2 = false;
                    this.slider3 = false;
                    this.slider4 = false;
                    break;
                case 2:
                    this.slider1 = false;
                    this.slider2 = true;
                    this.slider3 = false;
                    this.slider4 = false;
                    break;
                case 3:
                    this.slider1 = false;
                    this.slider2 = false;
                    this.slider3 = true;
                    this.slider4 = false;
                    break;
                case 4:
                    this.slider1 = false;
                    this.slider2 = false;
                    this.slider3 = false;
                    this.slider4 = true;
                    break;
            }
        },
        prevSlider() {
            if(this.slider_number > 4) {
                this.slider_number--;
            } else {
                this.slider_number = 4;
            }
            switch (this.slider_number){
                case 1:
                    this.slider1 = true;
                    this.slider2 = false;
                    this.slider3 = false;
                    this.slider4 = false;
                    break;
                case 2:
                    this.slider1 = false;
                    this.slider2 = true;
                    this.slider3 = false;
                    this.slider4 = false;
                    break;
                case 3:
                    this.slider1 = false;
                    this.slider2 = false;
                    this.slider3 = true;
                    this.slider4 = false;
                    break;
                case 4:
                    this.slider1 = false;
                    this.slider2 = false;
                    this.slider3 = false;
                    this.slider4 = true;
                    break;
            }
        }
    }
})
// carousel.next();
</script>
<template>
    <inertia-link :href="route('call')" class="block w-full p-20 text-center bg-cover bg-no-repeat shadow-md m-auto mb-10" style="background-image: url('/images/moto_bg.jpg')">
        <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
            <div class="-mt-1 font-sans text-6xl font-semibold text-white hand">Copii fericiti, parinti fericiti</div>
        </div>
    </inertia-link>
    <div id="default-carousel" class="relative w-10/12 m-auto bordered bg-sky-800 rounded-2xl mb-10 text-white">
        <!-- Carousel wrapper -->
        <div class="relative lg:h-96 h-auto overflow-hidden rounded-lg text-center">
            <figure v-if="slider1" id="carousel-item-1" class="duration-700 ease-in-out">
                <blockquote class="max-w-md lg:max-w-4xl md:max-w-xl mx-auto mb-4 text-white lg:mb-8">
                    <p class="my-4 font-light">Când C. a pășit pentru prima dată pe uşa "Bărcuța Fermecată" a fost foarte fericit și încântat. Avea vârsta de 2 ani jumătate și nu știa nici cum îl cheamă, nu vorbea, nu avea contact vizual, nu ne recunoștea ca părinți, avea multe stereotipii, era foarte agitat și reușea cu greu să ducă până la capăt o sarcină. Este un copil foarte iubitor și se atașează foarte repede de persoanele noi care îi oferă afecțiune și atenție, din acest motiv încă din prima clipă le-a plăcut și le-a îndrăgit pe terapeutele sale și a mers cu mult drag în fiecare zi. Anii au trecut iar C. a avut numai rezultate pozitive. Încât, cu răbdare și multă speranță, a început sa achiziționeze cât mai multe cunoștințe. Zi după zi, rezultatele terapiei s-au văzut. În permanență am avut tot sprijinul terapeuților și a psihologilor din cadrul asociației. Am primit sfaturi, idei de lucru pentru acasă ca să punem în practică tot ce învăța în timpul orelor de terapie. Orice nelămurire am avut am putut discuta cu personalul asociației și am primit sfaturi utile pentru a ne ajuta în recuperarea lui C.</p>
                </blockquote>
                <figcaption class="flex items-center justify-center space-x-3">
                    <div class="space-y-0.5 font-medium text-left">
                        <div>Alina T</div>
                        <div>Mama lui C</div>
                    </div>
                </figcaption>
            </figure>
            <figure v-if="slider2" id="carousel-item-2" class="duration-700 ease-in-out">
                <blockquote class="max-w-md lg:max-w-4xl md:max-w-xl mx-auto mb-4 text-white lg:mb-8">
                    <p class="my-4 font-light">
                        La momentul începerii colaborării cu Bărcuța Fermecată, băiețelul nostru se afla deja în terapie de aproape 2 ani, timp în care progresele nu au fost semnificative și în ultima perioadă a celor 2 ani chiar stagnase din punct de vedere al limbajului și al achiziției de noi informații și comportamente. La numai câteva luni de la începerea colaborării cu Asociația Bărcuța Fermecată băiatul nostru a făcut un salt uriaș, a progresat pe toate planurile. S-a transformat dintr-un copil căruia trebuia să-i intuim nevoile și pe care trebuia să-l asistăm la aproape toate activitățile, într-un copil care face și își dorește să facă totul singur, care comunică foarte mult și care vine cu noi achiziții de la fiecare ședință de terapie. Limbajul și comunicarea sunt acum semnificativ îmbunătățite, la fel și colaborarea cu cei din jurul său. În urma câtorva ședințe de desensibilizare alimentară a început să accepte cu ușurință mai multe alimente pe care nu le accepta deloc. Privindu-l prin ochi de părinte, nu de profesionist, suntem încrezători că toate problemele pe care le credeam insurmontabile vor fi în cel mai scurt timp doar amintire.Suntem foarte mulțumiți că am întâlnit o echipă de profesioniști, care , prin terapii adaptate fiecărui copil, au reușit să-l ajute nesperat de mult pe copilul nostru.
                    </p>
                </blockquote>
                <figcaption class="flex items-center justify-center space-x-3">
                    <div class="space-y-0.5 font-medium text-left">
                        <div>C Ionelia</div>
                        <div>Mama lui M</div>
                    </div>
                </figcaption>
            </figure>
            <figure v-if="slider3" id="carousel-item-2" class="duration-700 ease-in-out">
                <blockquote class="max-w-md lg:max-w-4xl md:max-w-xl mx-auto mb-4 text-white lg:mb-8">
                    <p class="my-4 font-light">
                        Inainte de a incepe colaborarea cu dumneavoastră, simteam că nimic nu mai are sens, respectiv ajunsesem într-un punct în care nu știam cum și ce trebuie sa mai fac pentru a-mi ajuta băiatul. Eram veșnic nervoasa pentru că nu reușeam să îl ajut sa înțeleagă și să  exprime  ceea ce dorește. <br />
                        Ajungând în bărcuță, am găsit o familie, chiar una din primele persoane care ne-a întâmpinat a fost un îngeras minunat. In momentul acela în mintea mea a apărut ideea că aici totul se va schimba pentru noi, aici a apărut speranța demult pierduta. La scurt timp D. a constientizat scopul pentru care el bea apa: ”Mami beau apa sete”. Eram atât de bucuroasa de rezultatul lui, încât cred că în aceea seara am sunat toate cunoștințele. Rezultatele au continuat să apară din ce in ce mai des, astfel că acum, la un an de terapie zilnica, D. reuseste sa comunice, să înțeleagă ce se întâmplă în jurul lui, sa intre în conversații cu noi și chiar sa poarte una, își scrie singur numele, identifica litere și cifre cu ușurință. <br />
                        Răbdarea, devotamentul, implicarea și profesionalismul terapeutilor sunt unele din putinele calități pe care as putea sa le enumăr, că au dus la evoluția băiatului nostru, și nu numai la asta, ci și la o stare de bine in relația noastră familiala.
                    </p>
                </blockquote>
                <figcaption class="flex items-center justify-center space-x-3">
                    <div class="space-y-0.5 font-medium text-left">
                        <div>Daniela L.</div>
                        <div>Mama lui D.</div>
                    </div>
                </figcaption>
            </figure>
            <figure v-if="slider4" id="carousel-item-2" class="duration-700 ease-in-out">
                <blockquote class="max-w-md lg:max-w-4xl md:max-w-xl mx-auto mb-4 text-white lg:mb-8">
                    <p class="my-4 font-light">
                        Inainte de a începe frumoasă colaborare cu dvs. eram dezorientata din cauza evenimentelor din viata noastră, L. având autism, Adhd, obezitate si întârziere în dezvoltare. <br />
                        Apărând în viața noastră pentru mine ca mama nu a fost doar "mergem la terapie „ ci și locul unde mi-am gasit sprijin de a mă pune pe picioare, am avut ajutor din toate punctele de vedere. L. a avut parte de toată afecțiunea și terapiile necesare ,este recuperabil si a recuperat foarte mult de cand facem terapie. <br />
                        Cel mai mult pentru L. au contat oamenii de calitate din jurul lui , pregătirea dumneavoastră de care ați dat dovadă, implicarea și terapia pe care o faceți cu acești copii minunați.
                    </p>
                </blockquote>
                <figcaption class="flex items-center justify-center space-x-3">
                    <div class="space-y-0.5 font-medium text-left">
                        <div>Cristina O</div>
                        <div>Mama lui L.</div>
                    </div>
                </figcaption>
            </figure>
        </div>
        <!-- Slider controls -->
        <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                id="data-carousel-prev" @click="prevSlider">
                    <span
                        class="rounded-full inline-flex items-center justify-center w-8 h-8 sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="sr-only">Previous</span>
                    </span>
        </button>
        <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                id="data-carousel-next" @click="nextSlider">
                    <span
                        class="rounded-full inline-flex items-center justify-center w-8 h-8 sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5l7 7-7 7"></path></svg>
                        <span class="sr-only">Next</span>
                    </span>
        </button>
    </div>

</template>
