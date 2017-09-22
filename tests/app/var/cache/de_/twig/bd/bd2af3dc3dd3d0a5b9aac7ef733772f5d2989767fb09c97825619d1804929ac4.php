<?php

/* node_modules/inherits/inherits.js */
class __TwigTemplate_afc717df02bf837f40e8f1395d03fc8f77084f595164731c42a7f53745f7e810 extends Twig_Template
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
        $__internal_7a95cf258e9044129b81e3516670f795c1524e566acf6e90d13316b8f32478db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a95cf258e9044129b81e3516670f795c1524e566acf6e90d13316b8f32478db->enter($__internal_7a95cf258e9044129b81e3516670f795c1524e566acf6e90d13316b8f32478db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/inherits/inherits.js"));

        // line 1
        echo "try {
  var util = require('util');
  if (typeof util.inherits !== 'function') throw '';
  module.exports = util.inherits;
} catch (e) {
  module.exports = require('./inherits_browser.js');
}
";
        
        $__internal_7a95cf258e9044129b81e3516670f795c1524e566acf6e90d13316b8f32478db->leave($__internal_7a95cf258e9044129b81e3516670f795c1524e566acf6e90d13316b8f32478db_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/inherits/inherits.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("try {
  var util = require('util');
  if (typeof util.inherits !== 'function') throw '';
  module.exports = util.inherits;
} catch (e) {
  module.exports = require('./inherits_browser.js');
}
", "node_modules/inherits/inherits.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/inherits/inherits.js");
    }
}
