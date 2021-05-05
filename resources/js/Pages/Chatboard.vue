<template>
  <breeze-authenticated-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Chatboard
      </h2>
    </template>

    <div class="chat-container">
      <chat-messages :messages="messages"></chat-messages>
      <chat-form></chat-form>
    </div>
  </breeze-authenticated-layout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated";
import ChatMessages from "@/Components/ChatMessages.vue";
import ChatForm from "@/Components/ChatForm.vue";

/**
 * This component will display the Chat.
 */
export default {
  components: {
    ChatMessages,
    ChatForm,
    BreezeAuthenticatedLayout,
  },

  props: {
    /**
     * The message object to be displayed.
     */
    messages: Object,
    /**
     * The current user.
     */
    auth: Object,
    /**
     * Errors from rendering.
     */
    errors: Object,
  },
};
</script>


<style scoped>
.chat-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  min-height: 100vh;
  margin-left: 25%;
  margin-right: 25%;
  background-color: grey;
}
</style>