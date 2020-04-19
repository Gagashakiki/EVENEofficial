<script>
  import Contact from './ContactComponent';

  export default {
    name: 'ContactList',
    components: { Contact },
    props: {
      contactAvatar: {
        type: String,
        required: true,
      }
    }
  }
</script>

<style scoped>
  .contact-list {
    flex: 1;
    background: #f8f8f8 none repeat scroll 0 0;
    overflow: hidden;
    border-right:1px solid #c4c4c4;
    height: 100%
  }
</style>

<template>
  <div class="contact-list">
    <Contact :contact-avatar="contactAvatar"/>
  </div>
</template>