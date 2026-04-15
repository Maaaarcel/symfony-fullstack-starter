import {Controller} from '@hotwired/stimulus';

import.meta.stimulusIdentifier = 'hello-world';

export default class HelloWorldController extends Controller<HTMLDivElement> {
    connect() {
        super.connect();
        console.log('Hello World!');
    }
}