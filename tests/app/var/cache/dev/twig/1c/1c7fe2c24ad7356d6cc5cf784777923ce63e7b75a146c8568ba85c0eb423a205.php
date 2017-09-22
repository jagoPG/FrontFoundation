<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_4a68e070d1799ffb7afecd5502779786474dc57be3b08aca3579eaf28f4e1a9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47eda68730fb4d70152bfcd235ac082e920364292cb2d11d827f8d01c6f827d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47eda68730fb4d70152bfcd235ac082e920364292cb2d11d827f8d01c6f827d0->enter($__internal_47eda68730fb4d70152bfcd235ac082e920364292cb2d11d827f8d01c6f827d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_47eda68730fb4d70152bfcd235ac082e920364292cb2d11d827f8d01c6f827d0->leave($__internal_47eda68730fb4d70152bfcd235ac082e920364292cb2d11d827f8d01c6f827d0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a288d1c50c7225d3a004b7f9ef3617aa131e6374c7e3d9129cb57372e4d9a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a288d1c50c7225d3a004b7f9ef3617aa131e6374c7e3d9129cb57372e4d9a87->enter($__internal_6a288d1c50c7225d3a004b7f9ef3617aa131e6374c7e3d9129cb57372e4d9a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6a288d1c50c7225d3a004b7f9ef3617aa131e6374c7e3d9129cb57372e4d9a87->leave($__internal_6a288d1c50c7225d3a004b7f9ef3617aa131e6374c7e3d9129cb57372e4d9a87_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8cf97fc19b689ac2fbc18d75c674d953962184187a8cae0092529978d97b23b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf97fc19b689ac2fbc18d75c674d953962184187a8cae0092529978d97b23b0->enter($__internal_8cf97fc19b689ac2fbc18d75c674d953962184187a8cae0092529978d97b23b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8cf97fc19b689ac2fbc18d75c674d953962184187a8cae0092529978d97b23b0->leave($__internal_8cf97fc19b689ac2fbc18d75c674d953962184187a8cae0092529978d97b23b0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0016763d94c489f0be94afe32b3056846d74b76bb3ec90a89c17b408a4b6208d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0016763d94c489f0be94afe32b3056846d74b76bb3ec90a89c17b408a4b6208d->enter($__internal_0016763d94c489f0be94afe32b3056846d74b76bb3ec90a89c17b408a4b6208d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0016763d94c489f0be94afe32b3056846d74b76bb3ec90a89c17b408a4b6208d->leave($__internal_0016763d94c489f0be94afe32b3056846d74b76bb3ec90a89c17b408a4b6208d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
