<?php

/* node_modules/stream-http/test/server/static/test-polyfill.js */
class __TwigTemplate_8de7ba0785669fc59fb908f00019e437b61773e4be1340e36a4f1ae0f278b426 extends Twig_Template
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
        $__internal_a4b40fc1ebe5279c107ae1fa2835d55d2fd362e84cd59805418463c41332066c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b40fc1ebe5279c107ae1fa2835d55d2fd362e84cd59805418463c41332066c->enter($__internal_a4b40fc1ebe5279c107ae1fa2835d55d2fd362e84cd59805418463c41332066c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/test/server/static/test-polyfill.js"));

        // line 1
        echo "if (!String.prototype.trim) {
  (function() {
    // Make sure we trim BOM and NBSP
    var rtrim = /^[\\s\\uFEFF\\xA0]+|[\\s\\uFEFF\\xA0]+\$/g;
    String.prototype.trim = function() {
      return this.replace(rtrim, '');
    };
  })();
}
";
        
        $__internal_a4b40fc1ebe5279c107ae1fa2835d55d2fd362e84cd59805418463c41332066c->leave($__internal_a4b40fc1ebe5279c107ae1fa2835d55d2fd362e84cd59805418463c41332066c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/test/server/static/test-polyfill.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("if (!String.prototype.trim) {
  (function() {
    // Make sure we trim BOM and NBSP
    var rtrim = /^[\\s\\uFEFF\\xA0]+|[\\s\\uFEFF\\xA0]+\$/g;
    String.prototype.trim = function() {
      return this.replace(rtrim, '');
    };
  })();
}
", "node_modules/stream-http/test/server/static/test-polyfill.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/test/server/static/test-polyfill.js");
    }
}
