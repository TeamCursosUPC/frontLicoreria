'use strict'
require('./bootstrap')
window.Vue = require('vue')
const async = require('async')

Vue.config.devtools = true
Vue.config.debug = true

window.vueFrontPanel = new Vue({
  el: '#frontPanel',
  data: {
    nombre: 'Alan Cornejos',
    locales: [],
    foods: [
      { text: 'Select One', value: null },
      'Carrots', 'Beans', 'Tomatoes', 'Corn'
    ]
  },
  methods: {
    sendRequest() {
      return new Promise((resolve, reject) => {
        axios.get('/api/pruebas')
          .then(response => {
            resolve(response.data)})
          .catch(error => {
            reject(error)})
      })
    },

    onSubmit(evt) {
      evt.preventDefault()
      alert(JSON.stringify(this.form))
    },

    loadOptionMenu(route) {
      $('#container').html('<div class="loading" id="loading" style="display: inline;"><li></li><li></li><li></li><li></li><li></li></div>')
      axios.get(`/${route}`)
        .then(response => {
          $('#container').html(response.data)
        }).catch(error => {
        $('#container').html(`Problemas al realizar la carga de ${route}`)
      })
    }
  }
})
