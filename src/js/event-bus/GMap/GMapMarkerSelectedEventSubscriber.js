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
import GMapMarkerSelectedEvent from './GMapMarkerSelectedEvent';

class GMapMarkerSelectedEventSubscriber extends EventSubscriber {

  isSubscribedTo(anEvent) {
    const event = new GMapMarkerSelectedEvent();

    return anEvent.getName() === event.getName();
  }
}

export default GMapMarkerSelectedEventSubscriber;
