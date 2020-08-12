<template>
  <div id="acerca">
    <v-card id="card" max-width="100%" class="mx-auto">
      <HeaderCard :image-comp="image" :title-comp="title"/>
      <!--Acerca content-->    
      <v-card-text id="vct-padding">
        <div class="card_info">
          <div class="card_me">
            <div class="card_datos">
              <h3 id="h3">
                <strong>Un poco de mí</strong>
              </h3>
              <p class="mt-4">
                Mi nombre es <strong>Cristóbal</strong>. Nací un 26 de Julio en nuestro antigüo Distrito Federal (sí, aquí se delata mi edad). Soy Chilango de corazón y desarrollador de profesión. 
              </p>
              <p>
                Me encanta viajar, bailar y soy amante de las emociones fuertes.
                Soy una persona creativa, pero a la vez racional; soñadora pero también calculadora y siempre honesto, directo y leal a mis creencias y convicciones. Soy perseverante, con ambición, humildad, pero sobre todo con ganas de disfrutar de las cosas que he logrado y por las que he trabajado.
              </p>
              <p>
                Me gustan las personas congruentes, leales y sarcásticas <i>(Por que hasta para eso hay que ser inteligente)</i>.
                Creo en la amistad y en el trabajo en equipo; y aunque reconozco que tiendo a ser un hombre puntual y perfeccionista, sé que con comunicación nos podemos entender y las cosas siempre pueden funcionar.
              </p>
              <HexaGrid :list-comp="done" :title-comp="title1"/>
            </div>
            <div class="card_extra">
              <HexaGrid :list-comp="doing" :title-comp="title2"/>
              <HexaGrid :list-comp="todo" :title-comp="title3"/>
            </div>
          </div>
        </div>  
      </v-card-text>
    </v-card>
  </div>
</template>
<script>
  import HeaderCard from '../components/HeaderCard.vue';
  import HexaGrid from '../components/HexaGrid.vue';
  export default {
    components: {
      HeaderCard,
      HexaGrid
    },
    data:()=>({
      image: 'https://miespaciolaureate.mx/gcc_site/public/img/menu/me.png',
      title: 'Acerca de',
      intro: 'Muchas gracias por visitar el sitio, ya que es un poquito de lo que hago',

      //
      title1: 'Logros',
      done: [],
      title2: '¿Qué me gusta?',
      doing: [],
      title3: '¿Qué me gustaría hacer?',
      todo: []
    }),
    mounted(){
      //DONE
      axios
      .get('done/')
      .then((res) => {
        this.done = res.data;
      });
      //DOING
      axios
      .get('doing/')
      .then((res) => {
        this.doing = res.data;
      });
      //TO DO
      axios
      .get('todo/')
      .then((res) => {
        this.todo = res.data;
      });
    }
  }
</script>