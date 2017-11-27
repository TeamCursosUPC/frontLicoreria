'use strict'
require('./bootstrap')
window.Vue = require('vue')
const async = require('async')

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
    loadLocales() {
      axios.get('/api/pruebas')
        .then(response => {
          this.locales = response.data})
        .catch(error => {
          return error})
    },

    onSubmit(evt) {
      evt.preventDefault()
      alert(JSON.stringify(this.form))
    }
  }
})
