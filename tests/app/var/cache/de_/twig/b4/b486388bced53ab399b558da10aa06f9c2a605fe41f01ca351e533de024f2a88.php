<?php

/* node_modules/babel-plugin-syntax-dynamic-import/lib/index.js */
class __TwigTemplate_2d2b9cb7baed4ce8d6bababeef45a6c76f980835595b06201ebcd212e2ac1688 extends Twig_Template
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
        $__internal_3720ba0ca1ac75e5fcb01533ff809d85d083deded9b138257b9383c62c56b18d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3720ba0ca1ac75e5fcb01533ff809d85d083deded9b138257b9383c62c56b18d->enter($__internal_3720ba0ca1ac75e5fcb01533ff809d85d083deded9b138257b9383c62c56b18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-syntax-dynamic-import/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function () {
  return {
    manipulateOptions: function manipulateOptions(opts, parserOpts) {
      parserOpts.plugins.push(\"dynamicImport\");
    }
  };
};

module.exports = exports[\"default\"];";
        
        $__internal_3720ba0ca1ac75e5fcb01533ff809d85d083deded9b138257b9383c62c56b18d->leave($__internal_3720ba0ca1ac75e5fcb01533ff809d85d083deded9b138257b9383c62c56b18d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-syntax-dynamic-import/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

exports.default = function () {
  return {
    manipulateOptions: function manipulateOptions(opts, parserOpts) {
      parserOpts.plugins.push(\"dynamicImport\");
    }
  };
};

module.exports = exports[\"default\"];", "node_modules/babel-plugin-syntax-dynamic-import/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-syntax-dynamic-import/lib/index.js");
    }
}
