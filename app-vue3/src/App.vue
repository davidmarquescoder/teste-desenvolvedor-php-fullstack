<template>
  <div>
    <Navbar />
    <Messages
      :v-if="$store.state.response_messages"
      :message="$store.state.response_messages"
    />
  </div>
  <RouterView />
</template>

<script setup>
import Navbar from './components/Navbar.vue'
import Messages from './components/Messages.vue'
</script>

<style scoped></style>
