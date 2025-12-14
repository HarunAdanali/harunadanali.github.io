<html>

<head>
    <title>Ders 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div style=" width: fit-content; padding-right:50px; margin: auto; ">
        <h2 align="center">PHP Dilinin Genel Yapısı ve Yazım Kuralları</h2>
    
    <ul>
        <li>PHP kodları <?php ####### ?> etiketleri arasına yazılır</li>
        <li>Bir çok dilde de olduğu gibi PHP'de de cümleler ; ile ayrılır <br>
            <pre>
&lt;?php 
    echo ("php dersleri");
    echo "php"; 
?&gt;
</pre>
        </li>
        <li>
            Php'de tek satırlık açıklama için // veya # çok satırlık için /*....*/ kullanılır
            <pre>
&lt;?php #Bu bir php kodudur echo "ali"; ?&gt;
</pre><!--<?php #Bu bir php kodudur echo "ali"; ?>-->
        </li>
        <li>
            Php'de bloaklar {} ile ifade edilir,
        </li>
        <li>
            Php'de nokta notasyonuyla birleştirilir
            <pre>
&lt;?php
    $a = 5;
    $b = 4;
    if ($a &gt; $b)
        echo $a . "&gt;" . $b;
    else
        echo $a . "&lt;" . $b;
?&gt;
</pre>
            <pre>
&lt;?php $x=0;
echo "x=".$x."&lt;br&gt;";
echo "x=$x"; ?&gt;
</pre>
        </li>
        <li>
            Php ile html kodları beraber kullanılabilirller.
            <pre>
&lt;?php
    echo "&lt;b1&gt;merhaaba&lt;/b1&gt;";
    echo "&lt;br&gt;";
    echo "&lt;strong&gt;PHP&lt;/strong&gt;";
?&gt;
</pre>
        </li>
        <li>
            Php içerisinde php kodları terk edilip html içerisine geçilebilir. Ve bu defalarca yapılabilir. <br>
            <a href="ornek/d4o1.php">d4o1.php</a>
            <pre class="kutu">
&lt;html&gt;
    &lt;body&gt;
        &lt;?php 
        $x=1;
        echo "x=$x &lt;br&gt;";
        ?&gt;
        &lt;hr&gt;
        &lt;b1&gt;burası html&lt;/b1&gt;
        &lt;?php 
        $a=5;$a++;
        echo $a;
        ?&gt;
    &lt;/body&gt;
&lt;/html&gt;
</pre>
            <a href="ornek/d4o2.php">d4o2.php</a>
            <pre class="kutu">
&lt;?php
$sat=3;$sut=2;$n=1;
echo'&lt;table border="1"&gt;';
for ($i= 1;$i&lt;$sat;$i++) {
    echo "&lt;tr&gt;";
    for ($j= 1;$j&lt;=$sut;$j++) {
        echo "&lt;td&gt;".$n++."&lt;/td&gt;";
    }
    echo "&lt;/tr&gt;";}
    echo "&lt;/table&gt;";
?&gt;
</pre>
        </li>
    </ul>
    </div>
</body>


</html>