<template>
  <div class="chat-container">
    <chat-messages :messages=messages></chat-messages>
  </div>
</template>

<script>
import ChatMessages from '@/Components/ChatMessages.vue'

export default {
  components: {
    ChatMessages,
  },

  props: {
    messages: Object,
    auth: Object,
    errors: Object,
  },
};
</script>


<style scoped>
.chat-container{
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