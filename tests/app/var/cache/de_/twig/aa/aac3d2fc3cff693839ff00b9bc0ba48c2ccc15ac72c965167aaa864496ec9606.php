<?php

/* node_modules/pako/index.js */
class __TwigTemplate_ea982d971fc608c6ffac01c26b1a59510e0ecbe28849e06e1b66ee5b6f1b7c8e extends Twig_Template
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
        $__internal_456d3a3ae470491dc51a62c6363268c987da6ebf63858188a5e653a4181398bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456d3a3ae470491dc51a62c6363268c987da6ebf63858188a5e653a4181398bb->enter($__internal_456d3a3ae470491dc51a62c6363268c987da6ebf63858188a5e653a4181398bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/pako/index.js"));

        // line 1
        echo "// Top level file is just a mixin of submodules & constants
'use strict';

var assign    = require('./lib/utils/common').assign;

var deflate   = require('./lib/deflate');
var inflate   = require('./lib/inflate');
var constants = require('./lib/zlib/constants');

var pako = {};

assign(pako, deflate, inflate, constants);

module.exports = pako;
";
        
        $__internal_456d3a3ae470491dc51a62c6363268c987da6ebf63858188a5e653a4181398bb->leave($__internal_456d3a3ae470491dc51a62c6363268c987da6ebf63858188a5e653a4181398bb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/pako/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Top level file is just a mixin of submodules & constants
'use strict';

var assign    = require('./lib/utils/common').assign;

var deflate   = require('./lib/deflate');
var inflate   = require('./lib/inflate');
var constants = require('./lib/zlib/constants');

var pako = {};

assign(pako, deflate, inflate, constants);

module.exports = pako;
", "node_modules/pako/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/pako/index.js");
    }
}
