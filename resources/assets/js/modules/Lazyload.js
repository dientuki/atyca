export default class Lazyload {
    constructor(opts) {
        opts = {
            css: 'afterload',
            data: 'original'
        };

        this.opts = opts;
        this.init();
    }

    init() {
        let elements = document.querySelectorAll('.' + this.opts.css);

        for(var i = 0, l = elements.length; i < l; i++) {
            elements[i].setAttribute('src', elements[i].dataset[this.opts.data]);
            elements[i].classList.remove(this.opts.css);
        }
    }
}

