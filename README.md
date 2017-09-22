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

### Browser
This package will provide all browser related implementations.

#### Browser.isIE11()
This method will tell us if the browser is Internet Explorer 11.

```bash
import {Browser} from 'lin3s-front-foundation';
 
const isIE11 = Browser.isIE11();
```

### Dom
This package will provide all Dom related implementations.

#### Dom.loadScript( scriptPath )
This method will load an script by the provided scriptPath and return us a Promise object. This promise will be 
resolved one the script has been loaded.

```bash
import {Dom} from 'lin3s-front-foundation';
 
const scriptPath = 'https://yourdomain.com/script-path.js';
 
const scriptLoadPromise = Dom.loadScript(scriptPath);

scriptLoadPromise.then(() => {
    // Our script has been loaded!
});
```

#### Dom.waitImagesLoadInDomNode( domNode )
This method will return us a Promise object that will be resolved once all the images contained in the provided domNode 
have been loaded.

```bash
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

```bash
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
| isChildOfDomNode               | domNode: Element|Node | boolean           | This method wil return true if the instance has any ancestor matching the passed domNode. |
| setCenterOffsets               | { <br/>&nbsp;&nbsp;&nbsp;&nbsp; x = 0, <br>&nbsp;&nbsp;&nbsp;&nbsp; y = 0<br> }  | undefined (void)  | This method will set the instance's center's offset (in pixels) |
| setMarkers                     | markers               | undefined (void)  | This method will display the passed markers on the map. It will generate the clusters automatically. <br><br> Each marker object must, at least, have the *lat*, *lng* and *id* properties. |
| showMarkerDetailView           | markerId, markerDetailHtmlContent | undefined (void) | This method will render and display the passed markerDetailHtmlContent centered on the correspondingn marker. |
| hideMarkerDetailView           | -                     | undefined (void)  | This method will hide the currently visible marker detail view. |
| geocodeAddress                 | address: String       | undefined (void)  | This method will geocode the passed address (Address, town, ZIP code, city...) and center the map on the result's location. <br><br> If no result matches the passed address, it will publish an event through the EventBus. |
| resetMapZoomAndCenterToDefault | -                     | undefined (void)  | This method will reset the instance's center and zoom to the default values. |

#### GMap - EventBus events
Each GMap instance will publish these events through the EventBus. We will subscribe to these events as follows:
```bash
import {EventBus} from 'lin3s-front-foundation';

EventPublisher.subscribe(new EventBus.GMapInitializedEventSubscriber(gmapInitializedEvent => {
    const gmapInstance = gmapInitializedEvent.gmap;
}));

EventPublisher.subscribe(new EventBus.GMapGeocodeNoResultsEventSubscriber(() => {
    console.log('Sorry, there are no results for the provided address!');
}));

EventPublisher.subscribe(new EventBus.GMapMarkerSelectedEventSubscriber(gmapMarkerSelectedEvent => {
    const selectedMarker = gmapMarkerSelectedEvent.marker;
}));
```

| Type                           | Properties            |
|--------------------------------|:----------------------|
| GMapInitializedEvent           | gmap: GMap instance   |
| GMapMarkerSelectedEvent        | marker: Your marker object representation |
| GMapGeocodeNoResultsEvent      | - |

#### GMap - Advanced features
If we need to work with the initialized GMap component instance, we must subscribe to the GMapInitializedEvent, that 
will be published through the event-bus once the gmap component has been initialized.

```bash
import {EventPublisher} from 'lin3s-event-bus';
import {EventBus} from 'lin3s-front-foundation';

EventPublisher.subscribe(new EventBus.GMapInitializedEventSubscriber(gmapInitializedEvent => {
    // If your need to filter the published instances, by their ancestor,
    const gmapInstance = gmapInitializedEvent.gmap;
    const instanceBelongsToThisNode = gmapInstance.isChildOfDomNode(someNode) {
        // whatever...
    }
    // ...
}));
```

We will set the GMap component's markers calling the *setMarkers(markers)* method.

If we want to use the built-in geocoding feature, we will call the *geocodeAddress(address)* of the GMap instance. 

The GMap component also comes with methods for displaying/hiding the marker detail view (
*showMarkerDetailView(markerId, markerDetailContentHtml)* and *hideMarkerDetailView()*).

This is a complete example of the component's features:

```bash
import {EventPublisher} from 'lin3s-event-bus';
import {EventBus} from 'lin3s-front-foundation';

class GMapTest {
    constructor() {
        EventPublisher.subscribe(new EventBus.GMapInitializedEventSubscriber(gmapInitializedEvent => {
            this.gmapInstance = gmapInitializedEvent.gmap;
            this.setupMarkers();
            this.init();
        }));
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
        
        EventPublisher.subscribe(new EventBus.GMapGeocodeNoResultsEventSubscriber(() => {
            console.log('Sorry, there are no results for the provided value!');
        }));
        
        EventPublisher.subscribe(new EventBus.GMapMarkerSelectedEventSubscriber(gmapMarkerSelectedEvent => {
            this.onMarkerSelected(gmapMarkerSelectedEvent.marker);
        }));
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

[1]: https://github.com/LIN3S/FrontFoundation/blob/master/src/templates/twig/components/gmap.html.twig#L26
[2]: https://snazzymaps.com/
