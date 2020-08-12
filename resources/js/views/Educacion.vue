<template>
  <div id="educacion">
    <v-card id="card" max-width="100%" class="mx-auto">
      <HeaderCard :image-comp="image" :title-comp="title"/>
      <!--Educacion content-->
      <v-card-text id="vct-padding">
        <div class="card_info mb-4">
          <span>{{intro}}</span>
        </div>
        <div class="mb-2">
          <h3>
            <span class="title_tlf">Certificaciones</span>
          </h3>
        </div>
        <v-timeline :dense="$vuetify.breakpoint.smAndDown">
          <v-timeline-item v-for="(esc, ind) in certificaciones" :key="esc.id_escuela" color="#eeb213" small >
            <template v-slot:opposite>
              <span class="year_tl headline" v-text="esc.anio" ></span>
            </template>
            <div class="py-4">
              <h2 id="h2" class="title_tl headline mb-4">
                {{esc.escuela}}
              </h2>
              <div class="description_tl" v-html="esc.descripcion"></div>
              <div class="social_tl">
                <div class="social_netwotk">
                  <v-btn class="oficial" :href="esc.sitio" fab dark x-small outlined color="#c62828">
                    <v-icon>mdi-web</v-icon>
                  </v-btn>
                  <v-btn class="instagram" :href="esc.instagram" target="_blank" fab dark x-small outlined color="#923bba">
                    <v-icon>mdi-instagram</v-icon>
                  </v-btn>
                  <v-btn class="twitter" :href="esc.twitter" target="_blank" fab dark x-small outlined color="#1da1f2">
                    <v-icon>mdi-twitter</v-icon>
                  </v-btn>
                  <v-btn class="facebook" :href="esc.facebook" target="_blank" fab dark x-small outlined color="#097eeb">
                    <v-icon>mdi-facebook</v-icon>
                  </v-btn>
                  <v-btn class="linkedin" :href="esc.linkedin" target="_blank" fab dark x-small outlined color="#0073b0">
                    <v-icon>mdi-linkedin</v-icon>
                  </v-btn>
                </div>
                <div class="item google_maps">
                  <iframe :src="esc.maps" width="auto" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>  
                </div>  
              </div>
            </div>
          </v-timeline-item>
        </v-timeline>

        <div class="mb-2">
          <h3>
            <span class="title_tlf">Formación Académica</span>
          </h3>
        </div>
        <v-timeline :dense="$vuetify.breakpoint.smAndDown">
          <v-timeline-item v-for="(esc, ind) in academica" :key="esc.id_escuela" color="#eeb213" small >
            <template v-slot:opposite>
              <span class="year_tl headline" v-text="esc.anio" ></span>
            </template>
            <div class="py-4">
              <h2 id="h2" class="title_tl headline mb-4">
                {{esc.escuela}}
              </h2>
              <div class="description_tl" v-html="esc.descripcion"></div>
              <div class="social_tl">
                <div class="social_netwotk">
                  <v-btn class="oficial" :href="esc.sitio" fab dark x-small outlined color="#c62828">
                    <v-icon>mdi-web</v-icon>
                  </v-btn>
                  <v-btn class="instagram" :href="esc.instagram" target="_blank" fab dark x-small outlined color="#923bba">
                    <v-icon>mdi-instagram</v-icon>
                  </v-btn>
                  <v-btn class="twitter" :href="esc.twitter" target="_blank" fab dark x-small outlined color="#1da1f2">
                    <v-icon>mdi-twitter</v-icon>
                  </v-btn>
                  <v-btn class="facebook" :href="esc.facebook" target="_blank" fab dark x-small outlined color="#097eeb">
                    <v-icon>mdi-facebook</v-icon>
                  </v-btn>
                  <v-btn class="linkedin" :href="esc.linkedin" target="_blank" fab dark x-small outlined color="#0073b0">
                    <v-icon>mdi-linkedin</v-icon>
                  </v-btn>
                </div>
                <div class="item google_maps">
                  <iframe :src="esc.maps" width="auto" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>  
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
      academica: [],
      certificaciones: [],
      idiomas: [],
      image: 'https://miespaciolaureate.mx/gcc_site/public/img/menu/edu.png',
      title: 'Educación',
      intro: 'Te invito a conocer mi experiencia académica, así como un poco de lo que viví en cada una de las instituciones educativas de las que formé parte. Podrás encontrar un timeline desde la más reciente, hasta la educación primaria, que es de dónde empiezan mis memorias.' 
    }),
    mounted(){
      //ACADEMICO
      axios
      .get('academica/')
      .then((res) => {
        this.academica = res.data;
      });
      //CERTIFICACIONES
      axios
      .get('certificaciones/')
      .then((res) => {
        this.certificaciones = res.data;
      });
      //IDIOMAS
      axios
      .get('idiomas/')
      .then((res) => {
        this.idiomas = res.data;
      });
    }
  }
</script>