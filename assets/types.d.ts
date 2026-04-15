import type {Application} from '@hotwired/stimulus';

declare global {
    interface Window {
        $$stimulusApp$$: Application;
    }

    interface ImportMeta {
        stimulusIdentifier: string;
    }
}
