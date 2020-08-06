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
                <strong>Un poco de mi</strong>
              </h3>
              <p class="mt-4">
                Mi nombre es <strong>Cristóbal</strong>, nací el 26 de julio de 1990 en la Ciudad de México, ciudad donde he vivido toda mi vida.
              </p>
              <p>
                Me considero una persona bastante racional, a la cual no le da miedo decir lo que piensa, ya que siempre he creido que <b>Al toro siempre por los cuernos</b>, soy perseverante y me gusta saber que lo que tengo y lo qu he logrado ha sido por mi esfuerzo.
              </p>
              <p>
                Me gustan las personas que son congruentes, leales y sarcásticas (Por que hasta para eso hay que ser inteligente). Creo en la amistad y soy fiel creyente de que las personas que se cruzan por nuestro camino ya sea por un tiempo o toda la vida son las personas corractas, ya que tiene algo que enseñarnos. 
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
      image: 'http://localhost/gcc_site/public/img/menu/me.png',
      title: 'Acerca de',
      intro: 'Muchas gracias por visitar el sitio, ya que es un poquito de lo que hago',

      //
      title1: 'Top teen de logros',
      done: [],
      title2: '¿Que me gusta?',
      doing: [],
      title3: '¿Que me gustaria hacer?',
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