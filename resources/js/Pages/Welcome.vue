<template>
  <div class="container">
    <div class="card">
        <div class="welcome">
                Welcome
        </div>
        <div class="message">
            To use the chat app please sign
        </div>
      <div class="routes">
        <inertia-link :href="route('login')" as="button" type="button" class="login"> Log in </inertia-link>

        <inertia-link v-if="canRegister" :href="route('register')" as="button" type="button" class="register">
          Register
        </inertia-link>
      </div>
    </div>
  </div>
</template>

<style scoped>
.container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  min-height: 100vh;
  background-color: grey;
}

.card {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
  text-align: center;
  height: 65vh;
  width: 50%;
  background-color: white;
  margin-left: 10px;
  margin-right: 10px;
  margin-top: 20px;
}

.welcome {
    font-size: 70px;
    color: green;
    margin-top: 100px;
}

.message{
}

.routes{
    margin-bottom: 100px;
}

.login{
    /* padding: 10px 20px; */
    width: 80px;
    height: 50px;
    margin-right: 30px;
    background-color:greenyellow;
    border-radius: 5px;
}

.register{
    /* padding: 10px 20px; */
    width: 80px;
    height: 50px;
    margin-left: 30px;
    background-color:rgb(102, 161, 12);
    border-radius: 5px;
}

</style>

<script>
export default {
  props: {
    auth: Object,
    canLogin: Boolean,
    canRegister: Boolean,
    errors: Object,
    laravelVersion: String,
    phpVersion: String,
  },
};
</script>
