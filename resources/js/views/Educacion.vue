<template>
  <div id="educacion">
    <v-card id="card" max-width="100%" class="mx-auto">
      <HeaderCard :image-comp="image" :title-comp="title"/>
      <!--Educacion content-->
      <v-card-text id="vct-padding">
        <div class="card_info mb-4">
          <span>{{intro}}</span>
        </div>
        <v-timeline :dense="$vuetify.breakpoint.smAndDown">
          <v-timeline-item v-for="(item, i) in items" :key="i" color="#eeb213" small >
            <template v-slot:opposite>
              <span class="year_tl headline" v-text="item.year" ></span>
            </template>
            <div class="py-4">
              <h2 id="h2" class="title_tl headline mb-4">
                {{item.title}}
              </h2>
              <div class="description_tl" v-html="item.description"></div>
              <div class="social_tl">
                <div class="social_netwotk">
                  <v-btn class="oficial" :href="item.oficial" fab dark x-small outlined color="#c62828">
                    <v-icon>mdi-web</v-icon>
                  </v-btn>
                  <v-btn class="instagram" :href="item.instagram" target="_blank" fab dark x-small outlined color="#923bba">
                    <v-icon>mdi-instagram</v-icon>
                  </v-btn>
                  <v-btn class="twitter" :href="item.twitter" target="_blank" fab dark x-small outlined color="#1da1f2">
                    <v-icon>mdi-twitter</v-icon>
                  </v-btn>
                  <v-btn class="facebook" :href="item.facebook" target="_blank" fab dark x-small outlined color="#097eeb">
                    <v-icon>mdi-facebook</v-icon>
                  </v-btn>
                  <v-btn class="linkedin" :href="item.linkedin" target="_blank" fab dark x-small outlined color="#0073b0">
                    <v-icon>mdi-linkedin</v-icon>
                  </v-btn>
                </div>
                <div class="item google_maps">
                  <iframe :src="item.map" width="auto" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>  
                </div>  
              </div>
            </div>
          </v-timeline-item>
        </v-timeline>
      </v-card-text>
    </v-card>
  </div>
</template>
<script>
  import HeaderCard from '../components/HeaderCard.vue';
  export default {
    components: {
      HeaderCard
    },
    data:()=>({
      items: [
        {
          title: 'Facultad de Ingeniería UNAM Campus CU',
          description: '<p>La universidad fue mi etapa personal y estudiantil preferida ya que era un mundo de posibilidades tanto deportivas, culturales y académicas.</p><p>En mi estadía aprendí a ser autodidacta, a trabajar bajo presión y a trabajar en equipo. Tuve la fortuna de conocer a muy buenos profesores que posteriormente se convertirian en mentores y buenos amigos, trabajando en conjunto en diversos proyectos hasta llegar al momento de mi titulación como Ingeniero en Computación.</p>',
          year: '2008 - 2015',
          oficial:'https://www.ingenieria.unam.mx/',
          instagram:'https://www.instagram.com/fiunam_mx/?hl=es-la',
          twitter:'https://twitter.com/FIUNAM_MX',
          facebook:'https://www.facebook.com/fi.unam.mx/',
          linkedin:'https://www.linkedin.com/company/unam/?originalSubdomain=mx',
          map: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.8648171341406!2d-99.18692048557165!3d19.331671448910683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce00015be0a713%3A0x3fc11681a8244370!2sFacultad%20de%20Ingenier%C3%ADa%20UNAM!5e0basketball!3m2!1ses-419!2smx!4v1595952066041!5m2!1ses-419!2smx'
        },
        {
          title: 'Escuela Nacional Preparatoria N° 1 "Gabino Barreda" UNAM',
          description: '<p>Ingrese al sistema de bachillerato de la UNAM a través del examen se selección COMIPEMS y para ser honesto fue una de mis epocas favoritas, ya que podía estudiar y hacer ejercicio sin ningun problema.</p><p>En mi último año decidí cursar área 1 (Ciencias Físico Matemáticas y de las Ingenierías) para poder entrar a la Facultad de Ingenieria, en específico a la carrera de ingeniería en computación, por medio del pase directo, ya que contaba con el tiempo y promedio que pedían para poder entrar a Ciudad Universitaria.</p>',
          year: '2005 - 2008',
          oficial:'http://enp1.unam.mx/',
          instagram:'https://www.instagram.com/unam_mx/?hl=es',
          twitter:'https://twitter.com/prepa1unam?lang=es',
          facebook:'https://www.facebook.com/enp1gabinobarreda/',
          linkedin: 'https://www.linkedin.com/company/escuela-nacional-preparatoria-unam/?originalSubdomain=mx',
          map: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.2354681531174!2d-99.1237568855725!3d19.27212375078752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce016b03ed4f7b%3A0xb941537cdabe1eda!2sEscuela%20Nacional%20Preparatoria%20N%C2%B0%201%20%22Gabino%20Barreda%22%20UNAM!5e0!3m2!1ses-419!2smx!4v1595973725907!5m2!1ses-419!2smx' 
        },
        {
          title: 'Escuela Secundaria Diurna No. 36 "Cuauhtémoc"',
          description: '<p>Al entrar a la secundaria baje un poquito mis calificaciones ya que empece a hacer mucho ejercicio, empece a correr y a jugar basketball.</p><p>Participe en algunos concursos de matemáticas y en el último año volví a subir mis calificaciones, ya que el siguiente paso era asegurar un lugar en la UNAM para el nivel de educación media superior.</p>',
          year: '2002 - 2005',
          oficial:'#',
          instagram:'https://www.instagram.com/?hl=es-la',
          twitter:'https://twitter.com/',
          facebook:'https://www.facebook.com/pages/category/Middle-School/Escuela-Secundaria-36-Cuauht%C3%A9moc-Oficial-1779262728954950/',
          linkedin:'#',
          map: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.3761565085797!2d-99.10468338557259!3d19.26600155098025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce015f6ced7641%3A0x32b17c883919810e!2sEscuela%20Secundaria%20Diurna%20N%C2%B0%2036%20%22Cuauht%C3%A9moc%22!5e0!3m2!1ses-419!2smx!4v1595951916760!5m2!1ses-419!2smx'
        },
        {
          title: 'Escuela Primaria "Vicente Riva Palacios"',
          description: '<p>En esta primaria fue donde empiezan mis recuerdos académicos. Básicamente fui un alumno promedio del primer hasta el tercer año, es curioso ya que siempre en casa me exigian tener buenas calificaciones.</p><p>Fue hasta ese año que yo solo empece a realizar mis tareas sin necesidad de que mis padres estuvieran atras de mi, al parecer ya se me habia hecho un habito relizar las cosas sin necesiad de que alguien me lo recordara. Por mis buenas notas me dieron una beca; tambien pertenecia a la escolta y al corro.</p>',
          year: '1996 - 2002',
          oficial:'#',
          instagram:'https://www.instagram.com/?hl=es-la',
          twitter:'https://twitter.com/',
          facebook:'https://www.facebook.com/pages/Escuela-Primaria-Vicente-Riva-Palacio/270457376457752',
          linkedin:'#',
          map: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.3294819352786!2d-99.1055182855726!3d19.26803285091629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce015fba39c255%3A0xf08addba4d1e5f59!2sEscuela%20Primaria%20%22Vicente%20Riva%20Palacios%22!5e0!3m2!1ses-419!2smx!4v1595951437513!5m2!1ses-419!2smx'
        },
      ],
      //image: 'https://cdn1.iconfinder.com/data/icons/education-outline-2/32/graduation-hat-512.png',
      image: 'http://localhost/gcc_site/public/img/menu/edu.png',
      title: 'Educación',
      intro: 'Ahora una breve reseña tanto personal como académica, en cada una de las instituciones educativas a las que perteneci. Desde la más reciente hasta la educación primaria que es la primaria de la que tengo memoria.',
    }),
  }
</script>