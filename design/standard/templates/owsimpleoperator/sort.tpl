{literal}
<pre>
{def $fruits = array("lemon", "orange", "banana", "apple")}
{set $fruits = sort($fruits)}
{foreach $fruits as $key => $val}
    fruits[{$key}] = {$val}
    {delimiter}&lt;br/&gt;{/delimiter}
{/foreach}
</pre>
{/literal}


<code>
{def $fruits = array("lemon", "orange", "banana", "apple")}
{set $fruits = sort($fruits)}
{foreach $fruits as $key => $val}
    fruits[{$key}] = {$val}
    {delimiter}<br/>{/delimiter}
{/foreach}
</code>


