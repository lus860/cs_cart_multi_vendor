<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__0fb45b7b3beb0b2b857c9af9668284f7 */
class __TwigTemplate_7c6d5e37196f6a5015b736686409554c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<table>
    <tr>
        <td>";
        // line 3
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_plans.plan");
        echo ":</td>
        <td>";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "plan", [], "any", false, false, false, 4);
        echo "</td>
    </tr>
    <tr>
        <td>";
        // line 7
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "price");
        echo ":</td>
        <td>";
        // line 8
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->priceFilter(twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "price", [], "any", false, false, false, 8));
        echo "&nbsp;(";
        echo twig_lower_filter($this->env, $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, ("vendor_plans.periodicity_" . twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "periodicity", [], "any", false, false, false, 8))));
        echo ")</td>
    </tr>
    <tr>
        <td>";
        // line 11
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_plans.products_limit");
        echo ":</td>
        <td>";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "products_limit", [], "any", false, false, false, 12)) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "products_limit", [], "any", false, false, false, 12);
            echo " ";
        } else {
            echo " ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_plans.unlimited");
            echo " ";
        }
        echo "</td>
    </tr>
    <tr>
        <td>";
        // line 15
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_plans.revenue_up_to");
        echo ":</td>
        <td>";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "revenue_limit", [], "any", false, false, false, 16) > 0)) {
            echo " ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->priceFilter(twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "revenue_limit", [], "any", false, false, false, 16));
            echo " ";
        } else {
            echo " ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_plans.unlimited");
            echo " ";
        }
        echo "</td>
    </tr>
    <tr>
        <td>";
        // line 19
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_plans.transaction_fee");
        echo ":</td>
        <td>";
        // line 20
        echo twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "commission", [], "any", false, false, false, 20);
        echo "(%)</td>
    </tr>
    <tr>
        <td>";
        // line 23
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_plans.fixed_transaction_fee");
        echo ":</td>
        <td>";
        // line 24
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->priceFilter(twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "fixed_commission", [], "any", false, false, false, 24));
        echo "</td>
    </tr>
    <tr>
        <td>";
        // line 27
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_plans.vendor_store");
        echo ":</td>
        <td>";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "vendor_store", [], "any", false, false, false, 28)) {
            echo " ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "yes");
            echo " ";
        } else {
            echo " ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "no");
            echo " ";
        }
        echo "</td>
    </tr>
    ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "description", [], "any", false, false, false, 30)) {
            // line 31
            echo "    <tr>
        <td>";
            // line 32
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "description");
            echo ":</td>
        <td>";
            // line 33
            echo twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "description", [], "any", false, false, false, 33);
            echo "</td>
    </tr>
    ";
        }
        // line 36
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__0fb45b7b3beb0b2b857c9af9668284f7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 36,  145 => 33,  141 => 32,  138 => 31,  136 => 30,  123 => 28,  119 => 27,  113 => 24,  109 => 23,  103 => 20,  99 => 19,  85 => 16,  81 => 15,  67 => 12,  63 => 11,  55 => 8,  51 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table>
    <tr>
        <td>{{ __(\"vendor_plans.plan\") }}:</td>
        <td>{{ plan.plan }}</td>
    </tr>
    <tr>
        <td>{{ __(\"price\") }}:</td>
        <td>{{ plan.price|price }}&nbsp;({{ __(\"vendor_plans.periodicity_\" ~ plan.periodicity)|lower }})</td>
    </tr>
    <tr>
        <td>{{ __(\"vendor_plans.products_limit\") }}:</td>
        <td>{% if plan.products_limit %} {{ plan.products_limit }} {% else %} {{ __(\"vendor_plans.unlimited\") }} {% endif %}</td>
    </tr>
    <tr>
        <td>{{ __(\"vendor_plans.revenue_up_to\") }}:</td>
        <td>{% if plan.revenue_limit > 0 %} {{ plan.revenue_limit|price }} {% else %} {{ __(\"vendor_plans.unlimited\") }} {% endif %}</td>
    </tr>
    <tr>
        <td>{{ __(\"vendor_plans.transaction_fee\") }}:</td>
        <td>{{ plan.commission }}(%)</td>
    </tr>
    <tr>
        <td>{{ __(\"vendor_plans.fixed_transaction_fee\") }}:</td>
        <td>{{ plan.fixed_commission|price }}</td>
    </tr>
    <tr>
        <td>{{ __(\"vendor_plans.vendor_store\") }}:</td>
        <td>{% if plan.vendor_store %} {{ __(\"yes\") }} {% else %} {{ __(\"no\") }} {% endif %}</td>
    </tr>
    {% if plan.description %}
    <tr>
        <td>{{ __(\"description\") }}:</td>
        <td>{{ plan.description }}</td>
    </tr>
    {% endif %}
</table>", "__string_template__0fb45b7b3beb0b2b857c9af9668284f7", "");
    }
}
