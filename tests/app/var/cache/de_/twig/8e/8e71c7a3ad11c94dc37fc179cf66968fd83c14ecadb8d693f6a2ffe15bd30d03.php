<?php

/* node_modules/har-validator/node_modules/ajv/lib/compile/schema_obj.js */
class __TwigTemplate_d740febec1e49d9ec60949fd704302c6bcc45fadb6a715f377b2348067529e80 extends Twig_Template
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
        $__internal_19d8d07dba017f7b590fe8cf0d2b4498c2a06516fccaaf026b4a493535257e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d8d07dba017f7b590fe8cf0d2b4498c2a06516fccaaf026b4a493535257e85->enter($__internal_19d8d07dba017f7b590fe8cf0d2b4498c2a06516fccaaf026b4a493535257e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-validator/node_modules/ajv/lib/compile/schema_obj.js"));

        // line 1
        echo "'use strict';

var util = require('./util');

module.exports = SchemaObject;

function SchemaObject(obj) {
  util.copy(obj, this);
}
";
        
        $__internal_19d8d07dba017f7b590fe8cf0d2b4498c2a06516fccaaf026b4a493535257e85->leave($__internal_19d8d07dba017f7b590fe8cf0d2b4498c2a06516fccaaf026b4a493535257e85_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-validator/node_modules/ajv/lib/compile/schema_obj.js";
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
", "node_modules/har-validator/node_modules/ajv/lib/compile/schema_obj.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-validator/node_modules/ajv/lib/compile/schema_obj.js");
    }
}
