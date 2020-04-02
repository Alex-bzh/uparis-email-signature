// main.js
let app = new Vue({
    el: '#app',
    data: {
        givenName: null,
        familyName: null,
        jobTitle: null,
        telephone: null,
        faxNumber: null,
        logoUParis: true,
        logoLLF: false,
        logoCNRS: false,
        errors: []
    },
    methods: {
        reset: function() {
            this.givenName = null,
            this.familyName = null,
            this.jobTitle = null,
            this.telephone = null,
            this.faxNumber = null,
            this.logoUParis = true,
            this.logoLLF = false,
            this.logoCNRS = false
        }
    }
});
