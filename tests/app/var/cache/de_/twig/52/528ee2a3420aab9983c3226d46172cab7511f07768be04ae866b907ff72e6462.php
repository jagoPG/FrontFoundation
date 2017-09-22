<?php

/* node_modules/core-js/library/modules/_dom-create.js */
class __TwigTemplate_c1b9a09dffe3d5a4db7274e2d3416967710e3406f18cf78b71a91eb2ab429def extends Twig_Template
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
        $__internal_8bf9c560af4e42f457f57d99e5a0b6c601d4935eda2b990476c8de899e38dbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf9c560af4e42f457f57d99e5a0b6c601d4935eda2b990476c8de899e38dbef->enter($__internal_8bf9c560af4e42f457f57d99e5a0b6c601d4935eda2b990476c8de899e38dbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_dom-create.js"));

        // line 1
        echo "var isObject = require('./_is-object');
var document = require('./_global').document;
// typeof document.createElement is 'object' in old IE
var is = isObject(document) && isObject(document.createElement);
module.exports = function (it) {
  return is ? document.createElement(it) : {};
};
";
        
        $__internal_8bf9c560af4e42f457f57d99e5a0b6c601d4935eda2b990476c8de899e38dbef->leave($__internal_8bf9c560af4e42f457f57d99e5a0b6c601d4935eda2b990476c8de899e38dbef_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_dom-create.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isObject = require('./_is-object');
var document = require('./_global').document;
// typeof document.createElement is 'object' in old IE
var is = isObject(document) && isObject(document.createElement);
module.exports = function (it) {
  return is ? document.createElement(it) : {};
};
", "node_modules/core-js/library/modules/_dom-create.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_dom-create.js");
    }
}
