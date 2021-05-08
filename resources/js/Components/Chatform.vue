<template>
  <form @submit.prevent="submit">
    <div class="flex justify-between bg-green-400">
      <breeze-input
        id="newMessage"
        type="text"
        class="ml-1 block w-3/4"
        v-model="form.newMessage"
        required
        autocomplete="new-message"
      />
      <breeze-button
        :class="{ 'opacity-25': form.processing }"
        :disabled="form.processing"
      >
        Send
      </breeze-button>
    </div>
  </form>
</template>

<script>
import BreezeButton from "@/Components/Button";
import BreezeInput from "@/Components/Input";

export default {
  components: {
    BreezeButton,
    BreezeInput,
  },

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
    submit() {
      this.$inertia.post("/messages", this.form, {
        onFinish: () => this.form.reset("newMessage"),
      });
    },
  },
};
</script>

<style scoped>
</style>