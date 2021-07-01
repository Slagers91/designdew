console.log('BARBA');

import barba from '@barba/core';
import barbaCss from '@barba/css';

// tell Barba to use the css plugin
barba.use(barbaCss);

// init Barba
barba.init({
    transitions: [
        {
            name: 'home',
            to: {
                namespace: ['home']
            },
            sync: true,
            leave(){},
            enter(){},
        }, {
            name: 'fade',
            to: {
                namespace: ['fade']
            },
            leave(){},
            enter(){},
        }, {
            name: 'clip',
            sync: true,
            to: {
                namespace: ['clip']
            },
            leave(){},
            enter(){}
        }, {
            name: 'with-cover',
            to: {
                namespace: ['with-cover']
            },
            leave(){},
            enter(){}
        }
    ]
});