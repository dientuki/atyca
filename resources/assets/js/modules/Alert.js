export default class Alert {
    constructor() {
        this.init();
    }

    init() {
        let alerts = document.querySelectorAll('.alert');

        for(var i = 0, l = alerts.length; i < l; i++) {
            alerts.querySelector('.close').addEventListener('click', () => {

            });
        }
    }
}

