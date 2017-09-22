<?php

/* node_modules/es5-ext/date/#/floor-day.js */
class __TwigTemplate_1951fff510efdc90c001e9e0ed2fad220a879731b5980ad3af9f5d06b387bba9 extends Twig_Template
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
        $__internal_30c8c7b90ba6c7e1a4c358c3805120825b944c043db2067b6dc9f159264205d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c8c7b90ba6c7e1a4c358c3805120825b944c043db2067b6dc9f159264205d1->enter($__internal_30c8c7b90ba6c7e1a4c358c3805120825b944c043db2067b6dc9f159264205d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/date/#/floor-day.js"));

        // line 1
        echo "\"use strict\";

var setHours = Date.prototype.setHours;

module.exports = function () {
\tsetHours.call(this, 0, 0, 0, 0);
\treturn this;
};
";
        
        $__internal_30c8c7b90ba6c7e1a4c358c3805120825b944c043db2067b6dc9f159264205d1->leave($__internal_30c8c7b90ba6c7e1a4c358c3805120825b944c043db2067b6dc9f159264205d1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/date/#/floor-day.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var setHours = Date.prototype.setHours;

module.exports = function () {
\tsetHours.call(this, 0, 0, 0, 0);
\treturn this;
};
", "node_modules/es5-ext/date/#/floor-day.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/date/#/floor-day.js");
    }
}
