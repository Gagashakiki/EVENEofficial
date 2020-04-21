<script>
  import moment from 'moment';

  export default {
    name: 'IncomingMessage',
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
  .time_date {
    color: #747474;
    display: block;
    font-size: 12px;
    margin: 8px 0 0;
  }
  .incoming_msg_img {
    display: inline-block;
    width: 6%;
  }
  .received_msg {
    display: inline-block;
    padding: 0 0 0 10px;
    vertical-align: top;
    width: 92%;
  }
  .received_withd_msg p {
    background: #ebebeb none repeat scroll 0 0;
    border-radius: 3px;
    color: #646464;
    font-size: 14px;
    margin: 0;
    padding: 5px 10px 5px 12px;
    width: 100%;
  }
  .received_withd_msg {
    width: 57%;
  }
</style>

<template>
  <div class="incoming_msg">
    <div class="received_msg">
      <div class="received_withd_msg">
        <p>{{ message }}</p>
        <span class="time_date"> {{ getTime(messageDate) }}  |  {{ getDate(messageDate) }}</span>
      </div>
    </div>
  </div>
</template>