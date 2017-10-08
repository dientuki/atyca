export default class Alert {
    constructor() {
        this.init();
    }

    init() {
        let alerts = document.querySelectorAll('.alert-animation');

        for(var i = 0, l = alerts.length; i < l; i++) {
            alerts[i].querySelector('.alert-close').addEventListener('click', function() {
                this.parentNode.parentNode.parentNode.remove();
            });
        }
    }
}

