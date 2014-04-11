<?php

require_once('ArmLn.class.php');

abstract class Arm {
	public	$name;
	public	$loads;
	public	$range_short;
	public	$range_interm;
	public	$range_long;
	public	$effect_zone;
}



/*
class ArmBldf	implements iArm
{
	public static	name			= 'Batteries laser de flancs';
	public static	loads			= 0;
	public static	range_short		= array(1, 10);
	public static	range_interm 	= array(11, 20);
	public static	range_long 		= array(21, 30);
	public static	effect_zone		= array(0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 1,
		array(0, 0, 0, 0),
		array(1, 0, 1, 0)
	);
}

class ArmLn		implements iArm
{
	public static	name			= 'Lance navale';
	public static	loads			= 0;
	public static	range_short		= array(1, 30);
	public static	range_interm 	= array(31, 60);
	public static	range_long 		= array(61, 90);
	public static	effect_zone		= array(0, 0, 0, 1, 1, 1, 0, 0, 0, 1, 1,
		array(0, 0, 0, 0)
	);
}

class ArmLnl	implements iArm
{
	public static	name			= 'Lance navale lourde';
	public static	loads			= 3;
	public static	range_short		= array(1, 30);
	public static	range_interm 	= array(31, 60);
	public static	range_long 		= array(61, 90);
	public static	effect_zone		= array(1, 1, 3, 1, 1, 1, 0, 0, 0, 1, 1,
		array(0, 0, 0, 0)
	);
}

class ArmMslp	implements iArm
{
	public static	name			= 'Mitrailleuses super lourdes de proximité';
	public static	loads			= 5;
	public static	range_short		= array(1, 3);
	public static	range_interm 	= array(4, 7);
	public static	range_long 		= array(8, 10);
	public static	effect_zone		= array(0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1,
		array(0, 0, 0, 0)
	);
}

class ArmMc		implements iArm
{
	public static	name			= 'Macro canon';
	public static	loads			= 0;
	public static	range_short		= array(1, 10);
	public static	range_interm 	= array(11, 20);
	public static	range_long 		= array(21, 30);
	public static	effect_zone		= array(0, 0, 3, 1, 1, 1, 0, 0, 0, 9, 9,
		array(0, 0, 0, 0)
	);
}
 */

?>
