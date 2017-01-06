import axios from 'axios';
import TypeAhead from 'type-ahead';

let country = document.getElementById('country'),
    fk_country = document.getElementById('fk_country');

if (country != null){
  let t = new TypeAhead(country);
  t.getItemValue = function(item) {
    //this.element.setAttribute("value", item.id)
    fk_country.setAttribute("value", item.id);
    return item.value;
  };

  t.getCandidates = function (callback) {
    axios.get('/api/countries?fk_country=' + this.query )
        .then(function (response) {
          callback(response.data);
        }).catch(function (error) {
          console.log(error);
        });
  };
}


let c = document.querySelectorAll('.ios8-switch');

for (var i = 0, l = c.length; i < l; i++) {
  c[i].addEventListener("click", function() {
    console.log("clicked");
    let self = this;
    self.setAttribute('disabled', 'disabled')

    axios.get(this.dataset['action'])
        .then(function (response) {
          console.log(response)
          self.removeAttribute('disabled')
        });
  });
}