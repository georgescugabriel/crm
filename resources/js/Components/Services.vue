<script>
import {Head, Link} from "@inertiajs/inertia-vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import CallToAction from "@/Components/CallToAction.vue"
import {defineComponent} from 'vue'

export default defineComponent({
    components: {GuestLayout, CallToAction},
    data() {
        return {
            evaluation_complex: false,
            plan_elaboration: false,
            aba_therapy: false,
            cognitive_therapy: false,
            search_therapy: false,
            sensory_stimulation: false,
            group_socialization: false,
            parents_therapy: false,
            school_program: false,
        };
    },
    setup(props) {
    },
    methods: {
        open_modal(service_name){
            switch (service_name) {
                case 'evaluation_complex':
                    this.evaluation_complex = true;
                    break;
                case 'plan_elaboration':
                    this.plan_elaboration = true;
                    break;
                case 'aba_therapy':
                    this.aba_therapy = true;
                    break;
                case 'cognitive_therapy':
                    this.cognitive_therapy = true;
                    break;
                case 'search_therapy':
                    this.search_therapy = true;
                    break;
                case 'sensory_stimulation':
                    this.sensory_stimulation = true;
                    break;
                case 'group_socialization':
                    this.group_socialization = true;
                    break;
                case 'parents_therapy':
                    this.parents_therapy = true;
                    break;
                case 'school_program':
                    this.school_program = true;
                    break;
            }
        },
        close_modal(service_name){
            switch (service_name) {
                case 'evaluation_complex':
                    this.evaluation_complex = false;
                    break;
                case 'plan_elaboration':
                    this.plan_elaboration = false;
                    break;
                case 'aba_therapy':
                    this.aba_therapy = false;
                    break;
                case 'cognitive_therapy':
                    this.cognitive_therapy = false;
                    break;
                case 'search_therapy':
                    this.search_therapy = false;
                    break;
                case 'sensory_stimulation':
                    this.sensory_stimulation = false;
                    break;
                case 'group_socialization':
                    this.group_socialization = false;
                    break;
                case 'parents_therapy':
                    this.parents_therapy = false;
                    break;
                case 'school_program':
                    this.school_program = false;
                    break;
            }
        }
    }
})
// carousel.next();
</script>
<template>

    <h1 class="mb-4 mt-10 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl text-center">
        Servicii</h1>
    <div class="container m-auto mb-4 grid lg:grid-cols-3 gap-1 md:grid-cols-2">
        <div class="w-full bg-sky-800 rounded-lg shadow-md cursor-pointer hover:bg-sky-900" @click="open_modal('evaluation_complex')">
            <div class="flex flex-col items-center mt-5 pb-10">
                <svg class="w-24 h-24 mb-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                </svg>
                <h5 class="mb-1 text-xl font-medium text-white text-center">Evaluare psihologica complexa</h5>
            </div>
        </div>
        <div class="w-full bg-sky-800 rounded-lg shadow-md cursor-pointer hover:bg-sky-900" @click="open_modal('plan_elaboration')">
            <div class="flex flex-col items-center mt-5 pb-10">
                <svg class="w-24 h-24 mb-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                </svg>
                <h5 class="mb-1 text-xl font-medium text-white text-center">Elaborarea planului de interventie si incurajare personalizat</h5>
            </div>
        </div>
        <div class="w-full bg-sky-800 rounded-lg shadow-md cursor-pointer hover:bg-sky-900" @click="open_modal('aba_therapy')">
            <div class="flex flex-col items-center mt-5 pb-10">
                <svg class="w-24 h-24 mb-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h5 class="mb-1 text-xl font-medium text-white text-center">Terapie comportamentala aplicata (ABA)</h5>
            </div>
        </div>
    </div>
    <div class="container m-auto mb-4 grid lg:grid-cols-3 gap-1 md:grid-cols-2">
        <div class="w-full bg-sky-800 rounded-lg shadow-md cursor-pointer hover:bg-sky-900" @click="open_modal('cognitive_therapy')">
            <div class="flex flex-col items-center mt-5 pb-10">
                <svg class="w-24 h-24 mb-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                <h5 class="mb-1 text-xl font-medium text-white text-center">Terapie cognitiv-comportamentala</h5>
            </div>
        </div>
        <div class="w-full bg-sky-800 rounded-lg shadow-md cursor-pointer hover:bg-sky-900" @click="open_modal('search_therapy')">
            <div class="flex flex-col items-center mt-5 pb-10">
                <svg class="w-24 h-24 mb-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path>
                </svg>
                <h5 class="mb-1 text-xl font-medium text-white text-center">Logopedie si stimularea limbajului</h5>
            </div>
        </div>
        <div class="w-full bg-sky-800 rounded-lg shadow-md cursor-pointer hover:bg-sky-900" @click="open_modal('sensory_stimulation')">
            <div class="flex flex-col items-center mt-5 pb-10">
                <svg class="w-24 h-24 mb-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                </svg>
                <h5 class="mb-1 text-xl font-medium text-white text-center">Stimulare senzoriala</h5>
            </div>
        </div>
    </div>
    <div class="container m-auto mb-4 grid lg:grid-cols-3 gap-1 md:grid-cols-2">
        <div class="w-full bg-sky-800 rounded-lg shadow-md cursor-pointer hover:bg-sky-900" @click="open_modal('group_socialization')">
            <div class="flex flex-col items-center mt-5 pb-10">
                <svg class="w-24 h-24 mb-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <h5 class="mb-1 text-xl font-medium text-white text-center">Grupuri de socializare</h5>
            </div>
        </div>
        <div class="w-full bg-sky-800 rounded-lg shadow-md cursor-pointer hover:bg-sky-900" @click="open_modal('parents_therapy')">
            <div class="flex flex-col items-center mt-5 pb-10">
                <svg class="w-24 h-24 mb-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                <h5 class="mb-1 text-xl font-medium text-white text-center">Consiliere pentru parinti</h5>
            </div>
        </div>
        <div class="w-full bg-sky-800 rounded-lg shadow-md cursor-pointer hover:bg-sky-900" @click="open_modal('school_program')">
            <div class="flex flex-col items-center mt-5 pb-10">
                <svg class="w-24 h-24 mb-3 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"></path>
                </svg>
                <h5 class="mb-1 text-xl font-medium text-white text-center">Programul 'Pregătire pentru Scoala'</h5>
            </div>
        </div>
    </div>
    <!-- modals -->
    <div id="evaluation_complex" tabindex="-1" aria-hidden="true" v-if="evaluation_complex" class="fixed content-center top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto m-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-sky-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t border-sky-600">
                    <h3 class="text-xl font-semibold text-white">
                        Evaluare psihologica complexa
                    </h3>
                    <button type="button" class="text-sky-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-sky-600 hover:text-white" @click="close_modal('evaluation_complex')">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-white text-justify">
                        Vor fi testate cele mai importante abilități ale copilului (limbaj și comunicare, interacțiune socială, contact vizual, abilități de joc), iar părintele va discuta cu specialistul despre îngrijorările specifice, rutina copilului, modul de interacțiune cu acesta și abilitățile prezente acasă. <br />
                        În funcție de caz și particularitățile observate, veți obține recomandări pentru o evaluare detaliată atunci când este nevoie, consult pedo-psihiatric și modalitățile cele mai eficiente de stimulare pentru copil sau pentru a începe un program de recuperare.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="plan_elaboration" tabindex="-1" aria-hidden="true" v-if="plan_elaboration" class="fixed content-center top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto m-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-sky-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t border-sky-600">
                    <h3 class="text-xl font-semibold text-white">
                        Elaborarea planului de interventie si incurajare personalizat
                    </h3>
                    <button type="button" class="text-sky-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-sky-600 hover:text-white" @click="close_modal('plan_elaboration')">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-white text-justify">
                        Planul de intervenție personalizat (P.I.P.) este un document de lucru elaborat de către specialist pentru a sprijini copilul ȋn procesul de ȋnvǎţare, identificȃnd pe de-o parte dificultǎţile de ȋnvǎţare existente şi pe de altǎ parte prezentȃnd modalitǎţile concrete de intervenţie ȋn vederea depǎşirii acestora şi atingerii unor obiective de ȋnvatare şi dezvoltare.<br />
                        Planul de intervenţie personalizat este realizat ȋn baza unei evaluări complexe şi poate conţine două mari categorii de obiective: unele care vizează dezvoltarea abilităților deficitare și altele care vizează descreșterea comportamentelor neadecvate din punct de vedere social.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="aba_therapy" tabindex="-1" aria-hidden="true" v-if="aba_therapy" class="fixed content-center top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto m-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-sky-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t border-sky-600">
                    <h3 class="text-xl font-semibold text-white">
                        Terapie comportamentala aplicata (ABA)
                    </h3>
                    <button type="button" class="text-sky-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-sky-600 hover:text-white" @click="close_modal('aba_therapy')">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-white text-justify">
                        ABA este o știință dedicată dezvoltării de proceduri care vor produce schimbări observabile în comportament. <br />
                        Pe scurt, analiza comportamentală aplicată, sau ABA, este o abordare științifică pentru a descoperi variabilele de mediu care influențează în mod real comportamente semnificative social și pentru dezvoltarea unor intervenții de schimbare a comportamentelor care să profite în mod practic de aceste descoperiri. <br />
                        Se cauta sa se  înțeleagă funcția comportamentului, ce antecedente îl promovează și îl mențin și cum poate fi înlocuit cu un comportament de succes. Această analiză se bazează pe o evaluare inițială atentă a funcției unui comportament și pe o testare a metodelor care produc schimbări în comportament. Mai mult, abordarea caută adesea să dezvolte alternative acceptabile din punct de vedere social pentru comportamentele anormale.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="cognitive_therapy" tabindex="-1" aria-hidden="true" v-if="cognitive_therapy" class="fixed content-center top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto m-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-sky-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t border-sky-600">
                    <h3 class="text-xl font-semibold text-white">
                        Terapie cognitiv-comportamentala
                    </h3>
                    <button type="button" class="text-sky-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-sky-600 hover:text-white" @click="close_modal('cognitive_therapy')">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-white text-justify">
                        Rolul terapiei cognitiv-comportamentale pentru copiii cu tulburări de neurodezvoltare este acela de a-l ajuta pe copil sa modifice acele pattern-uri comportamentale, emoționale sau cognitive care sunt disfuncționale și să le înlocuiască cu unele funcționale, care să îl ajute să aibă o dezvoltare psihică armonioasă și echilibrată. <br />
                        Atunci când terapia cognitiv-comportamentală vine în completarea unui program clasic de terapie comportamentală aplicată (Aba) și este adaptată  în mod adecvat nevoilor copilului sau adolescentului cu tulburare de neurodezvoltare, rezultatele benefice obținute fac referire la: <br />
                        - îmbunătățirea repertoriului comportamental adaptativ; <br />
                        - îmbunătățirea abilităților sociale; <br />
                        - identificarea legăturii directe dintre gânduri, emoții și comportament; <br />
                        - dezvoltarea abilităților de a empatiza și de a înțelege emoțiile, dorințele și credințele celorlalți; <br />
                        - conștientizarea și înțelegerea propriilor emoții; <br />
                        - îmbunătățirea abilității de auto-reglare emoțională; <br />
                        - dezvoltarea abilității de rezolvare de probleme și identificarea de soluții; <br />
                        - modificarea pattern-urilor cognitive, emoționale și comportamentale care sunt disfuncționale etc.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="search_therapy" tabindex="-1" aria-hidden="true" v-if="search_therapy" class="fixed content-center top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto m-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-sky-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t border-sky-600">
                    <h3 class="text-xl font-semibold text-white">
                        Logopedie si stimularea limbajului
                    </h3>
                    <button type="button" class="text-sky-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-sky-600 hover:text-white" @click="close_modal('search_therapy')">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-white text-justify">
                        Logopedia este interventia terapeutica ce se ocupa cu: corectarea tulburarilor de limbaj, scris si citit, tulburarilor de ritm si fluenta a vorbirii. <br />
                        Ea vine in completarea celorlalte terapii atunci cand copilul: <br />
                        - Nu vorbește, nu emite sunete, silabe, cuvinte (incepand cu varsta de 18-24 luni); <br />
                        - Vocabularul este redus; <br />
                        - Prezintă dificultăți de pronunție a unuia sau mai multor sunete; <br />
                        - Are vorbirea neclară, exagerat de rapidă sau mult prea lentă sau se bâlbâie; <br />
                        - Are dificultăți în a-și însuși limbajul scris-citit, precum și abilitățile matematice; <br />
                        - Are vorbirea dezorganizată, are afectată structura gramaticală; <br />
                        - Lipsește limbajului expresiv, nu inițiează conversații, nu povestește.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="sensory_stimulation" tabindex="-1" aria-hidden="true" v-if="sensory_stimulation" class="fixed content-center top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto m-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-sky-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t border-sky-600">
                    <h3 class="text-xl font-semibold text-white">
                        Stimulare senzoriala
                    </h3>
                    <button type="button" class="text-sky-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-sky-600 hover:text-white" @click="close_modal('sensory_stimulation')">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-white text-justify">
                        Terapia prin integrare senzoriala are rolul de a crea un echilibru intre sistemul nervos central si cel periferic. <br />
                        Stimularea senzoriala joaca un rol important in dezvoltarea personalitatii copilului. Simturile ii ajuta in primii ani sa descopere lumea si sa se descopere pe sine. Prin intermediul simturilor invata sa se apropie sau sa se fereasca de lucruri, locuri, persoane. Simturile sunt mijloace importante prin care mediul inconjurator contribuie la dezvoltarea personalitatii copilului. Stimularea acestora intr-un mod potrivit varstei si nevoilor copiilor este folositoare pentru cresterea lor intr-un mod frumos si firesc.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="group_socialization" tabindex="-1" aria-hidden="true" v-if="group_socialization" class="fixed content-center top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto m-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-sky-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t border-sky-600">
                    <h3 class="text-xl font-semibold text-white">
                        Grupuri de socializare
                    </h3>
                    <button type="button" class="text-sky-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-sky-600 hover:text-white" @click="close_modal('group_socialization')">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-white text-justify">
                        Grupurile de socializare reprezintă o foarte bună practică de luat în considerare pentru părinții copiilor cu tulburări din spectrul autist, mai ales atunci când este posibilă integrarea copiilor în cadrul unor programe dedicate acestor deficiențe de dezvoltare, facilitate de către specialiști în domeniu. Întrucât deficiențele privind interacțiunea socială și comunicarea reprezintă caracteristicile definitorii ale acestor tulburări, este imperativ ca acești copii să aibă acces, cu frecvență, la sesiuni și activități de grup. Aceste intervenții specializate, oferă copiilor posibilitatea de a se dezvolta constant și în propriul lor ritm, facilitându-le astfel progresul către o dezvoltare comparabilă cu cerințele sociale aferente vârstei lor.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="parents_therapy" tabindex="-1" aria-hidden="true" v-if="parents_therapy" class="fixed content-center top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto m-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-sky-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t border-sky-600">
                    <h3 class="text-xl font-semibold text-white">
                        Consiliere pentru parinti
                    </h3>
                    <button type="button" class="text-sky-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-sky-600 hover:text-white" @click="close_modal('parents_therapy')">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-white text-justify">
                        Viata familiala si sociala este afectata  în întregime de afecţiunea copilului, motiv pentru care nu de putine ori parintii se confrunta cu stari de anxietate, depresie sau izolare sociala. Provocarea merge pană acolo unde însuşi nucleul familiei este afectat.<br />
                        Consilierea familiei are un rol foarte important.<br />
                        Au de castigat intr-o prima etapa parintii, ca si unitate de cuplu, ca resursa puternica pentru a face fata provocarii. In al doilea rand parintii vor invata sa se raporteze dintr-o noua perspectiva la afectiunea copilului, sa faca o evaluare realista asupra situatiei prezente si astfel sa poata aloca resurse pentru o eventuala interventie. In al treilea rand si in cea mai mare masura, din consilierea parintilor are de castigat copilul. O data ce perceptia adultilor din jur se adapteaza realist la capacitatile copilului si la specificul afectiunii si dupa ce parintii isi ajusteaza asteptarile legate de copilul lor, acesta va resimti diminuat presiunea mediului ceea ce duce la diminuarea gradului de frustrare si la reducerea comportamentelor neadecvate (tipat, lovit).  Concomitent, o data cu structurarea mediului intr-un mediu educativ specific pentru copiii cu autism (coordonata de specialist), copilul poate incepe sa invete si sa recupereze,treptat, achizitiile conform varstei sale mentale.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="parents_therapy" tabindex="-1" aria-hidden="true" v-if="school_program" class="fixed content-center top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto m-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-sky-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t border-sky-600">
                    <h3 class="text-xl font-semibold text-white">
                        Programul 'Pregătire pentru Scoala'
                    </h3>
                    <button type="button" class="text-sky-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-sky-600 hover:text-white" @click="close_modal('school_program')">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-white text-justify">
                        Pentru ca mediul școlar vine la pachet cu multe provocări pentru copiii cu autism, in lunile iulie și august derulam programul 'Pregătire pentru Scoala' <br />
                        In cadrul acestui program participa copiii care vor începe scoala sau care frecventează deja scoala de un an sau doi. <br />
                        Se creeaza atmosfera clasei de elevi (așezarea mobilierului, bănci și tabla), exista un terapeut principal în rolul doamnei, tematicile și activitățile de desfășoară similar atmosferei școlare, obiectivele sunt clare pentru fiecare sesiune în parte pentru a le oferi copiilor sansa și posibilitatea de a-și îmbunătăți abilități necesare mediului școlar.
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>
