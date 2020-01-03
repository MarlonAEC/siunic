<?php

/* GregwarCaptchaBundle::captcha.html.twig */
class __TwigTemplate_204064d6a044828f360c545ca375293c29c52edc91633db6af1d87abd087276b extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'captcha_widget' => array($this, 'block_captcha_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GregwarCaptchaBundle::captcha.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GregwarCaptchaBundle::captcha.html.twig"));

        // line 1
        $this->displayBlock('captcha_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_captcha_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "captcha_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "captcha_widget"));

        // line 2
        echo "    ";
        if ((isset($context["is_human"]) || array_key_exists("is_human", $context) ? $context["is_human"] : (function () { throw new Twig_Error_Runtime('Variable "is_human" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "        -
    ";
        } else {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            <div class=\"col-sm-4\" style=\"padding-left: 0px; margin-bottom: 15px;\">
                ";
            // line 7
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), 'widget');
            echo "
            </div>
            <div class=\"col-sm-8\">
                <img id=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["image_id"]) || array_key_exists("image_id", $context) ? $context["image_id"] : (function () { throw new Twig_Error_Runtime('Variable "image_id" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["captcha_code"]) || array_key_exists("captcha_code", $context) ? $context["captcha_code"] : (function () { throw new Twig_Error_Runtime('Variable "captcha_code" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\" alt=\"\" title=\"captcha\" width=\"";
            echo twig_escape_filter($this->env, (isset($context["captcha_width"]) || array_key_exists("captcha_width", $context) ? $context["captcha_width"] : (function () { throw new Twig_Error_Runtime('Variable "captcha_width" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, (isset($context["captcha_height"]) || array_key_exists("captcha_height", $context) ? $context["captcha_height"] : (function () { throw new Twig_Error_Runtime('Variable "captcha_height" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\" />
                <!-- -->";
            // line 11
            if ((isset($context["reload"]) || array_key_exists("reload", $context) ? $context["reload"] : (function () { throw new Twig_Error_Runtime('Variable "reload" does not exist.', 11, $this->source); })())) {
                // line 12
                echo "                <script type=\"text/javascript\">
                    function reload_";
                // line 13
                echo twig_escape_filter($this->env, (isset($context["image_id"]) || array_key_exists("image_id", $context) ? $context["image_id"] : (function () { throw new Twig_Error_Runtime('Variable "image_id" does not exist.', 13, $this->source); })()), "html", null, true);
                echo "() {
                        var img = document.getElementById('";
                // line 14
                echo twig_escape_filter($this->env, (isset($context["image_id"]) || array_key_exists("image_id", $context) ? $context["image_id"] : (function () { throw new Twig_Error_Runtime('Variable "image_id" does not exist.', 14, $this->source); })()), "html", null, true);
                echo "');
                        img.src = '";
                // line 15
                echo twig_escape_filter($this->env, (isset($context["captcha_code"]) || array_key_exists("captcha_code", $context) ? $context["captcha_code"] : (function () { throw new Twig_Error_Runtime('Variable "captcha_code" does not exist.', 15, $this->source); })()), "html", null, true);
                echo "?n=' + (new Date()).getTime();
                    }
                </script>
                <a class=\"captcha_reload\" href=\"javascript:reload_";
                // line 18
                echo twig_escape_filter($this->env, (isset($context["image_id"]) || array_key_exists("image_id", $context) ? $context["image_id"] : (function () { throw new Twig_Error_Runtime('Variable "image_id" does not exist.', 18, $this->source); })()), "html", null, true);
                echo "();\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Renew", array(), "GregwarCaptchaBundle"), "html", null, true);
                echo "\" style=\"margin-left: 5px; font-size: 15px;\"><i class=\"fa fa-refresh\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Renew", array(), "GregwarCaptchaBundle"), "html", null, true);
                echo "</a>
            </div>
            <!-- -->";
            }
            // line 21
            echo "        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 22
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GregwarCaptchaBundle::captcha.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  109 => 22,  106 => 21,  96 => 18,  90 => 15,  86 => 14,  82 => 13,  79 => 12,  77 => 11,  67 => 10,  61 => 7,  58 => 6,  55 => 5,  51 => 3,  48 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block captcha_widget %}
    {% if is_human %}
        -
    {% else %}
        {% spaceless %}
            <div class=\"col-sm-4\" style=\"padding-left: 0px; margin-bottom: 15px;\">
                {{ form_widget(form) }}
            </div>
            <div class=\"col-sm-8\">
                <img id=\"{{ image_id }}\" src=\"{{ captcha_code }}\" alt=\"\" title=\"captcha\" width=\"{{ captcha_width }}\" height=\"{{ captcha_height }}\" />
                <!-- -->{% if reload %}
                <script type=\"text/javascript\">
                    function reload_{{ image_id }}() {
                        var img = document.getElementById('{{ image_id }}');
                        img.src = '{{ captcha_code }}?n=' + (new Date()).getTime();
                    }
                </script>
                <a class=\"captcha_reload\" href=\"javascript:reload_{{ image_id }}();\" title=\"{{ 'Renew'|trans({}, 'GregwarCaptchaBundle') }}\" style=\"margin-left: 5px; font-size: 15px;\"><i class=\"fa fa-refresh\"></i> {{ 'Renew'|trans({}, 'GregwarCaptchaBundle') }}</a>
            </div>
            <!-- -->{% endif %}
        {% endspaceless %}
    {% endif %}
{% endblock %}
", "GregwarCaptchaBundle::captcha.html.twig", "E:\\ESTUDIO\\TESIS\\sucu_etecsa\\app/Resources/GregwarCaptchaBundle/views/captcha.html.twig");
    }
}
