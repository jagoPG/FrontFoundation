<?php

/* node_modules/performance-now/src/performance-now.coffee */
class __TwigTemplate_1c3714f067f80e58b77696572c9d9935e9fffe50cb5ae80cbeaa76b7b43f9006 extends Twig_Template
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
        $__internal_42ddb9ad9afd5adf51aaa35c367075da7b8b90e41b089ab2ab73b2896793bdd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ddb9ad9afd5adf51aaa35c367075da7b8b90e41b089ab2ab73b2896793bdd1->enter($__internal_42ddb9ad9afd5adf51aaa35c367075da7b8b90e41b089ab2ab73b2896793bdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/performance-now/src/performance-now.coffee"));

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
        
        $__internal_42ddb9ad9afd5adf51aaa35c367075da7b8b90e41b089ab2ab73b2896793bdd1->leave($__internal_42ddb9ad9afd5adf51aaa35c367075da7b8b90e41b089ab2ab73b2896793bdd1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/performance-now/src/performance-now.coffee";
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
", "node_modules/performance-now/src/performance-now.coffee", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/performance-now/src/performance-now.coffee");
    }
}
