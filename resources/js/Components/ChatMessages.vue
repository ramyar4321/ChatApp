<template>
  <div class="chatbox">
    <ul class="chatlist">
      <li v-for="message in messages">
        <div class="chat-message">
          <div class="chat-details">
            {{message.user.name}}  {{message.created_at}}
          </div>
          <div class="chat-text">
            {{message.message}}
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
};
</script>


<style scoped>
.chatbox {
  overflow-y: scroll;
  height: 600px;
  width: 600px;
  background-color: green;
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

.chat-message{
width: 50%;
border: 1px solid #000;
text-align: left;
background-color: white;
}
</style>