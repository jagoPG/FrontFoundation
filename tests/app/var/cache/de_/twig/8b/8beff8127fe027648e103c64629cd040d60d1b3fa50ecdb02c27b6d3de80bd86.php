<?php

/* node_modules/core-js/library/modules/_math-scale.js */
class __TwigTemplate_a8adc3ae26899e8251196220026e923ea7003337a1b7eb76efe38771681e450f extends Twig_Template
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
        $__internal_3f19ccf7ae892fb0f1c80f9eed695117ff31361e956893d4ba4fdce20505be3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f19ccf7ae892fb0f1c80f9eed695117ff31361e956893d4ba4fdce20505be3d->enter($__internal_3f19ccf7ae892fb0f1c80f9eed695117ff31361e956893d4ba4fdce20505be3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_math-scale.js"));

        // line 1
        echo "// https://rwaldron.github.io/proposal-math-extensions/
module.exports = Math.scale || function scale(x, inLow, inHigh, outLow, outHigh) {
  if (
    arguments.length === 0
      // eslint-disable-next-line no-self-compare
      || x != x
      // eslint-disable-next-line no-self-compare
      || inLow != inLow
      // eslint-disable-next-line no-self-compare
      || inHigh != inHigh
      // eslint-disable-next-line no-self-compare
      || outLow != outLow
      // eslint-disable-next-line no-self-compare
      || outHigh != outHigh
  ) return NaN;
  if (x === Infinity || x === -Infinity) return x;
  return (x - inLow) * (outHigh - outLow) / (inHigh - inLow) + outLow;
};
";
        
        $__internal_3f19ccf7ae892fb0f1c80f9eed695117ff31361e956893d4ba4fdce20505be3d->leave($__internal_3f19ccf7ae892fb0f1c80f9eed695117ff31361e956893d4ba4fdce20505be3d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_math-scale.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://rwaldron.github.io/proposal-math-extensions/
module.exports = Math.scale || function scale(x, inLow, inHigh, outLow, outHigh) {
  if (
    arguments.length === 0
      // eslint-disable-next-line no-self-compare
      || x != x
      // eslint-disable-next-line no-self-compare
      || inLow != inLow
      // eslint-disable-next-line no-self-compare
      || inHigh != inHigh
      // eslint-disable-next-line no-self-compare
      || outLow != outLow
      // eslint-disable-next-line no-self-compare
      || outHigh != outHigh
  ) return NaN;
  if (x === Infinity || x === -Infinity) return x;
  return (x - inLow) * (outHigh - outLow) / (inHigh - inLow) + outLow;
};
", "node_modules/core-js/library/modules/_math-scale.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_math-scale.js");
    }
}
