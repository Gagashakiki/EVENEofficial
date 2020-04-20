<script>
  import Contact from './ContactComponent';

  export default {
    name: 'ContactList',
    components: { Contact },
    props: {
      assetUrl: {
        type: String,
        required: true,
      },
      contactList: {
        type: Array,
        required: true,
      }
    },
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
             :contact-id="index"
             :contact-avatar="assetUrl + '/' + contact.avatar"
             :contact-name="contact.username"
             :message-date="contact.latestMessageData"
    />
  </div>
</template>