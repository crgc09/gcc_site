<template>
  <div id="home">
    <v-card id="card" max-width="100%" class="mx-auto">
      <HeaderCard :image-comp="image" :title-comp="title"/>
      <!--Home content-->    
      <v-card-text id="vct-padding">
        <div class="card_info">
          <div class="card_home">
            <div class="card_description" v-html="msg">
            </div>
            <div class="card_options">
              <v-stepper id="options" v-model="control" vertical dark>
                <v-stepper-step :complete="control > 1" step="1">
                  Home
                </v-stepper-step>
                <v-stepper-content step="1">
                  <v-card color="transparent" class="mb-4" height="auto">
                    <div class="card_stepper">
                      <div class="card_im1">
                        <img class="card_ip1" src="https://miespaciolaureate.mx/gcc_media/pages/home1.png" alt="">
                      </div>
                      <div class="card_im2">
                        <img class="card_ip2" src="https://miespaciolaureate.mx/gcc_media/pages/home2.png" alt="">
                      </div>
                      <div class="card_dim">
                        Esta es la página de bienvenida y puedes acceder a ella a través del botón "Home" ubicado en la primera posición del menú.
                      </div>
                    </div>
                  </v-card>
                  <div class="text-right">
                    <v-btn icon color="#eeb213" @click="control = 6">
                      <v-icon>mdi-arrow-left-drop-circle-outline</v-icon>
                    </v-btn>
                    <v-btn icon color="#eeb213" @click="control = 2">
                      <v-icon>mdi-arrow-right-drop-circle-outline</v-icon>
                    </v-btn>
                  </div>
                </v-stepper-content>

                <v-stepper-step :complete="control > 2" step="2">
                  Acerca de
                </v-stepper-step>
                <v-stepper-content step="2">
                  <v-card color="transparent" class="mb-4" height="auto">
                    <div class="card_stepper">
                      <div class="card_im1">
                        <img class="card_ip1" src="https://miespaciolaureate.mx/gcc_media/pages/acerca1.png" alt="">
                      </div>
                      <div class="card_im2">
                        <a href="http://localhost/gcc_site/acerca_de">
                          <img class="card_ip2" src="https://miespaciolaureate.mx/gcc_media/pages/acerca2.png" alt="">  
                        </a>
                      </div>
                      <div class="card_dim">
                        <strong>Acerca de:</strong> es la página que te explica quién es tu servidor, de una forma más personal. Y puedes acceder a ella a través del botón "Acerca de" ubicado en la segunda posición del menú.
                      </div>
                    </div>
                  </v-card>
                  <div class="text-right">
                    <v-btn icon color="#eeb213" @click="control = 1">
                      <v-icon>mdi-arrow-left-drop-circle-outline</v-icon>
                    </v-btn>
                    <v-btn icon color="#eeb213" @click="control = 3">
                      <v-icon>mdi-arrow-right-drop-circle-outline</v-icon>
                    </v-btn>
                  </div>
                </v-stepper-content>

                <v-stepper-step :complete="control > 3" step="3">
                  Educación
                </v-stepper-step>
                <v-stepper-content step="3">
                  <v-card color="transparent" class="mb-4" height="auto">
                    <div class="card_stepper">
                      <div class="card_im1">
                        <img class="card_ip1" src="https://miespaciolaureate.mx/gcc_media/pages/educacion1.png" alt="">
                      </div>
                      <div class="card_im2">
                        <a href="http://localhost/gcc_site/educacion">
                          <img class="card_ip2" src="https://miespaciolaureate.mx/gcc_media/pages/educacion2.png" alt="">
                        </a>
                      </div>
                      <div class="card_dim">
                        <strong>Educacción:</strong> es la página donde se proporciona el historial académico, junto con la información de las instituciones que se van mencionando. Puedes acceder a ella a través del botón "Educación" ubicado en la tercera posición del menú.
                      </div>
                    </div>
                  </v-card>
                  <div class="text-right">
                    <v-btn icon color="#eeb213" @click="control = 2">
                      <v-icon>mdi-arrow-left-drop-circle-outline</v-icon>
                    </v-btn>
                    <v-btn icon color="#eeb213" @click="control = 4">
                      <v-icon>mdi-arrow-right-drop-circle-outline</v-icon>
                    </v-btn>
                  </div>
                </v-stepper-content>

                <v-stepper-step :complete="control > 4" step="4">
                  Portafolio
                </v-stepper-step>
                <v-stepper-content step="4">
                  <v-card color="transparent" class="mb-4" height="auto">
                    <div class="card_stepper">
                      <div class="card_im1">
                        <img class="card_ip1" src="https://miespaciolaureate.mx/gcc_media/pages/portafolio1.png" alt="">
                      </div>
                      <div class="card_im2">
                        <a href="http://localhost/gcc_site/portafolio">
                          <img class="card_ip2" src="https://miespaciolaureate.mx/gcc_media/pages/portafolio2.png" alt="">
                        </a>
                      </div>
                      <div class="card_dim">
                        <strong>Portafolio:</strong> es la compilación de todos los proyectos donde tu servidor ha tenido participación, ya sea total o parcial, junto con sus objetivos y descripción de la tecnología con la que esta desarrollado. Puedes acceder a ella a través del botón "Portafolio" ubicado en la cuarta posición del menú.
                      </div>
                    </div>
                  </v-card>
                  <div class="text-right">
                    <v-btn icon color="#eeb213" @click="control = 3">
                      <v-icon>mdi-arrow-left-drop-circle-outline</v-icon>
                    </v-btn>
                    <v-btn icon color="#eeb213" @click="control = 5">
                      <v-icon>mdi-arrow-right-drop-circle-outline</v-icon>
                    </v-btn>
                  </div>
                </v-stepper-content>
                
                <v-stepper-step  :complete="control > 5" step="5">
                  Curriculum
                </v-stepper-step>
                <v-stepper-content step="5">
                  <v-card color="transparent" class="mb-4" height="auto">
                    <div class="card_stepper">
                      <div class="card_im1">
                        <img class="card_ip1" src="https://miespaciolaureate.mx/gcc_media/pages/curriculum1.png" alt="">
                      </div>
                      <div class="card_im2">
                        <a href="http://localhost/gcc_site/curriculum">
                          <img class="card_ip2" src="https://miespaciolaureate.mx/gcc_media/pages/curriculum2.png" alt="">
                        </a>
                      </div>
                      <div class="card_dim">
                        <strong>Curriculum:</strong> es la presentación del curriculum vitae de tu servidor en formato pdf. Puedes acceder a ella a través del botón "Curriculum" ubicado en la quinta posición del menú.
                      </div>
                    </div>
                  </v-card>
                  <div class="text-right">
                    <v-btn icon color="#eeb213" @click="control = 4">
                      <v-icon>mdi-arrow-left-drop-circle-outline</v-icon>
                    </v-btn>
                    <v-btn icon color="#eeb213" @click="control = 6">
                      <v-icon>mdi-arrow-right-drop-circle-outline</v-icon>
                    </v-btn>
                  </div>
                </v-stepper-content>

                <v-stepper-step step="6">
                  Contacto
                </v-stepper-step>
                <v-stepper-content step="6">
                  <v-card color="transparent" class="mb-4" height="auto">
                    <div class="card_stepper">
                      <div class="card_im1">
                        <img class="card_ip1" src="https://miespaciolaureate.mx/gcc_media/pages/contacto1.png" alt="">
                      </div>
                      <div class="card_im2">
                        <a href="http://localhost/gcc_site/contacto">
                          <img class="card_ip2" src="https://miespaciolaureate.mx/gcc_media/pages/contacto2.png" alt="">
                        </a>
                      </div>
                      <div class="card_dim">
                        <strong>Contacto:</strong> es un breve formulario de contacto, con el que tu servidor reciboe un email de tu parte, ya sea para mantener contacto, para propuestas freelance o laborales. Puedes acceder a ella a través del botón "Contacto" ubicado en la sexta posición del menú.
                      </div>
                    </div>
                  </v-card>
                  <div class="text-right">
                    <v-btn icon color="#eeb213" @click="control = 5">
                      <v-icon>mdi-arrow-left-drop-circle-outline</v-icon>
                    </v-btn>
                    <v-btn icon color="#eeb213" @click="control = 1">
                      <v-icon>mdi-arrow-right-drop-circle-outline</v-icon>
                    </v-btn>
                  </div>
                </v-stepper-content>
                <!--
                  <v-stepper-step :complete="control > 1" step="1">
                    {{opciones[0].opcion}}
                  </v-stepper-step>
                  <v-stepper-content step="1">
                    <v-card color="transparent" class="mb-4" height="auto">
                      <div class="card_stepper">
                        <div class="card_im1">
                          <img class="card_ip1" :src="opciones[0].img_1" alt="">
                        </div>
                        <div class="card_im2">
                          <img class="card_ip2" :src="opciones[0].img_2" alt="">
                        </div>
                        <div class="card_dim" v-html="opciones[0].descripcion"></div>
                      </div>
                    </v-card>
                    <div class="text-right">
                      <v-btn icon color="#eeb213" @click="control = 6">
                        <v-icon>mdi-arrow-left-drop-circle-outline</v-icon>
                      </v-btn>
                      <v-btn icon color="#eeb213" @click="control = 2">
                        <v-icon>mdi-arrow-right-drop-circle-outline</v-icon>
                      </v-btn>
                    </div>
                  </v-stepper-content>
                  <v-stepper-step :complete="control > 2" step="2">
                    {{opciones[1].opcion}}
                  </v-stepper-step>
                  <v-stepper-content step="2">
                    <v-card color="transparent" class="mb-4" height="auto">
                      <div class="card_stepper">
                        <div class="card_im1">
                          <img class="card_ip1" :src="opciones[1].img_1" alt="">
                        </div>
                        <div class="card_im2">
                          <a :href="opciones[1].url">
                            <img class="card_ip2" :src="opciones[1].img_2" alt="">  
                          </a>
                        </div>
                        <div class="card_dim" v-html="opciones[1].descripcion"></div>
                      </div>
                    </v-card>
                    <div class="text-right">
                      <v-btn icon color="#eeb213" @click="control = 1">
                        <v-icon>mdi-arrow-left-drop-circle-outline</v-icon>
                      </v-btn>
                      <v-btn icon color="#eeb213" @click="control = 3">
                        <v-icon>mdi-arrow-right-drop-circle-outline</v-icon>
                      </v-btn>
                    </div>
                  </v-stepper-content>
                  <v-stepper-step :complete="control > 3" step="3">
                    {{opciones[2].opcion}}
                  </v-stepper-step>
                  <v-stepper-content step="3">
                    <v-card color="transparent" class="mb-4" height="auto">
                      <div class="card_stepper">
                        <div class="card_im1">
                          <img class="card_ip1" :src="opciones[2].img_1" alt="">
                        </div>
                        <div class="card_im2">
                          <a :href="opciones[2].url">
                            <img class="card_ip2" :src="opciones[2].img_2" alt="">  
                          </a>
                        </div>
                        <div class="card_dim" v-html="opciones[2].descripcion"></div>
                      </div>
                    </v-card>
                    <div class="text-right">
                      <v-btn icon color="#eeb213" @click="control = 2">
                        <v-icon>mdi-arrow-left-drop-circle-outline</v-icon>
                      </v-btn>
                      <v-btn icon color="#eeb213" @click="control = 4">
                        <v-icon>mdi-arrow-right-drop-circle-outline</v-icon>
                      </v-btn>
                    </div>
                  </v-stepper-content>
                  <v-stepper-step :complete="control > 4" step="4">
                    {{opciones[3].opcion}}
                  </v-stepper-step>
                  <v-stepper-content step="4">
                    <v-card color="transparent" class="mb-4" height="auto">
                      <div class="card_stepper">
                        <div class="card_im1">
                          <img class="card_ip1" :src="opciones[3].img_1" alt="">
                        </div>
                        <div class="card_im2">
                          <a :href="opciones[3].url">
                            <img class="card_ip2" :src="opciones[3].img_2" alt="">  
                          </a>
                        </div>
                        <div class="card_dim" v-html="opciones[3].descripcion"></div>
                      </div>
                    </v-card>
                    <div class="text-right">
                      <v-btn icon color="#eeb213" @click="control = 3">
                        <v-icon>mdi-arrow-left-drop-circle-outline</v-icon>
                      </v-btn>
                      <v-btn icon color="#eeb213" @click="control = 5">
                        <v-icon>mdi-arrow-right-drop-circle-outline</v-icon>
                      </v-btn>
                    </div>
                  </v-stepper-content>                
                  <v-stepper-step :complete="control > 5" step="5">
                    {{opciones[4].opcion}}
                  </v-stepper-step>
                  <v-stepper-content step="5">
                    <v-card color="transparent" class="mb-4" height="auto">
                      <div class="card_stepper">
                        <div class="card_im1">
                          <img class="card_ip1" :src="opciones[4].img_1" alt="">
                        </div>
                        <div class="card_im2">
                          <a :href="opciones[4].url">
                            <img class="card_ip2" :src="opciones[4].img_2" alt="">  
                          </a>
                        </div>
                        <div class="card_dim" v-html="opciones[4].descripcion"></div>
                      </div>
                    </v-card>
                    <div class="text-right">
                      <v-btn icon color="#eeb213" @click="control = 4">
                        <v-icon>mdi-arrow-left-drop-circle-outline</v-icon>
                      </v-btn>
                      <v-btn icon color="#eeb213" @click="control = 6">
                        <v-icon>mdi-arrow-right-drop-circle-outline</v-icon>
                      </v-btn>
                    </div>
                  </v-stepper-content>
                  <v-stepper-step step="6">
                    {{opciones[5].opcion}}
                  </v-stepper-step>
                  <v-stepper-content step="6">
                    <v-card color="transparent" class="mb-4" height="auto">
                      <div class="card_stepper">
                        <div class="card_im1">
                          <img class="card_ip1" :src="opciones[5].img_1" alt="">
                        </div>
                        <div class="card_im2">
                          <a :href="opciones[5].url">
                            <img class="card_ip2" :src="opciones[5].img_2" alt="">  
                          </a>
                        </div>
                        <div class="card_dim" v-html="opciones[5].descripcion"></div>
                      </div>
                    </v-card>
                    <div class="text-right">
                      <v-btn icon color="#eeb213" @click="control = 5">
                        <v-icon>mdi-arrow-left-drop-circle-outline</v-icon>
                      </v-btn>
                      <v-btn icon color="#eeb213" @click="control = 1">
                        <v-icon>mdi-arrow-right-drop-circle-outline</v-icon>
                      </v-btn>
                    </div>
                  </v-stepper-content>
                -->
              </v-stepper>
            </div>
          </div>
        </div>
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
      /*
      opciones: [
        {
          opcion: '',
          url: '',
          img_1: '',
          img_2: '',
          descripcion: ''
        }
      ],
      */
      image: 'http://localhost/gcc_site/public/img/menu/home.png',
      title: 'Home',
      intro: 'Visit ten places on our planet that are undergoing the biggest changes today.',
      msg: '<p>¡Hey que tal!. Mi nombre es <strong>Cris</strong> y dejame darte la bienvenido a mi sitio web.</p><p>Este sitio tiene como proposito ser un puente de comunicación con posibles colaboradores, mostrando un poco de mi tanto personal como profesionalmente, mediantes las siguientes opciones que se serán descritas a continuación.</p><p>Si te interesó o te gustó el sitio por favor házmelo saber a través de los canales que proporcionaré a continuación o por mis redes sociales, que estan en la parte inferior derecha.</p><p>Sin más preámbulos comenzamos.</p>',
      control: 1,
    }),
    /*
    mounted(){
      //OPCIONES
      axios
      .get('opciones/')
      .then((res) => {
        this.opciones = res.data;
      });
    }
    */
  }
</script>