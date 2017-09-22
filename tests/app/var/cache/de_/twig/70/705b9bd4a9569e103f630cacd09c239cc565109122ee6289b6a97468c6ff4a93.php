<?php

/* node_modules/lin3s-front-foundation/dist/js/ui/vanilla/components/GMapMarkerDetail/init.js */
class __TwigTemplate_1a323c3c4608a4cc0371a5b53bda11013c5e4ce117cc860d15a1f43ca67797d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7451920196ecce687431f69650bcf4ba6050fae4225ab8b45d086248ae27230e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7451920196ecce687431f69650bcf4ba6050fae4225ab8b45d086248ae27230e->enter($__internal_7451920196ecce687431f69650bcf4ba6050fae4225ab8b45d086248ae27230e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-front-foundation/dist/js/ui/vanilla/components/GMapMarkerDetail/init.js"));

        // line 1
        echo "'use strict';

var _lin3sEventBus = require('lin3s-event-bus');

var _GMapMarkerDetail = require('./GMapMarkerDetail');

var _GMapMarkerDetail2 = _interopRequireDefault(_GMapMarkerDetail);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

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

var initGMapMarkerDetails = function initGMapMarkerDetails() {
  var gmapMarkerDetails = document.querySelectorAll('.js-gmap-marker-detail');

  Array.from(gmapMarkerDetails).forEach(function (gmapMarkerDetail) {
    return new _GMapMarkerDetail2.default(gmapMarkerDetail);
  });
};

(0, _lin3sEventBus.onDomReady)(initGMapMarkerDetails);";
        
        $__internal_7451920196ecce687431f69650bcf4ba6050fae4225ab8b45d086248ae27230e->leave($__internal_7451920196ecce687431f69650bcf4ba6050fae4225ab8b45d086248ae27230e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-front-foundation/dist/js/ui/vanilla/components/GMapMarkerDetail/init.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var _lin3sEventBus = require('lin3s-event-bus');

var _GMapMarkerDetail = require('./GMapMarkerDetail');

var _GMapMarkerDetail2 = _interopRequireDefault(_GMapMarkerDetail);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

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

var initGMapMarkerDetails = function initGMapMarkerDetails() {
  var gmapMarkerDetails = document.querySelectorAll('.js-gmap-marker-detail');

  Array.from(gmapMarkerDetails).forEach(function (gmapMarkerDetail) {
    return new _GMapMarkerDetail2.default(gmapMarkerDetail);
  });
};

(0, _lin3sEventBus.onDomReady)(initGMapMarkerDetails);", "node_modules/lin3s-front-foundation/dist/js/ui/vanilla/components/GMapMarkerDetail/init.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-front-foundation/dist/js/ui/vanilla/components/GMapMarkerDetail/init.js");
    }
}
