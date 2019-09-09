<template>
    <form @submit.prevent="subscribe" v-show="showForm">
        <i class="lni-envelope"></i>
        <input v-model="email" type="text" placeholder="you@gmail.com">

        <div class="coming-soon-btn rounded-buttons">
            <button class="main-btn rounded-three">
                সাবস্ক্রাইব করুন
            </button>
        </div>
    </form>
</template>

<script>
  export default {
    name: 'SubscriptionForm',
    data: function() {
      return {
        showForm: true,
        email: '',
      };
    },
    methods: {
      subscribe: function() {
        axios.post('/api/v1/subscribe', {
          email: this.email,
        }).then((response) => {
          this.showForm = false;
          sweetAlert.fire({
            text: response.data.message,
            type: 'success',
          });
        }).catch((error) => {
          console.log(error);
          sweetAlert.fire({
            text: error.response.data.errors.email[0],
            type: 'error',
          });
        });
      },
    },
  };
</script>
