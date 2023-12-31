<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>CSS3 tabs</title>
<link rel="stylesheet" type="text/css" media="all" href="tabs.css" />
https://stackoverflow.com/questions/26734479/how-to-link-href-to-a-tab
</head>
<style>body
{
font-family: "Segoe UI", arial, helvetica, freesans, sans-serif;
font-size: 90%;
color: #333;
background-color: #e5eaff;
margin: 10px;
z-index: 0;
}

h1
{
font-size: 1.5em;
font-weight: normal;
margin: 0;
}

h2
{
font-size: 1.3em;
font-weight: normal;
margin: 2em 0 0 0;
}

p
{
margin: 0.6em 0;
}

p.tabnav
{
font-size: 1.1em;
text-transform: uppercase;
text-align: right;
}

p.tabnav a
{
text-decoration: none;
color: #999;
}

article.tabs
{
position: relative;
display: block;
width: 40em;
height: 15em;
margin: 2em auto;
}

article.tabs section
{
position: absolute;
display: block;
top: 1.8em;
left: 0;
height: 12em;
padding: 10px 20px;
background-color: #ddd;
border-radius: 5px;
box-shadow: 0 3px 3px rgba(0,0,0,0.1);
z-index: 0;
}

article.tabs section:first-child
{
z-index: 1;
}

article.tabs section h2
{
position: absolute;
font-size: 1em;
font-weight: normal;
width: 120px;
height: 1.8em;
top: -1.8em;
left: 10px;
padding: 0;
margin: 0;
color: #999;
background-color: #ddd;
border-radius: 5px 5px 0 0;
}

article.tabs section:nth-child(2) h2
{
left: 132px;
}

article.tabs section:nth-child(3) h2
{
left: 254px;
}

article.tabs section h2 a
{
display: block;
width: 100%;
line-height: 1.8em;
text-align: center;
text-decoration: none;
color: inherit;
outline: 0 none;
}

article.tabs section,
article.tabs section h2
{
-webkit-transition: all 500ms ease;
-moz-transition: all 500ms ease;
-ms-transition: all 500ms ease;
-o-transition: all 500ms ease;
transition: all 500ms ease;
}

article.tabs section:target,
article.tabs section:target h2
{
color: #333;
background-color: #fff;
z-index: 2;
}</style>

<body>



<article class="tabs">
<?php
$servername = "localhost";
$username = "marcom";
$password = "TR*viv3mo?!q";
$dbname = "search8c_pi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
			 
<section id="tab1?keyword='helloworld'">
    <h2><a href="#tab1?keyword='helloworld'">Tab 1</a></h2>
    <p>This content appears on tab 1.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lacinia elit nec mi ornare et viverra massa pharetra. Phasellus mollis, massa sed suscipit pharetra, nunc tellus sagittis nunc, et tempus dui lorem a ipsum.</p>
    <p class="tabnav"><a href="#tab2">next &#10151;</a></p>
</section>

<section id="tab2?keyword='helloworld-information'">
    <h2><a href="#tab2?keyword='helloworld-information'">Tab 2</a></h2>
    <p>This content appears on tab 2.</p>
    <p>Fusce ullamcorper orci vel turpis vestibulum eu congue nisl euismod. Maecenas euismod, orci non tempus fermentum, leo metus lacinia lacus, nec ultrices quam ligula ac leo. Quisque tortor neque, vulputate quis ultricies ut, rhoncus mollis metus.</p>
    <p class="tabnav"><a href="#tab3">next &#10151;</a></p>
</section>

<section id="tab3?keyword='fastest-technology'">
    <h2><a href="#tab3?keyword='fastest-technology'">Tab 3</a></h2>
    <p>This content appears on tab 3.</p>
    <p>Sed et diam eu ipsum scelerisque laoreet quis in nibh. Proin sodales augue lectus. Maecenas a lorem a mi congue pharetra. Sed sed risus in nisi venenatis condimentum. Donec ac consectetur arcu. Integer urna neque, rutrum at pretium eu.</p>
    <p class="tabnav"><a href="#tab1">next &#10151;</a></p>
</section>

</article>


</body>
</html>

