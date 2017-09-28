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
```json
"scripts": {
    "build": "webpack --output-filename app.js --env.locales es,en,fr"
}
```

#### Parsley.setLocale( locale = null )
This method will set the Parsley's instance's locale. If we don't provide a locale parameter, automatically the html 
lang's attribute value will be used. For example: 
```js
import {Parsley} from 'lin3s-front-foundation';

Parsley.setLocale();
```

#### Parsley.excludeFormFields( selector )
This method will exclude the passed selectors from being validated by Parsley. For instance:
```js
import {Parsley} from 'lin3s-front-foundation';

Parsley.excludeFormFields('.input--not-validated');
```

### Async
This package will provide all asynchronous related implementations. For instance, Promise related ones.

#### Async.cancelablePromise( promise )
This method will wrap a Promise object and provide a cancel() method for canceling the inner Promise. We will access 
the original promise throught the promise property.
```js
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

### Browser
This package will provide all browser related implementations.

#### Browser.isIE11()
This method will tell us if the browser is Internet Explorer 11.

```js
import {Browser} from 'lin3s-front-foundation';
 
const isIE11 = Browser.isIE11();
```

### Dom
This package will provide all Dom related implementations.
```js
import {Dom} from 'lin3s-front-foundation';

const currentHtmlLang = Dom.getHtmlLang();

console.log(currentHtmlLang);
```

#### Dom.getHtmlLang()
This method will return the html tag's *lang* attribute.

#### Dom.loadScript( scriptPath )
This method will load an script by the provided scriptPath and return us a Promise object. This promise will be 
resolved one the script has been loaded.

```js
import {Dom} from 'lin3s-front-foundation';
 
const scriptPath = 'https://yourdomain.com/script-path.js';
 
const scriptLoadPromise = Dom.loadScript(scriptPath);

scriptLoadPromise.then(() => {
  // Our script has been loaded!
});
```

#### Dom.injectScript( scriptCode, domNode = document.body )
This method will inject the specified *scriptCode* at the passed *domNode*. *domNode* will be the document's body by 
default. Provided *scriptCode* will be wrapped with an [IIFE][3]

```js
import {Dom} from 'lin3s-front-foundation';
 
const 
  mainDomNode = document.querySelector('.main'),
  testScriptA = `console.log('This is the injected script A');`,
  testScriptB = `console.log('This is the injected script B');`;

Dom.injectScript(testScriptA);
Dom.injectScript(testScriptB, mainDomNode);
```

#### Dom.waitImagesLoadInDomNode( domNode )
This method will return us a Promise object that will be resolved once all the images contained in the provided domNode 
have been loaded.

```js
import {Dom} from 'lin3s-front-foundation';
 
const imagesCollection = document.querySelector('.images__collection');
 
const imagesLoadPromise = Dom.waitImagesLoadInDomNode(imagesCollection);
 
imagesLoadPromise.then(() => {
  // All images have been loaded!
});
```

## Usage - Available UI components

### GMap
This component will provide all the necessary implementations for displaying a Google Map, setting it's markers, setting 
a clusterer, use the Google Map geocoding feature and displaying the MarkerDetail view.

#### GMap - Basic setup
In order to setup the GMap component, we will define every required parameter while including the twig template. It 
will automatically fetch the needed js files and will init the Google Maps map instance. 

The list of the available parameters, their type and default values are as follows:

| Parameter                 | Type    | Required | Default value |
|-------------------------- |:--------|:---------|:--------------|
| gmap_api_key              | string  | yes      | -             |
| gmap_center_lat           | float   | yes      | -             |
| gmap_center_lng           | float   | yes      | -             |
| gmap_initial_zoom         | int     | no       | 8             |
| gmap_max_zoom             | int     | no       | 12            |
| gmap_marker_default_path  | string  | yes      | -             |
| gmap_marker_selected_path | string  | yes      | -             |
| gmap_marker_group_path    | string  | yes      | -             |
| gmap_style                | string  | no       | [view][1]**   |

** In order to generate the Google Map custom styles, we could use any available tool. For instance the [snazzy maps][2] 
online platform.

The marker images will be required to be served both on *.png* and *.svg* formats. 

The marker paths must be defined without the file extensions, as the GMap component will get the *.png* or *.svg* files 
based on the client browser. 

This is a basic setup example:

```twig
{% include '@lin3s_front_foundation/components/gmap.html.twig' with {
    gmap_api_key: 'AIzaSyDQaCE_7C5iAmpwr_y1C1DHbtZsqag74Sk',
    gmap_center_lat: '43.2631394',
    gmap_center_lng: '-2.9275847',
    gmap_initial_zoom: 12,
    gmap_max_zoom: 16,
    gmap_marker_default_path: '/images/gmap/marker-default',
    gmap_marker_selected_path: '/images/gmap/marker-selected',
    gmap_marker_group_path: '/images/gmap/marker-group'
} %}
```

#### GMap - JS API
These are the mostly used methods available on the GMap component's instance.

| Name                           | Parameters            | Returned value    | Description |
|--------------------------------|:----------------------|:------------------|:------------|
| setCenterOffsets               | { <br/>&nbsp;&nbsp;&nbsp;&nbsp; x: 0, <br>&nbsp;&nbsp;&nbsp;&nbsp; y: 0<br> }  | undefined (void)  | This method will set the instance's center's offset (in pixels) |
| setMarkers                     | markers: \[{ <br>&nbsp;&nbsp;&nbsp;&nbsp; id: 0, <br>&nbsp;&nbsp;&nbsp;&nbsp; lat: 43.2631394, <br>&nbsp;&nbsp;&nbsp;&nbsp; lng: -2.9275847, <br>&nbsp;&nbsp;&nbsp;&nbsp; // your properties... <br>}, <br> //... <br>]               | undefined (void)  | This method will display the passed markers on the map. It will generate the clusters automatically. <br><br> Each marker object must, at least, have the *lat*, *lng* and *id* properties. |
| showMarkerDetailView           | markerId, markerDetailHtmlContent | undefined (void) | This method will render and display the passed markerDetailHtmlContent centered on the correspondingn marker. |
| hideMarkerDetailView           | -                     | undefined (void)  | This method will hide the currently visible marker detail view. |
| geocodeAddress                 | address: String       | undefined (void)  | This method will geocode the passed address (Address, town, ZIP code, city...) and center the map on the result's location. <br><br> If no result matches the passed address, it will publish an event through the EventBus. |
| resetMapZoomAndCenterToDefault | -                     | undefined (void)  | This method will reset the instance's center and zoom to the default values. |

#### GMap - EventBus events
Each GMap instance will publish these events through the EventBus. We will subscribe to these events using some exported
helper methods:

```js
import {EventBus} from 'lin3s-front-foundation';

const domNode = document.querySelector('.my-map');

EventBus.onGMapInitialized(domNode, gmapInitializedEvent => {
  const gmapInstance = gmapInitializedEvent.gmapInstance;
});

EventBus.onGMapGeocodeNoResults(domNode, gmapGeocodeNoResultsEvent => {
  console.log('Sorry, there are no results for the provided address!');
});

EventBus.onGMapMarkerSelected(domNode, gmapMarkerSelectedEvent => {
  const selectedMarker = gmapMarkerSelectedEvent.marker;
});
```

| Type                           | Properties              |
|--------------------------------|:------------------------|
| GMapInitializedEvent           | gmapInstance: GMap      |
| GMapMarkerSelectedEvent        | gmapInstance: GMap<br/>marker: Your marker object representation |
| GMapGeocodeNoResultsEvent      | gmapInstance: GMap      |

#### GMap - Advanced features
If we need to work with the initialized GMap component instance, we must subscribe to the GMapInitializedEvent, that 
will be published through the event-bus once the gmap component has been initialized.

```js
import {EventBus} from 'lin3s-front-foundation';

const domNode = document.querySelector('.my-map');

EventBus.onGMapInitialized(domNode, gmapInitializedEvent => {
  const gmapInstance = gmapInitializedEvent.gmapInstance;
  // whatever...
});
```

We will set the GMap component's markers calling the *setMarkers(markers)* method.

If we want to use the built-in geocoding feature, we will call the *geocodeAddress(address)* of the GMap instance. 

The GMap component also comes with methods for displaying/hiding the marker detail view (
*showMarkerDetailView(markerId, markerDetailContentHtml)* and *hideMarkerDetailView()*).

This is a complete example of the component's features:

```js
import {EventBus} from 'lin3s-front-foundation';

class GMapTest {
  constructor(domNode) {
    this.domNode = domNode;
  
    EventBus.onGMapInitialized(this.domNode, gmapInitializedEvent => {
      const gmapInstance = gmapInitializedEvent.gmap;
      this.setupMarkers();
      this.init();
    });
  }
  
  setupMarkers() {
    const markers = [{
      id: 0,
      lat: 43.2631394,
      lng: -2.9275847
    }];

    this.gmapInstance.setMarkers(markers);
  }
  
  init() {
    this.filterInput = document.querySelector('.my-input-class'); 
    this.filterInput.addEventListener('input', () => {
      this.gmapInstance.geocodeAddress(this.filterInput.value);
    });
    
    EventBus.onGMapGeocodeNoResults(this.domNode, gmapGeocodeNoResultsEvent => {
      console.log('Sorry, there are no results for the provided value!');
    });
    
    EventBus.onGMapMarkerSelected(this.domNode, gmapMarkerSelectedEvent => {
      this.onMarkerSelected(gmapMarkerSelectedEvent.marker);
    });
  }
  
  onMarkerSelected(marker) {
    if (marker === undefined) {
      this.gmapInstance.hideMarkerDetailView();
    } else {
      this.gmapInstance.showMarkerDetailView(
        marker.id,
        `<h3>This is the marker detail's inner html content</h3>
         <p>Marker <b>lat</b>: ${marker.lat}</p>
         <p>Marker <b>lng</b>: ${marker.lng}</p>`
      );
    }
  }
}

onDomReady(() => {
  new GMapTest();
});
```

### FormGroupSelect
This component and it's associated FormSelect atom will build a custom rich select component. The component is composed 
by the FormSelect, FormLabel, FormInput and the FormError atoms.

#### FormGroupSelect - Basic setup

In order to setup the FormGroupSelect component, we will define every required parameter while including the twig 
template. 

The list of the available parameters, their type and default values are as follows:

| Parameter                 | Type          | Required | Default value | Purpose       |
|-------------------------- |:--------------|:---------|:--------------|:--------------|
| select_id                 | string        | yes      |               |               |
| select_required           | bool          | no       | false         |               |
| select_mobile_breakpoint  | int           | no       | 1024          |               |
| select_max_height_mobile  | int           | no       | 260           |               |
| select_max_height_desktop | int           | no       | 420           |               |
| select_is_filterable      | bool          | no       | true          |               |
| select_filter_placeholder | string        | no       | null          |               |
| select_filter_order_by    | string        | no       | 'value'       | If you set 'label' as this parameter, the component will order it's items by the 'label' while filtering it's options. |
| select_label_modifiers    | array\|string | no       | null          |               |
| select_label_title        | string        | no       | null          |               |
| select_error_modifiers    | array\|string | no       | null          |               |
| select_error_content      | string        | no       | null          |               |
| select_select_modifiers   | array\|string | no       | null          |               |
| select_no_selection_label | string        | no       | '--'          |               |
| select_no_selection_value | string        | no       | '--'          |               |
| select_options            | array         | yes      |               | These are the component's options. Each option must have, at least, this shape: <br/>{<br/>&nbsp;&nbsp;&nbsp;&nbsp;value: string\*<br/>&nbsp;&nbsp;&nbsp;&nbsp;label: string\*<br/>&nbsp;&nbsp;&nbsp;&nbsp;selected: bool=false<br/>} |

This is a full setup example:

```twig
{% set my_select_options = [{
    label: Male,
    value: 0,
    selected: true
}, {
    label: Female,
    value: 1
}] %}

{% include '@lin3s_front_foundation/components/form_group_select.html.twig' with {
    select_id: 'my-select',
    select_required: 1,
    select_mobile_breakpoint: 768,
    select_max_height_mobile: 260,
    select_max_height_desktop: 420,
    select_is_filterable: 1,
    select_filter_placeholder: 'Type to filter...',
    select_filter_order_by: 'label',
    select_label_modifiers: null,
    select_label_title: 'My select\'s label',
    select_error_modifiers: null,
    select_error_content: 'This is the initial error\'s content.'
    select_select_modifiers: null,
    select_no_selection_label: '--',
    select_no_selection_value: '--',
    select_options: my_select_options
} %}
```

#### FormSelect - JS API
These are the mostly used methods available on the FormSelect atom's instance.

| Name                           | Parameters            | Returned value    | Description |
|--------------------------------|:----------------------|:------------------|:------------|
| open                           | -                     | undefined (void)  | This method will open the select |
| close                          | -                     | undefined (void)  | This method will close the select |
| update                         | {<br/>&nbsp;&nbsp;&nbsp;&nbsp;options,<br/>&nbsp;&nbsp;&nbsp;&nbsp;publishEvent: true<br/>} | undefined (void)  | This method will update the FormSelect's options with the provided ones. By default it will publish the FormSelectOptionSelectedEvent. Each option object must, at least, have the *label* and *value* properties. |
| enable                         | -                     | undefined (void)  | This method will enable the select |
| disable                        | -                     | undefined (void)  | This method will disable the select |

#### FormSelect - EventBus events
Each FormSelect instance will publish these events through the EventBus. We will subscribe to these events using some 
exported helper methods:

```js
import {EventBus} from 'lin3s-front-foundation';

const domNode = document.querySelector('.my-form-select');

EventBus.onFormSelectInitialized(domNode, formSelectInitializedEvent => {
  const formSelectInstance = formSelectInitializedEvent.formSelectInstance;
});

EventBus.onFormSelectOptionSelected(domNode, formSelectOptionSelectedEvent => {
  const selectedValue = formSelectOptionSelectedEvent.optionValue;
});

EventBus.onFormSelectStateChanged(domNode, formSelectStateChangedEvent => {
  const formSelectState = formSelectStateChangedEvent.state;
});
```

| Type                           | Properties                     |
|--------------------------------|:-------------------------------|
| FormSelectInitializedEvent     | formSelectInstance: FormSelect |
| FormSelectOptionSelectedEvent  | formSelectInstance: FormSelect<br/>marker: Your marker object representation |
| FormSelectStateChangedEvent    | formSelectInstance: FormSelect<br/>state: \[FormSelect.STATE.OPENED \| FormSelect.STATE.CLOSED\] |

## Usage - Available UI (React) components

### FormGroupSelect (React) component
This React component will build a FormGroupSelect (vanilla) equivalent. 

#### FormGroupSelect (React) - Basic setup

This is a [controlled component][4]. For a full initialization example, take a look at the provided example [initialization][5] and [FormGroupSelect use case][6].

[1]: https://github.com/LIN3S/FrontFoundation/blob/master/src/templates/twig/components/gmap.html.twig#L26
[2]: https://snazzymaps.com/
[3]: https://developer.mozilla.org/en-US/docs/Glossary/IIFE
[4]: https://facebook.github.io/react/docs/forms.html#controlled-components
[5]: https://github.com/LIN3S/FrontFoundation/blob/master/tests/app/src/js/React/init.js
[6]: https://github.com/LIN3S/FrontFoundation/blob/master/tests/app/src/js/React/ReactFormSelect.js
