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
      },
      currentUserType: {
        type: String,
        required: true,
      }
    },
    data() {
      return {
        selectedContact: this.contacts[0].roomId,
        selectedContactEmail: this.contacts[0].email,
        selectedContactName: this.contacts[0].username,
        selectedContactId: this.contacts[0].id,
        messages: []
      }
    },
    methods: {
      onSelectContact(roomId){
        this.selectedContact = roomId;
        this.selectedContactId = this.getContact(this.selectedContact).id;
        this.selectedContactEmail = this.getContact(this.selectedContact).email;
        this.selectedContactName = this.getContact(this.selectedContact).username;

        this.onGetMessages();
      },
      onGetMessages() {
        axios.get('/api/messages/' + this.selectedContact)
        .then(response => {
          this.messages = response.data;
        })
      },
      onSendMessages(message) {
        this.messages.push(message);

        axios.post('/api/message', message);
      },
      getContact: function (selectedContact) {
        return this.contacts.find(
          function(contact) {
            return contact.roomId === selectedContact;
          },
          selectedContact
        )
      },
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
          :message-room-id="selectedContact"
          :current-user-type="currentUserType"
          :current-user="currentUser"
          :messages="messages"
          :current-contact-email="selectedContactEmail"
          :current-contact-name="selectedContactName"
          :current-contact-id="selectedContactId"
          @onSendMessage="onSendMessages"
        />
      </div>
    </div>
  </div>
</template>
