<script>
  import ContactList from './ContactListComponent';
  import Chat from './ChatContainer';
  import axios from 'axios';

  export default {
    components: { Chat, ContactList },
    mounted() {
      this.onGetMessages();
    },
    props: {
      contacts: {
        type: Array,
        required: true,
      },
      currentUser: {
        type: Number,
        required: true,
      }
    },
    data() {
      return {
        selectedContact: this.contacts[0].roomId,
        messages: []
      }
    },
    methods: {
      onSelectContact(roomId){
        this.selectedContact = roomId;

        this.onGetMessages();
      },
      onGetMessages() {
        axios.get('/api/messages/' + this.selectedContact)
        .then(response => {
          this.messages = response.data;
        })
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
          :selectedContact="selectedContact"
          :onSelectContact="onSelectContact"
        />
        <Chat
          :current-user="currentUser"
          :messages="messages"
        />
      </div>
    </div>
  </div>
</template>
