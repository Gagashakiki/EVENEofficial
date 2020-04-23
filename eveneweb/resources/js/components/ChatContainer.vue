<script>
  import IncomingMessage from './IncomingMessage';
  import OutgoingMessage from './OutgoingMessage';
  import moment from 'moment';
  import axios from 'axios';

  export default {
    name: 'Chat',
    components: { OutgoingMessage, IncomingMessage },
    mounted() {
      this.scrollToEnd();
    },
    props: {
      messageRoomId: {
        type: String,
        required: true,
      },
      currentUser: {
        type: Number,
        required: true,
      },
      messages: {
        type: Array,
        required: true,
      },
      currentUserType: {
        type: String,
        default: "users",
        required: true,
      },
      currentContactEmail: {
        type: String,
        required: true,
      },
      currentContactName: {
        type: String,
        required: true,
      }
    },
    data() {
      return {
        message: "",
      }
    },
    methods: {
      handleSendMessage() {
        const messageRequest = {
          roomId: this.messageRoomId,
          senderId: this.currentUser,
          message: this.message,
          createdAt: moment().toISOString(),
        }
        this.$emit('onSendMessage', messageRequest);

        this.message = "";
      },
      scrollToEnd() {
        let container = this.$el.querySelector('.message-history');
        container.scrollTop = container.scrollHeight;

        console.log('scrolled');
      },
      sendRequestInvoice() {
        const request = {
          vendorEmail: this.currentContactEmail,
          vendorName: this.currentContactName,
        }
        this.message = "Hai, Saya meminta Invoice";
        this.handleSendMessage();

        axios.post('/message/requestInvoice', request);
      }
    }
  }
</script>

<style scoped>
  .messages {
    flex: 2;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
  }

  .message-history {
    overflow: auto;
    padding: 1rem 1rem;
    height: 100%;
    display: flex;
    flex-direction: column;
  }

  .message-box {
    border-top: 1px solid #c4c4c4;
    padding: .5rem .5rem;
    display: flex;
    background-color: whitesmoke;
  }

  .message-box input {
    flex: 10;
    color: #4c4c4c;
    font-size: 1rem;
    min-height: 3rem;
    padding: 0 1rem;
    margin: 0 0.5rem 0 0;
    border-radius: 2rem;
  }

  .message-action-box {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .btn-message-send {
    background: #FBB03B none repeat scroll 0 0;
    border: medium none;
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
    font-size: 17px;
    height: 33px;
    right: 0;
    top: 11px;
    width: 33px;
  }
</style>

<template>
  <div class="messages">
    <div class="message-history">
      <div v-for="(message,index) in messages">
        <IncomingMessage
          :key="index"
          v-if="currentUser !== message.senderId"
          :message="message.message"
          :message-date="message.createdAt"
        />
        <OutgoingMessage
          :key="index"
          v-if="currentUser === message.senderId"
          :message="message.message"
          :message-date="message.createdAt"
        />
      </div>
    </div>
    <div class="message-box">
      <input
        type="text" class="write_msg" placeholder="Type a message"
        v-model="message"
        v-on:keyup.enter="handleSendMessage"
      />
      <div class="message-action-box">
        <button v-if="currentUserType === 'users'" class="btn-message-send" title="Request Invoice" type="button" v-on:click="sendRequestInvoice">
          <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
        </button>
        <button v-else class="btn-message-send" title="Request Invoice" type="button" data-toggle="modal" href='#requestInvoiceModal'>
          <i class="fa fa-cart-plus" aria-hidden="true"></i>
        </button>
      </div>
    </div>
  </div>
</template>