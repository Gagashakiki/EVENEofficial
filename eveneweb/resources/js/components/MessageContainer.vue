<script>
  import ContactList from './ContactListComponent';
  import Chat from './ChatContainer';

  export default {
    components: { Chat, ContactList },
    mounted() {
      console.log('Component mounted.')
    },
    props: {
      assetUrl: {
        type: String,
        required: true,
      },
      contacts: {
        type: Array,
        required: true,
      }
    },
    data() {
      return {
        selectedContact: this.contacts[0].roomId
      }
    },
    methods: {
      onSelectContact(roomId){
        this.selectedContact = roomId;
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
        <ContactList
          :contact-list="contacts"
          :assetUrl="assetUrl"
          :selectedContact="selectedContact"
          :onSelectContact="onSelectContact"
        />
        <Chat />
      </div>
    </div>
  </div>
</template>
