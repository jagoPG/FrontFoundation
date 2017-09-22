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
        $__internal_b8f5aa619e94294dbf10b03895522ce045ae40b49c7308b7ab4c1653b28e9f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f5aa619e94294dbf10b03895522ce045ae40b49c7308b7ab4c1653b28e9f13->enter($__internal_b8f5aa619e94294dbf10b03895522ce045ae40b49c7308b7ab4c1653b28e9f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_b8f5aa619e94294dbf10b03895522ce045ae40b49c7308b7ab4c1653b28e9f13->leave($__internal_b8f5aa619e94294dbf10b03895522ce045ae40b49c7308b7ab4c1653b28e9f13_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_38d6a685055189638f30755d780ecb2264dfb4c3c58372d7b6683b4edfb32e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d6a685055189638f30755d780ecb2264dfb4c3c58372d7b6683b4edfb32e2d->enter($__internal_38d6a685055189638f30755d780ecb2264dfb4c3c58372d7b6683b4edfb32e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_38d6a685055189638f30755d780ecb2264dfb4c3c58372d7b6683b4edfb32e2d->leave($__internal_38d6a685055189638f30755d780ecb2264dfb4c3c58372d7b6683b4edfb32e2d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b26a1362d9c0651fbefac114cc528e529bf26ff208af5a662ce58902b069f5fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b26a1362d9c0651fbefac114cc528e529bf26ff208af5a662ce58902b069f5fb->enter($__internal_b26a1362d9c0651fbefac114cc528e529bf26ff208af5a662ce58902b069f5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b26a1362d9c0651fbefac114cc528e529bf26ff208af5a662ce58902b069f5fb->leave($__internal_b26a1362d9c0651fbefac114cc528e529bf26ff208af5a662ce58902b069f5fb_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_005ac93ad2fe7ee5453c50d1917a39c6e6e27bc1007b597e353aca1c8816cbd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005ac93ad2fe7ee5453c50d1917a39c6e6e27bc1007b597e353aca1c8816cbd0->enter($__internal_005ac93ad2fe7ee5453c50d1917a39c6e6e27bc1007b597e353aca1c8816cbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_005ac93ad2fe7ee5453c50d1917a39c6e6e27bc1007b597e353aca1c8816cbd0->leave($__internal_005ac93ad2fe7ee5453c50d1917a39c6e6e27bc1007b597e353aca1c8816cbd0_prof);

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
