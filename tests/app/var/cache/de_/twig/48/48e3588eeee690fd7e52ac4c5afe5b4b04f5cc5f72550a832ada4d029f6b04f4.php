<?php

/* node_modules/require-main-filename/index.js */
class __TwigTemplate_3a4dee5c957f1f26880defd28b235f99f6eeb15671fd46eca75494d24717260d extends Twig_Template
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
        $__internal_1a7e1ca00c9a5394210004be9e3111795858ed2319ca5d1a429315a993f91c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7e1ca00c9a5394210004be9e3111795858ed2319ca5d1a429315a993f91c52->enter($__internal_1a7e1ca00c9a5394210004be9e3111795858ed2319ca5d1a429315a993f91c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/require-main-filename/index.js"));

        // line 1
        echo "module.exports = function (_require) {
  _require = _require || require
  var main = _require.main
  if (main && isIISNode(main)) return handleIISNode(main)
  else return main ? main.filename : process.cwd()
}

function isIISNode (main) {
  return /\\\\iisnode\\\\/.test(main.filename)
}

function handleIISNode (main) {
  if (!main.children.length) {
    return main.filename
  } else {
    return main.children[0].filename
  }
}
";
        
        $__internal_1a7e1ca00c9a5394210004be9e3111795858ed2319ca5d1a429315a993f91c52->leave($__internal_1a7e1ca00c9a5394210004be9e3111795858ed2319ca5d1a429315a993f91c52_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/require-main-filename/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function (_require) {
  _require = _require || require
  var main = _require.main
  if (main && isIISNode(main)) return handleIISNode(main)
  else return main ? main.filename : process.cwd()
}

function isIISNode (main) {
  return /\\\\iisnode\\\\/.test(main.filename)
}

function handleIISNode (main) {
  if (!main.children.length) {
    return main.filename
  } else {
    return main.children[0].filename
  }
}
", "node_modules/require-main-filename/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/require-main-filename/index.js");
    }
}
