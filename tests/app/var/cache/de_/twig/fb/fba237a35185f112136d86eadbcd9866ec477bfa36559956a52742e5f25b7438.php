<?php

/* node_modules/crypto-browserify/example/index.html */
class __TwigTemplate_7a8100dfc299272e94b7eb95ceee20d7122b7b461a108c11822ea6adf0739ec4 extends Twig_Template
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
        $__internal_5563fe2aaff1590643ee84ed351749d34bab029a87404bb2f25828b9a278210c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5563fe2aaff1590643ee84ed351749d34bab029a87404bb2f25828b9a278210c->enter($__internal_5563fe2aaff1590643ee84ed351749d34bab029a87404bb2f25828b9a278210c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/crypto-browserify/example/index.html"));

        // line 1
        echo "<!doctype html>
<html>
<script src=bundle.js></script>
<body>
  <pre>
  require('crypto').createHash('sha1').update('abc').digest('hex') == '<span id=ans></span>'
  </pre>
</body>
<script>
  document.getElementById('ans').innerHTML = require('crypto').createHash('sha1').update('abc').digest('hex')
</script>
</html>
";
        
        $__internal_5563fe2aaff1590643ee84ed351749d34bab029a87404bb2f25828b9a278210c->leave($__internal_5563fe2aaff1590643ee84ed351749d34bab029a87404bb2f25828b9a278210c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/crypto-browserify/example/index.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html>
<script src=bundle.js></script>
<body>
  <pre>
  require('crypto').createHash('sha1').update('abc').digest('hex') == '<span id=ans></span>'
  </pre>
</body>
<script>
  document.getElementById('ans').innerHTML = require('crypto').createHash('sha1').update('abc').digest('hex')
</script>
</html>
", "node_modules/crypto-browserify/example/index.html", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/crypto-browserify/example/index.html");
    }
}
