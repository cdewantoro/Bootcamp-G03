<template>
  <NavbarUtama :nama="nama" angka=" 7" />
  <br><br>
  <h1>Hallo {{ nama }}</h1>
  <img alt="Vue logo" src="../assets/logo.png">
  <HelloWorld pesan="Mari belajar " :db="database" />
  <br><br>
  <input type="text" v-model="nama">
  <button @click="tes()">tes</button>
  <br>
  <br>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'
import NavbarUtama from './components/NavbarUtama.vue';

export default {
  name: 'App',
  components: {
    HelloWorld,
    NavbarUtama
  },
  data() {
    return {
      nama: 'Ucup Kanocup',
      database: [
        {
          nama: 'risa nussy',
          umur: 17
        },
        {
          nama: 'nurul hasanah',
          umur: 16
        },
        {
          nama: 'ucup kanocup',
          umur: 11
        },
      ]
    }
  },
  methods: {
    tes() {
      alert("Hallo " + this.nama);
    }
  }
}
</script>

<style>
h1 {
  color: red;
}

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>
