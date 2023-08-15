import './bootstrap';

import '../sass/app.scss';

import './zoom/amplify.js'
import './zoom/amplify.scss'
import 'bootstrap';

if (location.pathname === '/') {
    import('./carousel.js');
}
