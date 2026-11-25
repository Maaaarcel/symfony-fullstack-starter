import {Controller} from '@hotwired/stimulus';

/* stimulusFetch: 'lazy' */
export default class MainController extends Controller<HTMLDivElement> {
    connect() {
        super.connect();
        console.log('Hello World!');
    }
}
