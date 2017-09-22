# CHANGELOG

This changelog references the relevant changes done between versions.

To get the diff for a specific change, go to https://github.com/LIN3S/FrontFoundation/commit/XXX where XXX is the change hash 
To get the diff between two versions, go to https://github.com/LIN3S/FrontFoundation/compare/v0.5.0...v0.6.0

* 0.7.0
    * Added GMap component to Ui 'package'.
    * Added loadScript and waitImagesLoadInDomNode helper methods to Dom 'package'.
    * Added isIE11 helper method to Browser 'package'.
    * Added cancelablePromise Promise wrapper to Async 'package'.
    * Added dynamic parsley locale modules loading by env configuration.
    * Updated distributable configuration.
    * Renamed the *app* 'package' to *ui*.
    * Renamed the *promises* 'package' to *async*.
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
