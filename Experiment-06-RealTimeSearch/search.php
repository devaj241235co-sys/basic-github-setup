<?php
$books = array(
"Harry Potter",
"The Hobbit",
"The Alchemist",
"Atomic Habits",
"Rich Dad Poor Dad",
"The Great Gatsby",
"Think and Grow Rich"
);
$q = strtolower(trim($_GET["q"]));
$hint = "";
foreach($books as $book)
{
if(strpos(strtolower($book), $q) !== false)
{
if($hint == "")
{
$hint = $book;
}
else
{
$hint .= "<br>" . $book;
}
}
}
if($hint == "")
{
echo "No results found";
}
else
{
echo $hint;
}
?>
