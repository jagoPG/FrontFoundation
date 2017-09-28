# CHANGELOG

This changelog references the relevant changes done between versions.

To get the diff for a specific change, go to https://github.com/LIN3S/FrontFoundation/commit/XXX where XXX is the change hash 
To get the diff between two versions, go to https://github.com/LIN3S/FrontFoundation/compare/v0.5.0...v0.6.0

* 0.7.0
    * Added React FormGroupInput component to the *Ui* package
    * Added React FormGroupSelect component to the *Ui* package
    * Added React FormSelect atom to the *Ui* package
    * Added React Loader atom to the *Ui* package
    * Added React ResizeAware HOC to the *Ui* package
    * Added React ArrowDown svg to the *Ui* package
    * Added FormError atom to the *Ui* package
    * Added FormLabel atom to the *Ui* package
    * Added FormInput atom to the *Ui* package
    * Added FormSelect atom to the *Ui* package
    * Added GMap component to the *Ui* package.
    * Added getHtmlLang method to the *Dom* package.
    * Added injectScript helper method to the *Dom* package.
    * Added loadScript helper method to the *Dom* package.
    * Added waitImagesLoadInDomNode helper method to the *Dom* package.
    * Added isIE11 helper method to *Browser* package.
    * Added cancelablePromise Promise wrapper to *Async* package.
    * Renamed the *app* package to *Ui*.
    * Renamed the *promises* package to *Async*.
    * Added dynamic parsley locale modules loading by env configuration.
    * Updated distributable configuration.
* 0.6.1
    * Made locale conditional based on HTML lang.
* 0.6.0
    * Parsley instance is not exposed, so you need to use it from window global object.
    * Major refactor of the `js` directory.
    * Added test app, fixed some broken imports and change miscellaneous folder with Parsley.
    * Added `twig` template directory.
    * Renamed `_parsley-form-error.scss` to `_parsley.scss` to keep naming consistency.
    * Improved `_reset` and `_common` scss files.
* 0.5.0
    * Included Parsley as dependency.
