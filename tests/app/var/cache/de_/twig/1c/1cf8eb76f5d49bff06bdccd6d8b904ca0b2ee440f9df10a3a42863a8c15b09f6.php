<?php

/* node_modules/es5-ext/boolean/is-boolean.js */
class __TwigTemplate_f13debcc9ccfeee66257099b7988a629fb2ef5811cd459e2a7c343f168de0cb6 extends Twig_Template
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
        $__internal_debbe83f5561b347d1a52e0977469113516134aeee931c27783d5c4df9dbb85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_debbe83f5561b347d1a52e0977469113516134aeee931c27783d5c4df9dbb85b->enter($__internal_debbe83f5561b347d1a52e0977469113516134aeee931c27783d5c4df9dbb85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/boolean/is-boolean.js"));

        // line 1
        echo "\"use strict\";

var objToString = Object.prototype.toString, id = objToString.call(true);

module.exports = function (value) {
\treturn (
\t\ttypeof value === \"boolean\" ||
\t\t(typeof value === \"object\" && (value instanceof Boolean || objToString.call(value) === id))
\t);
};
";
        
        $__internal_debbe83f5561b347d1a52e0977469113516134aeee931c27783d5c4df9dbb85b->leave($__internal_debbe83f5561b347d1a52e0977469113516134aeee931c27783d5c4df9dbb85b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/boolean/is-boolean.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var objToString = Object.prototype.toString, id = objToString.call(true);

module.exports = function (value) {
\treturn (
\t\ttypeof value === \"boolean\" ||
\t\t(typeof value === \"object\" && (value instanceof Boolean || objToString.call(value) === id))
\t);
};
", "node_modules/es5-ext/boolean/is-boolean.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/boolean/is-boolean.js");
    }
}
