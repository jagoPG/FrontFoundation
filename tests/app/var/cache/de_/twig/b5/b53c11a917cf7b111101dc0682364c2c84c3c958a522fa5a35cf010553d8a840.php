<?php

/* node_modules/gauge/has-color.js */
class __TwigTemplate_efedf3814bf0fab5613bf7afd9f304c025889c6ac07b3585489bb44dcfc7cd5e extends Twig_Template
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
        $__internal_c61cbed488f960fd480f29e8011487bc4f1fbc3ed473c3f00b4f2ead82501f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61cbed488f960fd480f29e8011487bc4f1fbc3ed473c3f00b4f2ead82501f2f->enter($__internal_c61cbed488f960fd480f29e8011487bc4f1fbc3ed473c3f00b4f2ead82501f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/gauge/has-color.js"));

        // line 1
        echo "'use strict'

module.exports = isWin32() || isColorTerm()

function isWin32 () {
  return process.platform === 'win32'
}

function isColorTerm () {
  var termHasColor = /^screen|^xterm|^vt100|color|ansi|cygwin|linux/i
  return !!process.env.COLORTERM || termHasColor.test(process.env.TERM)
}
";
        
        $__internal_c61cbed488f960fd480f29e8011487bc4f1fbc3ed473c3f00b4f2ead82501f2f->leave($__internal_c61cbed488f960fd480f29e8011487bc4f1fbc3ed473c3f00b4f2ead82501f2f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/gauge/has-color.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'

module.exports = isWin32() || isColorTerm()

function isWin32 () {
  return process.platform === 'win32'
}

function isColorTerm () {
  var termHasColor = /^screen|^xterm|^vt100|color|ansi|cygwin|linux/i
  return !!process.env.COLORTERM || termHasColor.test(process.env.TERM)
}
", "node_modules/gauge/has-color.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/gauge/has-color.js");
    }
}
