<?php

/* node_modules/node-libs-browser/mock/buffer.js */
class __TwigTemplate_9f966dfb5431a8dd77336c45ccac9ca96ac8e9d3a4ad6e086e354bd948f895a0 extends Twig_Template
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
        $__internal_6b3c7ad55e14cbfeb4702b10cdfdeb98e22f1fff6659ae209e2752229cc9112b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3c7ad55e14cbfeb4702b10cdfdeb98e22f1fff6659ae209e2752229cc9112b->enter($__internal_6b3c7ad55e14cbfeb4702b10cdfdeb98e22f1fff6659ae209e2752229cc9112b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/node-libs-browser/mock/buffer.js"));

        // line 1
        echo "function Buffer() {
\tthrow new Error(\"Buffer is not included.\");
}
Buffer.isBuffer = function() {
  return false;
};

exports.INSPECT_MAX_BYTES = 50;
exports.SlowBuffer = Buffer;
exports.Buffer = Buffer;
";
        
        $__internal_6b3c7ad55e14cbfeb4702b10cdfdeb98e22f1fff6659ae209e2752229cc9112b->leave($__internal_6b3c7ad55e14cbfeb4702b10cdfdeb98e22f1fff6659ae209e2752229cc9112b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/node-libs-browser/mock/buffer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("function Buffer() {
\tthrow new Error(\"Buffer is not included.\");
}
Buffer.isBuffer = function() {
  return false;
};

exports.INSPECT_MAX_BYTES = 50;
exports.SlowBuffer = Buffer;
exports.Buffer = Buffer;
", "node_modules/node-libs-browser/mock/buffer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/node-libs-browser/mock/buffer.js");
    }
}
