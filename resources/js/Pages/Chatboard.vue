<template>
    <chat-message :messages="messages"></chat-message>
    <chat-form></chat-form>   
</template>

<script>
import Chatmessage from '@/Components/Chatmessage';
import Chatform from '@/Components/Chatform';

export default({
    components: {
        Chatform,
        Chatmessages,
    },
    props: {
    messages: Object,
    auth: Object,
    errors: Object,
  },
})
</script>


<style scoped>

</style>