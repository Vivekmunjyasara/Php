<?php
echo "SCHOOL";
echo "<br><br><br>";

//primary subjects
$english=array('0'=>'himanshu sir',
    '1'=>'naresh bhai');

$maths=array('0'=>'hima',
    '1'=>'shlok');

$art=array('0'=>'harsh',
    '1'=>'sikki');

//secondry subjects
$science=array( '0'=>'pooja',
    '1'=>'mahi');

$ss=array('0'=>'vivek',
    '1'=>'piyush');

$marathi=array('0'=>'jay',
    '1'=>'dev');

//higher-secondry
$accounts=array('0'=>'nitesh sir',
    '1'=>'anita mam');

$maths=array('0'=>'pinkesh sir',
    '1'=>'abdul bhai');

$evs=array('0'=>'nisha',
    '1'=>'heth');

//teachers array
$primary=array('english'=>$english,'maths'=>$maths,'art'=>$art);
$secondry=array('science'=>$science,'ss'=>$ss,'marathi'=>$marathi);
$higher_secondry=array('accounts'=>$accounts,'maths'=>$maths,'evs'=>$evs);
$teachers=array('primary'=>$primary,'secondry'=>$secondry,'higher_secondry'=>$higher_secondry);


//non teaching staff
$poens=array('0'=>'harsh',
    '1'=>'kavita');

$accountant=array('0'=>'vivek sir',
    '1'=>'raj');

$non_teaching_staff=array('poens'=>$poens,'accountant'=>$accountant);


//students
$first=array('0'=>'mahiii','1'=>'nareshhh');
$second=array('0'=>'vanashri','1'=>'jayy');
$third=array('0'=>'vivek','1'=>'harsh');
$fourth=array('0'=>'yogi','1'=>'modi');
$fifth=array('0'=>'ajit','1'=>'suri');
$sixth=array('0'=>'manish','1'=>'pakshal');
$seventh=array('0'=>'devender','1'=>'ajay');
$eight=array('0'=>'viraj','1'=>'virat');
$ninth=array('0'=>'rohit','1'=>'hardik');
$ten=array('0'=>'bhuvi','1'=>'bumrah');


$student=array('first'=>$first,'second'=>$second,'third'=>$third,'fourth'=>$fourth,'fifth'=>$fifth,'sixth'=>$sixth,'seventh'=>$seventh,'eight'=>$eight,'ninth'=>$ninth,'ten'=>$ten);




//main array
$school=array('teachers'=>$teachers,'non teaching staff'=>$non_teaching_staff,'student'=>$student);

echo $school['non teaching staff']['poens'][1];


?>
