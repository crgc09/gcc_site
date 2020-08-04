<template>
  <div id="Desarrollo">
    <div class="epc_sistemas">
      <div class="epc_sistema" v-for="(item, key) in entSys" @click="ddep = true"> 
        <img :src="item.img" class="isistema" alt="">
        <span id="h4">
          <strong>Empresa o Institución:</strong> <span>{{item.empresa}}</span>
        </span>
        <br>
        <span id="h4">
          <strong>Sistema:</strong> {{item.sistema}}
        </span>
      </div>
    </div>
    <!--MODAL DEL SISTEMA-->
      <v-dialog v-model="ddep" width="90%" persistent dark>
        <v-card>
          <v-card-title class="headline">
            <span class="title_dia">Comunicados Laureate</span>
            </v-card-title>
          <v-card-text>
            <v-row align="center">
              <v-item-group v-model="window" class="shrink" mandatory tag="v-flex">
                <v-item v-for="n in length" :key="n" v-slot:default="{ active, toggle }">
                  <div>
                    <v-btn icon :input-value="active" @click="toggle">
                      <v-icon>mdi-record</v-icon>
                    </v-btn>
                  </div>
                </v-item>
              </v-item-group>
              <v-col>
                <v-window v-model="window">
                  <!--TECNOLOGIA-->
                    <v-window-item>
                      <v-card flat>
                        <v-card-text>
                          <div class="cont_dia">
                            <div class="info_dia">
                              <v-row class="mb-4" align="center">
                                <span class="subtitle_dia">Tecnología</span>
                                <v-spacer></v-spacer>
                              </v-row>
                              <div>
                                <h4 id="h4">Frontend</h4>
                                <div class="cinfo">
                                  <p>{{infoSys[0].frontend}}</p>
                                </div>
                                <h4 id="h4">Backend</h4>
                                <div class="cinfo">
                                  <p>{{infoSys[0].backend}}</p>
                                </div>
                                <h4 id="h4">Base de datos</h4>
                                <div class="cinfo">
                                  <p>{{infoSys[0].base}}</p>
                                </div>
                              </div>
                            </div>
                            <div class="img_dia">
                              <img class="ip_dia" src="http://localhost/gcc_site/public/img/sistemas/comunicados.png" alt="">
                            </div>
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-window-item>  
                  <!--FICHA-->
                    <v-window-item>
                      <v-card flat>
                        <v-card-text>
                          <div class="contu_dia">
                            <div class="infoup_dia">
                              <v-row class="mb-4" align="center">
                                <span class="subtitle_dia">Datos del proyecto</span>
                                <v-spacer></v-spacer>
                              </v-row>
                              <div>
                                <h4 id="h4">Responsabilidades</h4>
                                <div class="cinfo" v-html="infoSys[0].responsabilidades"></div>
                                <h4 id="h4">Módulos o tareas desarrolladas</h4>
                                <div class="cinfo" v-html="infoSys[0].tareas"></div>
                                <h4 id="h4">Fecha de inicio</h4>
                                <div class="cinfo" v-html="infoSys[0].tiempo"></div>
                              </div>
                            </div>
                            <div class="infous_dia">
                              <v-row class="mb-4" align="center">
                                <span class="subtitle_dia">Datos del sistema</span>
                                <v-spacer></v-spacer>
                              </v-row>
                              <div>
                                <h4 id="h4">Objetivos</h4>
                                <div class="cinfo" v-html="infoSys[0].descripcion"></div>
                                <h4 id="h4">Descripción</h4>
                                <div class="cinfo" v-html="infoSys[0].descripcion"></div>
                              </div>
                            </div>
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-window-item>
                </v-window>
              </v-col>
            </v-row>
          </v-card-text>
          <v-card-actions id="card_buttons">
            <v-btn color="#eeb213" text @click="closeDD">Cerrar</v-btn>
          </v-card-actions>
        </v-card>
      </v-dialog>
  </div>
</template>
<script>
  export default {
    name: 'Desarrollo',
    props: [
      'entSys',
    ],
    data:()=>({
      infoSys: [
        {
          frontend: 'HTML5, CSS3, JS, Vue JS, Element IO',
          backend: 'PHP - Laravel',
          base: 'MySQL',
          responsabilidades: '<p>Diseño y desarrollo del frontend, backend, base de datos, junto con el despliegue en el servidor.</p>',
          tareas: '<p>Todos los módulos</p>',
          tiempo: '<p>Toda la duración del proyecto</p>',
          fecha: '<p>28-Agosto-2019</p>',
          descripcion: '<p>Sistema de información para los ciclos de ponencia de ingeniería ambiental. Proporcionando las bases para dicha convocatoria.</p>',
          direccion: 'SIN DIRECCIÓN ASIGNADA',
        }
      ],
      ddep: false,
      length: 2,
      window: 0,
    }),
    methods: {
      closeDD(){
        this.window = 0;
        this.ddep = false;
      }
    }
  }
</script>