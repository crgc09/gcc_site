<template>
  <div id="contacto">
    <!--Notice-->
      <v-snackbar
        v-model="notice"
        transition="scroll-y-reverse-transition"
        :timeout="5000"
        :color="colorEstatus"
        absolute
        centered
        top
      >
        <span class="noticeGeneral" v-html="msgSB"></span>
        <template v-slot:action="{ attrs }">
          <v-btn icon dark text v-bind="attrs" @click="notice = false">
            <v-icon>{{iconEstatus}}</v-icon>
          </v-btn>
        </template>
      </v-snackbar>
    <v-card id="card" max-width="100%" class="mx-auto">
      <HeaderCard :image-comp="image" :title-comp="title"/>
      <!--Contacto content-->    
        <v-card-text>
          <div class="card_info">
            <div class="card_contacto">
              <div class="card_msg" v-html="msg">
              </div>
              <div class="card_form">
                <v-form ref="form">
                  <v-text-field
                    v-model="name"
                    :counter="50"
                    :rules="nameRules"
                    label="Nombre"
                    placeholder="Jose Jose"
                    outlined
                    dark
                    required
                  ></v-text-field>

                  <v-text-field
                    v-model="email"
                    :counter="100"
                    :rules="emailRules"
                    label="E-mail"
                    placeholder="ejemplo@dominio.com"

                    outlined
                    dark
                    required
                  ></v-text-field>

                  <v-textarea
                    v-model="coment"
                    :counter="256"
                    :rules="comentRules"
                    label="Comentarios"
                    placeholder="Por favor deja tus comentarios en un maxímo de 256 caracteres"
                    outlined
                    dark
                    required
                  ></v-textarea>
                  <div class="mt-0 text-right">
                    <v-btn
                      :loading="loading"
                      :disabled="loading"
                       color="#eeb213" 
                       outlined 
                       small 
                       @click="send"
                       >
                     Enviar
                   </v-btn>
                    <v-btn color="#eeb213" outlined small @click="reset">Borrar</v-btn>  
                  </div>
                </v-form>
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
      image: 'http://localhost/gcc_site/public/img/menu/cont.png',
      title: 'Contacto',
      msg: '<p>Muchas gracias por darte el tiempo necesario para visitar "El Sitio". Esto es una pequeña muestra de lo que sé y me gusta hacer. Espero  haya sido de tu agrado y ¿por qué no?, quizas algún día podamos trabajar en algún proyecto juntos.</p><p>En la siguiente sección puedes enviar un e-mail para darme tu opinión o para estar en contacto. Me gustaría saber de ti, y no dudes en darte una vuelta por mis redes sociales.</p><p>Por favor, llena los campos del formulario de manera correcta, ya que el campo de <strong>e-mail</strong> cuenta con una validación de formato, por lo que es necesaria una cuenta de correo electrónico; el campo de <strong>nombre</strong> sólo acepta letras mayúsculas, minúsculas, puntos, y espacios; y el campo de <strong>comentarios</strong> admite texto, así como algunos caracteres especiales.</p>',
      valid: true,
      loading: false,
      notice: false,
      colorError: "#b71c1c",
      colorSuccess: "#2e7d32",
      colorEstatus: "primary",
      iconError: "mdi-close-circle-outline",
      iconSuccess: "mdi-check-circle-outline",
      iconEstatus: "mdi-alert-circle-outline",
      msgSB: '',
      name: '',
      nameRules: [
        v => !!v || 'El nombre es requerido',
        v => (/^[A-Z áéíóúÁÉÍÓÚñÑ.]+$/i).test(v) || 'Solo se admiten letras con acentos y espacios',
        v => (v && v.length <= 50) || 'El tamaño maximo debe ser de 50 characteres',
      ],
      email: '',
      emailRules: [
        v => !!v || 'El e-mail es requerido',
        v => /.+@.+\..+/.test(v) || 'Formato invalido',
        v => (v && v.length <= 100) || 'El tamaño maximo debe ser de 50 characteres',
      ],
      coment: '',
      comentRules: [
        v => !!v || 'Los comentarios son requeridos',
        v => (/^[A-Z0-9 áéíóúÁÉÍÓÚñÑ@¿?()!¡;,.]+$/i).test(v) || 'No se admiten caracteres especiales'
      ]
    }),

    methods: {
      send(){
        this.loading = true;
        let er = ['nombre','email','comentarios']; 
        let tmp='';
        let url='contacto';
        let form = {
          nombre: this.name,
          email: this.email,
          comentarios: this.coment
        }
        //
        axios
          .post(url,form)
          .then((res) => {
            this.loading = false;
            if(res.data.estatus==1){
              this.$refs.form.reset();
              this.colorEstatus = this.colorSuccess;
              this.iconEstatus = this.iconSuccess;
              this.msgSB = res.data.msg;
              this.notice = true;
            }
            else if(res.data.estatus==2){
              this.colorEstatus = this.colorError;
              this.iconEstatus = this.iconError;
              this.msgSB = res.data.msg;
              this.notice = true;
            }
            else if(res.data.estatus==0){
              for(var i=0; i<er.length; i++){
                if(res.data.msg[er[i]] != undefined){
                tmp += res.data.msg[er[i]]+'<br>';
                }
                this.colorEstatus = this.colorError;
                this.iconEstatus = this.iconError;
                this.msgSB = tmp;
                this.notice = true;
              }
            }
          })
          .catch(error => {
            this.loading = false;
            this.$refs.form.reset();
            //
            this.colorEstatus = this.colorError;
            this.iconEstatus = this.iconError;
            this.msgSB = "Ha ocurrido un error al intentar enviar el correo de contacto. Por favor intentalo más tarde.";
            this.notice = true;
          });
      },
      reset(){
        this.$refs.form.reset();
      },
    }

  }
</script>
<style lang="scss" scoped>
  .theme--light.v-btn.v-btn--disabled {
      color: #eeb213 !important;
  }
</style>