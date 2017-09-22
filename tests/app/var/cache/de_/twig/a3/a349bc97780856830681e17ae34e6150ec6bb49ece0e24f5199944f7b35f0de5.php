<?php

/* node_modules/core-js/modules/_math-scale.js */
class __TwigTemplate_d8fa856525c4fe50230a192bf0ca2f76688630b7ee1396b3c6850b80ac3bdec7 extends Twig_Template
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
        $__internal_ed65fdcdc236d81e82e7c5aacd1cc19b845f6880a479e395929af430cb510711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed65fdcdc236d81e82e7c5aacd1cc19b845f6880a479e395929af430cb510711->enter($__internal_ed65fdcdc236d81e82e7c5aacd1cc19b845f6880a479e395929af430cb510711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_math-scale.js"));

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
        
        $__internal_ed65fdcdc236d81e82e7c5aacd1cc19b845f6880a479e395929af430cb510711->leave($__internal_ed65fdcdc236d81e82e7c5aacd1cc19b845f6880a479e395929af430cb510711_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_math-scale.js";
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
", "node_modules/core-js/modules/_math-scale.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_math-scale.js");
    }
}
