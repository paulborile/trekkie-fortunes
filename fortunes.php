<?php

/**
 * @package Trekkie Fortunes
 * @version 1.0
 */
/*
Plugin Name: Trekkie Fortunes
Plugin URI: http://www.paulstephenborile.com/downloads/trekkie-fortunes.zip
Description: Star Trek fortunes used to be the first thing I saw in the morning when loggin into system for software development. Just wanted to have the same thing in my wordpress admin dashboard. Thanks to Hello Dolly for inspiration.
Author: Paul Stephen Borile
Version: 1.0
Author URI: http://www.paulstephenborile.com
*/

function trekkie_fortune_get_fortune() {
	/** These are the lyrics to Hello Dolly */
	$fortunes = " A father doesn't destroy his children.  -- Lt. Carolyn Palamas, \"Who Mourns for Adonais?\", stardate 3468.1.
A little suffering is good for the soul. -- Kirk, \"The Corbomite Maneuver\", stardate 1514.0
A man either lives life as it happens to him, meets it head-on and licks it, or he turns his back on it and starts to wither away. -- Dr. Boyce, \"The Menagerie\" (\"The Cage\"), stardate unknown
A princess should not be afraid -- not with a brave knight to protect her. -- McCoy, \"Shore Leave\", stardate 3025.3
A star captain's most solemn oath is that he will give his life, even his entire crew, rather than violate the Prime Directive. -- Kirk, \"The Omega Glory\", stardate unknown
A Vulcan can no sooner be disloyal than he can exist without breathing. -- Kirk, \"The Menagerie\", stardate 3012.4
A woman should have compassion. 	-- Kirk, \"Catspaw\", stardate 3018.2
Actual war is a very messy business.  Very, very messy business. -- Kirk, \"A Taste of Armageddon\", stardate 3193.0
After a time, you may find that \"having\" is not so pleasing a thing, after all, as \"wanting.\"  It is not logical, but it is often true. -- Spock, \"Amok Time\", stardate 3372.7
All your people must learn before you can reach for the stars. -- Kirk, \"The Gamesters of Triskelion\", stardate 3259.2
Another Armenia, Belgium ... the weak innocents who always seem to be located on a natural invasion route. 	-- Kirk, \"Errand of Mercy\", stardate 3198.4
Another dream that failed.  There's nothing sadder. -- Kirk, \"This side of Paradise\", stardate 3417.3
Another war ... must it always be so?  How many comrades have we lost in this way? ...  Obedience.  Duty.  Death, and more death ... -- Romulan Commander, \"Balance of Terror\", stardate 1709.2
... bacteriological warfare ... hard to believe we were once foolish enough to play around with that. -- McCoy, \"The Omega Glory\", stardate unknown
\"Beauty is transitory.\" \"Beauty survives.\" -- Spock and Kirk, \"That Which Survives\", stardate unknown
Behind every great man, there is a woman -- urging him on. -- Harry Mudd, \"I, Mudd\", stardate 4513.3
Blast medicine anyway!  We've learned to tie into every organ in the human body but one.  The brain!  The brain is what life is all about. 	-- McCoy, \"The Menagerie\", stardate 3012.4
But it's real.  And if it's real it can be affected ...  we may not be able to break it, but, I'll bet you credits to Navy Beans we can put a dent in it. -- deSalle, \"Catspaw\", stardate 3018.2
Change is the essential process of all existence. -- Spock, \"Let That Be Your Last Battlefield\", stardate 5730.2
Compassion -- that's the one things no machine ever had.  Maybe it's the one thing that keeps men ahead of them. -- McCoy, \"The Ultimate Computer\", stardate 4731.3
Computers make excellent and efficient servants, but I have no wish to serve under them.  Captain, a starship also runs on loyalty to one man.  And nothing can replace it or him. -- Spock, \"The Ultimate Computer\", stardate 4729.4
Conquest is easy. Control is not. -- Kirk, \"Mirror, Mirror\", stardate unknown
Death, when unnecessary, is a tragic thing. -- Flint, \"Requiem for Methuselah\", stardate 5843.7
Death.  Destruction.  Disease.  Horror.  That's what war is all about. That's what makes it a thing to be avoided. -- Kirk, \"A Taste of Armageddon\", stardate 3193.0
Do you know about being with somebody?  Wanting to be?  If I had the whole universe, I'd give it to you, Janice.  When I see you, I feel like I'm hungry all over.  Do you know how that feels? -- Charlie Evans, \"Charlie X\", stardate 1535.8
[Doctors and Bartenders], We both get the same two kinds of customers
-- the living and the dying. -- Dr. Boyce, \"The Menagerie\" (\"The Cage\"), stardate unknown
[Doctors and Bartenders], We both get the same two kinds of customers -- the living and the dying. -- Dr. Boyce, \"The Menagerie\" (\"The Cage\"), stardate unknown
Each kiss is as the first. -- Miramanee, Kirk's wife, \"The Paradise Syndrome\", stardate 4842.6
Earth -- mother of the most beautiful women in the universe. -- Apollo, \"Who Mourns for Adonais?\" stardate 3468.1
Either one of us, by himself, is expendable.  Both of us are not. -- Kirk, \"The Devil in the Dark\", stardate 3196.1
Emotions are alien to me.  I'm a scientist. -- Spock, \"This Side of Paradise\", stardate 3417.3
Even historians fail to learn from history -- they repeat the same mistakes. -- John Gill, \"Patterns of Force\", stardate 2534.7
Every living thing wants to survive. -- Spock, \"The Ultimate Computer\", stardate 4731.3
\"Evil does seek to maintain power by suppressing the truth.\" \"Or by misleading the innocent.\" -- Spock and McCoy, \"And The Children Shall Lead\", stardate 5029.5.
Extreme feminine beauty is always disturbing. -- Spock, \"The Cloud Minders\", stardate 5818.4
Fascinating is a word I use for the unexpected. -- Spock, \"The Squire of Gothos\", stardate 2124.5
Fascinating, a totally parochial attitude. -- Spock, \"Metamorphosis\", stardate 3219.8
First study the enemy.  Seek weakness. -- Romulan Commander, \"Balance of Terror\", stardate 1709.2
Four thousand throats may be cut in one night by a running man. -- Klingon Soldier, \"Day of the Dove\", stardate unknown
\"... freedom ... is a worship word...\" \"It is our worship word too.\" -- Cloud William and Kirk, \"The Omega Glory\", stardate unknown
Genius doesn't work on an assembly line basis.  You can't simply say, \"Today I will be brilliant.\" -- Kirk, \"The Ultimate Computer\", stardate 4731.3
\"Get back to your stations!\" \"We're beaming down to the planet, sir.\" -- Kirk and Mr. Leslie, \"This Side of Paradise\", stardate 3417.3
He's dead, Jim -- McCoy, \"The Devil in the Dark\", stardate 3196.1
History tends to exaggerate. 	-- Col. Green, \"The Savage Curtain\", stardate 5906.4
Humans do claim a great deal for that particular emotion (love). -- Spock, \"The Lights of Zetar\", stardate 5725.6
I am pleased to see that we have differences.  May we together become greater than the sum of both of us.  -- Surak of Vulcan, \"The Savage Curtain\", stardate 5906.4
I have never understood the female capacity to avoid a direct answer to any question. -- Spock, \"This Side of Paradise\", stardate 3417.3
I object to intellect without discipline;  I object to power without constructive purpose. -- Spock, \"The Squire of Gothos\", stardate 2124.5
I realize that command does have its fascination, even under circumstances such as these, but I neither enjoy the idea of command nor am I frightened of it.  It simply exists, and I will do whatever logically needs to be done. -- Spock, \"The Galileo Seven\", stardate 2812.7
\"I think they're going to take all this money that we spend now on war and death --\" \"And make them spend it on life.\" -- Edith Keeler and Kirk, \"The City on the Edge of Forever\", stardate unknown.
I thought my people would grow tired of killing.  But you were right, they see it is easier than trading.  And it has its pleasures.  I feel it myself.  Like the hunt, but with richer rewards. -- Apella, \"A Private Little War\", stardate 4211.8
I'm a soldier, not a diplomat.  I can only tell the truth. -- Kirk, \"Errand of Mercy\", stardate 3198.9
I'm frequently appalled by the low regard you Earthmen have for life. -- Spock, \"The Galileo Seven\", stardate 2822.3
I've already got a female to worry about.  Her name is the Enterprise. -- Kirk, \"The Corbomite Maneuver\", stardate 1514.0
If a man had a child who'd gone anti-social, killed perhaps, he'd still tend to protect that child. -- McCoy, \"The Ultimate Computer\", stardate 4731.3 ";

	// Here we split it into lines
	$fortunes = explode( "\n", $fortunes );

	// And then randomly choose a line
	return wptexturize( $fortunes[ mt_rand( 0, count( $fortunes ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later
function trekkie_fortune() {
	$chosen = trekkie_fortune_get_fortune();
	echo "<p id='trekkie'>$chosen</p>";
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'trekkie_fortune' );

// We need some CSS to position the paragraph
function trekkie_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#trekkie {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}

add_action( 'admin_head', 'trekkie_css' );

?>
