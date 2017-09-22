<?php

/* node_modules/es5-ext/object/flatten.js */
class __TwigTemplate_efceda250eda8c6988a4f68fc6e2905ce6359d0e02dc094de83f760a5fc7fa27 extends Twig_Template
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
        $__internal_6bdf24956c67f2c20a253f7bc981dcb2333703f5db76ac7ef1d647d34d98568c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bdf24956c67f2c20a253f7bc981dcb2333703f5db76ac7ef1d647d34d98568c->enter($__internal_6bdf24956c67f2c20a253f7bc981dcb2333703f5db76ac7ef1d647d34d98568c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/flatten.js"));

        // line 1
        echo "\"use strict\";

var isPlainObject = require(\"./is-plain-object\")
  , forEach       = require(\"./for-each\")

  , process;

process = function self (value, key) {
\tif (isPlainObject(value)) forEach(value, self, this);
\telse this[key] = value;
};

module.exports = function (obj) {
\tvar flattened = {};
\tforEach(obj, process, flattened);
\treturn flattened;
};
";
        
        $__internal_6bdf24956c67f2c20a253f7bc981dcb2333703f5db76ac7ef1d647d34d98568c->leave($__internal_6bdf24956c67f2c20a253f7bc981dcb2333703f5db76ac7ef1d647d34d98568c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/flatten.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isPlainObject = require(\"./is-plain-object\")
  , forEach       = require(\"./for-each\")

  , process;

process = function self (value, key) {
\tif (isPlainObject(value)) forEach(value, self, this);
\telse this[key] = value;
};

module.exports = function (obj) {
\tvar flattened = {};
\tforEach(obj, process, flattened);
\treturn flattened;
};
", "node_modules/es5-ext/object/flatten.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/flatten.js");
    }
}
