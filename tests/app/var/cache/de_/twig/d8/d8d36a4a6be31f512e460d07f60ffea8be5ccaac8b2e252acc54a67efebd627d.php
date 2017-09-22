<?php

/* node_modules/core-js/library/fn/object/define-property.js */
class __TwigTemplate_4aa4d3dbde49c71dbdd451607f8c2ab316deffbbc1ed6ef47fe6785b9c82af6a extends Twig_Template
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
        $__internal_07bc28478d084611dbca0f1d2d2ccab1bc41bb8ca499b085edd26d5bed76cdbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bc28478d084611dbca0f1d2d2ccab1bc41bb8ca499b085edd26d5bed76cdbb->enter($__internal_07bc28478d084611dbca0f1d2d2ccab1bc41bb8ca499b085edd26d5bed76cdbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/object/define-property.js"));

        // line 1
        echo "require('../../modules/es6.object.define-property');
var \$Object = require('../../modules/_core').Object;
module.exports = function defineProperty(it, key, desc) {
  return \$Object.defineProperty(it, key, desc);
};
";
        
        $__internal_07bc28478d084611dbca0f1d2d2ccab1bc41bb8ca499b085edd26d5bed76cdbb->leave($__internal_07bc28478d084611dbca0f1d2d2ccab1bc41bb8ca499b085edd26d5bed76cdbb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/object/define-property.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.define-property');
var \$Object = require('../../modules/_core').Object;
module.exports = function defineProperty(it, key, desc) {
  return \$Object.defineProperty(it, key, desc);
};
", "node_modules/core-js/library/fn/object/define-property.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/object/define-property.js");
    }
}
