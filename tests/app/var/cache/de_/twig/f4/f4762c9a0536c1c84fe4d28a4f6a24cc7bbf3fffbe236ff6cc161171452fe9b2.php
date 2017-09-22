<?php

/* node_modules/ajv/lib/compile/schema_obj.js */
class __TwigTemplate_b5f9902d2ab6385cd29491628ae7e4ecbe8ad68bdc788a7cca36d253ee745b91 extends Twig_Template
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
        $__internal_b23b2966ff289bdbfddb53cd05c081174abd09574e7eb462ebff616b5a6ac45d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23b2966ff289bdbfddb53cd05c081174abd09574e7eb462ebff616b5a6ac45d->enter($__internal_b23b2966ff289bdbfddb53cd05c081174abd09574e7eb462ebff616b5a6ac45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/lib/compile/schema_obj.js"));

        // line 1
        echo "'use strict';

var util = require('./util');

module.exports = SchemaObject;

function SchemaObject(obj) {
  util.copy(obj, this);
}
";
        
        $__internal_b23b2966ff289bdbfddb53cd05c081174abd09574e7eb462ebff616b5a6ac45d->leave($__internal_b23b2966ff289bdbfddb53cd05c081174abd09574e7eb462ebff616b5a6ac45d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/lib/compile/schema_obj.js";
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
", "node_modules/ajv/lib/compile/schema_obj.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/lib/compile/schema_obj.js");
    }
}
