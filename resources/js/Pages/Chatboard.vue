<template>
  <breeze-authenticated-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Chatboard
      </h2>
    </template>

    <!-- Chat App container -->
    <div class="sm max-w-full md:flex md:justify-center" id="chat">
      <div class="md:w-1/3">
        <chat-header></chat-header>
        <chat-messages :messages="messages"></chat-messages>
        <chat-form></chat-form>
      </div>
    </div>
  </breeze-authenticated-layout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated";
import ChatHeader from "@/Components/ChatHeader.vue";
import ChatMessages from "@/Components/ChatMessages.vue";
import ChatForm from "@/Components/ChatForm.vue";

/**
 * This component will display the Chat.
 */
export default {
  components: {
    ChatHeader,
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