<?php

/* @lin3s_front_foundation/components/gmap_marker_detail.html.twig */
class __TwigTemplate_6ab75f750aee7186e856d4d26b48430a15db71bbe1fc7b291f6efc0920596817 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'gmap_marker_detail_content' => array($this, 'block_gmap_marker_detail_content'),
            'gmap_marker_detail_close_button' => array($this, 'block_gmap_marker_detail_close_button'),
            'gmap_marker_detail_loader' => array($this, 'block_gmap_marker_detail_loader'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c66ecb033f50a04ace3bac352f2100128f3199c58fff425ef1d6e89200fff934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c66ecb033f50a04ace3bac352f2100128f3199c58fff425ef1d6e89200fff934->enter($__internal_c66ecb033f50a04ace3bac352f2100128f3199c58fff425ef1d6e89200fff934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@lin3s_front_foundation/components/gmap_marker_detail.html.twig"));

        // line 6
        echo "
";
        // line 7
        ob_start();
        // line 8
        $this->displayBlock('gmap_marker_detail_content', $context, $blocks);
        $context["gmap_marker_detail_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
";
        // line 11
        ob_start();
        // line 12
        $this->displayBlock('gmap_marker_detail_close_button', $context, $blocks);
        $context["gmap_marker_detail_close_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 14
        echo "
";
        // line 15
        ob_start();
        // line 16
        $this->displayBlock('gmap_marker_detail_loader', $context, $blocks);
        $context["gmap_marker_detail_loader"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 18
        echo "
<div class=\"gmap-marker-detail\">
    <button class=\"gmap-marker-detail__close\">
        ";
        // line 21
        echo ($context["gmap_marker_detail_close_button"] ?? null);
        echo "
    </button>
    <div class=\"gmap-marker-detail__loader\">
        ";
        // line 24
        echo ($context["gmap_marker_detail_loader"] ?? null);
        echo "
    </div>
    <div class=\"gmap-marker-detail__content\">
        ";
        // line 27
        echo ($context["gmap_marker_detail_content"] ?? null);
        echo "
    </div>
</div>
";
        
        $__internal_c66ecb033f50a04ace3bac352f2100128f3199c58fff425ef1d6e89200fff934->leave($__internal_c66ecb033f50a04ace3bac352f2100128f3199c58fff425ef1d6e89200fff934_prof);

    }

    // line 8
    public function block_gmap_marker_detail_content($context, array $blocks = array())
    {
        $__internal_0fb0d5e14788d94daf4f8c510f49a8324fa128d3728db100ec8031a2dc53ba5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb0d5e14788d94daf4f8c510f49a8324fa128d3728db100ec8031a2dc53ba5c->enter($__internal_0fb0d5e14788d94daf4f8c510f49a8324fa128d3728db100ec8031a2dc53ba5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gmap_marker_detail_content"));

        
        $__internal_0fb0d5e14788d94daf4f8c510f49a8324fa128d3728db100ec8031a2dc53ba5c->leave($__internal_0fb0d5e14788d94daf4f8c510f49a8324fa128d3728db100ec8031a2dc53ba5c_prof);

    }

    // line 12
    public function block_gmap_marker_detail_close_button($context, array $blocks = array())
    {
        $__internal_f452b1b9ef0aab1681d4bb735d3cceb2579b33960a9fdd266eaf9ef8060a4f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f452b1b9ef0aab1681d4bb735d3cceb2579b33960a9fdd266eaf9ef8060a4f65->enter($__internal_f452b1b9ef0aab1681d4bb735d3cceb2579b33960a9fdd266eaf9ef8060a4f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gmap_marker_detail_close_button"));

        
        $__internal_f452b1b9ef0aab1681d4bb735d3cceb2579b33960a9fdd266eaf9ef8060a4f65->leave($__internal_f452b1b9ef0aab1681d4bb735d3cceb2579b33960a9fdd266eaf9ef8060a4f65_prof);

    }

    // line 16
    public function block_gmap_marker_detail_loader($context, array $blocks = array())
    {
        $__internal_3be75c199e007cc9acd38760c6f19345748b4793bae17f8e155cf2c38fb00c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be75c199e007cc9acd38760c6f19345748b4793bae17f8e155cf2c38fb00c6d->enter($__internal_3be75c199e007cc9acd38760c6f19345748b4793bae17f8e155cf2c38fb00c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gmap_marker_detail_loader"));

        
        $__internal_3be75c199e007cc9acd38760c6f19345748b4793bae17f8e155cf2c38fb00c6d->leave($__internal_3be75c199e007cc9acd38760c6f19345748b4793bae17f8e155cf2c38fb00c6d_prof);

    }

    public function getTemplateName()
    {
        return "@lin3s_front_foundation/components/gmap_marker_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 16,  88 => 12,  77 => 8,  66 => 27,  60 => 24,  54 => 21,  49 => 18,  46 => 16,  44 => 15,  41 => 14,  38 => 12,  36 => 11,  33 => 10,  30 => 8,  28 => 7,  25 => 6,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
    This will be the base component for the gmap marker detail view. It's content will be embed.

    @embed gmap_marker_detail_content
#}

{% set gmap_marker_detail_content %}
    {%- block gmap_marker_detail_content -%}{%- endblock -%}
{% endset %}

{% set gmap_marker_detail_close_button %}
    {%- block gmap_marker_detail_close_button -%}{%- endblock -%}
{% endset %}

{% set gmap_marker_detail_loader %}
    {%- block gmap_marker_detail_loader -%}{%- endblock -%}
{% endset %}

<div class=\"gmap-marker-detail\">
    <button class=\"gmap-marker-detail__close\">
        {{ gmap_marker_detail_close_button|raw }}
    </button>
    <div class=\"gmap-marker-detail__loader\">
        {{ gmap_marker_detail_loader|raw }}
    </div>
    <div class=\"gmap-marker-detail__content\">
        {{ gmap_marker_detail_content|raw }}
    </div>
</div>
", "@lin3s_front_foundation/components/gmap_marker_detail.html.twig", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/vendor/lin3s/front-foundation/src/templates/twig/components/gmap_marker_detail.html.twig");
    }
}
