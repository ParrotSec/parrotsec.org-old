<?php
if($mirror=="auto");
{
        switch ($_SERVER["HTTP_CF_IPCOUNTRY"])
        {
                case "AF":
                        $mirror="asis";
                        break;
                case "AX":
                        $mirror="umu";
                        break;
                case "AL":
                        $amirror=array("uoc","netix");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "DZ":
                        $mirror="garr";
                        break;
                case "AS":
                        $mirror="lagoon";
                        break;
                case "AD":
                        $mirror="rwth-aachen";
                        break;
                case "AO":
                        $mirror="tenet";
                        break;
                case "AI":
                        $mirror="cloudflare";
                        break;
                case "AQ":
                        $mirror="cloudflare";
                        break;
                case "AG":
                        $mirror="cloudflare";
                        break;
                case "AR":
                        $mirror="cloudflare";
                        break;
                case "AM":
                        $mirror="asis";
                        break;
                case "AW":
                        $mirror="cloudflare";
                        break;
								case "AU":
												$amirror=array("internode","lagoon","0x");
				                $mirror=$amirror[array_rand($amirror)];
				                break;
                case "AT":
                	$amirror=array("garr","garr","rwth-aachen","esslingen");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "AZ":
                        $mirror="asis";
                        break;
                case "BS":
                        $mirror="clarkson";
                        break;
                case "BH":
                        $mirror="asis";
                        break;
                case "BD":
                        $mirror="amberit";
                        break;
                case "BB":
                        $mirror="jmu";
                        break;
                case "BY":
                        $mirror="onet";
                        break;
                case "BE":
			$amirror=array("babylon-fr","rwth-aachen","esslingen","warwick");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "BZ":
                        $mirror="cloudflare";
                        break;
                case "BJ":
                        $mirror="tenet";
                        break;
                case "BM":
                        $mirror="ufpr";
                        break;
                case "BT":
                        $mirror="amberit";
                        break;
                case "BO":
                	$amirror=array("cedia","uta","ueb");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "BQ":
                	$amirror=array("cedia","espoch","uta","jmu");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "BA":
                	$amirror=array("garr","onet","uoc");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "BW":
                	$amirror=array("tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "BV":
                	$amirror=array("cloudflare","tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "BR":
                	$amirror=array("ufpr","nbtelecom");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "IO":
                	$amirror=array("cloudflare","tenet","liquidtelecom","amberit");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "BN":
                	$amirror=array("cloudflare","lagoon","internode");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "BG":
                	$amirror=array("netix","uoc");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "BF":
                	$amirror=array("cloudflare","tenet","garr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "BI":
                	$amirror=array("cloudflare","aptus","aptus");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "KH":
                	$amirror=array("tuna","nchc","ustc","0x");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "CM":
                	$amirror=array("cloudflare","tenet","garr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "CA":
                	$amirror=array("cloudflare","mit","mtu","clarkson");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "CV":
                	$amirror=array("cloudflare","tenet","garr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "KY":
                	$amirror=array("cloudflare");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "CF":
                	$amirror=array("cloudflare","aptus","tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "TD":
                	$amirror=array("cloudflare","aptus","tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "CL":
                	$amirror=array("cloudflare","cloudflare","cedia","uta","ueb");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "CN":
                	$amirror=array("ustc","tuna");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "CX":
                	$amirror=array("cloudflare");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "CC":
                	$amirror=array("cloudflare");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "CO":
                	$amirror=array("cloudflare","cedia","uta","ueb");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "KM":
                	$amirror=array("cloudflare","aptus","tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "CG":
                	$amirror=array("cloudflare","tenet","garr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "CD":
                	$amirror=array("cloudflare","tenet","garr","aptus");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "CK":
                	$amirror=array("cloudflare","lagoon","lagoon");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "CR":
                	$amirror=array("cedia","uta","ueb","jmu");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "CI":
                	$amirror=array("tenet","garr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "HR":
                	$amirror=array("garr","uoc");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "CU":
                	$amirror=array("cloudflare","clarkson");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "CW":
                	$amirror=array("cloudflare","clarkson");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "CY":
                	$amirror=array("garr","uoc");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "CZ":
                	$amirror=array("ignum");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "DK":
                	$amirror=array("nluug","babylon-nl","onet","umu","rwth-aachen","esslingen");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "DJ":
                	$amirror=array("cloudflare","aptus","tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "DM":
                	$amirror=array("cloudflare","clarkson","ufpr","ufpr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "DO":
                	$amirror=array("cloudflare","clarkson","ufpr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "EC":
                	$amirror=array("cedia","uta","ueb");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "EG":
                	$amirror=array("uoc","netix");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "SV":
                	$amirror=array("berkeley","clarkson");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "GQ":
                	$amirror=array("clarkson","clarkson","berkeley","cloudflare");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
		case "ER":
                        $amirror=array("cloudflare","garr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "EE":
                        $amirror=array("umu","onet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "ET":
                        $amirror=array("cloudflare","garr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "FK":
                        $amirror=array("cloudflare");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "FO":
                        $amirror=array("heanet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "FJ":
                        $amirror=array("lagoon");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "FI":
                        $amirror=array("umu");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "FR":
                        $amirror=array("babylon-fr","dasa1-euro","dasa2-euro","freefr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "GF":
                        $amirror=array("ufpr","nbtelecom");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "PF":
                        $amirror=array("lagoon");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "TF":
                        $amirror=array("tenet","lagoon");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "GA":
                        $amirror=array("tenet","garr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "GM":
                        $amirror=array("tenet","garr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "GE":
                        $amirror=array("asis");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "DE":
                        $amirror=array("rwth-aachen","esslingen");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "GH":
                        $amirror=array("tenet","garr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "GI":
                        $amirror=array("rwth-aachen","babylon-fr","nluug","babylon-nl","heanet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "GR":
                        $amirror=array("garr","onet","uoc","uoc");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "GL":
                        $amirror=array("heanet","heanet","nluug","babylon-nl","umu","mit","mtu");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "GD":
                        $amirror=array("clarkson","ufpr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "GP":
                        $amirror=array("clarkson","ufpr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "GU":
                        $amirror=array("ustc","tuna","jaist","nchc","lagoon");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "GT":
                        $amirror=array("clarkson","ufpr","berkeley");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "GG":
                        $amirror=array("warwick","nluug","babylon-nl");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "GN":
                        $amirror=array("garr","tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "GW":
                        $amirror=array("garr","tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "GY":
                        $amirror=array("ufpr","nbtelecom");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "HT":
                        $amirror=array("ufpr","nbtelecom","clarkson");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "HM":
                        $amirror=array("tenet","lagoon");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "VA":
                        $amirror=array("garr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "HN":
                        $amirror=array("clarkson","berkeley");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "HK":
                        $amirror=array("ustc","nchc","tuna");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "HU":
                        $amirror=array("onet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "IS":
                        $amirror=array("heanet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "IN":
                        $amirror=array("amberit","citylan","yandex");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "ID":
                        $amirror=array("0xc");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "IR":
                        $amirror=array("asis");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "IQ":
                        $amirror=array("asis");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "IE":
                        $amirror=array("heanet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "IM":
                        $amirror=array("heanet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "IL":
                        $amirror=array("asis","uoc");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
		case "IT":
                        $amirror=array("garr","garr","garr","rwth-aachen","babylon-fr","esslingen");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "JM":
                        $amirror=array("clarkson","mit","colocrossing");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "JE":
                        $amirror=array("warwick","nluug","babylon-nl");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "JO":
                        $amirror=array("asis");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "KZ":
                        $amirror=array("yandex");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "KE":
                        $amirror=array("tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "KI":
                        $amirror=array("lagoon");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "KP":
                        $amirror=array("nchc","jaist","ustc","tuna");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "KR":
                        $amirror=array("nchc","jaist","ustc","tuna");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "KW":
                        $amirror=array("asis");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "KG":
                        $amirror=array("yandex","amberit","asis");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "LA":
                        $amirror=array("nchc","ustc","amberit","tuna","0x");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "LB":
                        $amirror=array("garr","asis","uoc");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "LV":
                        $amirror=array("garr","rwth-aachen","asis");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "LS":
                        $amirror=array("tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "LR":
                        $amirror=array("garr","tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "LY":
                        $amirror=array("garr","uoc");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "LI":
                        $amirror=array("garr","rwth-aachen","esslingen","freefr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "LT":
                        $amirror=array("onet","umu");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "LU":
                        $amirror=array("rwth-aachen","esslingen");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "MO":
                        $amirror=array("nchc","ustc");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "MK":
                        $amirror=array("garr","uoc","netix");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "MG":
                        $amirror=array("tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "MW":
                        $amirror=array("tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "MY":
                        $amirror=array("0x");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "MV":
                        $amirror=array("lagoon","nchc","tuna");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "ML":
                        $amirror=array("garr","tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "MT":
                        $amirror=array("garr","uoc");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "MH":
                        $amirror=array("lagoon");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "MQ":
                        $amirror=array("clarkson","jmu");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "MR":
                        $amirror=array("garr","tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "MU":
                        $amirror=array("tenet","nchc");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "YT":
                        $amirror=array("tenet","aptus");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "MX":
                        $amirror=array("clarkson","mit","mtu","jmu","berkeley");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "FM":
                        $amirror=array("lagoon");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "MD":
                        $amirror=array("onet","yandex","garr","rwth-aachen","esslingen");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "MC":
                        $amirror=array("rwth-aachen","rwth-aachen","esslingen","esslingen","garr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "MN":
                        $amirror=array("tuna","ustc");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "ME":
                        $amirror=array("garr","uoc");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "MS":
                        $amirror=array("clarkson","jmu");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "MO":
                        $amirror=array("garr","rwth-aachen","esslingen","heanet","freefr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "MZ":
                        $amirror=array("aptus","tenet","cloudflare");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "MN":
                        $amirror=array("amberit");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "NA":
                        $amirror=array("tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "NR":
                        $amirror=array("lagoon");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "NP":
                        $amirror=array("amberit");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "NL":
                        $amirror=array("nluug","babylon-nl");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "NC":
                        $amirror=array("lagoon");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "NZ":
                        $amirror=array("lagoon","cloudflare","internode","0x");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "NI":
                        $amirror=array("jmu","clarkson");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "NE":
                        $amirror=array("garr","aptus","tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "NG":
                        $amirror=array("garr","aptus","tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "NU":
                        $amirror=array("lagoon","cloudflare");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "NF":
                        $amirror=array("lagoon");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "MP":
                        $amirror=array("nchc","jaist","ustc","tuna","lagoon");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "NO":
                        $amirror=array("umu","onet","heanet","nluug","babylon-nl");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "OM":
                        $amirror=array("asis");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "PK":
                        $amirror=array("asis");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "PW":
                        $amirror=array("nchc");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "PS":
                        $amirror=array("asis","garr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "PA":
                        $amirror=array("berkeley","mit","mtu","jmu","clarkson");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "PG":
                        $amirror=array("lagoon","nchc");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "PY":
                        $amirror=array("ufpr","nbtelecom","cedia","uta","ueb");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "PE":
                        $amirror=array("ufpr","nbtelecom","cedia","uta","ueb");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "PH":
                        $amirror=array("nchc","0x","0x");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "PN":
                        $amirror=array("cedia","uta","ueb","lagoon","nchc");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "PL":
                        $amirror=array("onet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "PT":
                        $amirror=array("babylon-fr","heanet","rwth-aachen","esslingen","garr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "PR":
                        $amirror=array("jmu","clarkson");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "QA":
                        $amirror=array("asis");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "RE":
                        $amirror=array("nchc","amberit","tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "RO":
                        $amirror=array("garr","onet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "RU":
                        $amirror=array("yandex");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "RW":
                        $amirror=array("aptus");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "BL":
                        $amirror=array("jmu","clarkson");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "SH":
                        $amirror=array("garr","tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "KN":
                        $amirror=array("jmu","clarkson");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "LC":
                        $amirror=array("jmu","clarkson");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "MF":
                        $amirror=array("jmu","clarkson");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "PM":
                        $amirror=array("clarkson");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "VC":
                        $amirror=array("jmu","clarkson");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "WS":
                        $amirror=array("lagoon");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "SM":
                        $amirror=array("garr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "ST":
                        $amirror=array("jmu","clarkson");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "SA":
                        $amirror=array("garr","asis","cloudflare");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "SN":
                        $amirror=array("garr","tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "RS":
                        $amirror=array("garr","onet","uoc","netix");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "SC":
                        $amirror=array("tenet","aptus");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "SL":
                        $amirror=array("garr","tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "SG":
                        $amirror=array("0x");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "SX":
                        $amirror=array("jmu","clarkson");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "SK":
                        $amirror=array("onet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "SI":
                        $amirror=array("garr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "SB":
                        $amirror=array("lagoon");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "ZA":
                        $amirror=array("tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "GS":
                        $amirror=array("cloudflare");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "SS":
		case "SD":
                        $amirror=array("aptus","cloudflare","garr","asis");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "ES":
                        $amirror=array("babylon-fr","cloudflare","heanet","nluug","babylon-nl","garr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "LK":
                        $amirror=array("amberit","0x");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "SR":
                        $amirror=array("ufpr","nbtelecom");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "SJ":
                        $amirror=array("onet","heanet","umu","nluug","babylon-nl");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "SZ":
                        $amirror=array("rwth-aachen","garr","esslingen");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "SY":
                        $amirror=array("asis","uoc");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "TW":
                        $amirror=array("nchc");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "TJ":
                        $amirror=array("amberit","yandex","asis");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "TZ":
                        $amirror=array("aptus");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "TH":
                        $amirror=array("nchc","0x","0x","amberit");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "TL":
                        $amirror=array("nchc");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "TG":
                        $amirror=array("garr","tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "TK":
                        $amirror=array("lagoon");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "TO":
                        $amirror=array("lagoon");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "TT":
                        $amirror=array("jmu","clarkson");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "TN":
                        $amirror=array("garr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "TR":
                        $amirror=array("garr","asis","uoc","uoc");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "TM":
                        $amirror=array("asis");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "TC":
                        $amirror=array("jmu","clarkson");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "TV":
                        $amirror=array("lagoon");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "UG":
                        $amirror=array("aptus");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "UA":
                        $amirror=array("onet","netassist");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "AE":
                        $amirror=array("asis");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "GB":
                        $amirror=array("warwick");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
		case "UM":
                case "US":
                        $amirror=array("mit","mtu","jmu","clarkson","berkeley");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "UY":
                        $amirror=array("ufpr","nbtelecom","cloudflare");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "UZ":
                        $amirror=array("asis");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "VU":
                        $amirror=array("lagoon");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "VE":
                        $amirror=array("cedia","uta","ueb");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "VN":
                        $amirror=array("0x","0x","amberit","nchc","ustc","tuna");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "VG":
		case "VI":
                        $amirror=array("jmu","clarkson");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "WF":
                        $amirror=array("lagoon");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "EH":
                        $amirror=array("garr");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "YE":
                        $amirror=array("cloudflare","asis");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "ZM":
                        $amirror=array("aptus","tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
                case "ZW":
                        $amirror=array("aptus","tenet");
                        $mirror=$amirror[array_rand($amirror)];
                        break;
		default:
			$mirror="rwth-aachen";
        }
}
?>
