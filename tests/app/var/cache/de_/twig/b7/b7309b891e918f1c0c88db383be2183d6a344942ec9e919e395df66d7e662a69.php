<?php

/* node_modules/fsevents/node_modules/jodid25519/index.js */
class __TwigTemplate_a4a43df76bd0082d77326b79e2bb361d9aab3203fe6e44fc8b061c19ab538263 extends Twig_Template
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
        $__internal_b9604dcd3d6adafb70f5d961063447f17910d119667028b8d44271743ae9f11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9604dcd3d6adafb70f5d961063447f17910d119667028b8d44271743ae9f11f->enter($__internal_b9604dcd3d6adafb70f5d961063447f17910d119667028b8d44271743ae9f11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/jodid25519/index.js"));

        // line 1
        echo "\"use strict\";

/*
 * Copyright (c) 2014 Mega Limited
 * under the MIT License.
 * 
 * Authors: Guy K. Kloss
 * 
 * You should have received a copy of the license along with this program.
 */

var dh = require('./lib/dh');
var eddsa = require('./lib/eddsa');
var curve255 = require('./lib/curve255');
var utils = require('./lib/utils');
    
    /**
     * @exports jodid25519
     * Curve 25519-based cryptography collection.
     *
     * @description
     * EC Diffie-Hellman (ECDH) based on Curve25519 and digital signatures
     * (EdDSA) based on Ed25519.
     */
    var ns = {};
    
    /** Module version indicator as string (format: [major.minor.patch]). */
    ns.VERSION = '0.7.1';

    ns.dh = dh;
    ns.eddsa = eddsa;
    ns.curve255 = curve255;
    ns.utils = utils;

module.exports = ns;
";
        
        $__internal_b9604dcd3d6adafb70f5d961063447f17910d119667028b8d44271743ae9f11f->leave($__internal_b9604dcd3d6adafb70f5d961063447f17910d119667028b8d44271743ae9f11f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/jodid25519/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

/*
 * Copyright (c) 2014 Mega Limited
 * under the MIT License.
 * 
 * Authors: Guy K. Kloss
 * 
 * You should have received a copy of the license along with this program.
 */

var dh = require('./lib/dh');
var eddsa = require('./lib/eddsa');
var curve255 = require('./lib/curve255');
var utils = require('./lib/utils');
    
    /**
     * @exports jodid25519
     * Curve 25519-based cryptography collection.
     *
     * @description
     * EC Diffie-Hellman (ECDH) based on Curve25519 and digital signatures
     * (EdDSA) based on Ed25519.
     */
    var ns = {};
    
    /** Module version indicator as string (format: [major.minor.patch]). */
    ns.VERSION = '0.7.1';

    ns.dh = dh;
    ns.eddsa = eddsa;
    ns.curve255 = curve255;
    ns.utils = utils;

module.exports = ns;
", "node_modules/fsevents/node_modules/jodid25519/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/jodid25519/index.js");
    }
}
