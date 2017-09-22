<?php

/* node_modules/node-pre-gyp/contributing.md */
class __TwigTemplate_f6bf6e3bc5ac7bfa677bc19ae1f92ff38994a11c9605b61c5161ba3027598cce extends Twig_Template
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
        $__internal_06938e3dc884cd08eb1bf1b0dafbbbdea72d9132c1c346773b66bf262dd319e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06938e3dc884cd08eb1bf1b0dafbbbdea72d9132c1c346773b66bf262dd319e7->enter($__internal_06938e3dc884cd08eb1bf1b0dafbbbdea72d9132c1c346773b66bf262dd319e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/node-pre-gyp/contributing.md"));

        // line 1
        echo "# Contributing


### Releasing a new version:

- Ensure tests are passing on travis (okay for appveyor node v4 x86 to fail)
- Run `node scripts/abi_crosswalk.js` and commit any changes
- Update the changelog
- Tag a new release like: `git tag -a v0.6.34 -m \"tagging v0.6.34\" && git push --tags`
- Run `npm publish`";
        
        $__internal_06938e3dc884cd08eb1bf1b0dafbbbdea72d9132c1c346773b66bf262dd319e7->leave($__internal_06938e3dc884cd08eb1bf1b0dafbbbdea72d9132c1c346773b66bf262dd319e7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/node-pre-gyp/contributing.md";
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
- Run `npm publish`", "node_modules/node-pre-gyp/contributing.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/node-pre-gyp/contributing.md");
    }
}
