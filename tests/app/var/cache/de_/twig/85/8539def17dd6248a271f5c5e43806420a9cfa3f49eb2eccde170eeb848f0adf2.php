<?php

/* node_modules/core-js/modules/es7.array.flat-map.js */
class __TwigTemplate_f829479e9314d21a5397d5685b87616d23d98994f8c9bb573b3a4672018f839d extends Twig_Template
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
        $__internal_b6d2bbb02158d012dae425775482dee40d7ee0979f2c2523f59d1f427590d96e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d2bbb02158d012dae425775482dee40d7ee0979f2c2523f59d1f427590d96e->enter($__internal_b6d2bbb02158d012dae425775482dee40d7ee0979f2c2523f59d1f427590d96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.array.flat-map.js"));

        // line 1
        echo "'use strict';
// https://tc39.github.io/proposal-flatMap/#sec-Array.prototype.flatMap
var \$export = require('./_export');
var flattenIntoArray = require('./_flatten-into-array');
var toObject = require('./_to-object');
var toLength = require('./_to-length');
var aFunction = require('./_a-function');
var arraySpeciesCreate = require('./_array-species-create');

\$export(\$export.P, 'Array', {
  flatMap: function flatMap(callbackfn /* , thisArg */) {
    var O = toObject(this);
    var sourceLen, A;
    aFunction(callbackfn);
    sourceLen = toLength(O.length);
    A = arraySpeciesCreate(O, 0);
    flattenIntoArray(A, O, O, sourceLen, 0, 1, callbackfn, arguments[1]);
    return A;
  }
});

require('./_add-to-unscopables')('flatMap');
";
        
        $__internal_b6d2bbb02158d012dae425775482dee40d7ee0979f2c2523f59d1f427590d96e->leave($__internal_b6d2bbb02158d012dae425775482dee40d7ee0979f2c2523f59d1f427590d96e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.array.flat-map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// https://tc39.github.io/proposal-flatMap/#sec-Array.prototype.flatMap
var \$export = require('./_export');
var flattenIntoArray = require('./_flatten-into-array');
var toObject = require('./_to-object');
var toLength = require('./_to-length');
var aFunction = require('./_a-function');
var arraySpeciesCreate = require('./_array-species-create');

\$export(\$export.P, 'Array', {
  flatMap: function flatMap(callbackfn /* , thisArg */) {
    var O = toObject(this);
    var sourceLen, A;
    aFunction(callbackfn);
    sourceLen = toLength(O.length);
    A = arraySpeciesCreate(O, 0);
    flattenIntoArray(A, O, O, sourceLen, 0, 1, callbackfn, arguments[1]);
    return A;
  }
});

require('./_add-to-unscopables')('flatMap');
", "node_modules/core-js/modules/es7.array.flat-map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.array.flat-map.js");
    }
}
