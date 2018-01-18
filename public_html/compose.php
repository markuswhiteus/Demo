<?php
require ('./smartyHeader.php');
include 'connect.php';
if (isset ($_GET['sendto'])){
  $sendto=$_GET['sendto'];
}
else if (isset ($_GET['user'])){
  $sendto=$_GET['user'];
}
else{
  $sendto=null;
}
if (isset ($_GET['sub'])){
  $subject=$_GET['sub'];
}
else{
  $subject=null;
}

if (isset($_SESSION["loggedin"]) == true){
    $link5 = 'My Profile';
    $url = 'profile.php';
    $username = $_SESSION["username"];
    $UID = $_SESSION["UID"];
    if($_SESSION["Level"] >= 2) {
        $alink =  '<li><a href="acp.php" >Admin</a></li>';
      }
      else{
      $alink = null;
      }
    
  }
  else{
    $link5 = 'Login';
    $url = 'login.php';
    $alink = null;
    $username = null;
    $UID = null ;
    header("Location:login.php");
}

$title = 'Messaging App';
$header = 'Compose Message';
$link1 = 'Home';
$link2 = 'Inbox';
$link3 = 'Compose';


$smarty->assign('title',$title);
$smarty->assign('header',$header);
$smarty->assign('link1',$link1);
$smarty->assign('link2',$link2);
$smarty->assign('link3',$link3);
$smarty->assign('link5',$link5);
$smarty->assign('url',$url);
$smarty->assign('alink',$alink);
$smarty->assign('sendto',$sendto);
$smarty->assign('subject',$subject);


if (isset($_POST['send'])) {
  if (isset($_POST['sendto'])){
    $sendto = mysqli_real_escape_string($conn, $_POST['sendto']);
    }
    if ($sendto == '') {
    die("No Reciepent Added   <a href='compose.php'>Back</a>");
    }                                                                                                                
  if (isset($_POST['sub'])){
    $sub = mysqli_real_escape_string($conn, $_POST['sub']);
    if($sub == ''){
    die("No Reciepent Added   <a href='compose.php'>Back</a>");
    }
    }                                                                                                                
  if (isset($_POST['msg'])){
    $msg = mysqli_real_escape_string($conn, $_POST['msg']);
     if ($msg == '') {                                                                                                         
    die("Message is blank  <a href='compose.php'>Back</a>");
    }
    }
    $sql = "SELECT * FROM users WHERE Username = '{$sendto}'";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      $sent = $row['Username'];       
    }
    if ($sent != $sendto){
    die ("This user does not exist (Usernames are case sensitive) <a href='compose.php'>Back</a>");
    }


   
	$language_detection = array("4r5e", "50 yard cunt punt", "5h1t", "5hit", "a_s_s", "a2m", "a55", "adult", "amateur", "anal", "anal impaler   ", "anal leakage   ", "anilingus", "anus", "ar5e", "arrse", "arse", "arsehole", "ass", "ass fuck   ", "asses", "assfucker", "ass-fucker", "assfukka", "asshole", "asshole", "assholes", "assmucus   ", "assmunch", "asswhole", "autoerotic", "b!tch", "b00bs", "b17ch", "b1tch", "ballbag", "ballsack", "bang (one's) box   ", "bangbros", "bareback", "bastard", "beastial", "beastiality", "beef curtain   ", "bellend", "bestial", "bestiality", "bi+ch", "biatch", "bimbos", "birdlock", "bitch", "bitch tit   ", "bitcher", "bitchers", "bitches", "bitchin", "bitching", "bloody", "blow job", "blow me   ", "blow mud   ", "blowjob", "blowjobs", "blue waffle   ", "blumpkin   ", "boiolas", "bollock", "bollok", "boner", "boob", "boobs", "booobs", "boooobs", "booooobs", "booooooobs", "breasts", "buceta", "bugger", "bum", "bunny fucker", "bust a load   ", "busty", "butt", "butt fuck   ", "butthole", "buttmuch", "buttplug", "c0ck", "c0cksucker", "carpet muncher", "carpetmuncher", "cawk", "chink", "choade   ", "chota bags   ", "cipa", "cl1t", "clit", "clit licker   ", "clitoris", "clits", "clitty litter   ", "clusterfuck", "cnut", "cock", "cock pocket   ", "cock snot   ", "cockface", "cockhead", "cockmunch", "cockmuncher", "cocks", "cocksuck ", "cocksucked ", "cocksucker", "cock-sucker", "cocksucking", "cocksucks ", "cocksuka", "cocksukka", "cok", "cokmuncher", "coksucka", "coon", "cop some wood   ", "cornhole   ", "corp whore   ", "cox", "cum", "cum chugger   ", "cum dumpster   ", "cum freak   ", "cum guzzler   ", "cumdump   ", "cummer", "cumming", "cums", "cumshot", "cunilingus", "cunillingus", "cunnilingus", "cunt", "cunt hair   ", "cuntbag   ", "cuntlick ", "cuntlicker ", "cuntlicking ", "cunts", "cuntsicle   ", "cunt-struck   ", "cut rope   ", "cyalis", "cyberfuc", "cyberfuck ", "cyberfucked ", "cyberfucker", "cyberfuckers", "cyberfucking ", "d1ck", "damn", "dick", "dick hole   ", "dick shy   ", "dickhead", "dildo", "dildos", "dink", "dinks", "dirsa", "dirty Sanchez   ", "dlck", "dog-fucker", "doggie style", "doggiestyle", "doggin", "dogging", "donkeyribber", "doosh", "duche", "dyke", "eat a dick   ", "eat hair pie   ", "ejaculate", "ejaculated", "ejaculates ", "ejaculating ", "ejaculatings", "ejaculation", "ejakulate", "erotic", "f u c k", "f u c k e r", "f_u_c_k", "f4nny", "facial   ", "fag", "fagging", "faggitt", "faggot", "faggs", "fagot", "fagots", "fags", "fanny", "fannyflaps", "fannyfucker", "fanyy", "fatass", "fcuk", "fcuker", "fcuking", "feck", "fecker", "felching", "fellate", "fellatio", "fingerfuck ", "fingerfucked ", "fingerfucker ", "fingerfuckers", "fingerfucking ", "fingerfucks ", "fist fuck   ", "fistfuck", "fistfucked ", "fistfucker ", "fistfuckers ", "fistfucking ", "fistfuckings ", "fistfucks ", "flange", "flog the log   ", "fook", "fooker", "fuck hole   ", "fuck puppet   ", "fuck trophy   ", "fuck yo mama   ", "fuck   ", "fucka", "fuck-ass   ", "fuck-bitch   ", "fucked", "fucker", "fuckers", "fuckhead", "fuckheads", "fuckin", "fucking", "fuckings", "fuckingshitmotherfucker", "fuckme ", "fuckmeat   ", "fucks", "fucktoy   ", "fuckwhit", "fuckwit", "fudge packer", "fudgepacker", "fuk", "fuker", "fukker", "fukkin", "fuks", "fukwhit", "fukwit", "fux", "fux0r", "gangbang", "gangbang   ", "gang-bang   ", "gangbanged ", "gangbangs ", "gassy ass   ", "gaylord", "gaysex", "goatse", "god", "god damn", "god-dam", "goddamn", "goddamned", "god-damned", "ham flap   ", "hardcoresex ", "hell", "heshe", "hoar", "hoare", "hoer", "homo", "homoerotic", "hore", "horniest", "horny", "hotsex", "how to kill", "how to murdep", "jackoff", "jack-off ", "jap", "jerk", "jerk-off ", "jism", "jiz ", "jizm ", "jizz", "kawk", "kinky Jesus", "knob", "knob end", "knobead", "knobed", "knobend", "knobend", "knobhead", "knobjocky", "knobjokey", "kock", "kondum", "kondums", "kum", "kummer", "kumming", "kums", "kunilingus", "kwif   ", "l3i+ch", "l3itch", "labia", "LEN", "lmao", "lmfao", "lmfao", "lust", "lusting", "m0f0", "m0fo", "m45terbate", "ma5terb8", "ma5terbate", "mafugly   ", "masochist", "masterb8", "masterbat*", "masterbat3", "masterbate", "master-bate", "masterbation", "masterbations", "masturbate", "mof0", "mofo", "mo-fo", "mothafuck", "mothafucka", "mothafuckas", "mothafuckaz", "mothafucked ", "mothafucker", "mothafuckers", "mothafuckin", "mothafucking ", "mothafuckings", "mothafucks", "mother fucker", "mother fucker   ", "motherfuck", "motherfucked", "motherfucker", "motherfuckers", "motherfuckin", "motherfucking", "motherfuckings", "motherfuckka", "motherfucks", "muff", "muff puff   ", "mutha", "muthafecker", "muthafuckker", "muther", "mutherfucker", "n1gga", "n1gger", "nazi", "need the dick   ", "nigg3r", "nigg4h", "nigga", "niggah", "niggas", "niggaz", "nigger", "niggers ", "nob", "nob jokey", "nobhead", "nobjocky", "nobjokey", "numbnuts", "nut butter   ", "nutsack", "omg", "orgasim ", "orgasims ", "orgasm", "orgasms ", "p0rn", "pawn", "pecker", "penis", "penisfucker", "phonesex", "phuck", "phuk", "phuked", "phuking", "phukked", "phukking", "phuks", "phuq", "pigfucker", "pimpis", "piss", "pissed", "pisser", "pissers", "pisses ", "pissflaps", "pissin ", "pissing", "pissoff ", "poop", "porn", "porno", "pornography", "pornos", "prick", "pricks ", "pron", "pube", "pusse", "pussi", "pussies", "pussy", "pussy fart   ", "pussy palace   ", "pussys ", "queaf   ", "queer", "rectum", "retard", "rimjaw", "rimming", "s hit", "s.o.b.", "s_h_i_t", "sadism", "sadist", "sandbar   ", "sausage queen   ", "schlong", "screwing", "scroat", "scrote", "scrotum", "semen", "sex", "sh!+", "sh!t", "sh1t", "shag", "shagger", "shaggin", "shagging", "shemale", "shi+", "shit", "shit fucker", "shitdick", "shite", "shited", "shitey", "shitfuck", "shitfull", "shithead", "shiting", "shitings", "shits", "shitted", "shitter", "shitters ", "shitting", "shittings", "shitty ", "skank", "slope   ", "slut", "slut bucket   ", "sluts", "smegma", "smut", "snatch", "son-of-a-bitch", "spac", "spunk", "t1tt1e5", "t1tties", "teets", "teez", "testical", "testicle", "tit", "tit wank   ", "titfuck", "tits", "titt", "tittie5", "tittiefucker", "titties", "tittyfuck", "tittywank", "titwank", "tosser", "turd", "tw4t", "twat", "twathead", "twatty", "twunt", "twunter", "v14gra", "v1gra", "vagina", "viagra", "vulva", "w00se", "wang", "wank", "wanker", "wanky", "whoar", "whore", "willies", "willy", "wtf", "xrated", "xxx");
    $individual_check_msg = explode(" ", $msg);
	$individual_check_subject = explode(" ", $subject);
	
	foreach ($individual_check_subject as $current_check_subject) {
		if (in_array($current_check_subject, $language_detection)) {
			$conn->query("INSERT INTO `msgs` (Sender, Recipient, Subject, Message, Flagged) VALUES ('{$username}', '{$sendto}', '{$sub}', '{$msg}', '1')");
			die ("Your message contained vulgar language and therefore has been flagged and sent to an administrator. <a href='inbox.php'>Return to inbox</a> ");
				} else {
			$conn->query("INSERT INTO `msgs` (Sender, Recipient, Subject, Message) VALUES ('{$username}', '{$sendto}', '{$sub}', '{$msg}')");
			die ("Message sent! <a href='inbox.php'>Return to inbox</a> ");
		}
	}
	
	foreach ($individual_check_msg as $current_check_msg) {
		if (in_array($current_check_msg, $language_detection)) {
			$conn->query("INSERT INTO `msgs` (Sender, Recipient, Subject, Message, Flagged) VALUES ('{$username}', '{$sendto}', '{$sub}', '{$msg}', '1')");
			die ("Your message contained vulgar language and therefore has been flagged and sent to an administrator. <a href='inbox.php'>Return to inbox</a> ");
				} else {
			$conn->query("INSERT INTO `msgs` (Sender, Recipient, Subject, Message) VALUES ('{$username}', '{$sendto}', '{$sub}', '{$msg}')");
			die ("Message sent! <a href='inbox.php'>Return to inbox</a> ");
		}
	}
		

   }


$smarty->display('compose.tpl');
?>