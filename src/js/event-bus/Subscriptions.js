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
import {OneTimeEventPublisher, LifeTimeEventPublisher} from 'lin3s-event-bus';
import GMapInitializedEventSubscriber from './GMap/GMapInitializedEventSubscriber';
import GMapMarkerSelectedEventSubscriber from './GMap/GMapMarkerSelectedEventSubscriber';
import GMapGeocodeNoResultsEventSubscriber from './GMap/GMapGeocodeNoResultsEventSubscriber';
import FormSelectInitializedEventSubscriber from './FormSelect/FormSelectInitializedEventSubscriber';
import FormSelectOptionSelectedEventSubscriber from './FormSelect/FormSelectOptionSelectedEventSubscriber';
import FormSelectStateChangedEventSubscriber from './FormSelect/FormSelectStateChangedEventSubscriber';
import DomNodeUpdatedEventSubscriber from './DomNodeUpdated/DomNodeUpdatedEventSubscriber';
import ModalStateChangedEventSubscriber from './Modal/ModalStateChangedEventSubscriber';

const
  onGMapInitialized = (domNode, onGMapInitializedCallback, priority) => {
    const gmapInitializedEventSubscriber = new GMapInitializedEventSubscriber(
      domNode,
      onGMapInitializedCallback,
      new Priority(priority)
    );

    OneTimeEventPublisher.subscribe(gmapInitializedEventSubscriber);

    return gmapInitializedEventSubscriber;
  },
  onGMapMarkerSelected = (domNode, onGMapMarkerSelectedCallback, priority) => {
    const gmapMarkerSelectedEventSubscriber = new GMapMarkerSelectedEventSubscriber(
      domNode,
      onGMapMarkerSelectedCallback,
      new Priority(priority)
    );

    LifeTimeEventPublisher.subscribe(gmapMarkerSelectedEventSubscriber);

    return gmapMarkerSelectedEventSubscriber;
  },
  onGMapGeocodeNoResults = (domNode, onGMapGeocodeNoResultsCallback, priority) => {
    const gmapGeocodeNoResultsEventSubscriber = new GMapGeocodeNoResultsEventSubscriber(
      domNode,
      onGMapGeocodeNoResultsCallback,
      new Priority(priority)
    );

    LifeTimeEventPublisher.subscribe(gmapGeocodeNoResultsEventSubscriber);

    return gmapGeocodeNoResultsEventSubscriber;
  };

const
  onFormSelectInitialized = (domNode, onFormSelectInitializedCallback, priority) => {
    const formSelectInitializedEventSubscriber = new FormSelectInitializedEventSubscriber(
      domNode,
      onFormSelectInitializedCallback,
      new Priority(priority)
    );

    OneTimeEventPublisher.subscribe(formSelectInitializedEventSubscriber);

    return formSelectInitializedEventSubscriber;
  },
  onFormSelectOptionSelected = (domNode, onFormSelectOptionSelectedCallback, priority) => {
    const formSelectOptionSelectedEventSubscriber = new FormSelectOptionSelectedEventSubscriber(
      domNode,
      onFormSelectOptionSelectedCallback,
      new Priority(priority)
    );

    LifeTimeEventPublisher.subscribe(formSelectOptionSelectedEventSubscriber);

    return formSelectOptionSelectedEventSubscriber;
  },
  onFormSelectStateChanged = (domNode, onFormSelectStateChangedCallback, priority) => {
    const formSelectStateChangedEventSubscriber = new FormSelectStateChangedEventSubscriber(
      domNode,
      onFormSelectStateChangedCallback,
      new Priority(priority)
    );

    LifeTimeEventPublisher.subscribe(formSelectStateChangedEventSubscriber);

    return formSelectStateChangedEventSubscriber;
  },
  onDomNodeUpdated = (domNode, onDomNodeUpdatedCallback, priority) => {
    const domNodeUpdatedEventSubscriber = new DomNodeUpdatedEventSubscriber(
      domNode,
      onDomNodeUpdatedCallback,
      new Priority(priority)
    );

    LifeTimeEventPublisher.subscribe(domNodeUpdatedEventSubscriber);

    return domNodeUpdatedEventSubscriber;
  },
  onModalStateChanged = (onModalStateChangedCallback, priority) => {
    const modalStateChangedEventSubscriber = new DomNodeUpdatedEventSubscriber(
      onModalStateChangedCallback,
      new Priority(priority)
    );

    LifeTimeEventPublisher.subscribe(modalStateChangedEventSubscriber);

    return modalStateChangedEventSubscriber;
  };

export {
  onGMapInitialized,
  onGMapMarkerSelected,
  onGMapGeocodeNoResults,
  onFormSelectInitialized,
  onFormSelectOptionSelected,
  onFormSelectStateChanged,
  onDomNodeUpdated,
  onModalStateChanged
};
