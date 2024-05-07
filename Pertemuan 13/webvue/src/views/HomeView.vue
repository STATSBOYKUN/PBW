<template>
  <div class="home">
    <img alt="STIS logo" src="../assets/up.png">
    <STIS msg="Project Web STIS"/>
  </div>
</template>

<script>
// @ is an alias to /src
import STIS from '@/components/STIS.vue'

export default {
  name: 'HomeView',
  components: {
    STIS
  }
}
</script>

<style scoped>
img {
  width: 200px;
  height: 200px;
  margin: 40px;
}

</style>