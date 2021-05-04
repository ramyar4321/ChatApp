<template>
  <div class="chat-container">
    <chat-messages :messages="chatMessages"></chat-messages>
    <chat-form @messagesent="addMessage"></chat-form>
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

  data() {
    return {
      chatMessages: this.messages,
    };
  },

  methods: {

    /**
      * Add new message from Chat Form.
      * 
      * @param {String} message New message to be added to the Chat 
    */
    addMessage(message) {

      let newMessage = {
        message,
        user: this.auth.user,
        created_at: "",
      };

      this.chatMessages.push(newMessage);
    },
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