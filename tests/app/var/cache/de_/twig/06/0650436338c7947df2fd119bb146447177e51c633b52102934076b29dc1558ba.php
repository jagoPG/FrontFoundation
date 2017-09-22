<?php

/* node_modules/deep-extend/CHANGELOG.md */
class __TwigTemplate_999cbd74b988a4af2089f2ce1f9735731a9d044d25059490f117a51b243dd892 extends Twig_Template
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
        $__internal_3a3971685f75f34a4f8fdee2d72f988067497af3c05646d11fe7372ffd171f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3971685f75f34a4f8fdee2d72f988067497af3c05646d11fe7372ffd171f51->enter($__internal_3a3971685f75f34a4f8fdee2d72f988067497af3c05646d11fe7372ffd171f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/deep-extend/CHANGELOG.md"));

        // line 1
        echo "Changelog
=========

v0.4.1
------

- Removed test code from <b>npm</b> package
  ([see pull request #21](https://github.com/unclechu/node-deep-extend/pull/21));
- Increased minimal version of Node from 0.4.0 to 0.12.0
  (because can't run tests on lesser version anyway).

v0.4.0
------

Broken backward compatibility with v0.3.x

- Fixed bug with extending arrays instead of cloning;
- Deep cloning for arrays;
- Check for own property;
- Fixed some documentation issues;
- Strict JS mode.
";
        
        $__internal_3a3971685f75f34a4f8fdee2d72f988067497af3c05646d11fe7372ffd171f51->leave($__internal_3a3971685f75f34a4f8fdee2d72f988067497af3c05646d11fe7372ffd171f51_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/deep-extend/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Changelog
=========

v0.4.1
------

- Removed test code from <b>npm</b> package
  ([see pull request #21](https://github.com/unclechu/node-deep-extend/pull/21));
- Increased minimal version of Node from 0.4.0 to 0.12.0
  (because can't run tests on lesser version anyway).

v0.4.0
------

Broken backward compatibility with v0.3.x

- Fixed bug with extending arrays instead of cloning;
- Deep cloning for arrays;
- Check for own property;
- Fixed some documentation issues;
- Strict JS mode.
", "node_modules/deep-extend/CHANGELOG.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/deep-extend/CHANGELOG.md");
    }
}
