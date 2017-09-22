<?php

/* node_modules/minimalistic-assert/index.js */
class __TwigTemplate_be944e5ca93472d926e8d16ce8405adb84acc29d91cc105145515821e8fb441a extends Twig_Template
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
        $__internal_c0fc7f46f164dedbdf4f697571bf24e1be60b28c690fc494289e5f4204417208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0fc7f46f164dedbdf4f697571bf24e1be60b28c690fc494289e5f4204417208->enter($__internal_c0fc7f46f164dedbdf4f697571bf24e1be60b28c690fc494289e5f4204417208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/minimalistic-assert/index.js"));

        // line 1
        echo "module.exports = assert;

function assert(val, msg) {
  if (!val)
    throw new Error(msg || 'Assertion failed');
}

assert.equal = function assertEqual(l, r, msg) {
  if (l != r)
    throw new Error(msg || ('Assertion failed: ' + l + ' != ' + r));
};
";
        
        $__internal_c0fc7f46f164dedbdf4f697571bf24e1be60b28c690fc494289e5f4204417208->leave($__internal_c0fc7f46f164dedbdf4f697571bf24e1be60b28c690fc494289e5f4204417208_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/minimalistic-assert/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = assert;

function assert(val, msg) {
  if (!val)
    throw new Error(msg || 'Assertion failed');
}

assert.equal = function assertEqual(l, r, msg) {
  if (l != r)
    throw new Error(msg || ('Assertion failed: ' + l + ' != ' + r));
};
", "node_modules/minimalistic-assert/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/minimalistic-assert/index.js");
    }
}
