<?php

/* SonataMediaBundle:Form:media_widgets.html.twig */
class __TwigTemplate_152783f07a9de4e081c9ed06fd86822b4a1e10cd21c27a84d0bb021a81b1f4ca extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'sonata_media_type_widget' => array($this, 'block_sonata_media_type_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:Form:media_widgets.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:Form:media_widgets.html.twig"));

        // line 1
        $this->displayBlock('sonata_media_type_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_sonata_media_type_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_media_type_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_media_type_widget"));

        // line 2
        echo "    <div class=\"row-fluid\" style=\"overflow: auto !important;\">
        <div class=\"col-lg-9\">
            <div class=\"col-lg-3\">
                ";
        // line 5
        if (( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 5, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 5, $this->source); })()), "providerReference", array()))) {
            // line 6
            echo "                    ";
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->thumbnail((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 6, $this->source); })()), "admin", array("width" => "100%", "height" => "", "class" => "img-polaroid media-object"));
            // line 7
            echo "                ";
        } else {
            // line 8
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/sonatamedia/grey.png"), "html", null, true);
            echo "\" class=\"img-polaroid media-object\" style=\"width: 85px; height: 85px\"/>
                ";
        }
        // line 10
        echo "            </div>  
            <div class=\"col-lg-9\" style=\"padding-top: 20px\">
                ";
        // line 12
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Form:media_widgets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  71 => 12,  67 => 10,  61 => 8,  58 => 7,  55 => 6,  53 => 5,  48 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block sonata_media_type_widget %}
    <div class=\"row-fluid\" style=\"overflow: auto !important;\">
        <div class=\"col-lg-9\">
            <div class=\"col-lg-3\">
                {% if value is not empty and value.providerReference %}
                    {% thumbnail value, 'admin' with {'width':'100%','height':'', 'class': 'img-polaroid media-object'} %}
                {% else %}
                    <img src=\"{{ asset('bundles/sonatamedia/grey.png') }}\" class=\"img-polaroid media-object\" style=\"width: 85px; height: 85px\"/>
                {% endif %}
            </div>  
            <div class=\"col-lg-9\" style=\"padding-top: 20px\">
                {{ block('form_widget') }}
            </div>
        </div>
    </div>
{% endblock sonata_media_type_widget %}
", "SonataMediaBundle:Form:media_widgets.html.twig", "D:\\ESTUDIO\\siunic_etecsa\\siunic_etecsa\\app/Resources/SonataMediaBundle/views/Form/media_widgets.html.twig");
    }
}
