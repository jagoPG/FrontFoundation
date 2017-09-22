<?php

/* node_modules/node-libs-browser/mock/dns.js */
class __TwigTemplate_8cf6433576cbadddd2d8f6fd885d7656c34181dbf4bf207ad3db7fc4d614211f extends Twig_Template
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
        $__internal_d3d8aa6b5233fb154f2896f238dde0b7f7bf5eade9018753c920711657ff8aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d8aa6b5233fb154f2896f238dde0b7f7bf5eade9018753c920711657ff8aab->enter($__internal_d3d8aa6b5233fb154f2896f238dde0b7f7bf5eade9018753c920711657ff8aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/node-libs-browser/mock/dns.js"));

        // line 1
        echo "exports.lookup = exports.resolve4 =
exports.resolve6 = exports.resolveCname =
exports.resolveMx = exports.resolveNs =
exports.resolveTxt = exports.resolveSrv =
exports.resolveNaptr = exports.reverse =
exports.resolve =
function () {
  if (!arguments.length) return;

  var callback = arguments[arguments.length - 1];
  if (callback && typeof callback === 'function') {
    callback(null, '0.0.0.0')
  }
}

";
        
        $__internal_d3d8aa6b5233fb154f2896f238dde0b7f7bf5eade9018753c920711657ff8aab->leave($__internal_d3d8aa6b5233fb154f2896f238dde0b7f7bf5eade9018753c920711657ff8aab_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/node-libs-browser/mock/dns.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports.lookup = exports.resolve4 =
exports.resolve6 = exports.resolveCname =
exports.resolveMx = exports.resolveNs =
exports.resolveTxt = exports.resolveSrv =
exports.resolveNaptr = exports.reverse =
exports.resolve =
function () {
  if (!arguments.length) return;

  var callback = arguments[arguments.length - 1];
  if (callback && typeof callback === 'function') {
    callback(null, '0.0.0.0')
  }
}

", "node_modules/node-libs-browser/mock/dns.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/node-libs-browser/mock/dns.js");
    }
}
