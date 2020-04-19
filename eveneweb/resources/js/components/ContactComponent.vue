<script>
  export default {
    name: 'Contact',
    props: {
      contactAvatar: {
        type: String,
        required: true
      }
    }
  }
</script>

<style scoped>
  .contact {
    border-bottom: 1px solid #c4c4c4;
    margin: 0;
    padding: 18px 16px 10px;
    overflow: hidden;
    clear: both;
    display: flex;
    justify-content: space-between;
  }

  .active-contact{ background:#ebebeb;}

  .contact-avatar {
    flex: 1
  }

  .contact-detail {
    flex: 6;
    padding-left: 1rem;
  }

  .contact-detail-title {
    display: flex;
    justify-content: space-between;
    margin-bottom: .5rem;
  }
</style>

<template>
  <div class="contact active-contact">
    <div class="contact-avatar">
      <img class="avatar" :src="contactAvatar" alt="contactAvatar">
    </div>
    <div class="contact-detail">
      <h5 class="contact-detail-title">
        Sunil Rajput
        <span class="chat_date">Dec 25</span>
      </h5>
      <p>Test, which is a new approach to have all solutions
        astrology under one roof.</p>
    </div>
  </div>
</template>