<?php

/* node_modules/fsevents/node_modules/performance-now/src/performance-now.coffee */
class __TwigTemplate_f2f18cac024595d9e75ed796ede344df2403c20b67d5ee26b32a0a96c643211a extends Twig_Template
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
        $__internal_9fce0d64865e24fff22375d9091c5f420a9b5337cd62dbfa98fe5ecc66880a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fce0d64865e24fff22375d9091c5f420a9b5337cd62dbfa98fe5ecc66880a2e->enter($__internal_9fce0d64865e24fff22375d9091c5f420a9b5337cd62dbfa98fe5ecc66880a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/performance-now/src/performance-now.coffee"));

        // line 1
        echo "if performance? and performance.now
  module.exports = -> performance.now()
else if process? and process.hrtime
  module.exports = -> (getNanoSeconds() - loadTime) / 1e6
  hrtime = process.hrtime
  getNanoSeconds = ->
    hr = hrtime()
    hr[0] * 1e9 + hr[1]
  loadTime = getNanoSeconds()
else if Date.now
  module.exports = -> Date.now() - loadTime
  loadTime = Date.now()
else
  module.exports = -> new Date().getTime() - loadTime
  loadTime = new Date().getTime()
";
        
        $__internal_9fce0d64865e24fff22375d9091c5f420a9b5337cd62dbfa98fe5ecc66880a2e->leave($__internal_9fce0d64865e24fff22375d9091c5f420a9b5337cd62dbfa98fe5ecc66880a2e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/performance-now/src/performance-now.coffee";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("if performance? and performance.now
  module.exports = -> performance.now()
else if process? and process.hrtime
  module.exports = -> (getNanoSeconds() - loadTime) / 1e6
  hrtime = process.hrtime
  getNanoSeconds = ->
    hr = hrtime()
    hr[0] * 1e9 + hr[1]
  loadTime = getNanoSeconds()
else if Date.now
  module.exports = -> Date.now() - loadTime
  loadTime = Date.now()
else
  module.exports = -> new Date().getTime() - loadTime
  loadTime = new Date().getTime()
", "node_modules/fsevents/node_modules/performance-now/src/performance-now.coffee", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/performance-now/src/performance-now.coffee");
    }
}
