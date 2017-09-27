/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */

import {Priority} from 'lin3s-event-bus';
import {EventPublisher} from 'lin3s-event-bus';
import GMapInitializedEventSubscriber from './GMap/GMapInitializedEventSubscriber';
import GMapMarkerSelectedEventSubscriber from './GMap/GMapMarkerSelectedEventSubscriber';
import GMapGeocodeNoResultsEventSubscriber from './GMap/GMapGeocodeNoResultsEventSubscriber';

const onGMapInitialized = (domNode, onGMapInitializedCallback, priority) => {
  const gmapInitializedEventSubscriber = new GMapInitializedEventSubscriber(
    domNode,
    onGMapInitializedCallback,
    new Priority(priority)
  );

  EventPublisher.subscribe(gmapInitializedEventSubscriber);

  return gmapInitializedEventSubscriber;
};

const onGMapMarkerSelected = (domNode, onGMapMarkerSelectedCallback, priority) => {
  const gmapMarkerSelectedEventSubscriber = new GMapMarkerSelectedEventSubscriber(
    domNode,
    onGMapMarkerSelectedCallback,
    new Priority(priority)
  );

  EventPublisher.subscribe(gmapMarkerSelectedEventSubscriber);

  return gmapMarkerSelectedEventSubscriber;
};

const onGMapGeocodeNoResults = (domNode, onGMapGeocodeNoResultsCallback, priority) => {
  const gmapGeocodeNoResultsEventSubscriber = new GMapGeocodeNoResultsEventSubscriber(
    domNode,
    onGMapGeocodeNoResultsCallback,
    new Priority(priority)
  );

  EventPublisher.subscribe(gmapGeocodeNoResultsEventSubscriber);

  return gmapGeocodeNoResultsEventSubscriber;
};

export {
  onGMapInitialized,
  onGMapMarkerSelected,
  onGMapGeocodeNoResults
}
