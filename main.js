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
        facebook: false,
        instagram: false,
        twitter: false,
        youtube: false
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
            this.logoCNRS = false,
            this.facebook = false,
            this.instagram = false,
            this.twitter = false,
            this.youtube = false
        }
    }
});
