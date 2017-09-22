<?php

/* node_modules/fsevents/node_modules/gauge/has-color.js */
class __TwigTemplate_fbb8d9c87e17ba9b5c900a76adc4622781adf108c467bae34ae7cf1ad3d03223 extends Twig_Template
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
        $__internal_2a72a0c527871c26f34e8f291589772bfae9f0c68d10e9153b377fbe9f322722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a72a0c527871c26f34e8f291589772bfae9f0c68d10e9153b377fbe9f322722->enter($__internal_2a72a0c527871c26f34e8f291589772bfae9f0c68d10e9153b377fbe9f322722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/gauge/has-color.js"));

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
        
        $__internal_2a72a0c527871c26f34e8f291589772bfae9f0c68d10e9153b377fbe9f322722->leave($__internal_2a72a0c527871c26f34e8f291589772bfae9f0c68d10e9153b377fbe9f322722_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/gauge/has-color.js";
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
", "node_modules/fsevents/node_modules/gauge/has-color.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/gauge/has-color.js");
    }
}
