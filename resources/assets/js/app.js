window.Vue = require('vue')
const axios = require('axios')
const async = require('async')
// Vue.component('example-component', require('./components/ExampleComponent.vue'))
Vue.config.devtools = true
Vue.config.debug = true

window.vueFrontPanel = new Vue({
  el: '#frontPanel',
  data: {
    nombre: 'Alan Cornejos',
    form: {
      email: '',
      name: '',
      food: null,
      checked: false,
      secret: 'S3CR3T'
    },
    foods: [
      { text: 'Select One', value: null },
      'Carrots', 'Beans', 'Tomatoes', 'Corn'
    ]
  },
  methods: {
    sendUrlRequest(url) {
      axios.get(url).then(response => {
        return response})
        .catch(error => {
          return error})
    },
    onSubmit(evt) {
      evt.preventDefault()
      alert(JSON.stringify(this.form))
    }
  }
})
