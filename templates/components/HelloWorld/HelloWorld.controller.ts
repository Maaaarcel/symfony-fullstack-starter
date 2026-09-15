import {Controller} from '@hotwired/stimulus';

export const stimulusIdentifier = 'hello-world';

export default class HelloWorldController extends Controller<HTMLDivElement> {
    connect() {
        super.connect();
        console.log('Hello World!');
    }
}
