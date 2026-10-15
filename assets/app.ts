import {registerControllers, startStimulusApp} from 'vite-plugin-symfony/stimulus/helpers';

const app = startStimulusApp();
registerControllers(
    app,
    import.meta.glob(['./controllers/*-controller.ts', '../templates/components/**/*.controller.ts'], {
        query: '?stimulus',
        eager: true,
    }),
);

// symfony-vite setup
if (import.meta.hot) {
    window.$$stimulusApp$$ = app;
}

// ux-inspector setup
if (app.debug) {
    window.Stimulus = app;
}

import.meta.glob([
    './resources/**',
], {
    eager: true,
    query: '?url',
    import: 'default',
});
