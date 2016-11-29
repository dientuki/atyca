import Lazyload from "./modules/Lazyload";
import Navigation from "./modules/Navigation";
import Wallop from "./modules/Wallop";

new Lazyload();
new Navigation();

let ws = document.querySelectorAll('.Wallop');

for(var i = 0, l = ws.length; i < l; i++) {
  new Wallop(ws[i], {
    buttonPreviousClass: 'Wallop-ArrowPrevious',
    buttonNextClass: 'Wallop-ArrowNext'
  });
}
