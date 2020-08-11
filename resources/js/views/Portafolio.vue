<template>
  <div id="portafolio">
    <v-card id="card" max-width="100%" class="mx-auto">
      <HeaderCard :image-comp="image" :title-comp="title"/>
      <!--PORTAFOLIO CONTENT-->    
      <v-card-text id="vct-padding">
        <div class="card_info">
          <v-expansion-panels popout>
            <v-expansion-panel>
              <v-expansion-panel-header>
                <h3 id="h3">Laboral</h3>
              </v-expansion-panel-header>
              <v-expansion-panel-content>
                <p>
                  A continuación se muestran los proyectos desarrollados para las empresas donde su servidor ha trabajado. Con una descripción tanto del proposito de estos, como de la tecnología que se empleo para su desarrollo. 
                </p>
                <Laboral :ent-sys="laboral"/>
              </v-expansion-panel-content>
            </v-expansion-panel>
            <v-expansion-panel>
              <v-expansion-panel-header>
                <h3 id="h3">Freelance</h3>
              </v-expansion-panel-header>
              <v-expansion-panel-content>
                <p>
                  En esta sección se mostrarán los proyectos freelances en lo que su servidor tuvo participacion parcial o total. Junto con una breve descripción del proposito de estos; Así como tecnología en la que esta desarrollado.
                </p>
                <Freelance :ent-sys="freelance"/>
              </v-expansion-panel-content>
            </v-expansion-panel>
            <v-expansion-panel>
              <v-expansion-panel-header>
                <h3 id="h3">Universidad</h3>
              </v-expansion-panel-header>
              <v-expansion-panel-content>
                <p>
                  Aquí podrás visualizar los proyectos que su servidor desarrolló en su etapa universitaria y la tecnología en la que esta desarrollado.
                </p>
                <Universidad :ent-sys="universidad"/>
              </v-expansion-panel-content>
            </v-expansion-panel>
            <v-expansion-panel>
              <v-expansion-panel-header>
                <h3 id="h3">En Desarrollo</h3>
              </v-expansion-panel-header>
              <v-expansion-panel-content>
                <p>
                  A continuación te presentamos los links de todos los sistemas que tu servidor ha desarrollado total o por módulos.
                </p>
                <Desarrollo :ent-sys="desarrollo"/>
              </v-expansion-panel-content>
            </v-expansion-panel>
          </v-expansion-panels>
        </div>  
      </v-card-text>
    </v-card>
  </div>
</template>
<script>
  import HeaderCard from '../components/HeaderCard.vue';
  import Laboral from '../components/Laboral.vue';
  import Freelance from '../components/Freelance.vue';
  import Universidad from '../components/Universidad.vue';
  import Desarrollo from '../components/desarrollo.vue';
  export default {
    components: {
      HeaderCard,
      Laboral,
      Freelance,
      Universidad,
      Desarrollo
    },
    data:()=>({
      image: 'http://localhost/gcc_site/public/img/menu/port.png',
      title: 'Portafolio',
      //CARGA
      laboral: [],
      freelance: [],
      universidad: [],
      desarrollo: []
    }),
    //
    mounted(){
      //UNIVERSIDAD
      axios
      .get('laboral/')
      .then((res) => {
        this.laboral = res.data;
      });
      //UNIVERSIDAD
      axios
      .get('freelance/')
      .then((res) => {
        this.freelance = res.data;
      });
      //UNIVERSIDAD
      axios
      .get('universitario/')
      .then((res) => {
        this.universidad = res.data;
      });
      //UNIVERSIDAD
      axios
      .get('desarrollo/')
      .then((res) => {
        this.desarrollo = res.data;
      });
    }
  }
</script>
<style lang="scss" scoped>
  .theme--light.v-expansion-panels .v-expansion-panel {
    background-color: transparent;
    color: #fff;
  }
</style>