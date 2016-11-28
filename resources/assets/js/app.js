import Lazyload from "./modules/Lazyload";
import Navigation from "./modules/Navigation";
import Wallop from "./modules/Wallop";

new Lazyload();
new Navigation();
new Wallop(document.querySelector('.Wallop'));