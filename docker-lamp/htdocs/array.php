<?php
$family = ['Mom', 'Dad', 'Brother', 'Sister'];
print_r ($family);

$recipes = ['Rice', 'Noodle', 'Ognion'];
print_r($recipes);

$movie = ['Spider-man', 'Men in Black', 'Zombieland'];
print_r($movie[0]);

var_dump($family); // Usefull sometimes
array_push($family, 'dog');
// OU
$family[] = 'cat';

//Associative Array 
$user = [
    'firstname' => 'Juan',
    'lastname' => 'Don',
    'Job' => 'Lover'
];

echo $user['firstname'];


$mother = [
    'firstname' => 'Ortil',
    'age' => 41,
    'seaon' => 'summer',
    'soccer' => false,
    'hobbies' => ['Reading Book', 'Watching TV'],
];


$me = [
    'firstname' => 'Robin',
    'age' => 26,
    'season' => 'hiver',
    'soccer' => false,
    'hobbies' => ['Code', 'Ethical Hacking', 'Video Game'],
    'mother' => $mother,
];
echo '<pre>';
print_r($me);
echo '</pre>';

echo count($mother['hobbies']);
echo "<br />";
print_r(count($me['hobbies']));
echo "<br />";
$result = count($mother['hobbies']) + count($me['hobbies']);
echo $result;
$me['hobbies'][] = "Taxidermy";
echo "<pre>";
print_r($me);
echo "</pre>";

$me['firstname'] = 'Octavio';
echo $me['firstname'];

$soulmate = [
    'firstname' => 'Yoldi',
    'age' => 56,
    'season' => 'spring',
    'soccer' => true,
    'hobbies' => ['Code', 'Barbie', 'Cooking']
];


// perform array operation
$possible_hobbies_via_intersection = array_intersect_assoc($me['hobbies'], $soulmate['hobbies']);
$possible_hobbies_via_merge = array_merge($me['hobbies'], $soulmate['hobbies']);

echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';

$web_development = [
    'frontend' => [],
    'backend' => []
];

$web_development['frontend'][] = 'xhtml';
$web_development['backend'][] = 'Ruby on Rails';
$web_development['frontend'][] = 'css';
$web_development['backend'][] = 'flash';
$web_development['backend'][] = 'javascript';
$web_development['frontend'][0] = 'html';
unset($web_development['backend'][1]);

echo '<pre>';
print_r($web_development);
echo '</pre>';
?>
