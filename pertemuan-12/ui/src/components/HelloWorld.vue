<template>
  <div class="hello">
    <h1>{{ pesan + 'Terbaik' }}</h1>
    <p>
      For a guide and recipes on how to configure / customize this project,<br>
      check out the
      <a href="https://cli.vuejs.org" target="_blank" rel="noopener">vue-cli documentation</a>.
    </p>
    <h3>Mari belajar VUE bersama</h3>
    <br><br>
    <!-- <section>
      <div v-for="(data, index) in db" :key="index">
        <ul>
          <li>nama: {{ data.nama }}</li>
          <li>umur: {{ data.umur }}</li>
        </ul>
      </div>
    </section> -->
    <section>
      <table border="1" cellpadding="10" cellspacing="0" align="center">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
          </tr>
        </thead>
        <tbody v-for="(data, index) in db" :key="index">
          <tr>
            <td>{{ index + 1 }}</td>
            <td>{{ data.nama }}</td>
            <td>{{ data.nama }}</td>
          </tr>
        </tbody>
      </table>
    </section>

  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    pesan: String,
    db: Array
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;

}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}
</style>
