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

import {EventSubscriber} from 'lin3s-event-bus';
import GMapGeocodeNoResultsEvent from './GMapGeocodeNoResultsEvent';
import {isDomNodeDescendantOfDomNode} from './../../dom';

class GMapGeocodeNoResultsEventSubscriber extends EventSubscriber {

  constructor(domNode, aCallback, aPriority) {
    super(aCallback, aPriority);

    this.domNode = domNode;
  }

  isSubscribedTo(gmapNoResultsEvent) {
    const event = new GMapGeocodeNoResultsEvent();

    const gmapInstanceDomNode = gmapNoResultsEvent.gmapInstance.domNode;

    return gmapNoResultsEvent.getName() === event.getName()
      && (this.domNode === gmapInstanceDomNode || isDomNodeDescendantOfDomNode(gmapInstanceDomNode, this.domNode));
  }
}

export default GMapGeocodeNoResultsEventSubscriber;
