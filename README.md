# LIN3S Front Foundation
> Base CSS and JS files for building views in LIN3S way.

## Installation
The recommended and the most suitable way to install is through *Yarn*:
```bash
$ yarn add lin3s-front-foundation
```
or alternatively through *NPM*:
```bash
$ npm install --save lin3s-front-foundation
```
Also, you can install through *Bower*.
```bash
$ bower install --save lin3s-front-foundation
```

## Usage - Available features

### Parsleyjs
By setting an environment parameter (*--env.locales*) in out project's package.json file, in the build script, we will 
specify which locale modules must load and inject in our output bundle.

For example, if we want to include the *es*, *en* and *fr* locale translation messages, we should include the 
required parameter this way:
```bash
"scripts": {
    "build": "webpack --output-filename app.js --env.locales es,en,fr"
}
```

#### Parsley.setLocale( locale = null )
This method will set the Parsley's instance's locale. If we don't provide a locale parameter, automatically the html 
lang's attribute value will be used. For example: 
```bash
import {Parsley} from 'lin3s-front-foundation';

Parsley.setLocale();
```

#### Parsley.excludeFormFields( selector )
This method will exclude the passed selectors from being validated by Parsley. For instance:
```bash
import {Parsley} from 'lin3s-front-foundation';

Parsley.excludeFormFields('.input--not-validated');
```

### Async
This package will provide all asynchronous related implementations. For instance, Promise related ones.

#### Async.cancelablePromise( promise )
This method will wrap a Promise object and provide a cancel() method for canceling the inner Promise. We will access 
the original promise throught the promise property.
```bash
import {Async} from 'lin3s-front-foundation';
 
const aPromise = new Promise((resolve, reject) => {
    // ...
});
 
const aCancelablePromise = Async.cancelablePromise(aPromise);
 
aCancelablePromise.promise.then(resolvedObject => {
    // ...
});
 
aCancelablePromise.cancel();
// aCancelablePromise.promise has been rejected right after calling the cancel() method.
```

