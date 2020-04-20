<script>
  import moment from 'moment';

  export default {
    name: 'Contact',
    props: {
      contactAvatar: {
        type: String,
        required: true,
      },
      contactName: {
        type: String,
        required: true,
      },
      contactId: {
        type: String,
        required: true,
      },
      messageDate: {
        type: String,
        required: true,
      },
      message: {
        type: String,
        required: true,
      }
    },
    computed: {
      computedClass() {
        return !this.contactId ? 'active-contact' : ''
      },
    },
    methods: {
      getDate : function (date) {
        return moment(date).format('DD MMM YYYY')
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

  .contact:hover {
    background-color: #ebebeb;
    cursor: pointer
  }

  .active-contact{ background:#ebebeb;}

  .contact-avatar {
    flex: 1
  }

  .contact-detail {
    flex: 5;
    padding-left: 1rem;
  }

  .contact-detail-title {
    display: flex;
    justify-content: space-between;
    margin-bottom: .5rem;
  }
</style>

<template>
  <div class="contact" :class="computedClass">
    <div class="contact-avatar">
      <img class="avatar" :src="contactAvatar" alt="contactAvatar" width="50" height="50">
    </div>
    <div class="contact-detail">
      <h5 class="contact-detail-title">
        {{ contactName }}
        <span class="chat_date">{{ getDate(messageDate) }}</span>
      </h5>
      <p>{{ message }}</p>
    </div>
  </div>
</template>