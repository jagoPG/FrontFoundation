<?php

/* node_modules/core-js/library/modules/_collection-to-json.js */
class __TwigTemplate_aac222e2c50dc246069ef7cc05f957057eaa8c95229fbc567f78d6dcbbaf0e17 extends Twig_Template
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
        $__internal_41db267ea08a5c0d6ab38976b33dae9870d05b04673ebdff8a1988654ce70a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41db267ea08a5c0d6ab38976b33dae9870d05b04673ebdff8a1988654ce70a74->enter($__internal_41db267ea08a5c0d6ab38976b33dae9870d05b04673ebdff8a1988654ce70a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_collection-to-json.js"));

        // line 1
        echo "// https://github.com/DavidBruant/Map-Set.prototype.toJSON
var classof = require('./_classof');
var from = require('./_array-from-iterable');
module.exports = function (NAME) {
  return function toJSON() {
    if (classof(this) != NAME) throw TypeError(NAME + \"#toJSON isn't generic\");
    return from(this);
  };
};
";
        
        $__internal_41db267ea08a5c0d6ab38976b33dae9870d05b04673ebdff8a1988654ce70a74->leave($__internal_41db267ea08a5c0d6ab38976b33dae9870d05b04673ebdff8a1988654ce70a74_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_collection-to-json.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://github.com/DavidBruant/Map-Set.prototype.toJSON
var classof = require('./_classof');
var from = require('./_array-from-iterable');
module.exports = function (NAME) {
  return function toJSON() {
    if (classof(this) != NAME) throw TypeError(NAME + \"#toJSON isn't generic\");
    return from(this);
  };
};
", "node_modules/core-js/library/modules/_collection-to-json.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_collection-to-json.js");
    }
}
