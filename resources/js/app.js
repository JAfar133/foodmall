import './bootstrap';

import '../sass/app.scss';

import 'bootstrap';

if (location.pathname === '/') {
    import('./carousel.js');
}
