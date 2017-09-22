<?php

/* node_modules/core-js/modules/_math-expm1.js */
class __TwigTemplate_0add39d204fcc90907e1cead6b38b891a4291186254a6ce79f851e17ae6a0ba8 extends Twig_Template
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
        $__internal_4271bbc99015ca914d14a44f7d0aa523acea12528e2877745daf76d8fcfb057a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4271bbc99015ca914d14a44f7d0aa523acea12528e2877745daf76d8fcfb057a->enter($__internal_4271bbc99015ca914d14a44f7d0aa523acea12528e2877745daf76d8fcfb057a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_math-expm1.js"));

        // line 1
        echo "// 20.2.2.14 Math.expm1(x)
var \$expm1 = Math.expm1;
module.exports = (!\$expm1
  // Old FF bug
  || \$expm1(10) > 22025.465794806719 || \$expm1(10) < 22025.4657948067165168
  // Tor Browser bug
  || \$expm1(-2e-17) != -2e-17
) ? function expm1(x) {
  return (x = +x) == 0 ? x : x > -1e-6 && x < 1e-6 ? x + x * x / 2 : Math.exp(x) - 1;
} : \$expm1;
";
        
        $__internal_4271bbc99015ca914d14a44f7d0aa523acea12528e2877745daf76d8fcfb057a->leave($__internal_4271bbc99015ca914d14a44f7d0aa523acea12528e2877745daf76d8fcfb057a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_math-expm1.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.14 Math.expm1(x)
var \$expm1 = Math.expm1;
module.exports = (!\$expm1
  // Old FF bug
  || \$expm1(10) > 22025.465794806719 || \$expm1(10) < 22025.4657948067165168
  // Tor Browser bug
  || \$expm1(-2e-17) != -2e-17
) ? function expm1(x) {
  return (x = +x) == 0 ? x : x > -1e-6 && x < 1e-6 ? x + x * x / 2 : Math.exp(x) - 1;
} : \$expm1;
", "node_modules/core-js/modules/_math-expm1.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_math-expm1.js");
    }
}
