<template>
  <div id="curriculum">
    <v-card id="card" max-width="100%" class="mx-auto">
      <HeaderCard :image-comp="image" :title-comp="title"/>
      <!--Contacto content-->    
      <v-card-text>
        <div class="card_info">
          <div class="card_pdf">
            <iframe :src="pdf" type="application/pdf" width="100%" height="520px"/>
          </div>
          <div class="mt-0 text-right">
            <v-btn color="#eeb213" outlined small :href="pdfd" download="cv_cris_gc">Descargar</v-btn>
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
      image: 'https://miespaciolaureate.mx/gcc_site/public/img/menu/cv.png',
      title: 'Curriculum',
      pdf: 'https://miespaciolaureate.mx/gcc_site/public/docs/cv_gcc.pdf#view=fit&toolbar=0&navpanes=0',
      pdfd: 'https://miespaciolaureate.mx/gcc_site/public/docs/cv_gcc.pdf'
    }),
  }
</script>