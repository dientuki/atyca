import Autocomplete from "./modules/Autocomplete";
import Alert from "./modules/Alert";
import axios from 'axios';

new Autocomplete();
new Alert();

let c = document.querySelectorAll('.ios8-switch');

for (var i = 0, l = c.length; i < l; i++) {
  c[i].addEventListener("click", function() {
    if (this.dataset['action'] == null) {
      return false;
    }
    let self = this;
    self.setAttribute('disabled', 'disabled')

    axios.get(this.dataset['action'])
        .then(function (response) {
          console.log(response)
          self.removeAttribute('disabled')
        });
  });
}