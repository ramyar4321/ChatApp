<template>
  <div id="chat-content">
    <ul class="chatlist">
      <li v-for="message in messages" :key="message.id">
        <div class="clearfix">
          <div class="bg-gray-300 w-3/4 mx-4 my-2 p-2 rounded-lg">
            <div class="flex justify-between" id="chat-details">
            <div id="chat-name">{{ message.user.name }} </div>
            <div id="chat-date">{{  message.created_at }}</div>
          </div>
          <div id="chat-text">
            {{ message.message }}
          </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: {
    /**
     * The message object to be displayed.
     */
    messages: Object,
  },
  /**
   * When Chat Messages component mounts,
   * listen for new message from other users
   * and update component with new message.
   */
  mounted() {
    window.Echo.private("chat").listen(".message.sent", (e) => {
      // Add new message to prop and trigger a re-render of component
      // thus displaying new message.
      let message = e.message;
      message.user = e.user;
      this.messages.push(message);
    });
  },

  /**
   * When Chat Messages component unmounts (such as when the user logs out),
   * leave Chat private channel and stop listening for new messages from other users.
   */
  unmounted() {
    window.Echo.leave("chat");
  },
};
</script>


<style scoped>
#chat-content {
  overflow-y: scroll;
  height: 500px;
}

/* width */
::-webkit-scrollbar {
  width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey;
  border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: red;
  border-radius: 10px;
}
</style>