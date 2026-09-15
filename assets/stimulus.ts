import {loadControllers} from '@symfony/reprise/stimulus';
import {Application, Controller} from '@hotwired/stimulus';
// @ts-ignore
import {eagerControllers, isApplicationDebug, lazyControllers} from 'virtual:symfony/controllers';

interface ComponentControllerModule {
    default: typeof Controller;
    stimulusIdentifier?: string;
}

const componentControllers: Record<string, ComponentControllerModule> = import.meta.glob(
    '../templates/components/**/*.controller.ts',
    {
        eager: true,
    },
);

for (const module of Object.values(componentControllers)) {
    const identifier = module.stimulusIdentifier ? module.stimulusIdentifier : undefined;
    eagerControllers[identifier] = module.default;
}

const application = Application.start();
application.debug = isApplicationDebug;
loadControllers(application, eagerControllers, lazyControllers);
