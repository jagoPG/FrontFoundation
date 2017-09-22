<?php

/* node_modules/fsevents/node_modules/node-pre-gyp/contributing.md */
class __TwigTemplate_124e61e0436eb27e612f26478bc8ccfcc15e0c74c510301908f7cf34514124d3 extends Twig_Template
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
        $__internal_42108974c90048b2cec959943f46c2be1598ae7c23ea93c54b80c7c6aee16042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42108974c90048b2cec959943f46c2be1598ae7c23ea93c54b80c7c6aee16042->enter($__internal_42108974c90048b2cec959943f46c2be1598ae7c23ea93c54b80c7c6aee16042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/node-pre-gyp/contributing.md"));

        // line 1
        echo "# Contributing


### Releasing a new version:

- Ensure tests are passing on travis (okay for appveyor node v4 x86 to fail)
- Run `node scripts/abi_crosswalk.js` and commit any changes
- Update the changelog
- Tag a new release like: `git tag -a v0.6.34 -m \"tagging v0.6.34\" && git push --tags`
- Run `npm publish`";
        
        $__internal_42108974c90048b2cec959943f46c2be1598ae7c23ea93c54b80c7c6aee16042->leave($__internal_42108974c90048b2cec959943f46c2be1598ae7c23ea93c54b80c7c6aee16042_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/node-pre-gyp/contributing.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# Contributing


### Releasing a new version:

- Ensure tests are passing on travis (okay for appveyor node v4 x86 to fail)
- Run `node scripts/abi_crosswalk.js` and commit any changes
- Update the changelog
- Tag a new release like: `git tag -a v0.6.34 -m \"tagging v0.6.34\" && git push --tags`
- Run `npm publish`", "node_modules/fsevents/node_modules/node-pre-gyp/contributing.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/node-pre-gyp/contributing.md");
    }
}
