
<?php

if(isset($_GET[&#39;submit&#39;]))
{
$uid=$_GET[&#39;uid&#39;];
$pwd=$_GET[&#39;pwd&#39;];
$pwd2=$_GET[&#39;pwd2&#39;];
$name=$_GET[&#39;name&#39;];
$address=$_GET[&#39;address&#39;];

$mo_no=$_GET[&#39;mo_no&#39;];
$Email=$_GET[&#39;Email&#39;];
$gender=$_GET[&#39;gender&#39;];
$hobby=$_GET[&#39;hobby&#39;];
$city=$_GET[&#39;city&#39;];
$state=$_GET[&#39;state&#39;];
$zip=$_GET[&#39;zip&#39;];

echo &quot;your username is=&quot;.$uid;
echo &quot;&lt;br&gt;&quot;;
echo &quot;your password is=&quot;.$pwd;
echo &quot;&lt;br&gt;&quot;;
echo &quot;your confirm password is=&quot;.$pwd2;
echo &quot;&lt;br&gt;&quot;;
echo &quot;your name is=&quot;.$name;
echo &quot;&lt;br&gt;&quot;;
echo &quot;your address is=&quot;.$address;
echo &quot;&lt;br&gt;&quot;;
echo &quot;your mobile number is=&quot;.$mo_no;
echo &quot;&lt;br&gt;&quot;;
echo &quot;your Email address is=&quot;.$Email;
echo &quot;&lt;br&gt;&quot;;
echo &quot;your gender is=&quot;.$gender;
echo &quot;&lt;br&gt;&quot;;
echo &quot;your hobby is=&quot;.$hobby;
echo &quot;&lt;br&gt;&quot;;

echo &quot;your city is=&quot;.$city;
echo &quot;&lt;br&gt;&quot;;
echo &quot;your state is=&quot;.$state;
echo &quot;&lt;br&gt;&quot;;
echo &quot;your zip is=&quot;.$zip;
echo &quot;&lt;br&gt;&quot;;
}
?>
