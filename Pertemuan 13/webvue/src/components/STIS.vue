<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <p>
      Selamat datang di project Web STIS <br />
      yang dibuat menggunakan Vue.js
    </p>

    <footer>
      <p>
        Copyright 2023 Politeknik Statistika STIS <br />
        Created by Umar Hadi Pranoto (<a href="#">222112404@stis.ac.id</a>)
      </p>
    </footer>
  </div>
</template>

<script>
export default {
  name: "STIS",
  props: {
    msg: String,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
a {
  color: #42b983;
}
</style>
