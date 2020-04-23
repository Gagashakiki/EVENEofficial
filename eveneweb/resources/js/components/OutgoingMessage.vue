<script>
  import moment from 'moment';

  export default {
    name: 'OutgoingMessage',
    props: {
      message: {
        type: String,
        required: true,
      },
      messageDate: {
        type: String,
        required: true,
      }
    },
    methods: {
      getTime(datetime){
        return moment(datetime).format('HH:mm')
      },
      getDate(datetime){
        return moment(datetime).format('DD MMM YYYY')
      }
    }
  }
</script>

<style scoped>
  .outgoing_msg {
    overflow: hidden;
    margin: 26px 0 26px;
  }
  .sent_msg {
    float: right;
    width: 46%;
  }
  .time_date {
    color: #747474;
    display: block;
    font-size: 12px;
    margin: 8px 0 0;
  }
  .sent_msg p {
    background: #FBB03B none repeat scroll 0 0;
    border-radius: 3px;
    font-size: 14px;
    margin: 0; color:#fff;
    padding: 5px 10px 5px 12px;
    width:100%;
  }
</style>

<template>
  <div class="outgoing_msg">
    <div class="sent_msg">
      <p>{{ message }}</p>
      <span class="time_date"> {{ getTime(messageDate) }}  |  {{ getDate(messageDate) }}</span>
    </div>
  </div>
</template>