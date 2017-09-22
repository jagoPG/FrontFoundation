<?php

/* node_modules/core-js/library/modules/es7.array.flat-map.js */
class __TwigTemplate_f43b4e05ffe2aadfc6f572b4e5d13c68b8184c0fa0b1e3d765dab5d875e9d168 extends Twig_Template
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
        $__internal_7a27b4e9a0c3d24c95bc9ba974a1db186a540fa6e9196a29d72499c01459fc67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a27b4e9a0c3d24c95bc9ba974a1db186a540fa6e9196a29d72499c01459fc67->enter($__internal_7a27b4e9a0c3d24c95bc9ba974a1db186a540fa6e9196a29d72499c01459fc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.array.flat-map.js"));

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
        
        $__internal_7a27b4e9a0c3d24c95bc9ba974a1db186a540fa6e9196a29d72499c01459fc67->leave($__internal_7a27b4e9a0c3d24c95bc9ba974a1db186a540fa6e9196a29d72499c01459fc67_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.array.flat-map.js";
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
", "node_modules/core-js/library/modules/es7.array.flat-map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.array.flat-map.js");
    }
}
