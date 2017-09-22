<?php

/* node_modules/lodash/noop.js */
class __TwigTemplate_dd53621356735db53f1f187d7bcb26d66752ee153a3475d35f53e4fc864e4df8 extends Twig_Template
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
        $__internal_0b3d0f93f13909afde127b2e32ffe41db034061d43b558601eebc2ee74471677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3d0f93f13909afde127b2e32ffe41db034061d43b558601eebc2ee74471677->enter($__internal_0b3d0f93f13909afde127b2e32ffe41db034061d43b558601eebc2ee74471677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/noop.js"));

        // line 1
        echo "/**
 * This method returns `undefined`.
 *
 * @static
 * @memberOf _
 * @since 2.3.0
 * @category Util
 * @example
 *
 * _.times(2, _.noop);
 * // => [undefined, undefined]
 */
function noop() {
  // No operation performed.
}

module.exports = noop;
";
        
        $__internal_0b3d0f93f13909afde127b2e32ffe41db034061d43b558601eebc2ee74471677->leave($__internal_0b3d0f93f13909afde127b2e32ffe41db034061d43b558601eebc2ee74471677_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/noop.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * This method returns `undefined`.
 *
 * @static
 * @memberOf _
 * @since 2.3.0
 * @category Util
 * @example
 *
 * _.times(2, _.noop);
 * // => [undefined, undefined]
 */
function noop() {
  // No operation performed.
}

module.exports = noop;
", "node_modules/lodash/noop.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/noop.js");
    }
}
