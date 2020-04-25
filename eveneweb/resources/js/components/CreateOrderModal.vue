<script>
  import axios from 'axios';

  export default {
    name: 'OrderModal',
    props: {
      contactName: {
        type: String,
        required: true,
      },
      contactId: {
        type: Number,
        required: true,
      }
    },
    data() {
      return {
        customerName: this.contactName,
        eventType: '',
        eventTheme: '',
        eventDate: '',
        notes: '',
        transactionAmount: 0
      }
    },
    methods: {
      onModalFormSubmit() {
        const request = {
          customerId: this.contactId,
          eventType: this.eventType,
          eventTheme: this.eventTheme,
          eventDate: this.eventDate,
          notes: this.notes,
          transactionAmount: this.transactionAmount
        }

        this.$emit('dismissAlert', "Successful Create Order");

        axios.post('/order', request);
      }
    },
    computed: {
      getCustomerName() {
        this.customerName = this.contactName;

        return this.customerName;
      }
    }
  }
</script>

<template>
  <div class="modal fade" id="requestInvoiceModal" tabindex="-1" role="dialog" aria-labelledby="requestInvoiceLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="requestInvoiceLabel">Create New Order</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="new-order-form">
            <div class="form-group">
              <label for="input-order-name">Nama Customer</label>
              <input type="text" class="form-control" id="input-order-name" :value="getCustomerName" disabled>
            </div>
            <div class="form-group">
              <label for="input-order-jenis">Jenis Acara</label>
              <input type="text" class="form-control" id="input-order-jenis" v-model="eventType" required>
            </div>
            <div class="form-group">
              <label for="input-order-tema">Tema</label>
              <input type="text" class="form-control" id="input-order-tema" v-model="eventTheme" required>
            </div>
            <div class="form-group">
              <label for="input-order-tanggal">Tanggal Acara</label>
              <input type="date" class="form-control" id="input-order-tanggal" v-model="eventDate" required>
            </div>
            <div class="form-group">
              <label for="input-order-keterangan">Keterangan</label>
              <input type="text" class="form-control" id="input-order-keterangan" v-model="notes" required>
            </div>
            <div class="form-group">
              <label for="input-order-transaksi">Nilai Transaksi</label>
              <input type="text" class="form-control" id="input-order-transaksi" v-model="transactionAmount" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" v-on:click="onModalFormSubmit" data-dismiss="modal">Create Order</button>
        </div>
      </div>
    </div>
  </div>
</template>