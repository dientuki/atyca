import Lazyload from "./modules/Lazyload";
import Navigation from "./modules/Navigation";
import Wallop from "./modules/Wallop";
import Autocomplete from "./modules/Autocomplete";
import Alert from "./modules/Alert";

new Lazyload();
new Navigation();
new Autocomplete();
new Alert();

let ws = document.querySelectorAll('.Wallop'),
    aws = [];

for(var i = 0, l = ws.length; i < l; i++) {
  aws[i] = new Wallop(ws[i], {
    buttonPreviousClass: 'Wallop-ArrowPrevious',
    buttonNextClass: 'Wallop-ArrowNext'
  });

  if (ws[i].classList.contains('w-automatic')){
    let automatic = i;
    setInterval(function(){
      aws[automatic].next();
    },5000)
  }
}