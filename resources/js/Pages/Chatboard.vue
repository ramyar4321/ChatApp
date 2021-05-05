<template>
  <div class="chat-container">
    <chat-messages :messages="messages"></chat-messages>
    <chat-form></chat-form>
  </div>
</template>

<script>
import ChatMessages from "@/Components/ChatMessages.vue";
import ChatForm from "@/Components/ChatForm.vue";

/**
 * This component will display the Chat.
 */
export default {
  components: {
    ChatMessages,
    ChatForm,
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