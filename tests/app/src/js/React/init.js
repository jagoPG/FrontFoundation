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

import {onDomReady} from 'lin3s-event-bus';
import React from 'react';
import ReactDOM from 'react-dom';
import ReactFormSelect from './ReactFormSelect';

const
  formSelectOptions = [{
    label: '--',
    value: '--'
  }, {
    label: 'Enero',
    value: '0'
  }, {
    label: 'Febrero',
    value: '1'
  }, {
    label: 'Marzo',
    value: '2'
  }, {
    label: 'Abril',
    value: '3'
  }, {
    label: 'Mayo',
    value: '4'
  }, {
    label: 'Junio',
    value: '5'
  }, {
    label: 'Julio',
    value: '6'
  }, {
    label: 'Agosto',
    value: '7'
  }, {
    label: 'Septiembre',
    value: '8'
  }, {
    label: 'Octubre',
    value: '9'
  }, {
    label: 'Noviembre',
    value: '10'
  }, {
    label: 'Diciembre',
    value: '11'
  }],
  renderFormSelect = mountNode => {
    ReactDOM.render(
      <ReactFormSelect domNode={mountNode} options={formSelectOptions}/>,
      mountNode
    );
  },
  onReady = () => {
    const domNodes = document.querySelectorAll('.form-select-mount-node');

    Array.from(domNodes).forEach(mountNode => renderFormSelect(mountNode));
  };

onDomReady(onReady);
