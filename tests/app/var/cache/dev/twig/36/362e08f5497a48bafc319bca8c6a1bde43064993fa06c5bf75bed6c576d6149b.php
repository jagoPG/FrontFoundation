<?php

/* @lin3s_front_foundation/components/gmap.html.twig */
class __TwigTemplate_e1c4507bdedc3f40fa536bd20373369ce7d9fed8575992f402e8120c1609b4f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'gmap_marker_detail_close_button_content' => array($this, 'block_gmap_marker_detail_close_button_content'),
            'gmap_marker_detail_loader_content' => array($this, 'block_gmap_marker_detail_loader_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88debbc55a9495fafad5078c80342fd3753d457e1e1469d51356c661ba5f6643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88debbc55a9495fafad5078c80342fd3753d457e1e1469d51356c661ba5f6643->enter($__internal_88debbc55a9495fafad5078c80342fd3753d457e1e1469d51356c661ba5f6643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@lin3s_front_foundation/components/gmap.html.twig"));

        // line 11
        echo "
";
        // line 25
        echo "
";
        // line 26
        ob_start();
        // line 27
        $this->displayBlock('gmap_marker_detail_close_button_content', $context, $blocks);
        $context["gmap_marker_detail_close_button_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
";
        // line 30
        ob_start();
        // line 31
        $this->displayBlock('gmap_marker_detail_loader_content', $context, $blocks);
        $context["gmap_marker_detail_loader_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
";
        // line 34
        $context["map_style"] = array(0 => array("featureType" => "water", "elementType" => "geometry", "stylers" => array(0 => array("color" => "#e9e9e9"), 1 => array("lightness" => 17))), 1 => array("featureType" => "landscape", "elementType" => "geometry", "stylers" => array(0 => array("color" => "#f5f5f5"), 1 => array("lightness" => 20))), 2 => array("featureType" => "road.highway", "elementType" => "geometry.fill", "stylers" => array(0 => array("color" => "#ffffff"), 1 => array("lightness" => 17))), 3 => array("featureType" => "road.highway", "elementType" => "geometry.stroke", "stylers" => array(0 => array("color" => "#ffffff"), 1 => array("lightness" => 29), 2 => array("weight" => 0.2))), 4 => array("featureType" => "road.arterial", "elementType" => "geometry", "stylers" => array(0 => array("color" => "#ffffff"), 1 => array("lightness" => 18))), 5 => array("featureType" => "road.local", "elementType" => "geometry", "stylers" => array(0 => array("color" => "#ffffff"), 1 => array("lightness" => 16))), 6 => array("featureType" => "poi", "elementType" => "geometry", "stylers" => array(0 => array("color" => "#f5f5f5"), 1 => array("lightness" => 21))), 7 => array("featureType" => "poi.park", "elementType" => "geometry", "stylers" => array(0 => array("color" => "#dedede"), 1 => array("lightness" => 21))), 8 => array("elementType" => "labels.text.stroke", "stylers" => array(0 => array("visibility" => "on"), 1 => array("color" => "#ffffff"), 2 => array("lightness" => 16))), 9 => array("elementType" => "labels.text.fill", "stylers" => array(0 => array("saturation" => 36), 1 => array("color" => "#333333"), 2 => array("lightness" => 40))), 10 => array("elementType" => "labels.icon", "stylers" => array(0 => array("visibility" => "off"))), 11 => array("featureType" => "transit", "elementType" => "geometry", "stylers" => array(0 => array("color" => "#f2f2f2"), 1 => array("lightness" => 19))), 12 => array("featureType" => "administrative", "elementType" => "geometry.fill", "stylers" => array(0 => array("color" => "#fefefe"), 1 => array("lightness" => 20))), 13 => array("featureType" => "administrative", "elementType" => "geometry.stroke", "stylers" => array(0 => array("color" => "#fefefe"), 1 => array("lightness" => 17), 2 => array("weight" => 1.2))));
        // line 85
        echo "
<section class=\"gmap js-gmap\"
         data-api-key=\"";
        // line 87
        echo twig_escape_filter($this->env, ($context["gmap_api_key"] ?? null), "html", null, true);
        echo "\"
         data-center-lat=\"";
        // line 88
        echo twig_escape_filter($this->env, ($context["gmap_center_lat"] ?? null), "html", null, true);
        echo "\"
         data-center-lng=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["gmap_center_lng"] ?? null), "html", null, true);
        echo "\"
         data-initial-zoom=\"";
        // line 90
        echo twig_escape_filter($this->env, ((array_key_exists("gmap_initial_zoom", $context)) ? (_twig_default_filter(($context["gmap_initial_zoom"] ?? null), 8)) : (8)), "html", null, true);
        echo "\"
         data-max-zoom=\"";
        // line 91
        echo twig_escape_filter($this->env, ((array_key_exists("gmap_max_zoom", $context)) ? (_twig_default_filter(($context["gmap_max_zoom"] ?? null), 12)) : (12)), "html", null, true);
        echo "\"
         data-marker-default-path=\"";
        // line 92
        echo twig_escape_filter($this->env, ($context["gmap_marker_default_path"] ?? null), "html", null, true);
        echo "\"
         data-marker-selected-path=\"";
        // line 93
        echo twig_escape_filter($this->env, ($context["gmap_marker_selected_path"] ?? null), "html", null, true);
        echo "\"
         data-marker-group-path=\"";
        // line 94
        echo twig_escape_filter($this->env, ($context["gmap_marker_group_path"] ?? null), "html", null, true);
        echo "\"
         data-style=";
        // line 95
        echo twig_escape_filter($this->env, json_encode(((array_key_exists("gmap_style", $context)) ? (_twig_default_filter(($context["gmap_style"] ?? null), ($context["map_style"] ?? null))) : (($context["map_style"] ?? null)))), "html", null, true);
        echo ">
    <div class=\"gmap__map\"></div>
    ";
        // line 97
        $this->loadTemplate("@lin3s_front_foundation/components/gmap.html.twig", "@lin3s_front_foundation/components/gmap.html.twig", 97, "845717694")->display($context);
        // line 105
        echo "</section>
";
        
        $__internal_88debbc55a9495fafad5078c80342fd3753d457e1e1469d51356c661ba5f6643->leave($__internal_88debbc55a9495fafad5078c80342fd3753d457e1e1469d51356c661ba5f6643_prof);

    }

    // line 27
    public function block_gmap_marker_detail_close_button_content($context, array $blocks = array())
    {
        $__internal_7144eac62e0e173242912ad9e22b114d8e137d3e38d24de1f747968f8427b09a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7144eac62e0e173242912ad9e22b114d8e137d3e38d24de1f747968f8427b09a->enter($__internal_7144eac62e0e173242912ad9e22b114d8e137d3e38d24de1f747968f8427b09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gmap_marker_detail_close_button_content"));

        
        $__internal_7144eac62e0e173242912ad9e22b114d8e137d3e38d24de1f747968f8427b09a->leave($__internal_7144eac62e0e173242912ad9e22b114d8e137d3e38d24de1f747968f8427b09a_prof);

    }

    // line 31
    public function block_gmap_marker_detail_loader_content($context, array $blocks = array())
    {
        $__internal_d150bb3035fd0ef1400f9fc1b8b0ccc646f833d71c75a109bfc4fb1f3537f451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d150bb3035fd0ef1400f9fc1b8b0ccc646f833d71c75a109bfc4fb1f3537f451->enter($__internal_d150bb3035fd0ef1400f9fc1b8b0ccc646f833d71c75a109bfc4fb1f3537f451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gmap_marker_detail_loader_content"));

        
        $__internal_d150bb3035fd0ef1400f9fc1b8b0ccc646f833d71c75a109bfc4fb1f3537f451->leave($__internal_d150bb3035fd0ef1400f9fc1b8b0ccc646f833d71c75a109bfc4fb1f3537f451_prof);

    }

    public function getTemplateName()
    {
        return "@lin3s_front_foundation/components/gmap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 31,  99 => 27,  91 => 105,  89 => 97,  84 => 95,  80 => 94,  76 => 93,  72 => 92,  68 => 91,  64 => 90,  60 => 89,  56 => 88,  52 => 87,  48 => 85,  46 => 34,  43 => 33,  40 => 31,  38 => 30,  35 => 29,  32 => 27,  30 => 26,  27 => 25,  24 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
    This file is part of the Front Foundation package.

    Copyright (c) 2017-present LIN3S <info@lin3s.com>

    For the full copyright and license information, please view the LICENSE
    file that was distributed with this source code.

    @author Mikel Tuesta <mikeltuesta@gmail.com>
#}

{##
    This component will build a google map component.

    @param gmap_api_key                     string*
    @param gmap_center_lat                  int*
    @param gmap_center_lng                  int*
    @param gmap_initial_zoom                int=8
    @param gmap_max_zoom                    int=12
    @param gmap_marker_default_path         string* (this ones must have no extension)
    @param gmap_marker_selected_path        string*
    @param gmap_marker_group_path           string*
    @param gmap_style                       string
#}

{% set gmap_marker_detail_close_button_content %}
    {%- block gmap_marker_detail_close_button_content -%}{%- endblock -%}
{% endset %}

{% set gmap_marker_detail_loader_content %}
    {%- block gmap_marker_detail_loader_content -%}{%- endblock -%}
{% endset %}

{% set map_style = [{
  'featureType': 'water',
  'elementType': 'geometry',
  'stylers': [{'color': '#e9e9e9'}, {'lightness': 17}]
  }, {
  'featureType': 'landscape',
  'elementType': 'geometry',
  'stylers': [{'color': '#f5f5f5'}, {'lightness': 20}]
  }, {
  'featureType': 'road.highway',
  'elementType': 'geometry.fill',
  'stylers': [{'color': '#ffffff'}, {'lightness': 17}]
  }, {
  'featureType': 'road.highway',
  'elementType': 'geometry.stroke',
  'stylers': [{'color': '#ffffff'}, {'lightness': 29}, {'weight': 0.2}]
  }, {
  'featureType': 'road.arterial',
  'elementType': 'geometry',
  'stylers': [{'color': '#ffffff'}, {'lightness': 18}]
  }, {
  'featureType': 'road.local',
  'elementType': 'geometry',
  'stylers': [{'color': '#ffffff'}, {'lightness': 16}]
  }, {
  'featureType': 'poi',
  'elementType': 'geometry',
  'stylers': [{'color': '#f5f5f5'}, {'lightness': 21}]
  }, {
  'featureType': 'poi.park',
  'elementType': 'geometry',
  'stylers': [{'color': '#dedede'}, {'lightness': 21}]
  }, {
  'elementType': 'labels.text.stroke',
  'stylers': [{'visibility': 'on'}, {'color': '#ffffff'}, {'lightness': 16}]
  }, {
  'elementType': 'labels.text.fill',
  'stylers': [{'saturation': 36}, {'color': '#333333'}, {'lightness': 40}]
  }, {'elementType': 'labels.icon', 'stylers': [{'visibility': 'off'}]}, {
  'featureType': 'transit',
  'elementType': 'geometry',
  'stylers': [{'color': '#f2f2f2'}, {'lightness': 19}]
  }, {
  'featureType': 'administrative',
  'elementType': 'geometry.fill',
  'stylers': [{'color': '#fefefe'}, {'lightness': 20}]
  }, {
  'featureType': 'administrative',
  'elementType': 'geometry.stroke',
  'stylers': [{'color': '#fefefe'}, {'lightness': 17}, {'weight': 1.2}]
}] %}

<section class=\"gmap js-gmap\"
         data-api-key=\"{{ gmap_api_key }}\"
         data-center-lat=\"{{ gmap_center_lat }}\"
         data-center-lng=\"{{ gmap_center_lng }}\"
         data-initial-zoom=\"{{ gmap_initial_zoom|default(8) }}\"
         data-max-zoom=\"{{ gmap_max_zoom|default(12) }}\"
         data-marker-default-path=\"{{ gmap_marker_default_path }}\"
         data-marker-selected-path=\"{{ gmap_marker_selected_path }}\"
         data-marker-group-path=\"{{ gmap_marker_group_path }}\"
         data-style={{ gmap_style|default(map_style)|json_encode }}>
    <div class=\"gmap__map\"></div>
    {% embed '@lin3s_front_foundation/components/gmap_marker_detail.html.twig' %}
        {% block gmap_marker_detail_close_button %}
            {{ gmap_marker_detail_close_button_content }}
        {% endblock %}
        {% block gmap_marker_detail_loader %}
            {{ gmap_marker_detail_loader_content }}
        {% endblock %}
    {% endembed %}
</section>
", "@lin3s_front_foundation/components/gmap.html.twig", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/vendor/lin3s/front-foundation/src/templates/twig/components/gmap.html.twig");
    }
}


/* @lin3s_front_foundation/components/gmap.html.twig */
class __TwigTemplate_e1c4507bdedc3f40fa536bd20373369ce7d9fed8575992f402e8120c1609b4f2_845717694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 97
        $this->parent = $this->loadTemplate("@lin3s_front_foundation/components/gmap_marker_detail.html.twig", "@lin3s_front_foundation/components/gmap.html.twig", 97);
        $this->blocks = array(
            'gmap_marker_detail_close_button' => array($this, 'block_gmap_marker_detail_close_button'),
            'gmap_marker_detail_loader' => array($this, 'block_gmap_marker_detail_loader'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@lin3s_front_foundation/components/gmap_marker_detail.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d65d1351403c4b4df8eab1ad096920ca414c2205b95136b8297b7a4b6ea6552b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65d1351403c4b4df8eab1ad096920ca414c2205b95136b8297b7a4b6ea6552b->enter($__internal_d65d1351403c4b4df8eab1ad096920ca414c2205b95136b8297b7a4b6ea6552b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@lin3s_front_foundation/components/gmap.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d65d1351403c4b4df8eab1ad096920ca414c2205b95136b8297b7a4b6ea6552b->leave($__internal_d65d1351403c4b4df8eab1ad096920ca414c2205b95136b8297b7a4b6ea6552b_prof);

    }

    // line 98
    public function block_gmap_marker_detail_close_button($context, array $blocks = array())
    {
        $__internal_dddc779907f68def9ac4c4aaa5c96bc6304d4d5713133d69bc9718593d46c483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dddc779907f68def9ac4c4aaa5c96bc6304d4d5713133d69bc9718593d46c483->enter($__internal_dddc779907f68def9ac4c4aaa5c96bc6304d4d5713133d69bc9718593d46c483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gmap_marker_detail_close_button"));

        // line 99
        echo "            ";
        echo twig_escape_filter($this->env, ($context["gmap_marker_detail_close_button_content"] ?? null), "html", null, true);
        echo "
        ";
        
        $__internal_dddc779907f68def9ac4c4aaa5c96bc6304d4d5713133d69bc9718593d46c483->leave($__internal_dddc779907f68def9ac4c4aaa5c96bc6304d4d5713133d69bc9718593d46c483_prof);

    }

    // line 101
    public function block_gmap_marker_detail_loader($context, array $blocks = array())
    {
        $__internal_92b202d1d7d5f4f6ece2a188c457a1f485dcabc0813e01a2103951ff1b5dc59a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b202d1d7d5f4f6ece2a188c457a1f485dcabc0813e01a2103951ff1b5dc59a->enter($__internal_92b202d1d7d5f4f6ece2a188c457a1f485dcabc0813e01a2103951ff1b5dc59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gmap_marker_detail_loader"));

        // line 102
        echo "            ";
        echo twig_escape_filter($this->env, ($context["gmap_marker_detail_loader_content"] ?? null), "html", null, true);
        echo "
        ";
        
        $__internal_92b202d1d7d5f4f6ece2a188c457a1f485dcabc0813e01a2103951ff1b5dc59a->leave($__internal_92b202d1d7d5f4f6ece2a188c457a1f485dcabc0813e01a2103951ff1b5dc59a_prof);

    }

    public function getTemplateName()
    {
        return "@lin3s_front_foundation/components/gmap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 102,  295 => 101,  285 => 99,  279 => 98,  255 => 97,  110 => 31,  99 => 27,  91 => 105,  89 => 97,  84 => 95,  80 => 94,  76 => 93,  72 => 92,  68 => 91,  64 => 90,  60 => 89,  56 => 88,  52 => 87,  48 => 85,  46 => 34,  43 => 33,  40 => 31,  38 => 30,  35 => 29,  32 => 27,  30 => 26,  27 => 25,  24 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
    This file is part of the Front Foundation package.

    Copyright (c) 2017-present LIN3S <info@lin3s.com>

    For the full copyright and license information, please view the LICENSE
    file that was distributed with this source code.

    @author Mikel Tuesta <mikeltuesta@gmail.com>
#}

{##
    This component will build a google map component.

    @param gmap_api_key                     string*
    @param gmap_center_lat                  int*
    @param gmap_center_lng                  int*
    @param gmap_initial_zoom                int=8
    @param gmap_max_zoom                    int=12
    @param gmap_marker_default_path         string* (this ones must have no extension)
    @param gmap_marker_selected_path        string*
    @param gmap_marker_group_path           string*
    @param gmap_style                       string
#}

{% set gmap_marker_detail_close_button_content %}
    {%- block gmap_marker_detail_close_button_content -%}{%- endblock -%}
{% endset %}

{% set gmap_marker_detail_loader_content %}
    {%- block gmap_marker_detail_loader_content -%}{%- endblock -%}
{% endset %}

{% set map_style = [{
  'featureType': 'water',
  'elementType': 'geometry',
  'stylers': [{'color': '#e9e9e9'}, {'lightness': 17}]
  }, {
  'featureType': 'landscape',
  'elementType': 'geometry',
  'stylers': [{'color': '#f5f5f5'}, {'lightness': 20}]
  }, {
  'featureType': 'road.highway',
  'elementType': 'geometry.fill',
  'stylers': [{'color': '#ffffff'}, {'lightness': 17}]
  }, {
  'featureType': 'road.highway',
  'elementType': 'geometry.stroke',
  'stylers': [{'color': '#ffffff'}, {'lightness': 29}, {'weight': 0.2}]
  }, {
  'featureType': 'road.arterial',
  'elementType': 'geometry',
  'stylers': [{'color': '#ffffff'}, {'lightness': 18}]
  }, {
  'featureType': 'road.local',
  'elementType': 'geometry',
  'stylers': [{'color': '#ffffff'}, {'lightness': 16}]
  }, {
  'featureType': 'poi',
  'elementType': 'geometry',
  'stylers': [{'color': '#f5f5f5'}, {'lightness': 21}]
  }, {
  'featureType': 'poi.park',
  'elementType': 'geometry',
  'stylers': [{'color': '#dedede'}, {'lightness': 21}]
  }, {
  'elementType': 'labels.text.stroke',
  'stylers': [{'visibility': 'on'}, {'color': '#ffffff'}, {'lightness': 16}]
  }, {
  'elementType': 'labels.text.fill',
  'stylers': [{'saturation': 36}, {'color': '#333333'}, {'lightness': 40}]
  }, {'elementType': 'labels.icon', 'stylers': [{'visibility': 'off'}]}, {
  'featureType': 'transit',
  'elementType': 'geometry',
  'stylers': [{'color': '#f2f2f2'}, {'lightness': 19}]
  }, {
  'featureType': 'administrative',
  'elementType': 'geometry.fill',
  'stylers': [{'color': '#fefefe'}, {'lightness': 20}]
  }, {
  'featureType': 'administrative',
  'elementType': 'geometry.stroke',
  'stylers': [{'color': '#fefefe'}, {'lightness': 17}, {'weight': 1.2}]
}] %}

<section class=\"gmap js-gmap\"
         data-api-key=\"{{ gmap_api_key }}\"
         data-center-lat=\"{{ gmap_center_lat }}\"
         data-center-lng=\"{{ gmap_center_lng }}\"
         data-initial-zoom=\"{{ gmap_initial_zoom|default(8) }}\"
         data-max-zoom=\"{{ gmap_max_zoom|default(12) }}\"
         data-marker-default-path=\"{{ gmap_marker_default_path }}\"
         data-marker-selected-path=\"{{ gmap_marker_selected_path }}\"
         data-marker-group-path=\"{{ gmap_marker_group_path }}\"
         data-style={{ gmap_style|default(map_style)|json_encode }}>
    <div class=\"gmap__map\"></div>
    {% embed '@lin3s_front_foundation/components/gmap_marker_detail.html.twig' %}
        {% block gmap_marker_detail_close_button %}
            {{ gmap_marker_detail_close_button_content }}
        {% endblock %}
        {% block gmap_marker_detail_loader %}
            {{ gmap_marker_detail_loader_content }}
        {% endblock %}
    {% endembed %}
</section>
", "@lin3s_front_foundation/components/gmap.html.twig", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/vendor/lin3s/front-foundation/src/templates/twig/components/gmap.html.twig");
    }
}
