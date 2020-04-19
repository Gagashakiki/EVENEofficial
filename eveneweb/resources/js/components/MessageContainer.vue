<script>
  import ContactList from './ContactListComponent';
  import Chat from './ChatContainer';

  export default {
    components: { Chat, ContactList },
    mounted() {
      console.log('Component mounted.')
    },
    props: {
      image: {
        type: String,
      }
    }
  }
</script>

<style scoped>
  .messaging {
    height: 70vh;
    margin-bottom: 3rem;
    border: 1px solid #c4c4c4;
    clear: both;
    overflow: hidden;
    display: flex;
  }
</style>

<template>
  <div class="container">
    <div class="container mt-5">
      <div class="messaging">
        <ContactList :contact-avatar="image"/>
        <Chat />
      </div>
    </div>
  </div>
</template>
