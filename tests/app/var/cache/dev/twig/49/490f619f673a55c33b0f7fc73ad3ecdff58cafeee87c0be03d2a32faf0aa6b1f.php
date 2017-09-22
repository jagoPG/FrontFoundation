<?php

/* index.html.twig */
class __TwigTemplate_0a0d4a9bbf3932f6d8f4e8753b1b42d1e0a722c8e67c4bbd50fedcb5c0535aef extends Twig_Template
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
        $__internal_86baf122792122b08087238b4755764f949a69fd46493341cff6199f2163cd47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86baf122792122b08087238b4755764f949a69fd46493341cff6199f2163cd47->enter($__internal_86baf122792122b08087238b4755764f949a69fd46493341cff6199f2163cd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
</head>
<body>
    <script src=\"/dist/app.js\"></script>
    <style type=\"text/css\">
        .gmap {
            position: relative;
        }
        .gmap__map {
            height: 400px;
        }
        .gmap-geocoder__filter {
            padding: 20px 30px;
        }
        .gmap-marker-detail {
            background-color: #fff;
            display: none;
            left: 30px;
            padding: 15px;
            position: absolute;
            top: 30px;
            width: 320px;
        }
        .gmap-marker-detail--visible {
            display: block;
        }
    </style>

    <h1>Lin3s Front Foundation</h1>
    <h2>Test App page</h2>
    <main>
        <section class=\"images\">
            <h3>This content will be used to test the <i>Dom.waitImagesLoadInDomNode</i> method.</h3>
            <div class=\"images__collection\">
                <img src=\"http://lorempixel.com/800/600/abstract\"/>
                <img src=\"http://lorempixel.com/800/600/nightlife\"/>
                <img src=\"http://lorempixel.com/800/600/city\"/>
                <img src=\"http://lorempixel.com/800/600/people\"/>
            </div>
        </section>

        <section class=\"gmap-basic\">
            <h3>This is a basic <i>gmap component</i> usage example.</h3>
            ";
        // line 47
        $this->loadTemplate("@lin3s_front_foundation/components/gmap.html.twig", "index.html.twig", 47)->display(array_merge($context, array("gmap_api_key" => "AIzaSyDQaCE_7C5iAmpwr_y1C1DHbtZsqag74Sk", "gmap_center_lat" => "43.2631394", "gmap_center_lng" => "-2.9275847", "gmap_initial_zoom" => 14, "gmap_max_zoom" => 20, "gmap_marker_default_path" => "/images/gmap/marker-default", "gmap_marker_selected_path" => "/images/gmap/marker-default", "gmap_marker_group_path" => "/images/gmap/marker-default")));
        // line 57
        echo "        </section>

        <section class=\"gmap-geocoder\">
            <h3>This is an advanced <i>gmap component</i> usage example. We will use the geocoder and markers through a higher level composition</h3>
            <div>
                <input class=\"gmap-geocoder__filter\" type=\"text\" placeholder=\"Address, town, ZIP code, city...\"/>
                <label class=\"gmap-geocoder__error\"></label>
            </div>
            ";
        // line 65
        $this->loadTemplate("index.html.twig", "index.html.twig", 65, "498755728")->display(array_merge($context, array("gmap_api_key" => "AIzaSyDQaCE_7C5iAmpwr_y1C1DHbtZsqag74Sk", "gmap_center_lat" => "43.2631394", "gmap_center_lng" => "-2.9275847", "gmap_initial_zoom" => 14, "gmap_max_zoom" => 20, "gmap_marker_default_path" => "/images/gmap/marker-default", "gmap_marker_selected_path" => "/images/gmap/marker-default", "gmap_marker_group_path" => "/images/gmap/marker-default")));
        // line 79
        echo "        </section>
    </main>
</body>
</html>
";
        
        $__internal_86baf122792122b08087238b4755764f949a69fd46493341cff6199f2163cd47->leave($__internal_86baf122792122b08087238b4755764f949a69fd46493341cff6199f2163cd47_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 79,  82 => 65,  72 => 57,  70 => 47,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
</head>
<body>
    <script src=\"/dist/app.js\"></script>
    <style type=\"text/css\">
        .gmap {
            position: relative;
        }
        .gmap__map {
            height: 400px;
        }
        .gmap-geocoder__filter {
            padding: 20px 30px;
        }
        .gmap-marker-detail {
            background-color: #fff;
            display: none;
            left: 30px;
            padding: 15px;
            position: absolute;
            top: 30px;
            width: 320px;
        }
        .gmap-marker-detail--visible {
            display: block;
        }
    </style>

    <h1>Lin3s Front Foundation</h1>
    <h2>Test App page</h2>
    <main>
        <section class=\"images\">
            <h3>This content will be used to test the <i>Dom.waitImagesLoadInDomNode</i> method.</h3>
            <div class=\"images__collection\">
                <img src=\"http://lorempixel.com/800/600/abstract\"/>
                <img src=\"http://lorempixel.com/800/600/nightlife\"/>
                <img src=\"http://lorempixel.com/800/600/city\"/>
                <img src=\"http://lorempixel.com/800/600/people\"/>
            </div>
        </section>

        <section class=\"gmap-basic\">
            <h3>This is a basic <i>gmap component</i> usage example.</h3>
            {% include '@lin3s_front_foundation/components/gmap.html.twig' with {
                gmap_api_key: 'AIzaSyDQaCE_7C5iAmpwr_y1C1DHbtZsqag74Sk',
                gmap_center_lat: '43.2631394',
                gmap_center_lng: '-2.9275847',
                gmap_initial_zoom: 14,
                gmap_max_zoom: 20,
                gmap_marker_default_path: '/images/gmap/marker-default',
                gmap_marker_selected_path: '/images/gmap/marker-default',
                gmap_marker_group_path: '/images/gmap/marker-default'
            } %}
        </section>

        <section class=\"gmap-geocoder\">
            <h3>This is an advanced <i>gmap component</i> usage example. We will use the geocoder and markers through a higher level composition</h3>
            <div>
                <input class=\"gmap-geocoder__filter\" type=\"text\" placeholder=\"Address, town, ZIP code, city...\"/>
                <label class=\"gmap-geocoder__error\"></label>
            </div>
            {% embed '@lin3s_front_foundation/components/gmap.html.twig' with {
                gmap_api_key: 'AIzaSyDQaCE_7C5iAmpwr_y1C1DHbtZsqag74Sk',
                gmap_center_lat: '43.2631394',
                gmap_center_lng: '-2.9275847',
                gmap_initial_zoom: 14,
                gmap_max_zoom: 20,
                gmap_marker_default_path: '/images/gmap/marker-default',
                gmap_marker_selected_path: '/images/gmap/marker-default',
                gmap_marker_group_path: '/images/gmap/marker-default'
            } %}
                {% block gmap_marker_detail_close_button_content %}
                    close
                {% endblock %}
            {% endembed %}
        </section>
    </main>
</body>
</html>
", "index.html.twig", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/index.html.twig");
    }
}


/* index.html.twig */
class __TwigTemplate_0a0d4a9bbf3932f6d8f4e8753b1b42d1e0a722c8e67c4bbd50fedcb5c0535aef_498755728 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 65
        $this->parent = $this->loadTemplate("@lin3s_front_foundation/components/gmap.html.twig", "index.html.twig", 65);
        $this->blocks = array(
            'gmap_marker_detail_close_button_content' => array($this, 'block_gmap_marker_detail_close_button_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@lin3s_front_foundation/components/gmap.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c50860a4b85bdd7fb7310bb0fc69baf5cc683bc3e3db9aa2115abfdbb3dd5b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50860a4b85bdd7fb7310bb0fc69baf5cc683bc3e3db9aa2115abfdbb3dd5b4f->enter($__internal_c50860a4b85bdd7fb7310bb0fc69baf5cc683bc3e3db9aa2115abfdbb3dd5b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c50860a4b85bdd7fb7310bb0fc69baf5cc683bc3e3db9aa2115abfdbb3dd5b4f->leave($__internal_c50860a4b85bdd7fb7310bb0fc69baf5cc683bc3e3db9aa2115abfdbb3dd5b4f_prof);

    }

    // line 75
    public function block_gmap_marker_detail_close_button_content($context, array $blocks = array())
    {
        $__internal_91021a53a600354f51fd1b111ec225d855c596edb4080a8ee70ea67899d0a2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91021a53a600354f51fd1b111ec225d855c596edb4080a8ee70ea67899d0a2d8->enter($__internal_91021a53a600354f51fd1b111ec225d855c596edb4080a8ee70ea67899d0a2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gmap_marker_detail_close_button_content"));

        // line 76
        echo "                    close
                ";
        
        $__internal_91021a53a600354f51fd1b111ec225d855c596edb4080a8ee70ea67899d0a2d8->leave($__internal_91021a53a600354f51fd1b111ec225d855c596edb4080a8ee70ea67899d0a2d8_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 76,  229 => 75,  206 => 65,  84 => 79,  82 => 65,  72 => 57,  70 => 47,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
</head>
<body>
    <script src=\"/dist/app.js\"></script>
    <style type=\"text/css\">
        .gmap {
            position: relative;
        }
        .gmap__map {
            height: 400px;
        }
        .gmap-geocoder__filter {
            padding: 20px 30px;
        }
        .gmap-marker-detail {
            background-color: #fff;
            display: none;
            left: 30px;
            padding: 15px;
            position: absolute;
            top: 30px;
            width: 320px;
        }
        .gmap-marker-detail--visible {
            display: block;
        }
    </style>

    <h1>Lin3s Front Foundation</h1>
    <h2>Test App page</h2>
    <main>
        <section class=\"images\">
            <h3>This content will be used to test the <i>Dom.waitImagesLoadInDomNode</i> method.</h3>
            <div class=\"images__collection\">
                <img src=\"http://lorempixel.com/800/600/abstract\"/>
                <img src=\"http://lorempixel.com/800/600/nightlife\"/>
                <img src=\"http://lorempixel.com/800/600/city\"/>
                <img src=\"http://lorempixel.com/800/600/people\"/>
            </div>
        </section>

        <section class=\"gmap-basic\">
            <h3>This is a basic <i>gmap component</i> usage example.</h3>
            {% include '@lin3s_front_foundation/components/gmap.html.twig' with {
                gmap_api_key: 'AIzaSyDQaCE_7C5iAmpwr_y1C1DHbtZsqag74Sk',
                gmap_center_lat: '43.2631394',
                gmap_center_lng: '-2.9275847',
                gmap_initial_zoom: 14,
                gmap_max_zoom: 20,
                gmap_marker_default_path: '/images/gmap/marker-default',
                gmap_marker_selected_path: '/images/gmap/marker-default',
                gmap_marker_group_path: '/images/gmap/marker-default'
            } %}
        </section>

        <section class=\"gmap-geocoder\">
            <h3>This is an advanced <i>gmap component</i> usage example. We will use the geocoder and markers through a higher level composition</h3>
            <div>
                <input class=\"gmap-geocoder__filter\" type=\"text\" placeholder=\"Address, town, ZIP code, city...\"/>
                <label class=\"gmap-geocoder__error\"></label>
            </div>
            {% embed '@lin3s_front_foundation/components/gmap.html.twig' with {
                gmap_api_key: 'AIzaSyDQaCE_7C5iAmpwr_y1C1DHbtZsqag74Sk',
                gmap_center_lat: '43.2631394',
                gmap_center_lng: '-2.9275847',
                gmap_initial_zoom: 14,
                gmap_max_zoom: 20,
                gmap_marker_default_path: '/images/gmap/marker-default',
                gmap_marker_selected_path: '/images/gmap/marker-default',
                gmap_marker_group_path: '/images/gmap/marker-default'
            } %}
                {% block gmap_marker_detail_close_button_content %}
                    close
                {% endblock %}
            {% endembed %}
        </section>
    </main>
</body>
</html>
", "index.html.twig", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/index.html.twig");
    }
}
