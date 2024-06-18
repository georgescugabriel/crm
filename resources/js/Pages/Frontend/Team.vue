<script>
import {Head, Link} from '@inertiajs/inertia-vue3';
import GuestLayout from "@/Layouts/GuestLayout.vue";
import CallToAction from "@/Components/CallToAction.vue";
import {defineComponent} from "vue";


export default defineComponent({
    components: {GuestLayout, CallToAction, Head, Link},
    data() {
        return {
            more_ioana: false,
            more_alina: false,
            more_catalina: false,
            more_diana: false,
            more_irina: false,
            more_lavinia: false,
        };
    },
    methods: {
        show_more_ioana(){
            this.more_ioana = true;
        },
        show_more_alina(){
            this.more_alina = true;
        },
        show_more_catalina(){
            this.more_catalina = true;
        },
        show_more_diana(){
            this.more_diana = true;
        },
        show_more_irina(){
            this.more_irina = true;
        },
        show_more_lavinia(){
            this.more_lavinia = true;
        },
    }
});
</script>

<template>
    <Head title="Echipa"/>
    <GuestLayout>
        <h1 class="mb-4 mt-10 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl text-center">
            Echipa</h1>
        <div class="container m-auto flex flex-col bg-white rounded-lg shadow-md md:flex-row mb-4">
            <img class="object-cover w-full rounded-t-lg h-96 md:w-48 md:rounded-none md:rounded-l-lg object-top"
                 src="/images/IOANA_LIPAN.jpg" alt="">
            <div class="flex flex-col p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Ioana Lipan</h5>
                <p class="mb-3 font-normal text-gray-700 border-b">Presedinte Asociatia de Sprijin a Copiilor cu Autism Barcuta <br />Psihopedagog, logoped si instructor comportamental</p>
                <p class="mb-3 font-normal text-gray-700 text-justify">
                    Eu sunt Ioana Lipan, sunt fiică, soră, soție, mamă, psihopedagog și instructor comportamental, acreditat internațional de către Behavior Analyst Certification Board – USA, membru al Institutului ABA România.<br/>
                    Pentru prima parte natura a făcut totul posibil, iar destinul m-a condus către această carieră. Important poate nu e cum am ajuns aici, ci ce m-a făcut să rămân. Cred cu tărie că un copil este un dar de la Dumnezeu și merită să se bucure întreaga familie de darul vieții.<br/>
                    Practicând am descoperit că pot contribui la depășirea acestor provocări și la readucerea zâmbetului pe fața copiilor cât și pe cea a părinților.
                    <span @click="show_more_ioana" v-if="!more_ioana" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline cursor-default">mai mult <svg aria-hidden="true" class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></span>
                </p>
                <p class="mb-3 font-normal text-gray-700 text-justify" v-if="more_ioana">
                    <b>Formare profesională:</b> <br />
                    Masterat in Terapii și Compensare în Tulburările de Comunicare , Facultatea de Psihologie și Știintele Educației, Universitatea ”Ovidius”, Constanța, 2017<br />
                    Licentiat in  Psihopedagogie Specială, Facultatea de Psihologie și Științele Educației, Universitatea ”Ovidius”, Constanța , 2015<br />
                    RBT - Registered Behaviour Technician, 2017<br />
                    Participare la Conferinta Internationala ABA, Bucuresti   2017<br />
                    2 - 4 iunie 2016 și 30 iunie - 2 iulie 2016 (42 ore) Curs ”Tehnici de Psihoterapie Cognitiv Comportamentală și Analiză Aplicată în Tulburările de Spectru Autist”  sustinut la Asociația de Terapie Comportamentală Aplicată - București<br />
                    08 octombrie 2016 Participare Workshop ”Terapia logopedică, știința și practica ei” organizat de Asociația Logopezilor din România<br />
                    21 mai 2015 Participare Competiția Sportivă ”Campioni Speciali” ediția a II a, organizat de Asociația Centrul de Excelență în Mediere și Educație – Lumina<br />
                    23 - 24 mai 2014 Curs- Communication Skills, such as: Listening for Heaven's Sake; Guiding Life-Changing Small Groups; Renewing the Mind sustinut de  Teleios Sverge<br />
                    09 aprilie 2014 Voluntar în cadrul Proiectului ”Fii Lumină” organizat de Asociația Centrul de Excelență în Mediere și Educație - Lumina<br />
                    27-28 octombrie 2014 Participare Workshop ”Ascultă, învață și vorbește. Reabilitarea auditiv-verbală - Perspective integratoare” organizat de Asociația ”Să auzim glasul mamei”<br />
                    14 iunie 2014 Participare Conferința Națională pe tema ”Parteneriatul Educațional Școală-Familie, exemple de bună practică incluzivă în școala românească”, organizată de Asociația Reninco România<br />
                    28 martie 2014 Participare Workshop Tehnicile Proiective ”Psihodiagnostic și prognostic clinic” organizat de Asociația Szondi din România<br />
                    5 - 6 noiembrie 2013 Participare Workshop ”Ascultă, învață și vorbește. Reabilitarea auditiv-verbală - Perspective integratoare” organizat de Asociația ”Să auzim glasul mamei”<br />
                    22 aprilie 2013 Participare Workshop ”Integrarea socială a persoanleor cu dizabilități auditive, beneficiari ai implantului cohlear” organizat de Asociația ”Să auzim glasul mamei”<br />
                    2012 - 2013 Voluntar în cadrul proiectului ”Inimioare, Inimioare” inițiat de CJRAE<br />
                    2012 - 2015 Voluntar la Centrul de zi pentru tineri cu dizabilități ”Arca” Constanța<br />
                    <b>Publicatii</b><br />
                    ”Relația dintre tulburările de limbaj și dezvoltarea socio-afectivă în mica școlaritate” în volumul ”Cercetarea Realității Educaționale - Coordonată fundamentală a formării viitorilor profesori”, Coord. Daniela Căprioară, Editura Academica Greifswald, 2015 (publicată și în limba engleză în volumul ”Educational Reality Research - A fundamental coordination of training future teachers”, Editura Academica Greifswald. 2015)<br />
                    „Integrarea socio-profesionala a absolventilor fara dizabiitati din Centrul Scolar pentru Educatie Incluziva „Albatros” Constanta”, Bulletin of the Transilvania University of Brasov, Series VII: Social Sciences. Law. Vol 10(59) No 2 -2017<br />
                </p>
            </div>
        </div>
        <div class="container m-auto flex flex-col bg-white rounded-lg shadow-md md:flex-row mb-4">
            <img class="object-cover w-full rounded-t-lg h-96 md:w-48 md:rounded-none md:rounded-l-lg object-top"
                 src="/images/Alina_Mirela_Craiu.jpg" alt="">
            <div class="flex flex-col p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Alina Mirela Craiu</h5>
                <p class="font-normal text-gray-700 text-justify">
                    Numele meu este Alina Mirela Craiu. Sunt psiholog clinician și psihopedagog-logoped. Am început sa
                    lucrez în acest domeniu în urma cu 15 ani. Munca cu copiii si cu familiile lor a devenit o pasiune
                    pentru mine. <br/>
                    În acești ani am avut ca supervizori oameni foarte valorosi și am contribuit la procesul de
                    recuperare a peste 200 de copii. <br/>
                    Pe langa Facultatea de Psihologie si Stiintele educatiei am absolvit Master in Psihodiagnoza
                    complexa a personalității, ambele la Universitatea Ovidus Constanta. Am parcurs numeroase cursuri de
                    formare în analiza comportamentala, logopedie, terapie de integrare senzoriala. Dar am investit timp
                    și energie în dezvoltarea mea ca om, participând la programe de coaching, tabere și programe de
                    dezvoltare personala. <br/>
                    Timp de 5 ani am lucrat alături de Paul Cojocaru în proiectul Terapia 3C unde am călătorit prin tara
                    și am susținut numeroase workshopuri pentru sute de părinți și specialiști. Am avut ocazia astfel sa
                    cunosc părinți și copii din toată țara și sa înțeleg care sunt nevoie lor.
                    <span @click="show_more_alina" v-if="!more_alina" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline cursor-default">mai mult <svg aria-hidden="true" class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></span>
                </p>
                <p class="mb-3 font-normal text-gray-700 text-justify" v-if="more_alina">
                    Am creat si implementat proiecte pe tema incluziunii școlare a copiilor cu CES unde peste 300 de
                    cadre didactice au învățat cum sa se raporteze și cum sa ii ajute pe copii in clasa. <br/>
                    Susțin cursuri pentru părinți și specialiști și in acești ani cel puțin 300 de persoane au
                    participat. <br/>
                    Cel mai nou proiect al meu vizează educația sexuala a copiilor și adolescenților cu autism. Un
                    proiect in care cred foarte mult și de care este mare nevoie. Copiii se dezvolta și ajung în etape
                    cu nevoi diferite. Dorința mea este sa ne pregătim pregătim toți, specialiști și părinți astfel
                    încât sa el oferim adolescenților cu autism îndrumarea de care au nevoie.
                </p>
            </div>
        </div>
        <div class="container m-auto flex flex-col bg-white rounded-lg shadow-md md:flex-row mb-4">
            <img class="object-cover w-full rounded-t-lg h-96 md:w-48 md:rounded-none md:rounded-l-lg object-top"
                 src="/images/CATALINA_VIORICA_PIRVAN.jpeg" alt="">
            <div class="flex flex-col p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Pîrvan Cătălina - Viorica</h5>
                <p class="mb-3 font-normal text-gray-700 border-b">Licențiat în Psihopedagogie Specială, stundent Psihologie</p>
                <p class="mb-3 font-normal text-gray-700 text-justify">
                    Dintotdeauna am simțit o atracție față de această meserie, însă acum știu sigur că locul meu este aici, alături de cei mici, oferindu-le zâmbete călduroase, înțelegere și sperantă în suflete. Nu există cuvinte care pot descrie sentimentul resimțit atunci cănd observi progresul unui copil, când cunoști efortul depus pentru a ajunge la acel nivel. Astfel de momente iți oferă motivația necesară pentru a nu te opri, pentru a oferi întotdeauna cea mai buna versiune a ta, pentru a căuta  răspunsuri și noi metode pentru a reuși. Fiecare zi este o nouă provocare, o nouă șansă de a ne depăși limitele.<br />
                    <span @click="show_more_catalina" v-if="!more_catalina" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline cursor-default">mai mult <svg aria-hidden="true" class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></span>
                </p>
                <p class="mb-3 font-normal text-gray-700 text-justify" v-if="more_catalina">
                    <b>Formare profesională:</b> <br />
                    LICENȚĂ ÎN PSIHOPEDAGOGIE SPECIALĂ – Universitatea "Ovidius" din Constanța (2019-2022)<br />
                    CURS: Lucrător prin arte combinate.(22/11/2019 – 23/11/2019)<br />
                    PROGRAM DE FORMARE PSIHOPEDAGOGICĂ, NIVELUL I – Universitatea "Ovidius" din Constanța (2019-2020)<br />
                    LICENȚĂ ÎN PSIHOLOGIE – Universitatea "Ovidius" din Constanța (2020- prezent)<br /><br />
                    <b>Publicații</b><br />
                    “Calitatea vieții părinților absolvenților unei instituții de învățământ special” în Vol. 13 No.1 (2022): The BlackSea Journal of Psychology. Autor: Totolan Mircea Damian, cercetător independent: Pîrvan Cătălina- Viorica.<br />
                </p>
            </div>
        </div>
        <div class="container m-auto flex flex-col bg-white rounded-lg shadow-md md:flex-row mb-4">
            <img class="object-cover w-full rounded-t-lg h-96 md:w-48 md:rounded-none md:rounded-l-lg object-top"
                 src="/images/DIANA_MARIA_RADU.jpg" alt="">
            <div class="flex flex-col p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Diana-Maria Radu</h5>
                <p class="mb-3 font-normal text-gray-700 border-b">Psiholog</p>
                <p class="mb-3 font-normal text-gray-700 text-justify">
                    Determinată, empatică, perseverentă, plina de viață, atitudine vesela și deschisă. <br />
                    Mi-am căutat vocația încă din copilărie și deși am incercat multe meserii, nu am simțit chemare către niciuna. <br/>
                    A venit momentul in care mi s-a încredințat primul copil cu autism, atunci am realizat că există mai multe tipuri de sentimente legate de o meserie. Începusem să descopăr bucuria de a lucra, descopeream copilul și totodata mă descopeream și pe mine.  Într-un fel sau altul, i-am descoperit într-un moment al vieții în care eu aveam nevoie de ei, iar acum, țin să cred că eu și fiecare copil avem o legătură specială. Nu știu ce poate fi mai frumos decât chipurile lor fericite, decât bucuria pe care le-o citești in ochișori atiunci când vă jucați jocul preferat sau căldură cu care te strâng în brațe. Și mai mult de atât, ador să știu că eu sunt un factor important în drumul lor către o dezvoltare armonioasa, așa cum și ei au un rol important în dezvoltarea mea ca om.
                    <span @click="show_more_diana" v-if="!more_diana" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline cursor-default">mai mult <svg aria-hidden="true" class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></span>
                </p>
                <p class="mb-3 font-normal text-gray-700 text-justify" v-if="more_diana">
                    <b>Formare profesională:</b> <br />
                    Universitatea "Ovidius" din Constanța, Facultatea de "Psihologie și Științele Educației" / Specializarea: Psihologie<br />
                    Universitatea "Ovidius" din Constanța, Departamentul pentru Perfecționarea Personalului Didactic / Masterat didactic în psihologie- în curs<br />
                    <b>Voluntar</b> Căminul pentru copii "Cocorii 2", Tulcea Domeniu: Educatie - Training<br />
                    <b>Voluntar</b> Fundația Marcel Prodan, Constanța<br />
                    Activitate: recuperarea neuropsihologică a copiilor cu autism<br />
                    Psiholog- Asociația "Povestea lui Mai"<br />
                    Domeniu: Educație, Psihologie<br />
                    Curs "Metode de abordare la clasă a copiilor cu CES" -Eveniment organizat de Brainstorming Consulting și Cronica de psihologie din București/ Formator: Alexandra Frîncu, Psiholog Clinician<br />
                    Curs "Limbaj functional și tehnici de logopedie in tulburările de comunicare" - curs organizat de Aba Masterat și Asociația Autism Voice/ psiholog: Anca Dumittrscu<br />
                    Workshop: Siminică Ionel - Evaluare și factori de risc în organizații<br />
                    Workshop - Popescu Monica - Metafora terapeutică în psihologia clinică dependență vs creștere<br />
                    Workshop Bălan Cristinel - Peisajul moral al condiției umane. Aplicabilitate practică: probe situaționale<br />
                    Workshop Purice Monica - Terapie prin joc și arte combinate<br />
                    Workshop - Răileanu Luminița - Rolul psihologului clinician în tulburările de vorbire<br />
                    Copăcenu Mihai- Sănătatea mintală la tineri sau de ce devenim dependenți de tehnologie<br />
                    Workshop - Andreescu Florina-Prețul greșelii vs frică de a acționa (Cine te oprește să fii persoana care îți dorești să fii?)<br />
                    Workshop Cazan Ancuța - Cunoașterea de sine. Aplicații din psihoterapia pozitivă sau Rolul umbrei în constructul selfului<br />
                    Workshop: Tudor Daniela-Perspective de comunicare la copii cu autism<br />
                </p>
            </div>
        </div>
        <div class="container m-auto flex flex-col bg-white rounded-lg shadow-md md:flex-row mb-4 content-start">
            <img class="object-cover w-full rounded-t-lg h-96 md:w-48 md:rounded-none md:rounded-l-lg object-top"
                 src="/images/LAVINIA_MIHAELA_NEAGU.jpg" alt="">
            <div class="flex flex-col p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Lavinia Mihaela Neagu</h5>
                <p class="mb-3 font-normal text-gray-700 border-b">Licențiat în Psihopedagogie specială</p>
                <p class="mb-3 font-normal text-gray-700 text-justify">
                    Motivația de a lucra cu copii cu Tsa a început din dorința de a-i ajuta sa  aiba o viata cat mai aproape de normalitate. A -i acompania pe copii in  procesul lor de dezvoltare înseamnă multă muncă și când există iubire,  iubirea poate vindeca orice dizabilitate. Satisfacția în ceea ce privește  activitățile pe care le realizam impreuna o reprezintă progresul, precum și  integrarea copiilor din punct de vedere social.<br/><br/>
                    <span @click="show_more_lavinia" v-if="!more_lavinia" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline cursor-default">mai mult <svg aria-hidden="true" class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></span>
                </p>
                <p class="mb-3 font-normal text-gray-700 text-justify" v-if="more_lavinia">
                    <b>Formare profesională:</b> <br />
                    <b>Licenta:</b> Facultatea de Psihologie si Stiintele Educatiei, Universitatea "Ovidius" Constanta (2018-2021)<br />
                    Program de formare Psihopedagogica, nivel I, Universitatea "Ovidius" Constanta(2018-2021)<br />
                    <b>Master:</b> Management Educational, Universitatea "Ovidius" Constanta, in prezent.<br /><br />
                    <b>Voluntar</b> Centrul "Logo-pici" Ialomita<br />
                    <b>Activitate</b> Recuperarea si integrarea persoanelor cu autism si sindrom Down.<br />
                    Curs de limbaj functional si tehnici de logopedie in tulburarile de dezvoltare - Aba Masters  si  Autism Voice/ psiholog Anca Dumitrescu ( noiembrie 2022).<br />
                </p>
            </div>
        </div>
        <CallToAction/>
    </GuestLayout>
</template>
