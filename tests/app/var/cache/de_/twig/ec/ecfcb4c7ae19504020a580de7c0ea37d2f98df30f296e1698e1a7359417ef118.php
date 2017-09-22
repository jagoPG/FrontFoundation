<?php

/* node_modules/core-js/library/modules/es7.array.flatten.js */
class __TwigTemplate_82981fa378a7e1f7ebccd27a7e26d0c4ecc8c81b94a247ba68b29244b433ec9f extends Twig_Template
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
        $__internal_1b5d716558053051f561122bdb0ae8c956e2e940103d2631abcd17fc40c573a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5d716558053051f561122bdb0ae8c956e2e940103d2631abcd17fc40c573a8->enter($__internal_1b5d716558053051f561122bdb0ae8c956e2e940103d2631abcd17fc40c573a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.array.flatten.js"));

        // line 1
        echo "'use strict';
// https://tc39.github.io/proposal-flatMap/#sec-Array.prototype.flatten
var \$export = require('./_export');
var flattenIntoArray = require('./_flatten-into-array');
var toObject = require('./_to-object');
var toLength = require('./_to-length');
var toInteger = require('./_to-integer');
var arraySpeciesCreate = require('./_array-species-create');

\$export(\$export.P, 'Array', {
  flatten: function flatten(/* depthArg = 1 */) {
    var depthArg = arguments[0];
    var O = toObject(this);
    var sourceLen = toLength(O.length);
    var A = arraySpeciesCreate(O, 0);
    flattenIntoArray(A, O, O, sourceLen, 0, depthArg === undefined ? 1 : toInteger(depthArg));
    return A;
  }
});

require('./_add-to-unscopables')('flatten');
";
        
        $__internal_1b5d716558053051f561122bdb0ae8c956e2e940103d2631abcd17fc40c573a8->leave($__internal_1b5d716558053051f561122bdb0ae8c956e2e940103d2631abcd17fc40c573a8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.array.flatten.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// https://tc39.github.io/proposal-flatMap/#sec-Array.prototype.flatten
var \$export = require('./_export');
var flattenIntoArray = require('./_flatten-into-array');
var toObject = require('./_to-object');
var toLength = require('./_to-length');
var toInteger = require('./_to-integer');
var arraySpeciesCreate = require('./_array-species-create');

\$export(\$export.P, 'Array', {
  flatten: function flatten(/* depthArg = 1 */) {
    var depthArg = arguments[0];
    var O = toObject(this);
    var sourceLen = toLength(O.length);
    var A = arraySpeciesCreate(O, 0);
    flattenIntoArray(A, O, O, sourceLen, 0, depthArg === undefined ? 1 : toInteger(depthArg));
    return A;
  }
});

require('./_add-to-unscopables')('flatten');
", "node_modules/core-js/library/modules/es7.array.flatten.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.array.flatten.js");
    }
}
