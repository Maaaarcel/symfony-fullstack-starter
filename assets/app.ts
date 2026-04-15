import {registerControllers, startStimulusApp} from 'vite-plugin-symfony/stimulus/helpers';

const app = startStimulusApp();
registerControllers(
    app,
    import.meta.glob(['./controllers/*-controller.ts', '../templates/components/**/*.controller.ts'], {
        query: '?stimulus',
        eager: true,
    }),
);

if (import.meta.hot) {
    window.$$stimulusApp$$ = app;
}

import.meta.glob([
    './resources/**',
]);
