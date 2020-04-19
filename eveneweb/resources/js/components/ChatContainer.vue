<script>
  export default {
    name: 'Chat'
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
    background: #05728f none repeat scroll 0 0;
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
      <div class="incoming_msg">
        <div class="received_msg">
          <div class="received_withd_msg">
            <p>Test which is a new approach to have all
              solutions</p>
            <span class="time_date"> 11:01 AM    |    June 9</span></div>
        </div>
      </div>
      <div class="outgoing_msg">
        <div class="sent_msg">
          <p>Test which is a new approach to have all
            solutions</p>
          <span class="time_date"> 11:01 AM    |    June 9</span></div>
      </div>
      <div class="incoming_msg">
        <div class="received_msg">
          <div class="received_withd_msg">
            <p>Test, which is a new approach to have</p>
            <span class="time_date"> 11:01 AM    |    Yesterday</span></div>
        </div>
      </div>
      <div class="outgoing_msg">
        <div class="sent_msg">
          <p>Apollo University, Delhi, India Test</p>
          <span class="time_date"> 11:01 AM    |    Today</span></div>
      </div>
      <div class="outgoing_msg">
        <div class="sent_msg">
          <p>Apollo University, Delhi, India Test</p>
          <span class="time_date"> 11:01 AM    |    Today</span></div>
      </div>
      <div class="outgoing_msg">
        <div class="sent_msg">
          <p>Apollo University, Delhi, India Test</p>
          <span class="time_date"> 11:01 AM    |    Today</span></div>
      </div>
      <div class="outgoing_msg">
        <div class="sent_msg">
          <p>Apollo University, Delhi, India Test</p>
          <span class="time_date"> 11:01 AM    |    Today</span></div>
      </div>
      <div class="incoming_msg">
        <div class="received_msg">
          <div class="received_withd_msg">
            <p>We work directly with our designers and suppliers,
              and sell direct to you, which means quality, exclusive
              products, at a price anyone can afford.</p>
            <span class="time_date"> 11:01 AM    |    Today</span></div>
        </div>
      </div>
    </div>
    <div class="message-box">
      <input type="text" class="write_msg" placeholder="Type a message"/>
      <div class="message-action-box">
        <button class="btn-message-send" type="button">
          <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
        </button>
      </div>
    </div>
  </div>
</template>