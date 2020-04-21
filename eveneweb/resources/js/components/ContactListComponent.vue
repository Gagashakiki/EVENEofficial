<script>
  import Contact from './ContactComponent';

  export default {
    name: 'ContactList',
    components: { Contact },
    props: {
      contactList: {
        type: Array,
        required: true,
      },
      selectedContact: {
        type: String,
        required: true,
      },
      onSelectContact: {
        type: Function,
        required: true,
      }
    }
  }
</script>

<style scoped>
  .contact-list {
    flex: 1;
    background: #f8f8f8 none repeat scroll 0 0;
    overflow: scroll;
    border-right: 1px solid #c4c4c4;
    height: 100%
  }
</style>

<template>
  <div class="contact-list">
    <Contact v-for="(contact, index) in contactList"
             :key="index"
             :contact-id="contact.roomId"
             :contact-avatar="'/img/avatar/' + contact.avatar"
             :contact-name="contact.username"
             :message-date="contact.createdAt"
             :message="contact.message"
             :is-selected-contact="contact.roomId === selectedContact"
             @onSelectContact="onSelectContact"
    />
  </div>
</template>