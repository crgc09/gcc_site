<template>
  <div id="HeaderCard">
    <v-list-item>
      <v-list-item-avatar id="card_avatar" color="white">
        <img :src="imageComp">
      </v-list-item-avatar> 
      <h2 id="h2" class="card_title">{{titleComp}}</h2>
    </v-list-item>
  </div>
</template>
<script>
  export default {
    name: 'HeaderCard',
    props: [
      'imageComp',
      'titleComp'
    ]
  }
</script>
<style lang="scss" scoped>
  .v-card__subtitle, .v-card__text, .v-card__title {
    padding: 4px 16px 16px 16px;
  }
</style>