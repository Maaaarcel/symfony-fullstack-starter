import type {Application} from '@hotwired/stimulus';

declare global {
    interface Window {
        $$stimulusApp$$: Application;
        Stimulus: Application;
    }

    interface ImportMeta {
        stimulusIdentifier: string;
    }
}
