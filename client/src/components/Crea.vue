<template>
  <div class="flex w-screen h-screen">
    <div class="flex flex-col h-screen w-screen">
      <form>
        <label for="comune">Comune:</label><br />
        <input type="text" id="comune" name="comune" /><br />
      </form>
      <button>Inserisci</button>
      <br />
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "Lista",
  components: {},
  data() {
    return {
      terrenos: [],
    };
  },
  async mounted() {
    this.terrenos = (
      await axios.get("http://localhost:8000/api/terrenos")
    ).data;
    console.log(this.terrenos);
  },
};
</script>
