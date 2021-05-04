<template>
  <form @submit.prevent="submit">
    <input input type="text" name="message"  class="send-message-input" placeholder="Type a message" v-model="newMessage" @keyup.enter="sendMessage" />
    <button type="submit" @click="sendMessage">Submit</button>
  </form>
</template>

<script>
export default {
    data(){
    return {
      newMessage: '',
    }
  },

  methods: {

      /**
        * Trigger when a new message is sent via input field.
        * Emit the new message to parent component Chatboard to be
        * displayed in Chat.
        * 
      */
      sendMessage () {
          /**
         * messagesent event.
         *
         * @event messagesent
         * @type {String}
         */
          this.$emit('messagesent', this.newMessage);

          // Reset message input field to empty string
          this.newMessage = '';
      }
  }
};
</script>

<style scoped>
</style>