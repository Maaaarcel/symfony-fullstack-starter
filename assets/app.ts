import {application} from './stimulus.ts';

// ux-inspector setup
if (application.debug) {
    window.Stimulus = application;
}
