<template>
  <form @submit.prevent="submit">
    <input
      input
      type="text"
      name="message"
      class="send-message-input"
      placeholder="Type a message"
      v-model="form.newMessage"
      @keyup.enter="saveMessage"
    />
    <button type="submit" @click="saveMessage">Submit</button>
  </form>
</template>

<script>
export default {
  data() {
    return {
      form: this.$inertia.form({
        newMessage: "",
      }),
    };
  },

  methods: {
    /**
     * Save message to database.
     * Then reset message field to empty string.
     *
     */
    saveMessage() {
      this.$inertia.post("/messages", this.form, {
        onFinish: () => this.form.reset("newMessage"),
      })
    },
  },
};
</script>

<style scoped>
</style>