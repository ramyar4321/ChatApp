<template>Hello World</template>

<script>
export default {
  props: {
    auth: Object,
    errors: Object,
  },

  mounted: function () {
    console.log("Mounted!");
  },
};
</script>


<style scoped>
</style>