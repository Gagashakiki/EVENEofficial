<script>
  import ContactList from './ContactListComponent';
  import Chat from './ChatContainer';

  export default {
    components: { Chat, ContactList },
    mounted() {
      this.messages = [
        { senderId: 40, message: "Halo", createdAt: "2020-04-17 23:29:09" },
        { senderId: 36, message: "Halo Juga", createdAt: "2020-04-17 23:29:09" },
        { senderId: 40, message: "Mau Tanya Boleh ??", createdAt: "2020-04-17 23:29:09" },
      ];
    },
    props: {
      assetUrl: {
        type: String,
        required: true,
      },
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
        <Chat
          :current-user="currentUser"
          :messages="messages"
        />
      </div>
    </div>
  </div>
</template>
