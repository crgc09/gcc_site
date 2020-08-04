<template>
  <div id="contacto">
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
                  <v-btn color="#eeb213" outlined small @click="reset">Enviar</v-btn>
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
      msg: '<p>Muchas gracias por darte el tiempo necesario para visitar el sitio. Esto es una pequeña muestra de lo que me gusta hacer, espero te haya sido de tu agrado y ¿Por qué no?, quizas algún día podamos trabajar en un proyecto.</p><p>En la siguiente sección puedes enviarme un email para darme tu opinión o para estar en contacto. Me gustaría saber de ti, y no dudes en darte una vuelta en mis redes sociales.</p><p>Por favor llena los campos del formulario de manera correcta, ya que el campo de <strong>email</strong> tiene una validación de formato de una cuenta de correo electrónico, el campo de <strong>nombre</strong> solo letras mayúsculas, minúsculas, puntos, y espacios y el campos de <strong>comentarios</strong> admite texto algunos caracteres especiales ()</p>',
      valid: true,
      name: '',
      nameRules: [
        v => !!v || 'El nombre es requerido',
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
        v => /.+@.+\..+/.test(v) || 'Formato invalido',
      ]
    }),

    methods: {
      validate () {
        this.$refs.form.validate()
      },
      reset () {
        this.$refs.form.reset()
      },
    }

  }
</script>