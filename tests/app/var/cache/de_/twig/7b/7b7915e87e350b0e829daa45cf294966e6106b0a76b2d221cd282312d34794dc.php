<?php

/* node_modules/lodash/stubFalse.js */
class __TwigTemplate_9e39a0ef3f146641d1b24154ca70e9795b74214e76728a4abb27f5f8d6f530d8 extends Twig_Template
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
        $__internal_2a70d86dc886883bb4dd420481e618b7a0f12fa9707365a17f04854c60f8cb10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a70d86dc886883bb4dd420481e618b7a0f12fa9707365a17f04854c60f8cb10->enter($__internal_2a70d86dc886883bb4dd420481e618b7a0f12fa9707365a17f04854c60f8cb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/stubFalse.js"));

        // line 1
        echo "/**
 * This method returns `false`.
 *
 * @static
 * @memberOf _
 * @since 4.13.0
 * @category Util
 * @returns {boolean} Returns `false`.
 * @example
 *
 * _.times(2, _.stubFalse);
 * // => [false, false]
 */
function stubFalse() {
  return false;
}

module.exports = stubFalse;
";
        
        $__internal_2a70d86dc886883bb4dd420481e618b7a0f12fa9707365a17f04854c60f8cb10->leave($__internal_2a70d86dc886883bb4dd420481e618b7a0f12fa9707365a17f04854c60f8cb10_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/stubFalse.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * This method returns `false`.
 *
 * @static
 * @memberOf _
 * @since 4.13.0
 * @category Util
 * @returns {boolean} Returns `false`.
 * @example
 *
 * _.times(2, _.stubFalse);
 * // => [false, false]
 */
function stubFalse() {
  return false;
}

module.exports = stubFalse;
", "node_modules/lodash/stubFalse.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/stubFalse.js");
    }
}
