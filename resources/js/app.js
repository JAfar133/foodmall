import './bootstrap';

import '../sass/app.scss';
import 'bootstrap';
import {Panzoom} from "@fancyapps/ui";

if (location.pathname === '/') {
    import('./carousel.js');
}
const containers = document.querySelectorAll(".f-panzoom");

const options = {
    click: "toggleCover",
    disablePan: true // Отключаем панорамирование
};
containers.forEach(container=>{
    new Panzoom(container, options);
})
