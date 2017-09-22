<?php

/* node_modules/lin3s-front-foundation/CHANGELOG.md */
class __TwigTemplate_28823176ff41c498b6d3fd0f50787e6db11335d561d071803c0c504d8f9c103e extends Twig_Template
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
        $__internal_15bbdfdf5126ad95425e93f9e90145ec5f2a3cf7f9ad9cca6847f63976c86303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15bbdfdf5126ad95425e93f9e90145ec5f2a3cf7f9ad9cca6847f63976c86303->enter($__internal_15bbdfdf5126ad95425e93f9e90145ec5f2a3cf7f9ad9cca6847f63976c86303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-front-foundation/CHANGELOG.md"));

        // line 1
        echo "# CHANGELOG

This changelog references the relevant changes done between versions.

To get the diff for a specific change, go to https://github.com/LIN3S/FrontFoundation/commit/XXX where XXX is the change hash 
To get the diff between two versions, go to https://github.com/LIN3S/FrontFoundation/compare/v0.5.0...v0.6.0

* 0.6.1
    * Made locale conditional based on HTML lang.
* 0.6.0
    * Parsley instance is not exposed, so you need to use it from window global object.
    * Major refactor of the `js` directory.
    * Added test app, fixed some broken imports and change miscellaneous folder with Parsley.
    * Added `twig` template directory.
    * Renamed `_parsley-form-error.scss` to `_parsley.scss` to keep naming consistency.
    * Improved `_reset` and `_common` scss files.

* 0.5.0
    * Included Parsley as dependency.
";
        
        $__internal_15bbdfdf5126ad95425e93f9e90145ec5f2a3cf7f9ad9cca6847f63976c86303->leave($__internal_15bbdfdf5126ad95425e93f9e90145ec5f2a3cf7f9ad9cca6847f63976c86303_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-front-foundation/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# CHANGELOG

This changelog references the relevant changes done between versions.

To get the diff for a specific change, go to https://github.com/LIN3S/FrontFoundation/commit/XXX where XXX is the change hash 
To get the diff between two versions, go to https://github.com/LIN3S/FrontFoundation/compare/v0.5.0...v0.6.0

* 0.6.1
    * Made locale conditional based on HTML lang.
* 0.6.0
    * Parsley instance is not exposed, so you need to use it from window global object.
    * Major refactor of the `js` directory.
    * Added test app, fixed some broken imports and change miscellaneous folder with Parsley.
    * Added `twig` template directory.
    * Renamed `_parsley-form-error.scss` to `_parsley.scss` to keep naming consistency.
    * Improved `_reset` and `_common` scss files.

* 0.5.0
    * Included Parsley as dependency.
", "node_modules/lin3s-front-foundation/CHANGELOG.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-front-foundation/CHANGELOG.md");
    }
}
