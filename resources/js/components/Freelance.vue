<template>
  <div id="Freelance">
    <div class="epc_sistemas">
      <div class="epc_sistema" v-for="(item, key) in entSys" @click="dfreelance = true"> 
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
      <v-dialog v-model="dfreelance" width="100%" persistent dark>
        <v-card>
          <v-card-title class="headline">
            <span class="title_dia">Banobras</span>
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
                              <img class="ip_dia" src="http://localhost/gcc_site/public/img/sistemas/banobras.png" alt="">
                            </div>
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-window-item>
                  <!--FICHA-->
                    <v-window-item>
                      <v-card flat>
                        <v-card-text>
                          <div class="contf_dia">
                            <div class="infofp_dia">
                              <v-row class="mb-4" align="center">
                                <span class="subtitle_dia">Datos del proyecto</span>
                                <v-spacer></v-spacer>
                              </v-row>
                              <div>
                                <h4 id="h4">Responsabilidades</h4>
                                <div class="cinfo" v-html="infoSys[0].responsabilidades"></div>
                                <h4 id="h4">Módulos o tareas desarrolladas</h4>
                                <div class="cinfo" v-html="infoSys[0].tareas"></div>
                                <h4 id="h4">Tiempo de participación</h4>
                                <div class="cinfo" v-html="infoSys[0].tiempo"></div>
                              </div>
                            </div>
                            <div class="infofs_dia">
                              <v-row class="mb-4" align="center">
                                <span class="subtitle_dia">Datos del sistema</span>
                                <v-spacer></v-spacer>
                              </v-row>
                              <div>
                                <h4 id="h4">Fecha de desarrollo</h4>
                                <div class="cinfo" v-html="infoSys[0].fecha"></div>
                                <h4 id="h4">Dirección</h4>
                                <div class="cinfo" >
                                  <p>
                                    <a id="link_dia" :href="infoSys[0].direccion">{{infoSys[0].direccion}}</a>
                                  </p>
                                </div>
                                <h4 id="h4">Descripción</h4>
                                <div class="cinfo" v-html="infoSys[0].descripcion"></div>
                              </div>
                            </div>
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-window-item>
                  <!--MENU-->
                    <v-window-item>
                      <v-card flat>
                        <v-card-text>
                          <div class="cont_dia">
                            <div class="info_dia">
                              <v-row class="mb-4" align="center">
                                <span class="subtitle_dia">Menú</span>
                                <v-spacer></v-spacer>
                              </v-row>
                              <div class="cinfo" v-html="infoSys[0].menu"></div>
                            </div>
                            <div class="img_dia">
                              <img class="ip_dia" src="http://localhost/gcc_site/public/img/sistemas/banobras1.png" alt="">
                            </div>
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-window-item>
                  <!--MS1-->
                    <v-window-item>
                      <v-card flat>
                        <v-card-text>
                          <div class="cont_dia">
                            <div class="info_dia">
                              <v-row class="mb-4" align="center">
                                <span class="subtitle_dia">Modulo Muestra</span>
                                <v-spacer></v-spacer>
                              </v-row>
                              <div class="cinfo" v-html="infoSys[0].modulo_a"></div>
                            </div>
                            <div class="img_dia">
                              <img class="ip_dia" src="http://localhost/gcc_site/public/img/sistemas/banobras2.png" alt="">
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
            <v-btn color="#eeb213" text @click="closeDF">Cerrar</v-btn>
          </v-card-actions>
        </v-card>
      </v-dialog>
  </div>
</template>
<script>
  export default {
    name: 'Freelance',
    props: [
      'entSys',
    ],
    data:()=>({
      infoSys: [
        {
          frontend: 'HTML5, CSS3, JS, VueJS, BootstrapVue',
          backend: 'PHP - Laravel',
          base: 'MySQL',
          responsabilidades: '<p>Diseño y desarrollo del frontend backend.</p>',
          tareas: '<p>Todos los módulos</p>',
          tiempo: '<p>Agosto a Octubre del 2019</p>',
          fecha: '<p>28-Agosto-2019</p>',
          descripcion: '<p>Sistema de informes de tramos carreteros para el monitoreo de avances tantos físicos como financieros de la obra, por medio de la generación de reportes.</p>',
          direccion: 'https://cordina.com.mx/banobras/login',
          menu: '<ul><li><span class="lista_dia">Generar informes:</span> en esta opción se pueden levantar los informes que serán llenados por los ingenieros que se encuentren en obra, para reportar el avance carretero.</li><li><span class="lista_dia">Reportes:</span> despues de una serie de informes recopilados, es posible generar un reporte, el cual entrega una gráfica con los avances físicos y financieros tanto teórico como práctico de los avances carreteros .</li><li><span class="lista_dia">Usuario:</span> solo a los administradores les da las opciones para gestionar los contratos, superviciones, larguillos, presupuestos fuerza laboral, catálogos y usuarios del sistemas.</li></ul>',
          modulo_a: '<p>Como módulo de muestra describiremos el modulo de "Administracion". Ya que conglomera todas las opciones vitales para poder calcular los avances carreteros mediante el alta de cnotratos y superviciones para programarles determinada fuerza laboral y presupuestos. Los cuales se graficarán para visualizas las curvas de los valores teóricos contra los practicos y recabar la información necesaria para la toma de desiciones.</p><p>.</p>',
        },
      ],
      dfreelance: false,
      length: 4,
      window: 0,
    }),
    methods: {
      closeDF(){
        this.window = 0;
        this.dfreelance = false;
      }
    }
  }
</script>