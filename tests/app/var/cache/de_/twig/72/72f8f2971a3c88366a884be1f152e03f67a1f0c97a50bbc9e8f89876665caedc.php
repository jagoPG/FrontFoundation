<?php

/* node_modules/fsevents/node_modules/ajv/lib/compile/schema_obj.js */
class __TwigTemplate_63b22b8bf1faf1030ed398f78d9f876102d48b9d9697e1aff6855ad38d1a5a15 extends Twig_Template
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
        $__internal_274e72659fecd1f627e0aa8280ea27d0c29464dc9d28673eabf280d3df38b4dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274e72659fecd1f627e0aa8280ea27d0c29464dc9d28673eabf280d3df38b4dc->enter($__internal_274e72659fecd1f627e0aa8280ea27d0c29464dc9d28673eabf280d3df38b4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ajv/lib/compile/schema_obj.js"));

        // line 1
        echo "'use strict';

var util = require('./util');

module.exports = SchemaObject;

function SchemaObject(obj) {
  util.copy(obj, this);
}
";
        
        $__internal_274e72659fecd1f627e0aa8280ea27d0c29464dc9d28673eabf280d3df38b4dc->leave($__internal_274e72659fecd1f627e0aa8280ea27d0c29464dc9d28673eabf280d3df38b4dc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ajv/lib/compile/schema_obj.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var util = require('./util');

module.exports = SchemaObject;

function SchemaObject(obj) {
  util.copy(obj, this);
}
", "node_modules/fsevents/node_modules/ajv/lib/compile/schema_obj.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ajv/lib/compile/schema_obj.js");
    }
}
